<?php
		include_once('/includes/config.php');

		$sql = "select e.id, e.firstName, e.lastName, e.managerId, e.title, e.department, e.city, e.officePhone, e.cellPhone, " .
				"e.email, e.picture, m.firstName managerFirstName, m.lastName managerLastName, count(r.id) reportCount " . 
				"from employee e left join employee r on r.managerId = e.id left join employee m on e.managerId = m.id " .
				"where e.id=:id group by e.lastName order by e.lastName, e.firstName";
				
		$sqll = "select p.id, p.product_name, p.product_price, p.product_quantity, p.big_pic_url from product as p left join product r on r.id = p.id left join product m on p.id = m.id	where p.id=:id group by p.product_name order by p.id";
		try {
			$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $dbh->prepare($sqll);  
			$stmt->bindParam('id', $_GET['id']);
			$stmt->execute();
			$product = $stmt->fetchObject();  
			$dbh = null;
		?>
		<div class="guides-details">
	    <h3><?php echo "$product->product_name" ?></h3>
       			
   			</div>
	 
    		<ul data-role="listview" data-inset="true" class="action-list">
		    	<?php
	    		
		    	//the guides details begin here
				if (!is_null($product->product_price))
		    	{
					echo "<li>$product->product_price</li>";
				}
		    	if (!is_null($product->product_quantity))
		    	{
					echo "<li>$product->product_quantity</li>";
				}
		    	if (!is_null($product->big_pic_url))
		    	{
					echo "<li>$product->big_pic_url</li>";
					//<li><a href="mailto:jdoe@foo.com">Basic email: mailto:jdoe@foo.com</a></li>
				}
				if (!is_null($product->id))
		    	{
					echo "<li><a href='http://localhost/kibera/pages/donate.php'><h3>Donate</h3></a></li>";
				}
		    	?>
    		</ul>
		
		<?php	
		} catch(PDOException $e) {
			echo $e->getMessage(); 
		}
?>



<!DOCTYPE html>
<html lang="en">
<head prefix="og: https://ogp.me fb: http://ogp.me/ns/fb# ondango: https://ogp.me/ns/fb/ondango#">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><link href="shop/favicon.ico" type="image/x-icon" rel="icon" /><link href="shop/favicon.ico" type="image/x-icon" rel="shortcut icon" /><meta name="robots" content="noindex,nofollow" /><meta property="fb:app_id" content="#" /><meta property="fb:admins" content="#" /><title>bubble washing brush</title>
	<link rel="stylesheet" type="text/css" href="../../../../css/screen.css" />
	<link id="soof_css" rel="stylesheet" type="text/css" href="../../../css/soof.css" />	<script type="text/javascript" src="../../../js/config.htm"></script>
	<script type="text/javascript" src="../../../../js/ondango_v4_libs.js"></script>
	<script type="text/javascript" src="../../../../js/ondango_v4.js"></script>
	<!--[if IE]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="https://static.ondango.com/css/ie" />
<![endif]--><meta property="og:title" content="bobble brush pink | bobble shop" />
	<meta property="og:image" content="17193/bobble_brush_018764_x2_white_pink_small_rgb_m.jpg" />
	<meta property="og:type" content="product" />
	<meta property="og:description" content="
	The best fitted and colored tshirts in kenya

	
	Get the best tasting water at the IHUB nairobi for fabulous discounts
" />
</head>
<body>

<div id="fb-root"></div>
<script type="text/javascript">
//<![CDATA][
	// Facebook
	window.fbAsyncInit = function () {
		FB.init ({
			appId: 163240657148683,
			status: true,
			cookie: true,
			oauth: true,
			channelUrl: "shop/app/webroot/channel.html",
			xfbml: true
		});

		FB.Canvas.setSize ();
	};

	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s);js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk')
	);
//]]>
</script>

<div id="main_container">
	<div id="site">
		<header>

			
		<section class="header small">
		
		<div class="title">
			<h1>Kenyan Tshirt shop</h1>

						<p></p>
		  </div>

	
		
<div class="go-to-cart">
	
	
	</div> <!-- /.go-to-cart -->

		<div class="clr"><!-- --></div>
	</section> <!-- /.header -->
