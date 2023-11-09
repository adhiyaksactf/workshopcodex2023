
<?php
echo "Lo Siento :(";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Video Embed</title>
</head>
<body>
    <h1>My Favorite Disney Film</h1>
    <div id="player"></div>

    <script>
        const videoId = "VIDEO_ID";

        function onYouTubeIframeAPIReady() {
            new YT.Player('player', {
                height: '315',
                width: '560',
                videoId: 'boJR7G--1as',
            });
        }
    </script>
    <script src="https://www.youtube.com/iframe_api"></script>
</body>
</html>

