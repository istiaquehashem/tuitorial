<?php get_header();?>

<?php
/*
Template Name:Blog
*/
?>  

  <!-- Start single page header -->
   <section id="single-page-header">
   <div class="unit-5 overlay" style="background-image: url(<?php echo esc_url(get_template_directory_uri());?>/assets/images/slider-5.jpg);">
      <div class="container text-center">
    <div class="overlay">
      <div class="container">
        <div class="row">
		
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
                 <h2>Blog Archive</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                 <li><a href="#">Home</a></li>
                <li class="active">Blog Archive</li>
              </ol>
            </div>
          </div>
		  
        </div>
      </div>
    </div>
    </div>
</div>	
  </section>
  <!-- End single page header -->
  
  <!-- Start blog archive -->
  <section id="blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-archive-area">
            <div class="row">
              <div class="col-md-8">
                <div class="blog-archive-left">
				
				
				  <?php 
                           $blogpost = new WP_Query(array(
						         'post_type'=>'post',
								
						   ));

					 ?>
                  <!-- Start blog news single -->
				  <?php while($blogpost -> have_posts()):$blogpost -> the_post(); ?>
				
				
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img">
                      <a href="blog-single-with-right-sidebar.html"><?php the_post_thumbnail();?></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="blog-single-with-right-sidebar.html"><?php the_title();?></a></h2>
                      <p>By <a class="blog-author" href="#"><?php the_author(); ?></a> <span class="blog-date"> <?php the_time('F d, Y');?></span></p>
                    </div>
                    <div class="blog-news-details">
                      <p> <?php $readmore ='<p><a class="blog-more-btn" href="'.get_permalink().'">Read More <i class="fa fa-long-arrow-right"></i></a></p>';
					    echo wp_trim_words(get_the_content(),10,$readmore);
						?></p>
                    </div>
                  </article>
				  
				   <?php endwhile; ?>
                  <!-- Start blog news single -->
                
                  <!-- Start blog news single -->
                 
                  <!-- Start blog pagination -->
                  <div class="blog-pagination">
                    <ul class="pagination-nav">
                     <?php 
                     the_posts_pagination(array(
											'mid_size' => 2,
											'prev_text' => 'prev' ,
											'next_text' => 'next' ,
										));
										?>
                    </ul>
                  </div>
				  
                </div>
              </div>
              <div class="col-md-4">
                <aside class="blog-side-bar">
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <!-- Start blog search -->
                    <form>                    
                      <div class="search-group">                        
                        <button type="button" class="blog-search-btn"><span class="fa fa-search"></span></button>
                        <input type="search" placeholder="Search">
                      </div>                    
                    </form>
                    <!-- End blog search -->                                
                  </div>
                  <!-- Start sidebar widget -->
                   <?php echo dynamic_sidebar('single_page_widget');?>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>
  <!-- End blog archive -->

 