</header>

<nav>
	<ul>
		<li><a href="../../../bobble-shop.htm" class="js-loading">Home</a></li>
						<li class="separator"><!-- --></li>
						<li class="categories-wrapper">
							<div class="select-category"><span>Kenyan white tshirt 1</span> <em><!-- --></em></div>
							<ul class="categories">
								<li><a href="../../../category/bobble-shop/bobble.htm" class="js-loading selected">Tshirts</a></li><li><a href="../../../category/bobble-shop/others.htm" class="js-loading">Caps</a></li><li><a href="../../../category/bobble-shop/filter.htm" class="js-loading">Tshirts and Caps</a></li>
							</ul>
						</li><li class="separator"><!-- --></li><li>Kenyan white tshirt</li>	</ul>
	<div class="clr"><!-- --></div>
</nav>


<div class="fan-discount-banner">
	<div class="icon"><!-- --></div>
	<div class="inner-box small">
		<h6>Special fan discount!</h6>

		<p id="fanDiscountMsg">
			<span id="fanDiscountDynMsg">
						Click on the Like button to become a fan and get 10% off on your purchase. 
						</span>

						Hurry up, only the next buyer will get the discount!					</p>
	</div>
	
	<div class="call-to-action">
		<div>	<div class="fb-like" data-href="https://www.facebook.com/NaiElectronics" data-send="false" data-width="90" data-show-faces="false"></div>
					</div>
	</div>

	<div class="clr"><!-- --></div>
</div> <!-- /.fan-discount-banner -->

<article class="product-view">
	<form method="post" action="../../../cart.php" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST" /></div>		<input type="hidden" name="data[Product][id]" value="17193" id="ProductId" />		<input type="hidden" name="data[Product][slug]" value="bobble-brush-pink" id="ProductSlug" />	
		<input type="hidden" name="data[Product][title]" value="bobble brush pink" id="ProductTitle" />		<input type="hidden" name="data[Product][price]" value="3.99" id="ProductPrice" />		<input type="hidden" name="data[Shop][Currency][code]" value="EUR" id="ShopCurrencyCode" />		<input type="hidden" name="data[Product][add_to_cart]" value="1" id="ProductAddToCart" />	
			<input type="hidden" name="data[Shop][id]" value="1456" id="ShopId" />		<input type="hidden" name="data[Shop][slug]" value="bobble-shop" id="ShopSlug" />
		<div class="col-right">
			
			<div class="fb-box title-box">
				<div class="fb-box-inner">
					<h1>Kenyan white tshirt 1</h1>

					

					
					<div class="variations">					
						<input type="hidden" name="data[ProductVariation][id]" value="52839" id="ProductVariationId" /><div class="input select product-variation" id=""><label for=""> Kenyan tshirt size :</label><select id="" class="product-variation-select"><option value="52839" selected>small&nbsp; </option><option value="52840">large&nbsp; </option></select></div>			
								</div>

					<div class="prices">
						<dl>
							<dt>Price</dt>
							<dd>
								
								Ksh3990							</dd>
						</dl>

												<dl>
							<dt>Fan-Price</dt>
							<dd>
								Ksh3,59							</dd>
						</dl>
											</div>

					<p class="taxes-info">
						incl. VAT, <a href="bobble-brush-pink.htm#shipping" class="shipping-btn" data-pos="above">shipping</a> not incl.<br />
						<a href="bobble-brush-pink.htm#shipping" class="shipping-btn">Shipping duration</a>					</p>
					<div class="clr"><!-- --></div>
				</div>

				<div class="button-box">
					<input class="button add-to-cart js-loading" type="submit" value="Add to cart" />				</div>
			</div> <!-- /.fb-box -->

			<div class="fb-box">
				<div class="fb-box-inner">
					<h2>Description</h2>

					<div class="description">

		<div class="long">
			<p>
	The best fitted and colored tshirts in kenya</p>
<p>
	<br />
	A tshirt that is in season anytime....</p>

		</div></div>
				</div>
			</div> <!-- /.fb-box (Description) -->

			<div class="fb-box">
				<div class="fb-box-inner">
											<h2>Payment methods</h2>
					
