<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<meta name="referrer" content="no-referrer"/>
<title>videojs-contrib-hls embed</title>
  
  

  <!-- Uses the latest versions of video.js and videojs-contrib-hls.

  To use specific versions, please change the URLs to the form: -->

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- <link href="https://unpkg.com/video.js@5.16.0/dist/video-js.css" rel="stylesheet">
  <script src="https://unpkg.com/video.js@5.16.0/dist/video.js"></script>
  <script src="https://unpkg.com/videojs-contrib-hls@4.1.1/dist/videojs-contrib-hls.js"></script> -->

 

  <!-- <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
  <script src="https://unpkg.com/video.js/dist/video.js"></script>
  <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
   -->
 
</head>
<body style="height: 100%; margin: 0; overflow: hidden;">
  <h1>Video.js Example Embed</h1>

 
  
  <div id="play">
    <iframe src="http://localhost:8002/player.php?url=<?php print $_GET['url'] ?>" style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:100%;width:100%;position:absolute;top:0%;left:0px;right:0px;bottom:0px" height="100%" width="100%" frameborder="0"></iframe>
  
  </div>
</body>
</html>