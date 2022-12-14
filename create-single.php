<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Krei</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Krei" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/plugins.css" rel="stylesheet" type="text/css" />    
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-04.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />
</head>

<body class="dark-scheme de-grey">
    <div id="wrapper">

        <!-- header begin -->
        <header class="transparent">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex sm-pt10">
                        <div class="de-flex-col">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="03_grey-index.php">
                                        <img alt="" src="images/logo-3.png" />
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col">
                                <input id="quick_search" class="xs-hide" name="quick_search" placeholder="search item here..." type="text" />
                            </div>
                        </div>
                        <div class="de-flex-col header-col-mid">
                            <!-- mainmenu begin -->
                            <ul id="mainmenu">
                                <li>
                                    <a href="03_grey-index-2.php">Home<span></span></a>
                                </li>
                                <li>
                                    <a href="03_grey-explore.php">Explore<span></span></a>
                                    <!-- <ul>
                                        <li><a href="03_grey-explore.php">Explore</a></li>
                                        <li><a href="03_grey-explore-music-nft.php">New: Music NFT</a></li>
                                        <li><a href="03_grey-collection.php">Collections</a></li>
                                        <li><a href="03_grey-live-auction.php">Live Auction</a></li>
                                        <li><a href="03_grey-item-details.php">Item Details</a></li>
                                        <li><a href="03_grey-help-center.php">Help Center</a></li>
                                    </ul> -->
                                </li>
                                <li>
                                    <a href="03_grey-author.php">Author<span></span></a>
                                    <ul>
                                        <li><a href="03_grey-author.php">Author</a></li>
                                        <li><a href="profile.php">Profile</a></li>
                                        <li><a href="03_grey-wallet.php">Wallet</a></li>
                                        <!-- <li><a href="03_grey-create-options.php">Create</a></li> -->
                                        <li><a href="03_grey-login.php">Login</a></li>
                                    </ul>
                                </li>                                    
                                <!-- <li>
                                    <a href="#">Stats<span></span></a>
                                    <ul>
                                        <li><a href="03_grey-activity.php">Activity</a></li>
                                        <li><a href="03_grey-rankings.php">Rankings</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                            <!-- mainmenu close -->
                            <div class="menu_side_area">
                            <a href="03_grey-login.php" class="btn-main btn-wallet"><i class="icon_wallet_alt"></i><span>Login</span></a>
                                <span id="menu-btn"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="text-light" data-bgimage="url(images/background/subheader.jpg) top">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-12 text-center">
									<h1>Create Single Collectible</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
            

            <!-- section begin -->
            <section aria-label="section">
                <div class="container">
                    <div class="row wow fadeIn">
                        <div class="col-lg-7 offset-lg-1">
                            <form id="form-create-item" class="form-border" method="post" action="email.php">
                                <div class="field-set">
                                    <h5>Upload file</h5>

                                    <div class="d-create-file">
                                        <p id="file_name">PNG, JPG, GIF, WEBP or MP4. Max 200mb.</p>
                                        <input type="button" id="get_file" class="btn-main" value="Browse">
                                        <input type="file" id="upload_file">
                                    </div>

                                    <div class="spacer-40"></div>

                                    <h5>Select method</h5>
                                    <div class="de_tab tab_methods">
                                        <ul class="de_nav">
                                            <li class="active"><span><i class="fa fa-tag"></i>Fixed price</span>
                                            </li>
                                            <li><span><i class="fa fa-users"></i>Open for negotiation</span>
                                            </li>
                                        </ul>

                                        <div class="de_tab_content">

                                            <div id="tab_opt_1">
                                                <h5>Price</h5>
                                                <input type="text" name="item_price" id="item_price" class="form-control" placeholder="enter price for one item (Rp)" />
                                            </div>

                                            <div id="tab_opt_2">
                                                <h5>Enter Price</h5>
                                                <input type="text" name="item_price_bid" id="item_price_bid" class="form-control" placeholder="enter starting price" />

                                                <div class="spacer-20"></div>
                                            </div>

                                            <div id="tab_opt_3">
                                            </div>

                                        </div>

                                    </div>

                                    <div class="spacer-20"></div>

                                    <h5>Choose Category</h5>
                                    <p class="p-info">This is the Category where your item will appear.</p>

                                    <div id="item_collection" class="dropdown fullwidth mb20">
                                        <a href="#" class="btn-selector">Select Category</a>
                                        <ul>
                                            <li><span>Painting</span></li>
                                            <li><span>Clothes</span></li>
                                            <li><span>Design</span></li>
                                            <li><span>Web Design</span></li>
                                            <li><span>Cover Art</span></li>
                                        </ul>
                                    </div>

                                    <div class="spacer-20"></div>

                                    <h5>Title</h5>
                                    <input type="text" name="item_title" id="item_title" class="form-control" placeholder="e.g. 'Garuda Painting" />

                                    <div class="spacer-20"></div>

                                    <h5>Description</h5>
                                    <textarea data-autoresize name="item_desc" id="item_desc" class="form-control" placeholder="e.g. 'This is very limited item'"></textarea>

                                    <div class="spacer-20"></div>

                                    <div class="spacer-single"></div>

                                    <input type="button" id="submit" class="btn-main" value="Create Item">
                                    <div class="spacer-single"></div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-3 col-sm-6 col-xs-12">
                                <h5>Preview item</h5>
                                <div class="nft__item">
                                    <div class="author_list_pp">
                                        <a href="#">                                    
                                            <img class="lazy" src="images/author/author-2.jpg" alt="">
                                            <i class="fa fa-check"></i>
                                        </a>
                                    </div>
                                    <div class="nft__item_wrap">
                                        <a href="#">
                                            <img src="images/items/ONLY1.jpg" id="get_file_2" class="lazy nft__item_preview" alt="">
                                        </a>
                                    </div>
                                    <div class="nft__item_info">
                                        <a href="#">
                                            <h4>Illustraze</h4>
                                        </a>
                                        <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                            Rp100.000,00<span>1/20</span>
                                        </div>
                                        <div class="nft__item_action">
                                            <a href="#">Enter price</a>
                                        </div>
                                        <div class="nft__item_like">
                                            <i class="fa fa-heart"></i><span>50</span>
                                        </div>                            
                                    </div> 
                                </div>
                            </div>                                         
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>
        
        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>My account</h5>
                            <ul>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Request</a></li>
                                <li><a href="#">Explore</a></li>
                                <li><a href="#">Settings</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Resources</h5>
                            <ul>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Suggestions</a></li>
                                <li><a href="#">Discord</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Asset</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Newsletter</h5>
                            <p>Signup for our newsletter to get the latest news in your inbox.</p>
                            <form action="blank.php" class="row form-dark" id="form_subscribe" method="post" name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe" placeholder="enter your email" type="text" /> <a href="#" id="btn-subscribe"><i class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Your email is safe with us. We don't spam.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="03_grey-index.php">
                                        <span class="copy">&copy; Create by Krei Studio</span>
                                    </a>
                                </div>
                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
        
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>


</body>

</html>