<ul><li>PayPal</li><li>Coop bank- mobile money</li><li>Equity EAZZY 24/7</li><li>Mpesa,AIRTEL nd YUcash</li></ul>

<p class="mar-top-l">
	<strong>Product can be picked up at:</strong><br />

		Local G4S pick-up or Office<br />
All over KENYA<br />
	
		20457-00200
	
		KENYA</p>

<ul class="payment-icons"><li class="icon-paypal"><!-- --></li></ul>

					<h2 class="mar-top-xl">Shipping</h2>
					
<div class="shipping-price">
<div class="price-label">Kenya</div>
	<div class="price">Ksh3,90</div>
	<div class="clr"><!-- --></div>

	<div class="additional-price-label">Shipping cost for additional</div>
	<div class="additional-price">Ksh0,00</div>
	<div class="clr"><!-- --></div>

	<div class="brazil-info hidden">Shipping costs will be calculated after entering your address</div>
</div>


			<p>Free shipping for purchases of Ksh25,00 or more.</p>

	

		<div class="shipping-details"><p>
	Shipping 2-3 days</p>
<p>
	*Delivery times may be  changed without notice</p>
</div>
					</div>

				<div class="button-box">
					<input class="button add-to-cart js-loading" type="submit" value="Add to cart" />				</div>
			</div> <!-- /.fb-box (Payment options & Shipping) -->
		</div> <!-- /.col-right -->
	</form>

	<div class="col-left">
				
<div class="fb-box ui-gallery">
	<a class="img large-btn clr" href="pink.htm#" data-src-xl="17193/bobble_brush_018764_x2_white_pink_small_rgb_xxl.jpg"><img src="../../../../15370/will_barras_03_l.jpg" class="large" alt="" /></a><a href="bobble-brush-pink.htm" class="img thumb-btn" data-src-l="17193/bobble_brush_018764_x2_white_pink_small_rgb_l.jpg" data-src-xl="17193/bobble_brush_018764_x2_white_pink_small_rgb_xxl.jpg">
	<img src="../../../../15370/will_barras_03_2_s.jpg" alt="bobble brush pink" class="thumb" /></a><a href="bobble-brush-pink.htm#" class="img thumb-btn" data-src-l="17193/bobble_brush_018764_x2_white_blue_small_rgb_l.jpg" data-src-xl="17193/bobble_brush_018764_x2_white_blue_small_rgb_xxl.jpg"><img src="../../../../15370/will_barras_03_s.jpg" alt="bobble brush pink" class="thumb" /></a></div>		
		<div class="fb-box">
	
		<div class="social-plugins">

				<div class="share-link left mar-rig-m">
			<a class="sl-btn" href="http://bit.ly" target="_blank">
				<em></em>Share link			</a>
		</div>

				<div class="left mar-rig-m">
			
		</div>

				<div class="left mar-rig-m">
			  <div class="fb-like" data-href="https://www.facebook.com/NaiElectronics" data-send="false" data-width="390" data-show-faces="false"></div>
		</div>

		<div class="clr"><!-- --></div>
	</div>

	<div class="social-plugins last-elem">

				<div class="left mar-rig-m">
			<a href="https://twitter.com/share" 
				data-url="http://bit.ly/" 
				data-via="Ondango" 
				data-count="none" 
				data-text="Check this out: Ihub bubble  brush pink (Ksh 3,90)" 
				class="twitter-share-button left">Tweet
			</a>
		</div>

				<div class="left mar-rig-m">
			
		</div>


		

		

		<div class="clr"><!-- --></div>
	</div>
	</div> <!-- /.fb-box (Social Plugin's) -->

		<div class="fb-box">
			<h2 class="comments">Comments</h2>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=163240657148683";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><fb:comments href="https://www.facebook.com/NaiElectronics" num_posts="2" width="390"></fb:comments>
			
		</div> <!-- /.fb-box (Comments) -->
	</div> <!-- /.col-left -->

	<div class="clr"><!-- --></div>
</article>					
		



<footer>
	<ul class="seals">
	
		<li><span class="ssl-icon" title="SSL Secure Shop">SSL Secure Shop</span></li>
	</ul>
	
	
	<ul class="navi">
	<li><a href="shop/product/bobble-shop/17193/bobble-brush-pink.htm#imprint" class="legal-btn">Imprint</a></li><li>·</li><li><a href="shop/product/bobble-shop/17193/bobble-brush-pink.htm#privacy_policy" class="legal-btn">Privacy Policy</a></li><li>·</li>		<li><a href="shop/product/bobble-shop/17193/bobble-brush-pink.htm#shipping-details" class="shipping-btn-footer">Shipping</a></li>
	</ul>
	

		<ul class="ondango">
		<li>
			<span>Powered by:</span> Social Buy -Your  facebook shopping experience 
		</li>
		<li><a href="#" target="_blank">Get your own Shop</a></li>
	</ul>
	</footer>


<script type="text/javascript">
//<![CDATA[

$(document).ready (function ()
{
			});

// Twitter
!function(d,s,id){
	var js,fjs=d.getElementsByTagName(s)[0];
	if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}
}(document,"script","twitter-wjs");

