<?php get_header();

$hero = get_field('hero');  ?>
<div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url('<?php bloginfo('template_directory');?>/images/hero_2.jpg');">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-lg-12 text-center col-sm-12">
          <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100"><?php echo $hero['big_title']; ?></h1>
        </div>
      </div>
    </div>
  </div>


      <?php if( have_rows('services') ): ?>
          <div class="section">
            <div class="container">
                <div class="row">

          <?php while( have_rows('services') ): the_row(); 

            // vars
            $iconClass = get_sub_field('icons');
            $title = get_sub_field('meduim_title');
            $text = get_sub_field('text');

            ?>

                    <div class="col-lg-3 mb-4">
                      <div class="service text-center" data-aos="fade-up" data-aos-delay="">
                        <span class="icon <?php echo $iconClass; ?> mb-4 d-block"></span>
                        <h3><?php echo $title; ?></h3>
                        <p><?php echo $text; ?></p>
                      </div>
                  </div>

          <?php endwhile; ?>
            </div>
          </div>
        </div>

          <?php endif; ?>




  <div class="section portfolio-section">
  <?php   $head_works = get_field('head_works');  ?>
    <div class="container">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title"><?php echo $head_works['medium_title']; ?></h2>
          <p><?php echo $head_works['texte']; ?></p>
        </div>
      </div>
    </div>



                <?php if( have_rows('projets') ): ?>

                  <div class="container">
                  <div class="row mb-5 no-gutters">

                <?php while( have_rows('projets') ): the_row(); 

                  // vars
                  $image = get_sub_field('image_projet');
                  $categorie = get_sub_field('categorie_projet');
                  $title = get_sub_field('titre_projet');

                  ?>
                      
                    <div class="col-sm-6 col-md-6 col-lg-6" data-aos="fade" data-aos-delay="100">
                        <a href="portfolio-single.html" class="work-thumb">
                          <div class="work-text">
                            <h2><?php echo $title; ?></h2>
                            <p><?php echo $categorie; ?></p>
                          </div>
                          <img src="<?php echo $image['url']; ?>" alt="Image" class="img-fluid">
                        </a>
                      </div>

                <?php endwhile; ?>

                </div>
              </div>

          <?php endif; ?>


      <!--
        <div class="col-sm-6 col-md-6 col-lg-6" data-aos="fade" data-aos-delay="100">
          <a href="portfolio-single.html" class="work-thumb">
            <div class="work-text">
              <h2>Project Name Here</h2>
              <p>Business</p>
            </div>
            <img src="<?php bloginfo('template_directory');?>/images/work_1.jpg" alt="Image" class="img-fluid">
          </a>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6" data-aos="fade" data-aos-delay="200">
          <a href="portfolio-single.html" class="work-thumb">
            <div class="work-text">
              <h2>Project Name Here</h2>
              <p>Design</p>
            </div>
            <img src="<?php bloginfo('template_directory');?>/images/work_2.jpg" alt="Image" class="img-fluid">
          </a>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6" data-aos="fade" data-aos-delay="300">
          <a href="portfolio-single.html" class="work-thumb">
            <div class="work-text">
              <h2>Project Name Here</h2>
              <p>Business</p>
            </div>
            <img src="<?php bloginfo('template_directory');?>/images/work_3.jpg" alt="Image" class="img-fluid">
          </a>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6" data-aos="fade" data-aos-delay="400">
          <a href="portfolio-single.html" class="work-thumb">
            <div class="work-text">
              <h2>Project Name Here</h2>
              <p>Business</p>
            </div>
            <img src="<?php bloginfo('template_directory');?>/images/work_4.jpg" alt="Image" class="img-fluid">
          </a>
        </div>-->


  </div>

  <div class="section bg-light block-11">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">Happy Client</h2>
        </div>
      </div>
      <div class="nonloop-block-11 owl-carousel">
        <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="<?php bloginfo('template_directory');?>/images/person_1.jpg" alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading">Carl Smith</h2>
                <span class="meta">Customer Corp.</span>
              </div>
            </div>
            <div class="text">
              <blockquote>
                <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat qui, ipsum debitis id
                  reprehenderit ut soluta possimus consectetur asperiores totam veniam quasi molestiae. Animi doloribus
                  accusamus eius ex laudantium vitae? &ldquo;</p>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="<?php bloginfo('template_directory');?>/images/person_2.jpg" alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading">Craig Darren</h2>
                <span class="meta">Customer Corp.</span>
              </div>
            </div>
            <div class="text">
              <blockquote>
                <p>&rdquo; Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, ut enim error molestias maxime
                  deserunt voluptate doloribus nihil nesciunt id perferendis, doloremque earum architecto ab incidunt
                  sunt
                  corrupti. Consequuntur qui ullam voluptates sapiente quod esse eum. &ldquo;</p>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="<?php bloginfo('template_directory');?>/images/person_1.jpg" alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading">John Smith</h2>
                <span class="meta">Customer Corp.</span>
              </div>
            </div>
            <div class="text">
              <blockquote>
                <p>&rdquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ab? Asperiores dolore
                  blanditiis quis sapiente soluta aliquid officiis. &ldquo;</p>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="<?php bloginfo('template_directory');?>/images/person_2.jpg" alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading">John Smith</h2>
                <span class="meta">Customer Corp.</span>
              </div>
            </div>
            <div class="text">
              <blockquote>
                <p>&rdquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, accusamus? Porro fugit culpa
                  consequuntur dolorum. &ldquo;</p>
              </blockquote>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- END .block-4 -->
  </div>


  <div class="section">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-6 ml-auto pl-lg-4 mb-5 order-2">

          <img src="<?php bloginfo('template_directory');?>/images/about_2.jpg" alt="Image" class="img-fluid mb-5">
          
          <span class="d-block text-uppercase text-primary">About US</span>
          <h2 class="mb-4 section-title">Creative We Grow</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id autem temporibus blanditiis accusamus perferendis libero accusantium nisi itaque tempore, harum aliquid aut, sapiente dolor tenetur.</p>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus.</p>
          <p><a href="#" class="btn btn-outline-black">Learn More</a></p>
        </div>
        <div class="col-lg-6 order-1">
          <figure class="img-dotted-bg">
            <img src="<?php bloginfo('template_directory');?>/images/about_1.jpg" alt="Image" class="img-fluid">
          </figure>

        </div>
      </div>
    </div>
  </div>

  
  
  <div class="bg-primary py-5">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <h3 class="text-white mb-2 font-weight-normal" >Get Started</h3>
          <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            
          <p class="mb-0" data-aos="fade-up" data-aos-delay="200"><a href="contact.html" class="btn btn-outline-white px-4 py-3">Get In Touch!</a></p>
        </div>
      </div>

    </div>
  </div>

  <?php get_footer(); ?>