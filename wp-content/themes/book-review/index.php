<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package WordPress
* @subpackage Book_Review
* @since Book Review 1.0
*/

get_header();
 $file_accept='accept="image/png,image/gif,image/jpeg"'; ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
<header class="page-header alignwide">
<h1 class="page-title"><?php single_post_title(); ?></h1>
</header><!-- .page-header -->
<?php endif; ?>
<div class="entry-content">

<div class="joiclb-sec">
   <div class="container">
		<div class="joinclb-form">
		        <form action="javascript:void(0);" method="post" name="getbookform" id="getbookform" enctype="multipart/form-data" >
		            <div class="joinclbfrm-item">
		                <h4>Book Details</h4>
		                <div class="row">
		                    <div class="col-sm-6 col-md-6">
		                        <div class="form-group">
		                        	<label>Title</label>
		                            <input type="text" class="form-control" name="getbook_title" id="getbook_title">
		                            <span class="clserrmsg dis-none" id="clserrorgetbook_title" style="color: red;"></span>
		                        </div>
		                    </div>
		                   
		                    <div class="col-sm-6 col-md-6">
								<div class="form-group">
									<label>Description</label>
									<textarea class="form-control" name="getbook_description" id="getbook_description"></textarea>
									 <span class="clserrmsg dis-none" id="clserrorgetbook_description" style="color: red;"></span>
								</div>
		                    </div>
		                    <div class="col-sm-6 col-md-6">
		                        <div class="form-group">
		                        <label>Book Type</label>
  	        	                   <select class="form-control" name="getbook_type" id="getbook_type">
		                              <?php foreach( get_terms( 'books_category', array( 'hide_empty' => false, 'parent' => 0,'order' => 'ASC' ) ) as $parent_term ) {?>
		                                <option value="<?php echo $parent_term->name;?>">
		                                <?php echo $parent_term->name;?>
		                                </option>
		                              <?php } ?>
		                            </select>
		                            <span class="clserrmsg dis-none" name="clserrgetbook_type" id="clserrgetbook_type" style="color: red;" ></span>
		                        </div>
		                    </div>
		                    <div class="col-sm-6 col-md-6">
		                        <div class="form-group">
		                            <div class="upload-btn-wrapper">
		                              <div class="upldlble">Upload Book Poster</div>
		                              <input <?php echo $file_accept;?> type="file" class="uploadfled" name="getbook_poster" id="getbook_poster" />
		                              <span class="clserrmsg dis-none" name="clserrgetbook_poster" id="clserrgetbook_poster" style="color: red;" ></span>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-sm-6 col-md-6">
		                        <div class="form-group">
       		                        <label>Email</label>
		                            <input type="email" class="form-control" name="getbookcon_email" id="getbookcon_email" >
		                            <span class="clserrmsg dis-none" id="clserrgetbookcon_email" style="color: red;" ></span>
		                            <span class="clserrmsg dis-none" id="cls_errorvalideemail" style="color: red;"></span>
		                        </div>
		                    </div>
		                    <div class="col-sm-6 col-md-6">
		                        <div class="form-group">
		                            <label>Website or social media page</label>
		                            <input type="text" class="form-control" name="getbookref_website" id="getbookref_website" >
		                            <span class="clserrmsg dis-none" id="clserrgetbookref_website" style="color: red;" ></span>
		                        </div>
		                    </div>
		                    <div class="col-sm-6 col-md-6">
		                        <div class="form-group">
			                        <label>Phone Number</label>
		                            <input type="text" class="form-control" name="getbook_phonenum" id="getbook_phonenum" >
		                        </div>
		                    </div>
		                    
		                </div>
		            </div>

		            <div class="joinclbfrm-item">
		                <div class="row">
		                    <div class="col-12">
		                        <div class="form-group">
		                            <input type="submit" value="SUBMIT" onclick="return getBookData()">
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </form>
		        <div id="noverifydata" class="dis-none" style="display: none; color: red;">Something is wrong <a href="mailto:karimalik26997@gmail.com">karimalik26997@gmail.com</a></div>
		        <div id="successcodedata" class="dis-none" style="display: none; color: green;">Successfully added book review!.</div>
		</div>
   </div>
</div>
</div>
<?php
get_footer();
?>