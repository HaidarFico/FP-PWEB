<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Krei</title>
    <link rel="icon" href="images/icon-red.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Gigaland - NFT Marketplace Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/plugins.css" rel="stylesheet" type="text/css" />    
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/de-grey.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-04.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./css/button.css">
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
                                    <!-- <a href="03_grey-index-2.php">
                                        <img alt="" src="images/logo-3.png" />
                                    </a> -->
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
                                        <li><a href="03_grey-explore.ppp>Explore</a></li>
                                        <li><a href="03_grey-explore-music-nft.ppp>New: Music NFT</a></li>
                                        <li><a href="03_grey-collection.ppp>Collections</a></li>
                                        <li><a href="03_grey-live-auction.ppp>Live Auction</a></li>
                                        <li><a href="03_grey-item-details.ppp>Item Details</a></li>
                                        <li><a href="03_grey-help-center.ppp>Help Center</a></li>
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
                                <li>
                                <a href="03_grey-login.php" class="btn-main btn-wallet"><i class="icon_wallet_alt"></i><span>Login</span></a>
                                <span id="menu-btn"></span>
                                </li>                                    
                                <!-- <li>
                                    <a href="#">Stats<span></span></a>
                                    <ul>
                                        <li><a href="03_grey-activity.php>Activity</a></li>
                                        <li><a href="03_grey-rankings.php>Rankings</a></li>
                                    </ul>
                                </li> 
                            </ul>
                            mainmenu close -->
                            <div class="menu_side_area">
                            
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
			<section class="full-height relative no-top no-bottom vertical-center" data-bgimage="url(images/background/6.jpg) top" data-stellar-background-ratio=".5">
                <div class="overlay-gradient t50">
					<div class="center-y relative">
						<div class="container">
							<div class="row align-items-center">
								
								<div class="col-lg-4 offset-lg-4 wow fadeIn bg-color" data-wow-delay=".5s">
									<div class="box-rounded padding40">
										<h3 class="mb10">Log In</h3>
										<p>Login using an existing account or create a new account</p><a href="register.php">REGISTER</a>
										<form name="contactForm" id='contact_form' class="form-border" method="post" action='loginInput.php'>

                                            <div class="field-set">
                                                <input type='text' name='email' id='email' class="form-control" placeholder="username">
                                            </div>
											
											 <div class="field-set">
                                                <input type='password' name='password' id='password' class="form-control" placeholder="password">
                                            </div>
											
											<div class="field-set">
												<!-- <input type='submit' id='send_message' value='Submit' class="btn btn-main btn-fullwidth color-2"> -->
                                                <input type="submit" name="contactForm" value="login" class="btn-main"/>
											</div>
											
											<div class="clearfix"></div>
											
											<div class="spacer-single"></div>

                                      
                                        </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>		
            
            </div>
            <!-- content close -->

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
                                    <a href="03_grey-index.php>
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