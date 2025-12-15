<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php 
global $themeum_options;
global $woocommerce; 
?>

<head>
    <!-- Microsoft Ads tracker added by Hootan-->
    <script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"97118935", enableAutoSpaTracking: true};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>
    <!-- ENd Microsoft Ads Tracker -->
    
     <!-- Microsoft Ads tracker for Survey Page added by Hootan-->
      <?php if (is_page('errcs')) : ?>
        <script>
        // Code in the parent page
        window.addEventListener('message', function(event) {
            if (event.origin !== "https://sm.telnet-inc.com") {
                return; // Always validate the origin, it must be the one you expect!
            }
            console.log('Received data:', event.data);
            // Process the received data here
        });

        // Add this script right after your base UET tag code
        window.uetq = window.uetq || [];
        window.uetq.push('set', '{pid: {em: event.data.email, ph: event.data.phone}});
        </script>
            <?php endif; ?>
       <!-- ENd Microsoft Ads Survey Tracker -->
       
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T5X2QM3J');</script>
<!-- End Google Tag Manager -->

	<!-- Added by Hootan -->
	<!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
 })(window,document,'script','dataLayer','GTM-54C2493');</script>
<!-- End Google Tag Manager -->
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<?php 

	if(isset($themeum_options['favicon'])){ ?>
		<link rel="shortcut icon" href="<?php echo $themeum_options['favicon']['url']; ?>" type="image/x-icon"/>
	<?php }else{ ?>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri().'/images/plus.png' ?>" type="image/x-icon"/>
	<?php } ?>

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

<!-- Added by Hootan -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DPNQ8T4GW7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DPNQ8T4GW7');
</script>
	
</head>

 <?php 

     if ( isset($themeum_options['boxfull-en']) ) {
      $layout = $themeum_options['boxfull-en'];
     }else{
        $layout = 'fullwidth';
     }
 ?>
<!-added by Hootan-->
			<!-- Google tag (gtag.js) -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16541196103">
                </script>
                <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag('js', new Date());
                    gtag('config', 'AW-16541196103');
                </script>
            <!-- Google tag (gtag.js) END -->
            
<body <?php body_class( $layout.'-bg' ); ?>>

	<!-- Added by Hootan -->
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54C2493"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
<?php
    if( $themeum_options['hide-cart'] && $themeum_options['hide-saerch'] ){
        $ol_menu_class = 'col-sm-8';
    }else{
        $ol_menu_class = 'col-sm-8';
    }
 ?>

    
	<div id="page" class="hfeed site <?php echo $layout; ?>" >
		<header id="masthead" class="site-header header" role="banner">
        <div class="home-search">
        <div class="container"><?php echo get_search_form();?></div>
        <a href="#" class="hd-search-btn-close"><i class='fa fa-close'></i></a>
        </div>
			<div id="header-container" class="containerh">
				<div id="navigation">
                    <div class="row">

                        <div class="col-sm-3">
        					<div class="navbar-header">
        						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        							<span class="icon-bar"></span>
        							<span class="icon-bar"></span>
        							<span class="icon-bar"></span>
        						</button>
        	                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
        	                    	<h1 class="logo-wrapper">
        		                    	<?php
        									if (isset($themeum_options['logo']))
        								   {
        								   		
        										if($themeum_options['logo-text-en']) {
        											echo $themeum_options['logo-text'];
        										}
        										else
        										{
        											if(!empty($themeum_options['logo'])) {
        											?>
        												<!--<img class="enter-logo img-responsive" src="<?php echo home_url(); ?>/wp-content/uploads/2023/05/Telnet-Logo-2023.svg" alt="" title="" style="height:100px; width:300px">
        												-->
        												<img src="<?php echo home_url(); ?>/wp-content/uploads/2023/05/Telnet-Logo-2023.svg" style="height:75px;padding:10px 0 !important;" >
        											<?php
        											}else{
        												echo get_bloginfo('name');
        											}
        										}
        								   }
        									else
        								   {
        								    	echo get_bloginfo('name');
        								   }
        								?>
        		                    </h1>
        		                </a>
        					</div>
                        </div>

                        <div id="main-menu" class="<?php echo $ol_menu_class; ?> hidden-xs">
                            <?php 
                            if ( has_nav_menu( 'primary' ) ) {
                                wp_nav_menu(  array(
                                    'theme_location' => 'primary',
                                    'container'      => '', 
                                    'menu_class'     => 'nav',
                                    'fallback_cb'    => 'wp_page_menu',
                                    'depth'          => 3,
                                    'walker'         => new Megamenu_Walker()
                                    )
                                ); 
                            }
                            ?>
                        </div><!--/#main-menu-->
                        
                        <?php if( isset($themeum_options['hide-saerch']) || isset($themeum_options['hide-cart']) ){ ?>  
                        <div class="col-sm-1 cart-busket">
                            <?php if(isset($themeum_options['hide-cart']) && !$themeum_options['hide-cart']){ ?>
                                <?php if($woocommerce) { ?>
                                <div class="woo-cart">
                                    <a href="<?php echo $woocommerce->cart->get_cart_url(); ?>">
                                        <?php
                                            $has_products = '';
                                            if($woocommerce->cart->cart_contents_count) {
                                                $has_products = 'cart-has-products';
                                            }
                                        ?>
                                        <span class="woo-cart-items">
                                            <span class="<?php echo $has_products; ?>"><?php echo $woocommerce->cart->cart_contents_count; ?></span>
                                        </span>
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                    <?php the_widget( 'WC_Widget_Cart', 'title= ' ); ?>
                                </div>
                                <?php } ?>
                            <?php } ?>

                            <?php if(isset($themeum_options['hide-saerch']) && !$themeum_options['hide-saerch']){ ?>
                            <span class="home-search-btn">
                                <a href="#" class="hd-search-btn"><i class="fa fa-search"></i></a>
                            </span>
                            <?php }  ?>
                        </div>
                        <?php } ?>

                        <div id="mobile-menu" class="visible-xs">
                            <div class="collapse navbar-collapse">
                                <?php 
                                if ( has_nav_menu( 'primary' ) ) {
                                    wp_nav_menu( array(
                                        'theme_location'      => 'primary',
                                        'container'           => false,
                                        'menu_class'          => 'nav navbar-nav',
                                        'fallback_cb'         => 'wp_page_menu',
                                        'depth'               => 3,
                                        'walker'              => new wp_bootstrap_mobile_navwalker()
                                        )
                                    ); 
                                }
                                ?>
                            </div>
                        </div><!--/.#mobile-menu-->
                    </div><!--/.row--> 
				</div><!--/.container--> 
			</div>
		</header><!--/#header-->

