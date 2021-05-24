<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A simple example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
    <style>
    #panorama {
        width: 780px;
        height: 370px;
    }


    .custom-hotspot {
        height: 50px;
        width: 50px;
        background: #f00;
    }
    div.custom-tooltip span {
        visibility: hidden;
        position: absolute;
        border-radius: 3px;
        background-color: #fff;
        color: #000;
        text-align: center;
        max-width: 200px;
        padding: 5px 10px;
        margin-left: -220px;
        cursor: default;
    }
    div.custom-tooltip:hover span{
        visibility: visible;
    }
    div.custom-tooltip:hover span:after {
        content: '';
        position: absolute;
        width: 0;
        height: 0;
        border-width: 10px;
        border-style: solid;
        border-color: #fff transparent transparent transparent;
        bottom: -20px;
        left: -10px;
        margin: 0 50%;
    }
    </style>
</head>
<body>

<div id="panorama"></div>



<script>
// viewer = pannellum.viewer('panorama', {
//     "type": "equirectangular",
//     "panorama": "<?php echo base_url('assets/360-test.jpg') ?>",
//     "hotSpots": [
//         {
//             "pitch": 3.967976727821019,
//             "yaw": -19.93590474911223,
//             "cssClass": "custom-hotspot",
//             "createTooltipFunc": hotspot,
//             "createTooltipArgs": "Baltimore Museum of Art"
//         },
//         {
//             "pitch": -9.4,
//             "yaw": 222.6,
//             "cssClass": "custom-hotspot",
//             "createTooltipFunc": hotspot,
//             "createTooltipArgs": "Art Museum Drive"
//         },
//         {
//             "pitch": -0.9,
//             "yaw": 144.4,
//             "cssClass": "custom-hotspot",
//             "createTooltipFunc": hotspot,
//             "createTooltipArgs": "North Charles Street"
//         }
//     ]
// });

// viewer.on('mousedown', function( event ) {

//     // For pitch and yaw of center of viewer
//     console.log( viewer.getPitch(), viewer.getYaw() ); // get position

//     // For pitch and yaw of mouse location
//     console.log( viewer.mouseEventToCoords(event) );
// });

// Hot spot creation function
// function hotspot(hotSpotDiv, args) {
//     hotSpotDiv.classList.add('custom-tooltip');
//     var span = document.createElement('span');
//     span.innerHTML = args;
//     hotSpotDiv.appendChild(span);
//     span.style.width = span.scrollWidth - 20 + 'px';
//     span.style.marginLeft = -(span.scrollWidth - hotSpotDiv.offsetWidth) / 2 + 'px';
//     span.style.marginTop = -span.scrollHeight - 12 + 'px';
// }


// -----------------------------------------------------------------


pannellum.viewer('panorama', {   
    "default": {
        "firstScene": "circle",
        "author": "Matthew Petroff",
        "sceneFadeDuration": 1000,
        "autoRotate": 0
    },

    "scenes": {
        "circle": {
            "title": "Mason Circle",
            "hfov": 110,
            "pitch": -3,
            "yaw": 117,
            "type": "equirectangular",
            "panorama": "<?php echo base_url('assets/360-test.jpg') ?>",
            "hotSpots": [
                {
                    "pitch": -2.1,
                    "yaw": 132.9,
                    "type": "info",
                    "text": "<h1>Spring House or Dairy</h1> <br> <small>Lorepisum dolar sit amlet, ya coba menciptakan sebuah dimensi yang berbeda</small>",
                    
                },


                {
                    "pitch": -3.1,
                    "yaw": 142.9,
                    "type": "scene",
                    "text": "Spring House or Dairy 2",
                    "sceneId": "house"
                }
            ]
        },

        "house": {
            "title": "Spring House or Dairy",
            "hfov": 110,
            "yaw": 5,
            "type": "equirectangular",
            "panorama": "<?php echo base_url('assets/360-test.jpg') ?>",
            "hotSpots": [
                {
                    "pitch": -0.6,
                    "yaw": 37.1,
                    "type": "scene",
                    "text": "Mason Circle",
                    "sceneId": "circle",
                    "targetYaw": -23,
                    "targetPitch": 2
                }
            ]
        }
    }
});

















</script>

</body>
</html>