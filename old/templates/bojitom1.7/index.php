<?php/****************************************************#######################################################-------------------------------------------------####           BOJITOM- Version 1.7.0                ####-------------------------------------------------#### Copyright = globbersthemes.com- 2011            #### Date      = OCTOBRE 2011                        ##                     ## Author    = globbers                            #### Websites  = http://www.globbersthemes.com       ####                                                 #######################################################****************************************************/// no direct accessdefined('_JEXEC') or die('Restricted access');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>	<jdoc:include type="head" />	<?php JHTML::_('behavior.framework', true); 	$app                = JFactory::getApplication();	$templateparams     = $app->getTemplate(true)->params;	$csite_name	= $app->getCfg('sitename');	$license	= "globbersthemes.com";	?>		<?php # main width#     $mod_left = $this->countModules( 'position-6' );    $mod_right = $this->countModules( 'position-7' );    if ( $mod_left || $mod_right ) {$width = '';} else {$width = '-full';}    ?>		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/bojitom1.7/css/tdefaut.css" type="text/css" media="all" /><link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/bojitom1.7/css/joomlastyle.css" type="text/css" media="all" /><script type="text/javascript" src="templates/<?php echo $this->template ?>/js/scroll.js"></script><script type="text/javascript" src="templates/<?php echo $this->template ?>/js/cufon-yui.js"></script><script type="text/javascript" src="templates/<?php echo $this->template ?>/js/cufon-replace.js"></script><script type="text/javascript" src="templates/<?php echo $this->template ?>/js/Bebas_400.font.js"></script><script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jquery.js"></script><script type="text/javascript" src="templates/<?php echo $this->template ?>/js/modal.js"></script><script type="text/javascript" src="templates/<?php echo $this->template ?>/js/superfish.js"></script><script type="text/javascript" src="templates/<?php echo $this->template ?>/js/hover.js"></script><script type="text/javascript" src="templates/<?php echo $this->template ?>/js/slideshow.js"></script><script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jcaroussel.js"></script><link rel="icon" type="image/gif" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon.gif" />   <script type="text/javascript">        $().ready(function() {        $('#dialog').jqm();        });    </script> 		<script type="text/javascript">				        $(document).ready(function() {	    $(' .navigation ul  ').superfish({		  delay:       1000,                            		  animation:   {opacity:'show',height:'show'},  		  speed:       'normal',                          		  autoArrows:  false,                           		  dropShadows: false                            	   });	   });    </script> 	</head><body>    <div id="header">        <div class="pagewidth">		    <div id="header-left">			    <div id="deco">				</div>				    <div id="tool">							<a href="#" class="jqModal">Users &nbsp; Area</a>                            <div class="jqmWindow" id="dialog">                                <a href="#" class="jqmClose">Close</a>                                    <jdoc:include type="modules" name="login" />                             </div>					</div>			</div>			    <div id="sitename">				    <a href="index.php"><img src="templates/<?php echo $this->template ?>/images/logo.png" width="271" height="119" alt="logotype" /></a>				</div>				    <div id="header-right">					    <div id="menu-vertical">						    <jdoc:include type="modules" name="position-8" />						</div>						<div class="clr"></div>						    <div id="search">							    <jdoc:include type="modules" name="position-0" />							</div>					</div>		</div>	</div>	    <div class="pagewidth">		    <div id="topmenu">		        <div class="navigation">                    <jdoc:include type="modules" name="position-1" />                </div>			</div>			    <div id="slide">		            <div id="slideshow-w">				        <div id="slideshow">				            <img src="templates/<?php echo $this->template ?>/images/slide1.jpg" alt="image1" />					        <img src="templates/<?php echo $this->template ?>/images/slide2.jpg" alt="image2" />					        <img src="templates/<?php echo $this->template ?>/images/slide3.jpg" alt="image3" />				        </div>			        </div>	            </div>			        <script type="text/javascript" charset="utf-8">						$(document).ready(function(){						$("#slideshow").slideshow({			                pauseSeconds:5,			                height:365, 						    fadeSpeed:0.5,							width:920, 			                caption: false		                });		            });				    </script>					<div id="main<?php echo $width; ?>">						<jdoc:include type="component" />					</div>										<!--COLONNE-->	                <?php if($this->countModules('position-6')) : ?>	                <div id="left">	                    <jdoc:include type="modules" name="position-6" style="xhtml" />	                </div> 	                <?php endif; ?>				                <?php if($this->countModules('position-7')) : ?>	                <div id="right">	                    <jdoc:include type="modules" name="position-7" style="xhtml" />	                </div> 	                <?php endif; ?>	            		</div>		        <!--FIN COLONNE-->		    <div id="footer">		        <div class="pagewidth">				    <div class="ftb">                            Copyright&copy; <?php echo date( 'Y' ); ?> <?php echo $csite_name;?> .&nbsp;design by globbers for <a target=" _blank"  href= "http://www.globbersthemes.com" ><?php echo $license;?></a>                        </div>                        <div id="top">                            <div class="top_button">                                <a href="#" onclick="scrollToTop();return false;">						        <img src="templates/<?php echo $this->template ?>/images/top.png" width="30" height="30" alt="top" /></a>                            </div>					    </div> 			    </div>            </div>	                               </body></html>