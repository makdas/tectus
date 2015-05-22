<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Tectus
 */
?>

	</div><!-- #content -->

	<div class="footerblocks">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 address">
					<h4>Address</h4>
					<div class="detail">
							Herengracht 576<br>1017 CJ Amsterdam
					</div>
				</div>
				<div class="col-sm-4 contact">
					<h4>CONTACT DETAILS</h4>
					<div class="detail">
							<span>mail</span> <a href="mailto:info@tectus-rs.nl">info@tectus-rs.nl</a><br>
							<span>phone</span>  +31 (0)2 723 5846<br>
							<span>fax</span> +31 (0)2723 5848
					</div>

				</div>
				<div class="col-sm-4 newsletter">
					<h4>SUBSCRIBE TO OUR STOCK UPDATE NEWSLETTER</h4>
					<div class="detail">
							
						<!-- Begin MailChimp Signup Form -->
						<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">

						<div id="mc_embed_signup">
							<form action="//digitalbeyond.us10.list-manage.com/subscribe/post?u=c042f995530cc2460252ef825&amp;id=07f36318f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<div id="mc_embed_signup_scroll">
									<div class="mc-field-group">
										<input type="email" value="" name="EMAIL" placeholder="Email Adress" class="required email" id="mce-EMAIL">
									</div>
									<div id="mce-responses" class="clear">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
									<div style="position: absolute; left: -5000px;"><input type="text" name="b_c042f995530cc2460252ef825_07f36318f0" tabindex="-1" value=""></div>
									<div class="clear"><input type="submit" value="Subscribe Me" name="subscribe" id="mc-embedded-subscribe" class="mcbutton"></div>
								</div>
							</form>
						</div>
						<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
						<!--End mc_embed_signup-->


					</div>

				</div>
			</div>

		</div>

	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="copyright">All Rights Reserved - <b>Tectus</b>  &copy 2015</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
