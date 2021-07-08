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

                            <div class="grid-x grid-padding-x bordertop">
                                <div class="large-12 cell">
                                    <p>>> Tutorial by Zeh, Taken from archive of Doom3world forums</p>
                                </div>
                            </div>

                            <div class="grid-x grid-padding-x bordertop borderbottom">
                                <div class="large-12 cell">
                                    <p>Images - <a href="\html\doom3\img\tutcgs1\tut1_final.jpg">Image 1</a></p>
                                </div>
                            </div>

                            <div class="grid-x grid-padding-x">
                                <!--content-->
                                <div class="large-12 cell">
                                    <h4>Complete GUI scripting - 1: Your first GUI script</h4>
                                    <p>
                                        Like I said on the previous introduction tutorial, a GUI script is much like an HTML file. You have some kind of text that defines elements that you'll have on screen, and image files that make it become alive. 
                                    </p>
                                    <p>
                                        Also much like HTML content, GUI scripts are defined by one main tag, filled with mini-tags that create each visual element. While in HTML this root tag would be something like &lt;HTML&gt;, in GUI scripting we use a windowDef. 
                                    </p>
                                    <p>
                                        A windowDef is the heart, the feet and the brain of every GUI script. There's much more about windowDefs that will be covered later, but for now, let's just say that we need one windowDef so we can handle all of our visual elements. So let's go and create a windowDef. Here's the magic code from out of nowhere: 
                                    </p>
                                    <p><b>Code:</b></p>
                                    <p class="code">windowDef Desktop {
}
                                    </p>
                                    <p>
                                        This is how a windowDef works: you start with the windowDef declaration, a name you give to it, an opening bracket, and later a closing bracket. Everything between the brackets is content that belongs to this windowDef.
                                    </p>
                                    <p>
                                        One thing that's important to notice is that it has been given the "Desktop" name. All GUIs have their root element called "Desktop".
                                    </p>
                                    <p>
                                        We haven't, however, added any attribute to this windowDef. While it exists, it won't be shown (or do anything at all) for a number of reasons. The first thing to do is to give it a <b>rect</b>, which defines the boundaries of this windowDef element
                                    </p>
                                    <p><b>Code:</b></p>
                                    <p class="code">windowDef Desktop {
  rect         0, 0, 640, 480
}</p>
                                    <p>
                                        To use it, you just type the attribute name, followed by the value. The rect attribute takes four values - x, y, width, and height, and thus all values are presented in the same line, separated by commas.
                                    </p>
                                    <p>
                                        One thing to notice is that the 640x480 size is not really expressed in pixels. In DOOM 3 scripting, it's as if the screen is always 640x480, so this basically means that this windowDef will take 100% of the screen, no matter in which resolution the game is being ran.
                                    </p>
                                    <p>
                                        With that put, we can add more windowDefs to our screen, or change other attributes for this Desktop windowDef. Although this would hardly be used in a real GUI, let's add a bit more sauce to this Desktop.
                                    </p>
                                    <p><b>Code:</b></p>
                                    <p class="code">windowDef Desktop {
  rect         0, 0, 640, 480
  bordersize   3
  bordercolor  1, 1, 1, 1
  backcolor    0.5, 0.5, 0.5, 1
  visible      1

}</p>
                                    <p>
                                        Okey. What we did here with the bordersize attribute is to say this windowDef will have a border displayed, and its color is defined on the bordercolor attribute. While the bordersize attribute is pretty much straightforward - it draws a border to the inside of the windowDef, with its stroke strength being the number of pixels we used in the parameter - the bordercolor needs some clarification.
                                    </p>
                                    <p>
                                        This is one of the many attributes that take colors as a parameter - and color four GUI scripts mean four things: R, G, B, and alpha. Each of the RGB values represent one of three RGB values that compose a color - and in this case, 0 is black (no light) and 1 is full light. Any values between 0 and 1 are allowed, and are calculated to reach the final color. Since the first three values here are 1, it means full red, green, and blue intensity, thus white. So this "1, 1, 1" value is the same as 255, 255, 255 in RGB values or #ffffff in hexadecimal colors.
                                    </p>
                                    <p>
                                        The last parameter is alpha, and it uses a similar approach as the one used on the RGB values: 0 means total transparency, and 1 means total opacity. All values between 0 and 1 are allowed, so 0.5 would be 50% of transparency. In the end, this "1, 1, 1, 1" means total white.
                                    </p>
                                    <p>
                                        Of course, the same applies to the backcolor parameter that follows. This is the color used in the background, and the "0.5, 0.5, 0.5, 1" value is easy: 50% of white, with total opacity: gray.
                                    </p>
                                    <p>
                                        Following all these attributes is the visible attribute, which, as a boolean value, can be set to either 1 or 0. In this case it's set to 1, meaning it is visible. This is merely a formality, but works to illustrates the range of different attributes we could have on a single windowDef.
                                    </p>
                                    <p>
                                        After setting our main stage, it's time to start populating it, so we'll add a few more windowDefs. Like I said above, this Desktop windowDef is the main container for our GUI, so subsequent windowDef elements will be its child. As we did with the attributes, we just nest these new windowDefs into it. Like this,
                                    </p>
                                    <p><b>Code:</b></p>
                                    <p class="code">windowDef Desktop {
  rect         0, 0, 640, 480
  bordersize   3
  bordercolor  1, 1, 1, 1
  backcolor    0.5, 0.5, 0.5, 1
  visible      1
  windowDef myMessage {
  }
}</p>
                                    <p>
                                        You'll notice I gave it a new name - since we're now getting into what we want, it's advisable to create names that'll help you in the process of coding your script. These names will never be seen by the player, of course, but they'll be used on scripting.
                                    </p>
                                    <p>
                                        With our new child windowDef working, it's time to set some of its attributes.
                                    </p>
                                    <p><b>Code:</b></p>
                                    <p class="code">windowDef Desktop {
  rect         0, 0, 640, 480
  bordersize   3
  bordercolor  1, 1, 1, 1
  backcolor    0.5, 0.5, 0.5, 1
  visible      1
  windowDef myMessage {
    rect         10, 10, 614, 40
    bordersize   1
    bordercolor  1, 0, 0, 1
    backcolor    0, 0, 0, 0.5
    text         "HELLO WORLD"
    textscale    0.5
    font         "fonts/english"
    textalign    1
    forecolor    0,0,1,1
  }
}</p>
                                    <p>
                                        Okey, a bunch of new attributes; although pretty self-explanatory, there's some things that need to be explained here.
                                    </p>
                                    <p>
                                        First, notice the first rect attribute. I wanted it to be centered on screen, a little far from the corners, so I used a x/y position of 10, 10... and a width of 614, and not 620 (which would be the normal thing to do - 640 - 10 (from the left) - 10 (from the right). Why?
                                    </p>
                                    <p>
                                        The thing is, nested windowDefs have their x/y position relative to its parent, so our myMessage windowDef position is relative to the Desktop position. Normally, this wouldn't be a problem, since Desktop is at 10,10, but the DOOM 3 GUI system takes borders into account. Since Desktop has a bordersize of 3, the 0,0 position of it is not on 0,0 of the screen, but rather on 3,3. The myMessage position of 10,10 then translates to 13,13 - and then the width has to be 614 so it would be centered (640 - 13 - 13
                                    </p>
                                    <p>
                                        I then used a different bordersize on this windowDef (1) for a thinner border, a bordercolor of "1,0,0,1" (that is, full red) and a backcolor of 0,0,0,0.5 (a black with 50% opacity).
                                    </p>
                                    <p>
                                        One new attribute now is the <b>text</b> one - the everlasting message "HELLO WORLD". This is actually what it looks like: this defines which message will be shown on this windowDef.
                                    </p>
                                    <p>
                                        Then we set the text scale by setting the <b>textscale</b> attribute, 1 being the original size of the "text material". In this case, 0.5 means that we're using it at half the size, which is pretty big for our purposes.
                                    </p>
                                    <p>
                                        The <b>font</b> attribute says which font file we'll be using for this text. In this case, we're using one of the built-in fonts, but new fonts can be created and used here (I also expect to cover this on a later tutorial).
                                    </p>
                                    <p>
                                        The <b>textalign</b> attribute is then used to say how this text is aligned to the windowDef bounding box - 0 meaning left, 1 meaning centered, and 2 meaning right. In this case we're using the value 1, which of course means that the text is centered in the windowDef and ultimately centered on screen.
                                    </p>
                                    <p>
                                        Finally, the <b>forecolor</b> is a color attribute that says which color will be used in the foreground of this windowDef - meaning, in this case, the text itself. With the value of "0,0,1,1", it means we have a full blue as the text color.
                                    </p>
                                    <p>
                                        But of course, GUI scripts won't be always made of crappy boxes and colors; this was merely an example. It's time for us to get into the real thing, and start adding real content to our GUI script. And that means adding images as materials. I'll be using a quick image I made, grab it from the source files (on the end of this tutorial) if you want to test it too.
                                    </p>
                                    <p><b>Code:</b></p>
                                    <p class="code">windowDef Desktop {
  rect         0, 0, 640, 480
  bordersize   3
  bordercolor  1, 1, 1, 1
  backcolor    0.5, 0.5, 0.5, 1
  visible      1
  windowDef myMessage {
    rect         10, 10, 614, 40
    bordersize   1
    bordercolor  1, 0, 0, 1
    backcolor    0, 0, 0, 0.5
    text         "HELLO WORLD"
    textscale    0.5
    font         "fonts/english"
    textalign    1
    forecolor    0,0,1,1
  }
  windowDef myPic {
    rect         249, 164, 187, 165
    background   "tut1_ranger"
    matcolor     1,1,1,1
    visible 1
  }
}</p>
                                    <p>
                                        Now we're making progress. The myPic windowDef is much more like the stuff you'd normally find on real GUIs: just an image and some attributes.
                                    </p>
                                    <p>
                                        First there's the mandatory rect attribute. In this case, it resembles a box and sits on the middle of our Desktop screen.
                                    </p>
                                    <p>
                                        Then, the <b>background</b> attribute. This is simply a filename - the name of a material we wish to use. There a few catches, however.
                                    </p>
                                    <p>
                                        First, this is relative to the base DOOM 3 dir - so if you are running the main game (no mod), this would translate to "&lt;doom 3 dir&gt/base/&lt;filename&gt". Since I have used no directory name on this filename, it means this material must be sitting at the /base dir itself.
                                    </p>
                                    <p>
                                        Second, the 'background' file is a material in TGA format, sans extension. So in the end it means that it's looking for "/base/tut1_ranger.tga".
                                    </p>
                                    <p>
                                        And third, the material is scaled to fit the entire background of your windowDef. Unless you use scaling options (to create tiles), no matter which size the windowDef's rect is, it will always have the entire background material shown.
                                    </p>
                                    <p>
                                        Then comes the <b>matcolor</b> attribute. Despite the name, this is not a color value. It still is in the R,G,B,A format, but the first values differ. They are not absolute values of colors to be used: they are percentages of each channel, meaning how much of each channel will be rendered.
                                    </p>
                                    <p>
                                        Normally, this value would be "1,1,1,1" for a normal image displaying with 100% opacity. You can subtract from channel values, however - if a material has a matcolor value of "0,1,1,1", for example, its red channel will be left out and the resulting image would be a mix between green and blue. This is actually a very powerful feature; using one single grayscale image, you are able to manipulate its color channels during runtime to use different color settings for the image, as if the image was being colorized - you could use the same grayscale image for both red and blue huds on a red vs blue team setup, for example.
                                    </p>
                                    <p>
                                        That pretty much sums a basic GUI script. Now, it's time to (finally) test it using the DOOM 3 engine itself. Save the above script as a file - I'm using the tut1.gui name - and place it on the game's /base dir.
                                    </p>
                                    <p>
                                        Run DOOM 3, pull down the console (CTRL+ALT+~ or ~) and type:
                                    </p>
                                    <p><b>Code:</b></p>
                                    <p class="code">testgui tut1.gui</p>
                                    <p>
                                        Ta-da! Your test GUI should load and display on the whole screen. Of course, use whichever name you used when creating your .gui file. In any case, check the result of the one I created below. 
                                    </p>
                                    <img src="\html\doom3\img\tutcgs1\tut1_final.jpg">
                                    <p>
                                        Yeah, it's an ugly screen, but it's a real GUI script, and serves its purpose. 
                                    </p>
                                    <p>
                                        Well, that pretty much sums it all. There are still lots to be covered, of course, but we'll get there. 
                                    </p>
                                    <a href="https://web.archive.org/web/20121104033811/http://hosted.zeh.com.br/doom3/tutorials/tut1.zip">Download source and example files</a>
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