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
        <title>Handbook - Doom 3\ Tutorial\ Compelte GUI Scripting</title>
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
                                    <h2>Complete GUI Scripting</h2>
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
                                <div class="large-12 cell">
                                    <p>>> Tutorial by Zeh, Taken from archive of Doom3world forums</p>
                                </div>
                            </div>

                            <div class="grid-x grid-padding-x">
                                <!--content-->
                                <div class="large-12 cell">
                                    <h4 id="#lcgs0">Complete GUI Scripting - 0: A GUI script primer</h4>
                                    <p>
                                        zeh@Posted: Sat Aug 07, 2004 3:26 pm : <br> Welcome to the first in a series of tutorials covering GUI scripting for the DOOM 3 engine. Actually, this is just an introduction to the GUI concept in DOOM, and it will not cover scripting syntax just yet. This introductory tutorial aims to make people from other backgrounds comfortable before they start editing GUI scripts for the DOOM 3 engine, or at least showing in what's used for and how. It's a little slow and contains lots of ramblings, but it's important to give a background to the whole concept before picking up the pace in a more technical fashion.
                                    </p>
                                    <p>
                                        FPS engines are getting more complex everyday. A few years ago, a FPS engine was all about 3D renderization: it was all about how the player would see the world. This has changed, however, as engines started getting more polished and started offering more features instead of just pushing polygon counts higher.
                                    </p>
                                    <p>
                                        The Unreal and the Quake 3: Arena engines were the first "big name" engines to give mod authors the ability to change the game appearance completely, and more importantly, in a more friendly fashion. For example, mod authors could add a stylized "Select Class" window for their class-based mod, or add a new voting window, or showing a new map when a key was pressed 
                                    </p>
                                    <p>
                                        For id Software, while it was possible to modify the appearance of on-screen menus and dialogs before, the Team Arena menu format was the first step towards a very practical and powerful GUI scripting system; this has evolved a lot and is now available in the DOOM 3 engine as the GUI scripting system.
                                    </p>
                                    <p><b>Quote:</b></p>
                                    <p class="quote"> 
                                        I think the GUI interaction in the game is really powerful as an interactive paradigm. It doesn't require additional controls; you're interacting with something people are familiar with. Allowing you to interact with complex displays is powerful, much more than adding three more keys to do something. <br> <a href="https://web.archive.org/web/20121102213118/http://insidemacgames.com/news/story.php?ArticleID=8661"> John Carmack, Nov 3rd, 2003 </a> 
                                    </p>
                                    <p> 
                                        GUIs script are, in fact, very powerful tools for creating interfaces in the engine. You're not only able to create general-use user window interfaces and change the game windows' aspect, but also create in-game interfaces. For example, these are all examples of GUI scripts in the DOOM 3 engine (click to see a bigger version):
                                    </p>
                                    <img src="\html\doom3\img\tutcgs0\small\tut0_mainmenu_t.jpg">
                                    <p>The main menu. This includes all submenus and options available.</p>
                                    <img src="\html\doom3\img\tutcgs0\small\tut0_hud_t.jpg">
                                    <p>The player HUD (short for "Heads Up Display"). It's, of course, everything that overlays the game action, showing the player health, ammo, etc. </p>
                                    <img src="\html\doom3\img\tutcgs0\small\tut0_pda_t.jpg">
                                    <p>The user PDA, one of the most complex GUI scripts in the game.</p>
                                    <img src="\html\doom3\img\tutcgs0\small\tut0_weapon_t.jpg">
                                    <p>A weapon overlay (zoomed) - this actually shows the amount of ammo you have on the weapon itself, instead of depending on the HUD only. This is a non interactive display, but it is still a GUI. </p>
                                    <img src="\html\doom3\img\tutcgs0\small\tut0_elevator_t.jpg">
                                    <p>A lift panel, used to call the lift. Notice the arrow cursor on the middle of it - this is an in-game GUI that can be controlled by the player, and is rendered on game architecture. </p>
                                    <img src="\html\doom3\img\tutcgs0\small\tut0_health_t.jpg">
                                    <p>Pretty much like the lift button, this is a health station. When clicked, it gives the player more health -- one of the many examples of interaction with the player. </p>
                                    <img src="\html\doom3\img\tutcgs0\small\tut0_mpmenu_t.jpg">
                                    <p>Another complex GUI script, the multiplayer menu provides a more friendly access to multiplayer features. </p>
                                    <img src="\html\doom3\img\tutcgs0\small\tut0_mpscoreboard_t.jpg">
                                    <p>And of course, the multiplayer scoreboard is a mid-game window that shows information about the match.</p>
                                    <p>
                                        All these examples are pure GUI scripts, plain and simple. GUIs are nothing more than a script (text) file, which loads external images (materials) and provides simple script functionality for user interactions. While it is mainly a client technology, it is able to communicate with the game, calling functions, getting variables and overall interfacing with the game engine. The GUI that this script generates can later be displayed (as a new window), used on-screen (as a HUD), or used on an in-game model, to work as a panel or as a computer screen (in this case, the user is able to interact with the in-game "screen" by using a mouse cursor in place of the gun crosshair). 
                                    </p>
                                    <p>
                                        To establish a parallel to more a common paradigm, think of these GUI scripts as HTML files. It has its own code and variables, but all visual elements are defined inside of it in a textual fashion. The interactivity code (triggered at certain times, or when the user activates a button, for example) is also placed on this file. Visual elements aren't really created in a run-length style, however - meaning you can place then wherever you want on-screen, in any absolute XY position, and not care about text flow. 
                                    </p>
                                    <p>
                                        Because of this, having a background in visual programming - be it HTML, Visual Basic, Actionscript or Lingo - will make GUI scripting really easy to learn. Having a background in Team Arena, Return to Castle Wolfenstein or Enemy Territory menu scripting will make it even easier, if at all needed. 
                                    </p>
                                    <p>
                                        An addendum from a guy who works with Flash 100% of the time on his daily job: in an interview I can't find right now, someone at id Software mentioned creating GUIs for DOOM 3 would be a lot like creating Flash movies. Well, that is correct, but only if you are used to create code-driven interfaces, since the GUI system on DOOM 3 doesn't make use of timelines (and this is, in some ways, a good thing). You won't have complex animations built by moving and tweening stuff around: you *will* have to *write* code for that. Keep in mind that it's the best way to do it, anyways, and I almost never use timeline animations on Flash itself, no matter how complex my animations are (and sites I build have animations on simply everything). So this is not really a limitation, and if you work with Flash using the timeline, don't expect to find something similar when building GUIs for DOOM 3. 
                                    </p>
                                    <p> 
                                        With that said, the next tutorial presents the GUI script syntax and shows how to create a new script from scratch.
                                    </p>
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