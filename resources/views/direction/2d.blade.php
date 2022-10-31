<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8' />
    <title>Getting started with the Mapbox Directions API</title>
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.css' rel='stylesheet' />
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #map {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <style>
        .mapboxgl-popup {
            max-width: 400px;
            font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
        }

        .marker {
            border-radius: 50%;
        }
    </style>
    <div id='map'></div>
    <script>
        // add the JavaScript here
        mapboxgl.accessToken =
            'pk.eyJ1IjoiZnVhZGNvZGVzIiwiYSI6ImNsOWNxbXlmNDAwa2wzcXA5eWNpZTBueDcifQ.MSPG62_9J-q_Nw3QhCwPXw';
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [-0.20596, 5.55424], // starting position
            zoom: 12
        });
        // set the bounds of the map
        const bounds = [
            [-0.208550, 5.550975], // Southwest coordinates
            [-0.203386, 5.557096]
        ];
        map.setMaxBounds(bounds);

        // an arbitrary start will always be the same
        // only the end or destination will change
        // const start = [-0.20596, 5.55424];

        // this is where the code for the next step will go
        // create a function to make a directions request
        async function getRoute(start, end) {
            // make a directions request using walking profile
            // an arbitrary start will always be the same
            // only the end or destination will change
            const query = await fetch(
                `https://api.mapbox.com/directions/v5/mapbox/walking/${start[0]},${start[1]};${end[0]},${end[1]}?steps=true&geometries=geojson&access_token=${mapboxgl.accessToken}`, {
                    method: 'GET'
                }
            );
            const json = await query.json();
            const data = json.routes[0];
            const route = data.geometry.coordinates;
            const geojson = {
                type: 'Feature',
                properties: {},
                geometry: {
                    type: 'LineString',
                    coordinates: route
                }
            };
            // if the route already exists on the map, we'll reset it using setData
            if (map.getSource('route')) {
                map.getSource('route').setData(geojson);
            }
            // otherwise, we'll make a new request
            else {
                map.addLayer({
                    id: 'route',
                    type: 'line',
                    source: {
                        type: 'geojson',
                        data: geojson
                    },
                    layout: {
                        'line-join': 'round',
                        'line-cap': 'round'
                    },
                    paint: {
                        'line-color': '#3887be',
                        'line-width': 5,
                        'line-opacity': 0.75
                    }
                });
            }
            // add turn instructions here at the end
        }

        // Add geolocate control to the map.
        // Initialize the geolocate control.
        var geolocate = new mapboxgl.GeolocateControl({
            positionOptions: {
                enableHighAccuracy: true
            },
            trackUserLocation: true
        });
        // Add the control to the map.
        map.addControl(geolocate);

        const geojson = {
            'type': 'FeatureCollection',
            'features': [
                    {
                        'type': 'Feature',
                        'properties': {
                            'message': '{{ $place->name }}',
                            'iconSize': [40, 40],
                            'icon': '{{ asset($place->icon) }}'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [{{ $place->lon }}, {{ $place->lat }}]
                        }
                    },
            ]
        };

        map.on('load', () => {
            geolocate.trigger();

            for (const marker of geojson.features) {

                // console.log(marker.properties.icon);

                // Create a DOM element for each marker.
                const el = document.createElement('div');
                const width = marker.properties.iconSize[0];
                const height = marker.properties.iconSize[1];
                el.className = 'marker';
                el.style.backgroundImage = `url('${marker.properties.icon}')`;
                el.style.width = `${width}px`;
                el.style.height = `${height}px`;
                el.style.backgroundSize = '100%';


                // Add markers to the map.
                new mapboxgl.Marker(el)
                    .setLngLat(marker.geometry.coordinates)
                    .addTo(map);
            }

            

            map.addSource('places', {
                // This GeoJSON contains features that include an "icon"
                // property. The value of the "icon" property corresponds
                // to an image in the Mapbox Streets style's sprite.
                'type': 'geojson',
                'data': {
                    'type': 'FeatureCollection',
                    'features': [
                            {
                                'type': 'Feature',
                                'properties': {
                                    'description': `{!! $place->description !!} <img style="width: 100%" src="{{ asset($place->icon) }}" alt=""> `,
                                    'icon': 'theatre-15'
                                },
                                'geometry': {
                                    'type': 'Point',
                                    'coordinates': [{{ $place->lon }}, {{ $place->lat }}]
                                }
                            },
                    ]
                }
            });
            // Add a layer showing the places.
            map.addLayer({
                'id': 'places',
                'type': 'symbol',
                'source': 'places',
                'layout': {
                    'icon-image': '{icon}',
                    'icon-allow-overlap': true
                }
            });

            // When a click event occurs on a feature in the places layer, open a popup at the
            // location of the feature, with description HTML from its properties.
            map.on('click', 'places', (e) => {
                // Copy coordinates array.
                const coordinates = e.features[0].geometry.coordinates.slice();
                const description = e.features[0].properties.description;

                // Ensure that if the map is zoomed out such that multiple
                // copies of the feature are visible, the popup appears
                // over the copy being pointed to.
                while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                    coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                }

                new mapboxgl.Popup()
                    .setLngLat(coordinates)
                    .setHTML(description)
                    .addTo(map);
            });

            // Change the cursor to a pointer when the mouse is over the places layer.
            map.on('mouseenter', 'places', () => {
                map.getCanvas().style.cursor = 'pointer';
            });

            // Change it back to a pointer when it leaves.
            map.on('mouseleave', 'places', () => {
                map.getCanvas().style.cursor = '';
            });
            // make an initial directions request that
            // starts and ends at the same location
            // getRoute(start);

            // Add starting point to the map
            // map.addLayer({
            //     id: 'point',
            //     type: 'circle',
            //     source: {
            //         type: 'geojson',
            //         data: {
            //             type: 'FeatureCollection',
            //             features: [{
            //                 type: 'Feature',
            //                 properties: {},
            //                 geometry: {
            //                     type: 'Point',
            //                     coordinates: start
            //                 }
            //             }]
            //         }
            //     },
            //     paint: {
            //         'circle-radius': 10,
            //         'circle-color': '#3887be'
            //     }
            // });
            // this is where the code from the next step will go
        });

        geolocate.on('geolocate', locateUser);

        function locateUser(e) {
            console.log('A geolocate event has occurred.');
            console.log("lng:" + e.coords.longitude + ", lat:" + e.coords.latitude)
            var start = [e.coords.longitude, e.coords.latitude];
            var end = [-0.2059355, 5.5539524]
            getRoute(start, end);
            geolocate.off('geolocate', null);
        }
    </script>
</body>

</html>
