<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../assets/css/foundation.css">
        <!--end of foundation-->
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="../../css/mainfont.css">
        <link rel="stylesheet" href="../../css/amber.css">
        <script src="../../cdn/jquery-3.6.0.js"></script>
        <script src="../../javascript/jqfadein.js"></script>
        <script src="../../javascript/jsclock.js"></script>
        <title>Handbook - Symbolic Links</title>
    </head>
    <body>
        <div class="borderall">

            <div class="grid-x grid-padding-x fadein">
                <!--HEADER-->
                <div class="large-12 cell">
                    <?php include( '../header.html' ) ?>
                </div>
            </div>

            <div class="grid-x grid-padding-x fadein bordertop borderbottom">
                <div class="large-12 cell">
                    <div class="grid-x grid-padding-x">
                        <div class="grid-x grid-padding-x">

                            <!--MENU-->
                                <?php include '../menu.html' ?>

                            <div class="large-8 cell">
                                <!--CONTENT-->
                                <div class="grid-x grid-padding-x">
                                    <!--Header for content-->
                                    <div class="large-12 cell">
                                        <h2>Windows Tools - Symbolic Links</h2>
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
                                <div class="grid-x grid-padding-x">
                                    <!--content-->
                                    <div class="large-12 cell">
                                        <h3>Command Info</h3>
                                        <p>Creates a soft link pointing at a file <br> mklink Link Target </p>
                                        <p>/D for soft link pointing at a directory</p>
                                        <p>/H for a hard link pointing at a file</p>
                                        <p>/J for a hard link point at a folder otherwise known as a directory junction</p>
                                        <p>Recomended to use quotes, in case of spaces</p>
                                        <p>can only link to stuff on the same drive</p>
                                        <p>Acts almost like a shortcut but most programs can use it as if it were there</p>
                                        <h3>Example</h3>
                                        <p class="code">mklink /J "c:\i want this here" "c:\stuff\nonsense"</p>
                                    </div>
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
        <script src="assets/js/vendor.js"></script>
        <script src="assets/js/foundation.js"></script>
    </body>
</html>