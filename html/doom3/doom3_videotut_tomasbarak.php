<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/assets/css/foundation.css">
        <!--end of foundation-->
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/mainfont.css">
        <link rel="stylesheet" href="/css/amber.css">
        <script src="/cdn/jquery-3.6.0.js"></script>
        <script src="/javascript/jqfadein.js"></script>
        <script src="/javascript/jsclock.js"></script>
        <title>Handbook - Doom 3\ Tutorial\ Video Tomas Barak</title>
    </head>
    <?php require('../../php/videoplayer.php') ?>
    <body>
        <div class="borderall">

            <div class="grid-x grid-padding-x fadein">
                <!--HEADER-->
                <div class="large-12 cell">
                    <?php include '../header.html' ?>
                </div>
            </div>

            <div class="grid-x grid-padding-x fadein bordertop borderbottom">
                <div class="large-12 cell">
                    <div class="grid-x grid-padding-x">

                        <!--MENU-->
                        <?php include '../menu.html' ?>

                        <div class="large-9 cell">
                            <!--MAIN CONTENT DIV-->
                            <div class="grid-x grid-padding-x">
                                <!--Header for content-->
                                <div class="large-12 cell">
                                    <h2>Video Tutorials by Tomas Barak</h2>
                                </div>
                            </div>

                            <div class="grid-x grid-padding-x">
                                <!--timer decoration thing-->
                                <div class="large-2 cell">
                                    <p>>>></p>
                                </div>

                                <div class="large-6 cell">
                                    <!--blank for spacing-->
                                </div>

                                <div class="large-4 cell">
                                    <p id="clockp">00:00 00.00.0000</p>
                                </div>
                            </div>

                            <div class="grid-x grid-padding-x bordertop">
                                <div class="large-12 cell">
                                    <p>>> Video Tutorials by Tomas Barak</p>
                                </div>
                            </div>

                            <div class="grid-x grid-padding-x">
                                <!--content-->
                                <div class="large-12 cell">
                                    <h4>Tomas Barak - Video Tutorials</h4>
                                    <hr>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLaaUDU_fsZZ7msV_RQjwuM5elVyJkcZ5K" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <hr>
                                    <?php embedyoutubevideo("Part 1", "pqDjm0pMZu4"); ?>      
                                    <?php embedyoutubevideo("Part 2", "u_xc7oXKq-E"); ?>
                                    <?php embedyoutubevideo("Part 3", "W9DnJSWlQD4"); ?>
                                    <?php embedyoutubevideo("Part 4", "BEAcMuyzUm0"); ?>
                                    <?php embedyoutubevideo("Part 5", "a5Pj-5DYle8"); ?>
                                    <?php embedyoutubevideo("Part 6", "gSs-zMAyuMU"); ?>
                                    <?php embedyoutubevideo("Part 7", "Xi9U72hLbx4"); ?>
                                    <?php embedyoutubevideo("Part 8", "j4WMfXOHrkM"); ?>
                                    <?php embedyoutubevideo("Part 9", "tbFP_2jRhMA"); ?>
                                    <?php embedyoutubevideo("Part 10", "z0yS85SdaFM"); ?>
                                    <?php embedyoutubevideo("Part 11", "Q5rQ1FNuOiw"); ?>
                                    <?php embedyoutubevideo("Part 12", "06nOSdUyyTs"); ?>
                                    <?php embedyoutubevideo("Part 13", "RVIjn88lvMY"); ?>
                                    <?php embedyoutubevideo("Part 14", "5SKySPXS-Kc"); ?>
                                    <?php embedyoutubevideo("Part 15", "bcEAWTeMICQ"); ?>
                                    <?php embedyoutubevideo("Part 16", "J4B_RlnX8CI"); ?>
                                    <?php embedyoutubevideo("Part 17", "da1c4vqS30Y"); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="grid-x grid-padding-x">
                <!--Footer-->
                <div class="large-12 cell">
                    <?php include '../footer.html' ?>
                </div>
            </div>

        </div>
        <!--foundation-->
        <script src="/assets/js/vendor.js"></script>
        <script src="/assets/js/foundation.js"></script>
    </body>
</html>