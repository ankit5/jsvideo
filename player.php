<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />

<meta name="referrer" content="no-referrer"/>
<title>videojs-contrib-hls embed</title>
  
  

  <!-- Uses the latest versions of video.js and videojs-contrib-hls.

  To use specific versions, please change the URLs to the form: -->
  
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://unpkg.com/video.js@5.16.0/dist/video-js.css" rel="stylesheet">
  <script src="https://unpkg.com/video.js@5.16.0/dist/video.js"></script>
  <script src="https://unpkg.com/videojs-contrib-hls@4.1.1/dist/videojs-contrib-hls.js"></script>

 

  <!-- <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
  <script src="https://unpkg.com/video.js/dist/video.js"></script>
  <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
   -->
   <style>
    .vjs-big-play-button {
        top: 50% !important;
        left: 50% !important;
        transform: translate(-50%, -50%);
    }
            body {
        background-color: black;
    }
    #video {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        margin: auto;
        max-height: 100%;
        max-width: 100%;
    }
        #embed {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        margin: auto;
        max-height: 100%;
        max-width: 100%;
    }
</style>
</head>
<body>
  
  <div class="container">
    <div class="video-player">


            <video id="video" class="video-js vjs-default-skin" controls preload="auto" playsinline="playsinline" poster="" tabindex="-1" role="application" autoplay="">
                <source src="<?php print $_GET['url']?>" type="application/x-mpegURL">
            </video>
        
        <script>
        
            var player = videojs("video", {
                autoplay: true,
                muted: false, // Add playsinline attribute for inline playback on iOS
            });
            $('#video').play();
            player.on("play", function() {
                player.poster("");  // Remove the poster image
            });
        </script>
        

</div>
  
 
  
</body>
</html>