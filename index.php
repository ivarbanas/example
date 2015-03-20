<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <noscript><meta name="viewport" content="width=device-width, initial-scale=1"></noscript>
        
        <title>Trikoder</title>     
  
        <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="bower_components/jcarousel/dist/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="bower_components/slidebars/distribution/0.10.2/slidebars.min.js"></script>
        <link type="text/css" rel="stylesheet" href="bower_components/slidebars/distribution/0.10.2/slidebars.min.css"/>
        <script type="text/javascript" src="bower_components/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <link type="text/css" rel="stylesheet" href="bower_components/magnific-popup/dist/magnific-popup.css"/>

        <link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,700' rel='stylesheet' type='text/css'/>
        <script type="text/javascript" src="js/Example.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        
<script>
    if (readCookie('nomobile') === 'true') {
      var docElement = document.documentElement;
      docElement.className = docElement.className + " mobile-fullsize";

    } else {
      document.write('<meta name="viewport" content="width=device-width, initial-scale=1">');
    };

    function toggleMobileFullSite() {
      var curr = (readCookie('nomobile') === 'true');
      createCookie('nomobile',!curr,0);
      location.reload();
    };
</script>
</head>
<body>
    <div id="generalPicture">
        <div id="pictureHeader">
            <div id="containerHeader">
                <div class="container">
                    <div class="left">
                        <a href="#"><span id="logo" class="icon-kilococach_icon_fonts_template-89"></span></a>
                    </div>

                    
                    <div id='search-box'>
                        <form action='/search' id='search-form' method='get' target='_top'>
                            <input id='search-text' name='search' type='text' placeholder='Search for a perfect way to spend a day' /><button class="clearButton"><span class="searchIcon icon-kilococach_icon_fonts_template-88"></span></button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    
        <div id="nav">
            <div class="container">
                <ul>
                    <li class="left"><a href="#">ABOUT</a></li>
                    <li class="left"><a href="#">SERVICES</a></li>
                    <li class="left"><a href="#">WORK</a></li>
                    <li class="left"><a href="#">JOURNAL</a></li>
                    <li class="left"><a href="#">CONTACT</a></li>
                    <li class="rightNav"><a class="simple-ajax-popup" href="script.php" ><span class="signInIcon icon-kilococach_icon_fonts_template-90"></span>SIGN IN</a></li>
                </ul>
            </div>
        </div>
    </div> 
      
    <!-- Navbar mobile -->

    <nav class="navbarMobile sb-slide" role="navigation">
        <div class="sb-toggle-left">
            <div class="navicon-line"></div>
            <div class="navicon-line"></div>
            <div class="navicon-line"></div>
        </div>

        <div id="logoMobile">
            <a href="#"><span class="icon-kilococach_icon_fonts_template-89 iconMobile"></span></a>
            <a id="search_box" role="button" aria-controls="t1" class="searchMobile search_box" aria-haspopup="true"><span class="icon-kilococach_icon_fonts_template-88 iconMobile"></span></a>
        </div>
       
        <div id="t1" class="searchPopup" role="region" tabindex="-1" aria-expanded="false">
                <div class="arrow_box"></div>
                <form action='/search' id='search-formMobile' method='get' target='_top'>
                    <input id='search-textMobile' name='search' type='text' placeholder='Search for a perfect way to spend a day' /><button class="clearButton"><span class="searchIconMobile icon-kilococach_icon_fonts_template-88"></span></button>              
                </form>
        </div> 
    </nav>

    <div class="sb-slidebar sb-left">
        <nav>
          <ul class="sb-menu">
            <li><a class="simple-ajax-popup" href="script.php" ><span class="signInIconMobile icon-kilococach_icon_fonts_template-90"></span>SIGN IN</a></li>
            <li class="sb-close"><a href="#">ABOUT</a></li>
            <li class="sb-close"><a href="#">SERVICES</a></li>
            <li class="sb-close"><a href="#">WORK</a></li>
            <li class="sb-close"><a href="#">JOURNAL</a></li>
            <li class="sb-close"><a href="#">CONTACT</a></li>
          </ul>
        </nav>
    </div>


    <!-- Site content -->

    <div id="sb-site">
        <div class="container">

            <div class="fluid carouselContainer">
                <div class="inner-block jcarousel-wrapper">
                    <div class="jcarousel">
                        <ul>
                            <li>
                                <img src="img/image1.jpg" alt="Image 1" />
                                <div class="slideContainer">
                                    <h2 class="slideTitle">
                                        <a href="#" class="title">A Dutch company is building a $335 million seawall around New York</a>
                                    </h2>
                                </div>
                            </li>

                            <li>
                                <img src="img/image2.jpg" alt="Image 2">
                                <div class="slideContainer">
                                    <h2 class="slideTitle">
                                        <a href="#" class="title">This is really nice picture. Yes, I know that.</a>
                                    </h2>
                                </div>
                            </li>

                            <li>
                                <img src="img/image3.jpg" alt="Image 3">
                                <div class="slideContainer">
                                    <h2 class="slideTitle">
                                        <a href="#" class="title">You can click on title, how weird...</a>
                                    </h2>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <p class="jcarousel-pagination"></p>
                </div>
            </div>
        
            <div class="ad fixed-width">
                <img src="img/ad.jpg" alt="ad"/>
            </div>

            <div class="fluid">
                <div class="inner-block">
                    <div class="vegan">
                        <div class="containerArrow">
                            <img class="borderRadius pictureArrow" src="img/vegan.jpg" alt="column 1"/>
                        </div>

                        <a href="#"><h1>A Dutch company is building a $335 million seawall around New York</h1></a>
                        <p>In 2012, Hurricane Sandy destroyed homes, wasted businesses, flooded tunnels, and submerged subways. The storm brought tens of thousands of lives to a halt, and revealed New York City's vulnerabilities to severe climate.</p>
                
                        <div class="absoluteContainer">
                            <ul>
                                <li class="miniContainer"><a href="#" class="spec"><span class="icons icon-kilococach_icon_fonts_template-85"></span><br><strong>300</strong> likes</a></li>
                                <li class="miniContainer s"><a href="#" class="spec"><span class="icons icon-kilococach_icon_fonts_template-86"></span><br><strong>35</strong> comments</a></li>
                                <li class="miniContainer"><a href="#" class="spec"><span class="icons icon-kilococach_icon_fonts_template-84"></span><br><strong>5</strong> min read</a></li>
                            </ul>
                        </div>
                    </div>
            

                    <div class="mobile">
                        <div class="containerArrow">
                            <img class="borderRadius pictureArrow" src="img/mobile.jpg" alt="column 2"/>
                        </div>

                        <a href="#"><h1>A Dutch company is building a $335 million seawall around New York</h1></a>
                        <p>In 2012, Hurricane Sandy destroyed homes, wasted businesses, flooded tunnels, and submerged subways. The storm brought tens of thousands of lives to a halt, and revealed New York City's vulnerabilities to severe climate.</p>
                        <div class="absoluteContainer">
                            <ul>
                                <li class="miniContainer"><a href="#" class="spec"><span class="icons icon-kilococach_icon_fonts_template-85"></span><br><strong>300</strong> likes</a></li>
                                <li class="miniContainer s"><a href="#" class="spec"><span class="icons icon-kilococach_icon_fonts_template-86"></span><br><strong>35</strong> comments</a></li>
                                <li class="miniContainer"><a href="#" class="spec"><span class="icons icon-kilococach_icon_fonts_template-84"></span><br><strong>5</strong> min read</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>


            <div class="fixed-width list">
                <a href="#"><h3>One list to rule them all</h3></a>

                <ol>
                    <li>In 2012.Hurricane Sandy</li>
                    <li>destroyed homes, wasted</li>
                    <li>businesses, flooded tunnels</li>
                    <li>submerged subways, storm</li>
                    <li>brought tens od thousands of</li>
                </ol>
                
                <a class="special" href="#">view more</a>
            </div>
        

            <div class="listMobile">
                <a href="#"><h3>One list to rule them all</h3></a>

                <div class="miniContainer">
                    <img src="img/mob.jpg" alt="mob 1"/>
                    <a href="#"><h4>One list to rule them all</h4></a>
                    <p>Submerged subways. stor brought tens of thousands of brought tens of thousands of</p>
                </div>

                <div class="miniContainer">
                    <img src="img/mob.jpg" alt="mob 2"/>
                    <a href="#"><h4>One list to rule them all</h4></a>
                    <p>Submerged subways. stor brought tens of thousands of brought tens of thousands of</p>
                </div>

                <div class="miniContainer">
                    <img src="img/mob.jpg" alt="mob 3"/>
                    <a href="#"><h4>One list to rule them all</h4></a>
                    <p>Submerged subways. stor brought tens of thousands of brought tens of thousands of</p>
                </div>

                <a class="special" href="#">view more</a>
            </div>
        </div>
    

        <div id="footer">
            <div class="container">
                <a class="mobile-only" href="javascript:toggleMobileFullSite()">Desktop site</a>
                <a class="mobile-only fullsize-only" href="javascript:toggleMobileFullSite()">Mobile site</a>

                <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ul</p>
                <p class="copy">Copyright &copy; 2014. Trikoder d.o.o.</p>
            </div>
        </div>
    </div>
</body>
</html>