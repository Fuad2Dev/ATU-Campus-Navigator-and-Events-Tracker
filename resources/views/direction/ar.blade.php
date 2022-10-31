<html>

<head>
  <title>AR.js Basic Projected Camera Example</title>
  <!-- <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
  <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js"></script> -->
  <!-- Look-at component. We don't need this now, but we will later. -->
  <!-- <script src="https://unpkg.com/aframe-look-at-component@0.8.0/dist/aframe-look-at-component.min.js"></script> -->

  <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-look-at-component@0.8.0/dist/aframe-look-at-component.min.js"></script>
    <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>
  <script src="https://raw.githack.com/AR-js-org/AR.js/master/three.js/build/ar.js"></script>
  <script src="https://raw.githack.com/AR-js-org/AR.js/3.0.0/aframe/build/aframe-ar-nft.js"></script> -->

</head>
<!-- <script src="./script.js"></script> -->
<body style="width: 100%; height: 100vh;">
  <div style="width: 50%; height: 50%">
    <a-scene vr-mode-ui="enabled: false" arjs='sourceType: webcam; videoTexture: true; debugUIEnabled: false;' renderer='antialias: true; alpha: true' >
        <a-camera id="camera" minDistance=1 alert=true gps-camera rotation-reader position="0 1.6 0"></a-camera>
        <a-sphere  position="0 -20 0" gps-entity-place='latitude: 5.553566; longitude: -0.205716' material='color: violet' scale='2 2 2'></a-sphere >
        <a-sphere  position="0 -20 0" gps-entity-place='latitude: 5.553575; longitude: -0.205675' material='color: indigo' scale='2 2 2'></a-sphere >
        <a-sphere  position="0 -20 0" gps-entity-place='latitude: 5.553589; longitude: -0.205618' material='color: blue' scale='2 2 2'></a-sphere >
        <a-sphere  position="0 -20 0" gps-entity-place='latitude: 5.553604; longitude: -0.205546' material='color: green' scale='2 2 2'></a-sphere >
        <a-sphere  position="0 -20 0" gps-entity-place='latitude: 5.553607; longitude: -0.205486' material='color: yellow' scale='2 2 2'></a-sphere >
        <a-sphere  position="0 -20 0" gps-entity-place='latitude: 5.553617; longitude: -0.205440' material='color: orange' scale='2 2 2'></a-sphere >
        <a-sphere  position="0 -20 0" gps-entity-place='latitude: 5.553623; longitude: -0.205399' material='color: red' scale='2 2 2'></a-sphere >
    
      </a-scene>
  </div>

  <script>
    $(function () {
        console.log('pos');
        console.log($('#camera'));
    })
  </script>

</body>

</html>