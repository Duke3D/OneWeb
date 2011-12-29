<?php defined('_JEXEC') or die;
/* =====================================================================
Template:	OneWeb for Joomla 1.7						            
Author: 	Seth Warburton - Internet Inspired! - @nternetinspired 				            
Version: 	0.1 											             
Created: 	Dec 2011                                                    
Copyright:	Seth Warburton - (C) 2011 - All rights reserved		
License:	GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html							             
Sources:	http://html5boilerplate.com/
			http://stuffandnonsense.co.uk/projects/320andup/
			http://construct-framework.com/					
/* ===================================================================== */

// Load template logic
include_once (dirname(__FILE__).DS.'functions/logic.php');  
?>
<!doctype html>
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<jdoc:include type="head" />
</head>

<body class="<?php echo htmlspecialchars($bodyFontFamily); ?> clearfix">

<div id="logoRow">
    <div class="container">
         <div class="row clearfix">
         	<a href="<?php echo $this->baseurl ?>/" title="<?php echo $app->getCfg('sitename');?>">
            	<header id="logo" class="<?php echo htmlspecialchars($logoCols); ?>col">	
                    <div id="logotext"><?php echo $app->getCfg('sitename');?></div>     
             	</header>
             </a> 
              <?php if($this->countModules('tagline')) : ?>
                    <div id="tagline" class="<?php echo htmlspecialchars($taglineCols); ?>col">
                        <jdoc:include type="modules" name="tagline" style="XHTML" />
                    </div>
              <?php endif; ?>	
                
              <?php if($this->countModules('search')) : ?>
                  <div role="search" id="search" class="<?php echo htmlspecialchars($searchCols); ?>col last">
                      <jdoc:include type="modules" name="search" style="XHTML" />
                  </div>
              <?php endif; ?> 
              		
         </div>	
    </div>  
</div>

<?php if($this->countModules('menu')) : ?>
<header id="navRow">
    <div class="container">
        <div class="row clearfix">
                  
            <div id="menuButton">
                <a id="mobileMenu" class="button mobile">Menu</a>
                    <nav id="menu" role="navigation" class="twelvecol clearfix">
                        <jdoc:include type="modules" name="menu" style="XHTML" />
                    </nav>
            </div>
            
        </div>
    </div>
</header>
<?php endif; ?>

<?php if($this->countModules('breadcrumbs')) : ?>
<header id="breadcrumbRow">
    <div class="container">
        <div class="row clearfix">
                  
            <nav id="breadcrumbs" role="navigation" class="twelvecol clearfix">
                <jdoc:include type="modules" name="breadcrumbs" style="XHTML" />
            </nav>
            
        </div>
    </div>
</header>
<?php endif; ?>

<?php if ($bannerModules > "0") : ?>
<header id="bannerRow">
    <div class="container">
         <div class="row clearfix">
              
              <?php if($this->countModules('banner1')) : ?>
                <div role="banner" id="banner1" class="<?php echo htmlspecialchars($banner1Cols); ?>col">
                    <jdoc:include type="modules" name="banner1" style="XHTML" />
                </div>
            <?php endif; ?>	
            
            <?php if($this->countModules('banner2')) : ?>
                <div role="banner" id="banner2" class="<?php echo htmlspecialchars($banner2Cols); ?>col last">
                    <jdoc:include type="modules" name="banner2" style="XHTML" />
                </div>
            <?php endif; ?>	
            	
         </div>	
    </div>  
</header>
<?php endif; ?>

<?php if ($aboveModules > "0") : ?>
<div id="aboveRow">
      <div class="container">
          <div class="row clearfix">
              <?php if($this->countModules('above1')) : ?>
              <div id="above1" class="<?php echo htmlspecialchars($above1Cols); ?>col"> 
                      <jdoc:include type="modules" name="above1" style="XHTML" />
              </div>
              <?php endif; ?>
                                  
              <?php if($this->countModules('above2')) : ?>
              <div id="above2" class="<?php echo htmlspecialchars($above2Cols); ?>col">
                      <jdoc:include type="modules" name="above2" style="XHTML" />
              </div>
              <?php endif; ?>
                                  
              <?php if($this->countModules('above3')) : ?>
              <div id="above3" class="<?php echo htmlspecialchars($above3Cols); ?>col">
                      <jdoc:include type="modules" name="above3" style="XHTML" />
              </div>
              <?php endif; ?>
                                  
              <?php if($this->countModules('above4')) : ?>
              <div id="above4" class="<?php echo htmlspecialchars($above4Cols); ?>col last">
                      <jdoc:include type="modules" name="above4" style="XHTML" />
              </div>
              <?php endif; ?>
          </div>	
      </div>
</div>
<?php endif; ?>

<?php if($this->countModules('breadcrumbs')) : ?>
<div id="breadcrumbRow">
	<div class="container">
		<div class="row clearfix">
        
               <div id="breadcrumbs" class="twelvecol last">
                      <jdoc:include type="modules" name="breadcrumbs" style="XHTML" />
               </div>	
            
		</div>
	</div>
</div>  
<?php endif; ?> 

<div id="mainRow">
      <div class="container">
          <div class="row clearfix">                                
                      
              <?php if($this->countModules('left')) : ?>
              <aside id="left" class="<?php echo htmlspecialchars($leftCols); ?>col clearfix" role="complementary">
                      <jdoc:include type="modules" name="left" style="XHTML" />
              </aside>
              <?php endif; ?>     
              
              <div id="main" role="main" class="<?php echo htmlspecialchars($mainCols); ?>col clearfix">
                     <jdoc:include type="message" />
              <jdoc:include type="component" />
              </div>   
              
              <?php if($this->countModules('right')) : ?>
              <aside id="right" class="<?php echo htmlspecialchars($rightCols); ?>col last clearfix" role="complementary">
                      <jdoc:include type="modules" name="right" style="XHTML" />
              </aside>
              <?php endif; ?>
              
          </div>	
      </div>                			
