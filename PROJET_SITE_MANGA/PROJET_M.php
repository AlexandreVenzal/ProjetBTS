
  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="PROJET_M.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/js/uikit-icons.min.js"></script>
    <title>sakamatanamaza</title>
</head>
<body class="fluid">
    <main id="wrapper">
        <header id="header">
            <!-- carré du logo -->
            <div id="logo" style=" height: auto;">
                <img src="../PROJET_SITE_MANGA/IMAGE/tux.png" alt="marche pas" style=" height: 50px; " />
            </div>
            <div id="header-middle">
                <div id="search">
                    <div>
                        <span class="deleteicon"></span>
                        <label for="tvSearch">
                            <input type="search" name="search" class="form-control deletable" autocomplete="off" id="tvSearch" placeholder="Live Search" />
                        </label>
                        <!-- boutton recherche à gauche de la barre de recherche -->
                        <button type="button" aria-label="Live Search">
                            <i class="icon-search"></i>
                        </button>
                    </div>
                    <div id="search-results" style="display: none">
                        <div class="section-heading">Best Results</div>
                        <div id="search-response"></div>
                    </div>
                </div>
                <style>
                    .imageBox img {
                        width: 40px;
                        margin-top: 18px;
                        margin-left: 10px;
                        height: 40px;
                    }
                    .imageBox {
                        position: relative;
                        float: left;
                    }
                    .imageBox .hoverImg {
                        position: absolute;
                        left: 0;
                        top: 0;
                        display: none;
                    }
                    .imageBox:hover .hoverImg {
                        display: block;
                    }
                </style>
                <a href="https://discord.gg/MKycEM8vAK" target="_blank" class="imageBox">
                    <div class="imageInn">
                        <img src="../PROJET_SITE_MANGA/IMAGE/discord.png">
                    </div>
                    <div class="hoverImg">
                        <img src="../PROJET_SITE_MANGA/IMAGE/discord-hover.png" alt="">
                    </div>
                </a>
              
                <div id="user">
                    <div class="left floated author">
                        <a class="ui button secondary" onlyusers=""><i class="icon-torso"></i> Sign In</a>
                        <a class="ui button secondary hidden-xs signup"><i class="icon-plus-circled"></i> Sign Up</a>
                    </div>
                </div>
            </div>
        </header>
        <div id="wrapper-inner">
            <div class="triggered-overlay"></div>
            <aside id="primary-sidebar" class="">
                <!--block catégorie et menu -->
                <div id="sidebar-inner" class="scrollbar-macosx">
                    <!-- block menu -->
                    <a href="#offcanvas-slide" class="uk-button uk-button-default" uk-toggle>Open</a>
                    <div id="offcanvas-slide" uk-offcanvas>
                        <div class="uk-offcanvas-bar">
                            <ul class="uk-nav uk-nav-default">
                                <li class="uk-nav-header"><a href="#">Home</a></li>
                                <li class="uk-nav-header"><a href="#">Popular Manga</a></li>
                                <li class="uk-nav-header"><a href="#">Manga List</a></li>
                                <li class="uk-nav-header"><a href="#">Latest Releases</a></li>
                                <li class="uk-nav-header"><a href="#">Advanced Search</a></li>
                                <li class="uk-nav-header"><a href="#">Collections</a></li>
                                <li class="uk-nav-divider"></li>
                                <li class="uk-nav-header">Catégories</li>
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Comedy</a></li>
                                <li><a href="#">Fantasy</a></li>
                                <!-- <li><a href="#">Historical</a></li>-->
                                <li><a href="#">Horror</a></li>
                                <li><a href="#">Isekai</a></li>
                                <li><a href="#">Magic</a></li>
                                <!-- <li><a href="#">Martial Arts</a></li>
                                <li><a href="#">Mecha</a></li>-->
                                <!--<li><a href="#">Mind Game</a></li>
                                <li><a href="#">Mystery</a></li>
                                <li><a href="#">Psychological</a></li>
                                <li><a href="#">Romance</a></li>-->
                                <li><a href="#">Sci fi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
            <div id="content">
                <div class="inner-content container " id="page-index">
                    <div class="uk-position-relative uk-visible-toggle uk-light uk-margin-medium-bottom uk-margin-top" tabindex="-1" uk-slider>
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid my-5">
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://furansujapon.com/wp-content/uploads/2020/11/Overlord-Saison-4.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <h5> TITRE </h5>
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://imgsrc.cineserie.com/2016/08/2032503.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                    <h5> TITRE </h5>
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://www.japanzon.com/104695-product_hd/cd-anime-rezero-kara-hajimeru-isekai-seikatsu-radio-cd-vol5-2cd.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://furansujapon.com/wp-content/uploads/2020/11/Overlord-Saison-4.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <h5> TITRE </h5>
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://imgsrc.cineserie.com/2016/08/2032503.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://www.japanzon.com/104695-product_hd/cd-anime-rezero-kara-hajimeru-isekai-seikatsu-radio-cd-vol5-2cd.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://furansujapon.com/wp-content/uploads/2020/11/Overlord-Saison-4.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <h5> TITRE </h5>
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://imgsrc.cineserie.com/2016/08/2032503.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-transition-toggle " tabindex="0">
                                <div class="uk-inline ">
                                    <img src="https://www.japanzon.com/104695-product_hd/cd-anime-rezero-kara-hajimeru-isekai-seikatsu-radio-cd-vol5-2cd.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                    <div class="uk-position-relative uk-visible-toggle uk-light " tabindex="-1" uk-slider>
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid my-5">
                        <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://furansujapon.com/wp-content/uploads/2020/11/Overlord-Saison-4.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <h5> TITRE </h5>
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://imgsrc.cineserie.com/2016/08/2032503.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://www.japanzon.com/104695-product_hd/cd-anime-rezero-kara-hajimeru-isekai-seikatsu-radio-cd-vol5-2cd.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://furansujapon.com/wp-content/uploads/2020/11/Overlord-Saison-4.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <h5> TITRE </h5>
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://imgsrc.cineserie.com/2016/08/2032503.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://www.japanzon.com/104695-product_hd/cd-anime-rezero-kara-hajimeru-isekai-seikatsu-radio-cd-vol5-2cd.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://furansujapon.com/wp-content/uploads/2020/11/Overlord-Saison-4.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <h5> TITRE </h5>
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://imgsrc.cineserie.com/2016/08/2032503.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-transition-toggle" tabindex="0">
                                <div class="uk-inline">
                                    <img src="https://www.japanzon.com/104695-product_hd/cd-anime-rezero-kara-hajimeru-isekai-seikatsu-radio-cd-vol5-2cd.jpg" width="400" height="600" alt="">
                                    <div class="uk-overlay uk-overlay-primary uk-transition-slide-bottom-medium uk-position-bottom">
                                        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                    <br></<br>
                    <div id="router-view">
                        <div class="dark-segment">
                            <div class="segment-title pt-lg">Hot Manga Updates</div>
                            <div class="owl-carousel owl-theme owl-loaded owl-drag" id="manga-hot-updates">
                            </div>
                            <ul class="clearfix latest-updates">
                                <li class="segment-poster-sm"> </li>
                                <a href="/latest-releases/2" class="ui button load-more" data-navigo=""><i class="icon-arrows-cw"></i> Show More</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </main>
</body>
</html>
