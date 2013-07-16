<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Taylor's Auctions - Auction Item</title>
	<link rel="stylesheet" type="text/css" href="css/taylors.css">
</head>
<body>
	<div class="page">
    
    	<div class="header">
        	<h1><a href="home-page.php">Taylor's</a></h1>
            <p class="caption">Auctioneers Valuers Secure&nbsp;Storage</p>
            <ul class="navigation">
                <li><a href="#">Current Auction</a></li>
                <li><a href="#">Valuations</a></li>
                <li><a href="#">Self Storage</a></li>
                <li><a href="#">Sales &amp; Events Calendar</a></li>
                <li><a href="#">How it works</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
		
    	<div class="content">
            <div class="top-bar">
                <ul class="navigation">
                    <li><a href="#">Account Login</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
                <form id="jumptolot-form" name="jumptolot-form" class="jumptolot-form" action="jumptolot.php" method="post">
                    <label for="lotno">Jump to Lot No.</label>
                    <input type="text" name="lotno" id="lotno" class="text" value="" placeholder="Jump to Lot. no." />
                    <input type="image" name="Submit"  class="submit" src="images/bg-button-search.png" alt="Search" />                 
                </form>
                <form id="search-form" name="search-form" class="search-form" action="search.php" method="post">
                    <label for="term">Search</label>
                    <input type="text" name="term" id="term" class="text" value="" placeholder="Keyword search" />
                    <input type="image" name="Submit" class="submit" src="images/bg-button-search.png" alt="Search" />                 
                </form>
            </div>
        
        	<div class="content-wide auction-item">
            
            	<div class="imagery">
                	<img src="images/sample-action-item-1.jpg" width="266" height="249" alt="Item Title" class="item zoom-large" />
                    <h4>Select image to zoom</h4>
                    <ul class="item-thumbs zoom-thumbs">
                    	<li><a href="images/sample-action-item-1.jpg"><img src="images/sample-action-item-thumb-1.jpg" width="72" height="69" alt="Item Title"></a></li>
                        <li><a href="images/sample-action-item-2.jpg"><img src="images/sample-action-item-thumb-2.jpg" width="72" height="69" alt="Item Title"></a></li>
                        <li><a href="images/sample-action-item-3.jpg"><img src="images/sample-action-item-thumb-3.jpg" width="72" height="69" alt="Item Title"></a></li>
                        <li><a href="images/sample-action-item-4.jpg"><img src="images/sample-action-item-thumb-4.jpg" width="72" height="69" alt="Item Title"></a></li>
                        <li><a href="images/sample-action-item-5.jpg"><img src="images/sample-action-item-thumb-5.jpg" width="72" height="69" alt="Item Title"></a></li>                        
                    </ul>
                    <iframe src="http://player.vimeo.com/video/51399608?byline=0&amp;portrait=0&amp;color=00f034" width="266" height="150" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
                <div class="description">
                	<h2><span class="lotno">Lot: 1276</span> 1950's Phillip Patek wristwatch</h2>
                    <dl>
                    	<dt>Estimate</dt>
                        <dd>&pound;200 - &pound;250 excl <a href="#">VAT</a></dd>
                        <dt>Sale</dt>
                        <dd>Saturday 30th March 2013</dd>                        
                        <dt>Category</dt>
                        <dd><a href="#">Furniture</a></dd>
                    </dl>
                    <h3>Description</h3>
                    <p>Morbi vel eleifend enim. Donec non urna sem, at faucibus felis. Mauris in augue libero. Duis lobortis</p>
                    <p>Lead vitae dignissim massa rutrum vitae. Duis eu enim eu enim dictum eleifend et ac felis. Donec quis nunc nulla, sit amet mattis ipsum. Pellentesque elit lacus, pretium et fringilla nec, congue eu lorem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <div class="login">
                    	<h3>Condition Report</h3>
                        <a href="#">Login to view</a>
                        <div class="clear-both"></div>
                    </div>
                    <p>Maecenas rhoncus ultrices magna a dignissim. Donec ut metus nec elit ornare placerat. In dictum hendrerit hendrerit.</p>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum consectetur sem ac ligula elementum accumsan elementum sem vestibulum. Nulla ac dolor et lorem varius auctor ut non est. Suspendisse porta fringilla pulvinar.</p>
                </div>
            
            </div>
            
            <div class="content-narrow">            
            	<ul class="auction-item-navigation">
                	<li><a href="auction-item.php" class="next">Next Lot: <span>1277</span></a></li>
                    <li><a href="auction-item.php" class="prev">Previous Lot: <span>1275</span></a></li>
                    <li><a href="home-page.php" class="list">Return to auction list</a></li>
                </ul>
                
                <div class="accounts">
                    <div class="bid-online">
                        <h2>Place commissioned bid online</h2>
                        <ul>
                            <li><a href="#">How do I do this?</a></li>
                            <li><a href="#">Login to your account</a></li>
                        </ul>
                        <span class="icon"></span>
                    </div>                
                    <div class="bid-by-phone">
                        <h2>Live bid by phone</h2>
                        <ul>
                            <li><a href="#">How do I do this?</a></li>
                            <li><a href="#">Contact us to register</a></li>
                        </ul>
                        <span class="icon"></span>
                    </div>                
                    <div class="register">
                        <h2>Register for item alerts</h2>
                        <ul>
                            <li><a href="#">Create account</a></li>
                            <li><a href="#">Login to your account</a></li>
                        </ul>
                        <span class="icon"></span>
                    </div>
                </div>
            </div>
                    
        </div>
        
        <div class="news">
        	<h2>News</h2>
            <ul>
            	<li>
                	<span class="date">06/10/13 -</span>
                    <span class="fragment">Taylor's wins council Dispersal Contract..</span>
                    <a href="#" class="more-link">More...</a>
                </li>
            	<li>
                	<span class="date">06/10/13 -</span>
                    <span class="fragment">Record hammer price for vase..</span>
                    <a href="#" class="more-link">More...</a>
                </li>
            	<li>
                	<span class="date">06/10/13 -</span>
                    <span class="fragment">Unusual book turns up in Angus..</span>
                    <a href="#" class="more-link">More...</a>
                </li>
            	<li>
                	<span class="date">06/10/13 -</span>
                    <span class="fragment">New website for Montrose auction house..</span>
                    <a href="#" class="more-link">More...</a>
                </li>
            </ul>
        </div>        
        
    	<div class="footer">
        	<ul>
            	<li><a href="#">Ts &amp;Cs</a></li>
            	<li><a href="#">Privacy Policy</a></li>
            	<li><a href="#">Cookies</a></li>
            	<li><a href="#">Contact</a></li>
            </ul>
        </div>
        
    </div>
    
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/taylors-auctions.js"></script>
</body>
</html>
