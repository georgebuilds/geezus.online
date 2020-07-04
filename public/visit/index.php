<?php

require __DIR__."/../../start.php";
?>
<html lang="en">
<head>

    <title><?= $config['bot']['name'] ?> Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        #main-container{
            margin-top: 100px;
        }
    </style>
</head>
<body>

<div class="container" id="main-container">

    <div class="row">
        <div class="col-md">
            <a href="/">
                <img src="/img/default-2.png" alt="">
            </a>
        </div>
        <div class="col-md">
            <iframe
                    allow="microphone;"
                    width="350"
                    height="430"
                    src="<?= $config['dialogflow']['iframe_url'] ?>">
            </iframe>
        </div>
    </div>
</div>

</body>
</html>