</div>

<?php if ($belowModules > "0") : ?>
<div id="belowRow">
		<div class="container">
        	<div class="row clearfix">
				<?php if($this->countModules('below1')) : ?>
				<div id="below1" class="<?php echo htmlspecialchars($below1Cols); ?>col"> 
						<jdoc:include type="modules" name="below1" style="XHTML" />
				</div>
				<?php endif; ?>
									
				<?php if($this->countModules('below2')) : ?>
				<div id="below2" class="<?php echo htmlspecialchars($below2Cols); ?>col">
						<jdoc:include type="modules" name="below2" style="XHTML" />
				</div>
				<?php endif; ?>
									
				<?php if($this->countModules('below3')) : ?>
				<div id="below3" class="<?php echo htmlspecialchars($below3Cols); ?>col">
						<jdoc:include type="modules" name="below3" style="XHTML" />
				</div>
				<?php endif; ?>
									
				<?php if($this->countModules('below4')) : ?>
				<div id="below4" class="<?php echo htmlspecialchars($below4Cols); ?>col last">
						<jdoc:include type="modules" name="below4" style="XHTML" />
				</div>
				<?php endif; ?>
			</div>	
		</div>
</div>
<?php endif; ?>

<?php if ($bottomModules > "0") : ?>
<div id="bottomRow">
		<div class="container">
        	<div class="row clearfix">
				<?php if($this->countModules('bottom1')) : ?>
				<div id="bottom1" class="<?php echo htmlspecialchars($bottom1Cols); ?>col"> 
						<jdoc:include type="modules" name="bottom1" style="XHTML" />
				</div>
				<?php endif; ?>
									
				<?php if($this->countModules('bottom2')) : ?>
				<div id="bottom2" class="<?php echo htmlspecialchars($bottom2Cols); ?>col">
						<jdoc:include type="modules" name="bottom2" style="XHTML" />
				</div>
				<?php endif; ?>
									
				<?php if($this->countModules('bottom3')) : ?>
				<div id="bottom3" class="<?php echo htmlspecialchars($bottom3Cols); ?>col">
						<jdoc:include type="modules" name="bottom3" style="XHTML" />
				</div>
				<?php endif; ?>
									
				<?php if($this->countModules('bottom4')) : ?>
				<div id="bottom4" class="<?php echo htmlspecialchars($bottom4Cols); ?>col last">
						<jdoc:include type="modules" name="bottom4" style="XHTML" />
				</div>
				<?php endif; ?>
			</div>	
		</div>
</div>
<?php endif; ?>

<?php if($this->countModules('mobile-menu')) : ?>
<div id="footerNav" class="mobile">
		<div class="container">
        	<div class="row clearfix">  				                
                
					<nav id="footerMenu" role="navigation" class="clearfix" >
						<jdoc:include type="modules" name="mobile-menu" style="XHTML" />
					</nav>
                        	               
			</div>	
		</div>
</div>
<?php endif; ?>

<?php if ($footerModules > "0") : ?>
<footer role="contentinfo">	
    	<div class="container">
        	<div class="row clearfix">
            
			<?php if($this->countModules('footer1')) : ?>
			<div id="footer1" class="<?php echo htmlspecialchars($footer1Cols); ?>col"> 
            	<jdoc:include type="modules" name="footer1" style="XHTML" />
			</div>
			<?php endif; ?>
									
			<?php if($this->countModules('footer2')) : ?>
			<div id="footer2" class="<?php echo htmlspecialchars($footer2Cols); ?>col">
                <jdoc:include type="modules" name="footer2" style="XHTML" />
			</div>
			<?php endif; ?>	
            
            <?php if($this->countModules('footer3')) : ?>
			<div id="footer3" class="<?php echo htmlspecialchars($footer3Cols); ?>col">
                <jdoc:include type="modules" name="footer3" style="XHTML" />
			</div>
			<?php endif; ?>		
            
            <?php if($this->countModules('footer4')) : ?>
			<div id="footer4" class="<?php echo htmlspecialchars($footer4Cols); ?>col last">
                <jdoc:include type="modules" name="footer4" style="XHTML" />
			</div>
			<?php endif; ?>	
            			
            </div>	
		</div>				
</footer>
<?php endif; ?>

<footer role="contentinfo">	
    	<div class="container">
        	<div class="row clearfix">      
            <div id="credit" class="last">&copy; <?php echo date("Y"); ?> <a href="http://internet-inspired.com" title="Internet Inspired - Professional Joomla! Websmithing">Internet Inspired!</a></div>
            </div>
		</div>				
</footer>

<jdoc:include type="modules" name="debug"/>

<!-- Scripts -->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/scripts.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/plugins.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/mylibs/helper.js"></script>

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/imgsizer.js"></script>
<![endif]-->

<script>
// iOS scale bug fix
MBP.scaleFix();

// Respond.js
Modernizr.load({
	test : Modernizr.mq('all and (min-width: 0px)'),
	nope : ['<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/respond.min.js']
});
</script>

<?php if ($analytics != "UA-XXXXX-X") : ?>
<!-- http://mths.be/aab -->
<script>
var _gaq=[['_setAccount','<?php echo htmlspecialchars($analytics); ?>'],['_trackPageview']]; 
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

<noscript>JavaScript is unavailable or disabled; so you are probably going to miss out on a few things. Everything should still work, but with a little less pzazz!</noscript>
</body>
</html>