//]]>
</script>
<script type="text/javascript" src="#"></script>

		<div class="clr"><!-- --></div>
	</div>

	<div id="fb-loading-box">
		<p>Please wait while we process your order...</p>
	</div>
	
	</div>





	<script type="text/javascript" src="js/webtrekk_v3.js"></script>
<script type="text/javascript">
//<![CDATA][

	// Google analytics
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-21629519-1']);
	_gaq.push(['_trackPageview']);
	_gaq.push(['_anonymizeIp']);

	
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
//]]>
</script>

		
	
	<script type="text/javascript">
//<![CDATA[

			var pageConfig = {
				linkTrack:	"link",		// Activate Link Tracking [link or standard]
				heatmap:	"1",		// Activate Heatmap Tracking [1 = on | 0 = off]
				form:		"1",		// Activate Form Tracking [1 = on | 0 = off]
				contentId:	""
			};
			var wt = new webtrekkV3( pageConfig );
			
			

			wt.sendinfo( {"contentId":"Ondango.bobble-shop.bobble.product-view","contentGroup":{"1":"bobble-shop","2":"bobble","10":"product-view"},"productStatus":"view","productQuantity":"1","product":"17193","productCost":"3.99","customEcommerceParameter":{"4":"EUR"},"productCategory":{"1":"bobble-shop","2":"bobble brush pink"}} );
		
//]]>
</script>
	<no<div style="position: absolute; width: 1px; height: 1px; overflow-x: hidden; overflow-y: hidden; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; top: 0px; left: -99999em; background-color: rgb(255, 255, 255); "></div><div class="a11y-hidden" role="alert" style="position: absolute; width: 1px; height: 1px; overflow-x: hidden; overflow-y: hidden; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; top: 0px; left: -99999em; display: none; " aria-hidden="true"></div>
	<div class="a11y-hidden" style="position: absolute; width: 1px; height: 1px; overflow: hidden;margin: 0; padding: 0;top: 0;left: -99999em;"><div aria-live="polite" relevant="additions text"></div> 
</div><form role="presentation" action="#" class="aural" style="position: absolute; width: 1px; height: 1px; overflow: hidden;margin: 0; padding: 0;top: 0;left: -99999em;"><input name="sr-update" id="sr-update" type="hidden" value="0"></form><div id="ui-img-xl-box" style="display: none; ">	<div class="img-xl-gallery">		<div class="xlarge-boxes">	 		<div class="xlarge-box"> 				<img src="../../../../15370/will_barras_03_xxl.jpg" class="xlarge" alt=""> 			</div>		
	</div>	</div>	<div class="xlarge-box-video"></div>	<div class="button-box"><a href="#" class="button">Close</a></div></div><div id="cbOpts_1349530669441" class="ui-opts" style="width: 133px; "><div class="cb-scroll-box"><ul><li class="option selected" data-value="52839">Blau  </li><li class="option" data-value="52840">Pink  </li></ul></div></div></body></html>script><div><img src="http://q3.webtrekk.net/980157259404316/wt.pl?p=322,0" height="1" width="1" alt="" /></div></noscript>
    
</body>
</html>
