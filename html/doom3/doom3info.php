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
        <title>Handbook - Doom 3\ Info</title>
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

                        <!--MENU-->
                        <?php include '../menu.html' ?>

                        <div class="large-9 cell">
                            <!--MAIN CONTENT DIV-->
                            <div class="grid-x grid-padding-x">
                                <!--Header for content-->
                                <div class="large-12 cell">
                                    <h2>Doom 3 - Info</h2>
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
                                    <h3>Common Shortcut Options</h3>
                                    <p>+set fs_game &lt;foldername&gt; the game loads the mod folder at launch, instead of having to go into the mod manager ingame</p>
                                    <p>+set r_fullscreen 0 Set the game in windowed mode, needed for the editor to work correctly</p>
                                    <p>+com_allowconsole 1 Sets it so you can just use the "~" to open the console otherwise need teh key combonation of CTRL + ALT + "~"</p>
                                    <p>+editor Opens the built in editor at launch, saves opening the console and typing it in</p>
                                    <h4>Example</h4>
                                    <p>Auto launch a mod</p>
                                    <p class="code">Doom3.exe +set fs_game mymod</p>
                                    <p>Launch the editor</p>
                                    <p class="code">Doom3.exe +set r_fullscreen 0 +com_allowconsole 1 +editor</p>
                                    <p>Load my mod and Launch the editor</p>
                                    <p class="code">Doom3.exe +set fs_game mymod +set r_fullscreen 0 +com_allowconsole 1 +editor</p>
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