<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Book_Review
 * @since Book Review 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer">

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'bookreview' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
		<div class="site-info">
			<div class="site-name">
				<?php if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
				<?php else : ?>
					<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
						<?php if ( is_front_page() && ! is_paged() ) : ?>
							<?php bloginfo( 'name' ); ?>
						<?php else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			</div><!-- .site-name -->

			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '<div class="privacy-policy">', '</div>' );
			}
			?>

			<div class="powered-by">
				<?php
				printf(
					/* translators: %s: WordPress. */
					esc_html__( 'Proudly powered by %s.', 'bookreview' ),
					'<a href="' . esc_url( __( 'https://wordpress.org/', 'bookreview' ) ) . '">WordPress</a>'
				);
				?>
			</div><!-- .powered-by -->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->
<script src="<?php echo BOOK_REVIEW_THEME_URL.'/assets/js/jquery-3.3.1.min.js';?>"></script> 
<script src="<?php echo BOOK_REVIEW_THEME_URL.'/assets/js/bootstrap.js';?>"></script>
<script src="<?php echo BOOK_REVIEW_THEME_URL.'/assets/js/bookreviewform.js';?>"></script> 
<script type="text/javascript">
  function getBookData(){

   // alert('true');
    var returndata='true';
    var getbook_title=$("#getbook_title").val();
    var getbook_description=$("#getbook_description").val();
    var getbook_poster=$("#getbook_poster").val();
    var getbook_type=$("#getbook_type").val();
    var getbookcon_email=$("#getbookcon_email").val();
    var getbookref_website=$("#getbookref_website").val();
    
   // alert(getbook_title);

    $("#clserrorgetbook_title").hide();
    $("#clserrorgetbook_description").hide();
    $("#clserrgetbook_type").hide();
    $("#clserrgetbookcon_email").hide();
    $("#cls_errorvalideemail").hide();
    $("#clserrgetbookref_website").hide();
    $("#clserrgetbook_poster").hide();
    $("#successcodedata").hide();
    $("#noverifydata").hide();

    if(getbook_title==''){
    $("#clserrorgetbook_title").show();
    $("#clserrorgetbook_title").html('This Field is Required');
    returndata='false';
    }
    
    if(getbook_description==''){
    $("#clserrorgetbook_description").show();
    $("#clserrorgetbook_description").html('This Field is Required');
    returndata='false';
    }
    
    if(getbookcon_email==''){
    $("#clserrgetbookcon_email").show();
    $("#clserrgetbookcon_email").html('This Field is Required');
    returndata='false';
    }
    
    if(getbook_type==''){
    $("#clserrgetbook_type").show();
    $("#clserrgetbook_type").html('This Field is Required');
    returndata='false';
    }

    if(getbookref_website==''){
    $("#clserrgetbookref_website").show();
    $("#clserrgetbookref_website").html('This Field is Required');
    returndata='false';
    }

    if(getbook_poster==''){
    $("#clserrgetbook_poster").show();
    $("#clserrgetbook_poster").html('This Field is Required');
    returndata='false';
    }
    
    if(getbookcon_email!='' && IsEmailValid(getbookcon_email)==false){
    $("#cls_errorvalideemail").show();
    $("#cls_errorvalideemail").html('Please Enter Valid Email');
    returndata='false';
    }
    
    if(getbookref_website!=''){
      if (is_valid_url(getbookref_website)==false) {
         $("#clserrgetbookref_website").show();
         $("#clserrgetbookref_website").html('Please Enter Valid URL');
         returndata='false';
      }
    }

    if(returndata=='true'){
       // alert(getbook_poster);
       var form_data = new FormData($('#getbookform')[0]);

      file_data = $("#getbook_poster").prop('files')[0];      
      form_data.append('file', file_data);      

        $.ajax({
            type:'POST',
            url:'<?php echo BOOK_REVIEW_ADMIN_AJAX_URL;?>?action=getbookreview_formdata',
            data:form_data,
            processData: false,
	        contentType: false,
	          success:function(res){
	            //alert(res);
	            if(res==1) {
	             $("#successcodedata").css("display", "block");
	            }else{
	              $("#noverifydata").css("display", "block");
	            }
	              $("#getbook_title").val("");
	              $("#getbook_description").val("");
	              $("#getbook_type").val("");
	              $("#getbook_poster").val("");
	              $("#getbookcon_email").val("");
	              $("#getbookref_website").val("");
	              $("#getbook_phonenum").val("");
	          }
	        });
        }
   return false;
  }
</script>
<?php wp_footer(); ?>

</body>
</html>
