<?php global $themeum_options; ?>
<div class="jobpg" style="margin-bottom:80px">
    <style>
        .jobpg {
            display: none;
        }

        .page-id-1200  .jobpg {
            display: block;
        }

        .jobpg {
            margin-bottom: 100px;
        }
    </style>

    <div class="container">
        <!--
        <script type="text/javascript" src="https://jobsapi.ceipal.com/APISource/widget.js" data-ceipal-api-key="RlZ3WU1UclZjcWdadlgyOFJqbTBrZz09"></script>
        -->
            <div id="mainbottom">
                <div class="mainbottombox float-left width100">
                    <div class="module mod-box   first last">
	                    <div class="box-t1">
		                    <div class="box-t2">
			                    <div class="box-t3"></div>
		                    </div>
	                    </div>
	
                        <div class="box-1">
                            <div class="box-2">
                                <div class="box-3 deepest" style="min-height: 1000px;">
								
				                    <script language="javascript" type="text/javascript">
                                        function iFrameHeight() {
                                            var h = 0;
                                            if ( !document.all ) {
                                                h = document.getElementById('blockrandom').contentDocument.height;
                                                document.getElementById('blockrandom').style.height = h + 60 + 'px';
                                            } else if( document.all ) {
                                                h = document.frames('blockrandom').document.body.scrollHeight;
                                                document.all.blockrandom.style.height = h + 20 + 'px';
                                            }
                                        }
                                    </script>

                                    <!--This section for Smart Pix - Visitor InSite. Can be deleted when the service is finished-->
                                        <script type="text/javascript" async="">
                                            var dynamicPixel = function() {
                                            var pixelURL = "https://a.remarketstats.com/px/smart/?c=24912faf6aaa9ab&seg=";
                                            var urlPath = window.location.pathname.substr(1).replace(/\/+$/, '');
                                            if (urlPath === "") { urlPath = "home"; }
                                                console.log(urlPath);
                                            var segmentValue = urlPath;
                                            var script = document.createElement('script');
                                            script.setAttribute('async', '');
                                            if (pixelURL.indexOf("seg=") === -1) {
                                            pixelURL = pixelURL + "seg=";
                                            }
                                            script.src = pixelURL + escape(segmentValue);
                                            document.body.appendChild(script);
                                            }();
                                    </script>
                                    <!--/Visitor InSite End------------------------------------------------------------------------->

                                    <iframe onload="iFrameHeight()" id="blockrandom" name="" src="https://smnew.telnet-inc.com/jobs/default.cfm?sh=0" width="100%" height="1000" scrolling="auto" align="top" frameborder="0" class="wrapper"></iframe>				
			                    </div>
		                    </div>
	                    </div>

                        <div class="box-b1">
                            <div class="box-b2">
                                <div class="box-b3"></div>
                            </div>
                        </div>
                    </div>
                </div>								
            </div>

    </div>
</div>
<!-- THIS IS FOR THE Public Safety Survey / In Building Coverage Survey  -->
<div class="pssurvey" style="margin-bottom:80px">
    <style>
        .pssurvey {
            display: none;
        }

        .page-id-2955  .pssurvey {
            display: block;
        }

        .pssurvey {
            margin-bottom: 100px;
        }
    </style>

    <div class="container">
        <!--
        <script type="text/javascript" src="https://jobsapi.ceipal.com/APISource/widget.js" data-ceipal-api-key="RlZ3WU1UclZjcWdadlgyOFJqbTBrZz09"></script>
        -->
            <div id="mainbottom">
                <div class="mainbottombox float-left width100">
                    <div class="module mod-box   first last">
	                    <div class="box-t1">
		                    <div class="box-t2">
			                    <div class="box-t3"></div>
		                    </div>
	                    </div>
	
                        <div class="box-1">
                            <div class="box-2">
                                <div class="box-3 deepest" style="min-height: 1000px;">
								
				                    <script language="javascript" type="text/javascript">
                                        function iFrameHeight() {
                                            var h = 0;
                                            if ( !document.all ) {
                                                h = document.getElementById('blockrandom').contentDocument.height;
                                                document.getElementById('blockrandom').style.height = h +60 + 'px';
                                            } else if( document.all ) {
                                                h = document.frames('blockrandom').document.body.scrollHeight;
                                                document.all.blockrandom.style.height = h + 20 + 'px';
                                            }
                                        }
                                    </script>

                                    <!--This section for Smart Pix - Visitor InSite. Can be deleted when the service is finished -- >
                                        <script type="text/javascript" async="">
                                            var dynamicPixel = function() {
                                            var pixelURL = "https://a.remarketstats.com/px/smart/?c=24912faf6aaa9ab&seg=";
                                            var urlPath = window.location.pathname.substr(1).replace(/\/+$/, '');
                                            if (urlPath === "") { urlPath = "home"; }
                                                console.log(urlPath);
                                            var segmentValue = urlPath;
                                            var script = document.createElement('script');
                                            script.setAttribute('async', '');
                                            if (pixelURL.indexOf("seg=") === -1) {
                                            pixelURL = pixelURL + "seg=";
                                            }
                                            script.src = pixelURL + escape(segmentValue);
                                            document.body.appendChild(script);
                                            }();
                                    </script>
                                    < ! --/Visitor InSite End----------------------------------------------------------------------- -->

                                    <iframe onload="iFrameHeight()" id="blockrandom" name="" src="https://smnew.telnet-inc.com/inbuildingcoveragesurvey/" width="100%" height="1300" scrolling="auto" align="top" frameborder="0" class="wrapper"></iframe>				
			                    </div>
		                    </div>
	                    </div>

                        <div class="box-b1">
                            <div class="box-b2">
                                <div class="box-b3"></div>
                            </div>
                        </div>
                    </div>
                </div>								
            </div>

    </div>
</div>
<!-- THIS IS FOR Footer  -->

    <?php if(is_active_sidebar('bottom')){ ?>
    <section id="bottom">
        <div class="container">
            <div class="bottom">
                <div class="row">
                    <?php dynamic_sidebar('bottom'); ?>
                </div>
            </div>
        </div>
  
    </section><!--/#footer -->
    <?php } ?>

    <footer id="footer">
        <div class="container">
            <div class="footer">
                <div class="copyright">
                    <div class="row">
                        <?php if (isset($themeum_options['copyright-en']) && $themeum_options['copyright-en']){?>
                            <div class="col-sm-12">
                                <?php if(isset($themeum_options['copyright-text'])) echo $themeum_options['copyright-text']; ?>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

<?php if(isset($themeum['before_body']))  echo $themeum['before_body']; ?>
<?php if(isset($themeum_options['google-analytics'])) echo $themeum_options['google-analytics'];?>

<?php wp_footer(); ?>
</body>
</html>