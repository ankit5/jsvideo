<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>videojs-contrib-hls embed</title>
  
  

  <!-- Uses the latest versions of video.js and videojs-contrib-hls.

  To use specific versions, please change the URLs to the form: -->

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
  <h1>Video.js Example Embed</h1>

  <video id="my_video_1" class="video-js vjs-default-skin" controls preload="auto" data-setup='{}'>
    <source src="https://soul.ydc1wes.me/hls2/02/00005/8us24zf0gd3d_l/master.m3u8?t=tsdsnGYz3OeJNxn3E3sktDLvHkLBMPKihbOg8LuYOT4&s=1706208798&e=14400&f=29305&i=0.0&sp=0" type="application/x-mpegURL">
  </video>
  
  <script>
  </script>
  
</body>
</html>