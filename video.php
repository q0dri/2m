<?php
set_time_limit(2222);
date_default_timezone_set('UTC');
require __DIR__.'/upload/autoload.php';
$media = [
["type" => "video", "file" => __DIR__."/gus.mp4"],
["type" => "photo", "file" => __DIR__."/gus.jpg"],
["type" => "video", "file" => __DIR__."/copy.mp4"],
["type" => "video", "file" => __DIR__."/copy.mp4"],
["type" => "video", "file" => __DIR__."/copy.mp4"],
["type" => "video", "file" => __DIR__."/copy.mp4"]
];
\InstagramAPI\Utils::$ffprobeBin = __DIR__.'\ffmpeg\bin\ffprobe.exe';
\InstagramAPI\Media\Video\FFmpeg::$defaultBinary = __DIR__.'\ffmpeg\bin\ffmpeg.exe';
$ig = new \InstagramAPI\Instagram(true);
try{
$ig->login("meme.comiks.indonesia", "qodri7");
}catch(Exception $e){
	echo "bad: " . $e->getmessage();
	exit;
}
while(true){
try{
	$ig->timeline->uploadAlbum($media);
}catch(Exception $e){
	echo "bad 2!" . $e->getmessage();
}
}
?>