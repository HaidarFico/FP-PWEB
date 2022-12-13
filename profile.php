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
                                    <a href="03_grey-index-2.php">
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
									<h1>Profile</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
            

            <!-- section begin -->
            <section id="section-main" aria-label="section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <form id="form-create-item" class="form-border" method="post" action="email.php">
                            <div class="de_tab tab_simple">
                            
                                <ul class="de_nav">
                                    <li class="active"><span><i class="fa fa-user"></i>Profile</span></li>
                                </ul>
                                
                                <div class="de_tab_content">                            
                                    <div class="tab-1">
                                        <div class="row wow fadeIn">
                                            <div class="col-lg-8 mb-sm-20">
                                                    <div class="field-set">
                                                        <?php
                                                        include('getUserData.php');
                                                        $userData = getData();
                                                        echo ' <h3>Username</h3>
                                                            <h5>'.$userData[1].'</h5>
                                                        <h3>Bio</h3>
                                                        <h5>'.$userData[4].'</h5>
                                                        <div class="spacer-20"></div>
                                                        <h3>Email Address*</h3>
                                                        <h5>'.$userData[2].'</h5>
                                                        <div class="spacer-20"></div>
                                                        <h3><i></i> Phone Number</h3>
                                                        <h5>'.$userData[3].'</h5>'

                                                        ?>
    

                                                    </div>
                                            </div>

                                            <div id="sidebar" class="col-lg-4">
                                                <h5>Profile image <i class="fa fa-info-circle id-color-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Recommend 400 x 400. Max size: 50MB. Click the image to upload."></i></h5>

                                                <img src="./images/author/Author_Default.png" id="click_profile_img" class="d-profile-img-edit img-fluid" alt="">
                                                <input type="file" id="upload_profile_img"> 

                                                <div class="spacer-30"></div>

                                                <h5>Profile banner <i class="fa fa-info-circle id-color-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Recommend 1500 x 500. Max size: 50MB. Click the image to upload."></i></h5>
                                                <img src="images/author_single/author_banner.jpg" id="click_banner_img" class="d-banner-img-edit img-fluid" alt="">
                                                <input type="file" id="upload_banner_img"> 

                                            </div>                                         
                                        </div>
                                    </div>

                                    <div class="tab-2">
                                        <div class="row wow fadeIn">
                                            <div class="col-md-6 mb-sm-20">
                                                <div class="switch-with-title s2">
                                                    <h5>Item Sold</h5>
                                                    <div class="de-switch">
                                                      <input type="checkbox" id="notif-item-sold" class="checkbox">
                                                      <label for="notif-item-sold"></label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <p class="p-info">When someone purhased your item.</p>
                                                </div>

                                                <div class="spacer-20"></div>

                                                <div class="switch-with-title s2">
                                                    <h5>Bid Activity</h5>
                                                    <div class="de-switch">
                                                      <input type="checkbox" id="notif-bid-activity" class="checkbox">
                                                      <label for="notif-bid-activity"></label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <p class="p-info">When someone purhased your item.</p>
                                                </div>

                                                <div class="spacer-20"></div>

                                                <div class="switch-with-title s2">
                                                    <h5>Price Change</h5>
                                                    <div class="de-switch">
                                                      <input type="checkbox" id="notif-price-change" class="checkbox">
                                                      <label for="notif-price-change"></label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <p class="p-info">When an item you made an offer on changes in price.</p>
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="switch-with-title s2">
                                                    <h5>Auction Expiration</h5>
                                                    <div class="de-switch">
                                                      <input type="checkbox" id="notif-auction-expiration" class="checkbox">
                                                      <label for="notif-auction-expiration"></label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <p class="p-info">When an auction you created ends.</p>
                                                </div>

                                                <div class="spacer-20"></div>

                                                <div class="switch-with-title s2">
                                                    <h5>Outbid</h5>
                                                    <div class="de-switch">
                                                      <input type="checkbox" id="notif-outbid" class="checkbox">
                                                      <label for="notif-outbid"></label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <p class="p-info">When an offer you placed is exceeded by another user.</p>
                                                </div>

                                                <div class="spacer-20"></div>

                                                <div class="switch-with-title s2">
                                                    <h5>Successful Purchase</h5>
                                                    <div class="de-switch">
                                                      <input type="checkbox" id="notif-successful-purchase" class="checkbox">
                                                      <label for="notif-successful-purchase"></label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <p class="p-info">When you successfully buy an item.</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-3">
                                        <div class="row wow fadeIn">
                                            <div class="col-md-6 mb-sm-30">
                                                <h5>Language</h5>
                                                <p class="p-info">Select your prefered language.</p>
                                                <div id="select_lang" class="dropdown fullwidth">
                                                    <a href="#" class="btn-selector">English</a>
                                                    <ul>
                                                        <li class="active"><span>English</span></li>
                                                        <li><span>France</span></li>
                                                        <li><span>German</span></li>
                                                        <li><span>Japan</span></li>
                                                        <li><span>Italy</span></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <h5>Scheme</h5>
                                                <p class="p-info">Customize how Krei looks for you.</p>
                                                <div id="select_scheme" class="dropdown fullwidth">
                                                    <a href="#" class="btn-selector">Default scheme</a>
                                                    <ul>
                                                        <li class="active"><span>Default scheme</span></li>
                                                        <li><span>Light scheme</span></li>
                                                        <li><span>Dark scheme</span></li>
                                                        <li><span>Grey scheme</span></li>
                                                        <li><span>Retro scheme</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- <input type="button" id="submit" class="btn-main" value="Update profile"> -->
                            </form>
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
                                    <a href="03_grey-index-2.php">
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
