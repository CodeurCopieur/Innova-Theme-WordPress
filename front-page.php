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
                          <img src="<?php echo $image['sizes']['product_image_small']; ?>" alt="Image" class="img-fluid">
                        </a>
                      </div>

                <?php endwhile; ?>

                </div>
              </div>

          <?php endif; ?>

  </div>

 <?php $testimonial = get_field('testimonial');  ?>

  <div class="section bg-light block-11">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title"><?php echo $testimonial['medium_title']; ?></h2>
        </div>
      </div>


     <!-- <div class="nonloop-block-11 owl-carousel"> -->

      <?php if( have_rows('client') ): ?>

        <div class="nonloop-block-11 owl-carousel">
        

      <?php while( have_rows('client') ): the_row(); 

      // vars
      $image = get_sub_field('image_client');
      $nom = get_sub_field('nom_client');
      $metier = get_sub_field('metier_client');
      $text = get_sub_field('contenu');

      ?>
      
      <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="<?php echo $image['sizes']['product_image_small']; ?>" alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading"><?php echo $nom; ?></h2>
                <span class="meta"><?php echo $metier; ?></span>
              </div>
            </div>
            <div class="text">
              <blockquote>
               <!-- <p>&rdquo; <?php echo $text; ?> &ldquo;</p>-->
               <p><?php echo $text; ?></p> 
              </blockquote>
            </div>
          </div>
          </div> 

        <?php endwhile; ?>
          </div>
          
      <?php endif; ?>

      

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
          <h3 class="text-white mb-2 font-weight-normal">Contactez-nous !</h3>
          <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            
          <p class="mb-0" data-aos="fade-up" data-aos-delay="200"><a href="contact.html" class="btn btn-outline-white px-4 py-3">Contactez-nous !</a></p>
        </div>
      </div>

    </div>
  </div>

  <?php get_footer(); ?>