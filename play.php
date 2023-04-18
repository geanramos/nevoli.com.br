<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body {
 font: 12px Roboto, Arial, sans-serif;
 background-color: #000;
 color: #fff;
 height: 100%;
 width: 100%;
 overflow: hidden;
 position: absolute;
 margin: 0;
 padding: 0;
}
.video-container {
  position: relative;
  padding-bottom: 56.25%;
}

.video-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>
</head>
  <body>
<div class="video-container">
    <div id="player"></div>
    <?php
$id = $_GET["v"];
echo "<iframe width=\"560\" height=\"315\" src=\"//gean.me/'$id'\" title=\"gean.me - video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>";
    ?>
</div>
  </body>
</html>
