<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Restrict map panning to an area</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>
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
    <div id="map"></div>
    <script>
        mapboxgl.accessToken =
            'pk.eyJ1IjoiZnVhZGNvZGVzIiwiYSI6ImNsOWNxbXlmNDAwa2wzcXA5eWNpZTBueDcifQ.MSPG62_9J-q_Nw3QhCwPXw';
        // Set bounds to San Francisco, California.
        const bounds = [
            [-0.208550, 5.550975], // Southwest coordinates
            [-0.203386, 5.557096] // Northeast coordinates
        ];

        const geojson = {
            'type': 'FeatureCollection',
            'features': [
                @foreach ($map as $place)
                    {
                        'type': 'Feature',
                        'properties': {
                            'message': '{{ $place->location }}',
                            'iconSize': [40, 40],
                            'icon': '{{ asset($place->icon) }}'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [{{ $place->lon }}, {{ $place->lat }}]
                        }
                    },
                @endforeach
            ]
        };

        const map = new mapboxgl.Map({
            container: 'map', // container ID
            // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
            style: 'mapbox://styles/mapbox/streets-v11', // style URL
            center: [-0.20596, 5.55424], // starting position
            zoom: 12, // starting zoom
            maxBounds: bounds // Set the map's geographical boundaries.
        });



        map.on('load', () => {

            // Add markers to the map.
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
                        @foreach ($map as $place)
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
                        @endforeach
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

            // Add geolocate control to the map.
            map.addControl(
                new mapboxgl.GeolocateControl({
                    positionOptions: {
                        enableHighAccuracy: true
                    },
                    // When active the map will receive updates to the device's location as it changes.
                    trackUserLocation: true,
                    // Draw an arrow next to the location dot to indicate which direction the device is heading.
                    showUserHeading: true
                })
            );

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
        });
    </script>

</body>

</html>
