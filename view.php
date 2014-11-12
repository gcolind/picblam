<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>picblam</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,400' rel='stylesheet' type='text/css'>
</head>
<body>

<?php
    $hashtag = filter_input(INPUT_POST, 'hashtag');
?>

<div class="search-again"><button onClick="location.href='http://picblam.com'">Search Again</button></div>
<div id="instafeed"></div>
<div class="search-again"><button onClick="location.href='http://picblam.com'">Search Again</button><button onClick="load_more()">Load More ...</button></div>

</body>

<script type="text/javascript" src="js/instafeed.min.js"></script>

<script type="text/javascript">
    var feed = new Instafeed({
        get: 'tagged',
        limit: 60,
        resolution: 'low_resolution',
        tagName: <?php echo json_encode($hashtag); ?> ,
        clientId: '05967b8d016a427898f72ccab94a4a8f'
    });

    function load_more(){
        feed.next();
    }

    feed.run();
</script>

</html>