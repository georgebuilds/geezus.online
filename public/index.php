<?php

require __DIR__."/../start.php";
?>
<html lang="en">
<head>
    <title><?= $config['bot']['name'] ?> Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>

<div id="main-container">
    <img src="img/default-2.png" alt="">
    <br>
    <div class="container">
        <div class="row" id="button-row">
            <div class="col-md-3">
                <a class="btn btn-lg btn-outline-light" href="https://geezus.online/visit/">
                    Web
                </a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-lg btn-outline-light" href="https://t.me/GeezusOnlineBot" >
                    Telegram
                </a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-lg btn-outline-light "  href="https://twitter.com/geezusonline">
                    Twitter
                </a>
            </div>

            <div class="col-md-3">
                <a class="btn btn-lg btn-outline-light disabled" disabled href="#">
                    Phone (Coming soon)
                </a>
            </div>
        </div>
<!--        <div class="row" id="footer-row">-->
<!--            <div class="col-sm-6"></div>-->
<!--            <div class="col-sm-6">-->
<!--                <div class="card card-body" id="open-source-card">-->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-3">-->
<!--                            <img src="/img/open-source.png"-->
<!--                                 height="65"-->
<!--                                 alt="Open Source"-->
<!--                                 id="open-source-graphic">-->
<!--                        </div>-->
<!--                        <div class="col-sm-9">-->
<!--                            <p>--><?//= $config['bot']['name'] ?><!-- is built using open source software, and is itself an open source project.</p>-->
<!--                            <p>Get the source code <a href="https://github.com/georgebuilds/geezus">here</a>.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
    <script type="text/javascript">
        var infolinks_pid = 3271195;
        var infolinks_wsid = 0;
    </script>
    <script type="text/javascript" src="http://resources.infolinks.com/js/infolinks_main.js"></script>

</div>


</body>
</html>