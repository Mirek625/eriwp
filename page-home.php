<?php
/*
* Template Name: Home
*/

$section_1_title = get_field('section_1_title');

get_header();
?>

<div id="index-banner" class="parallax-container">
  <div class="section no-pad-bot">
    <div class="container">
      <br><br>
      <div class="row center">
      <div class="col s2 offset-s5">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/luca.jpg" alt="" class="circle responsive-img">
      </div>
      </div>
      <div class="row center">
        <h5 class="header col s12">Building YOUR Webapp</h5>
      </div>
      <br><br>
    </div>
  </div>
  <div class="parallax"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/bg1.jpg" alt="Unsplashed background img 1"></div>
</div>


<div class="container">
  <div class="section">

    <!--   Icon Section   -->
    <div class="row">
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons">web</i></h2>
          <h5 class="center"><?php echo $section_1_title; ?></h5>

          <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons">group</i></h2>
          <h5 class="center">Usability</h5>

          <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
          <h5 class="center">Personal, Communication</h5>

          <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
        </div>
      </div>
    </div>

  </div>
</div>


<div class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row center">
        <h5 class="header col s12 light">Want to see your App/Website become a reality, or got any Questions?</h5>
      </div>
    </div>
  </div>
  <div class="parallax"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/bg2.jpg" alt="Unsplashed background img 2"></div>
</div>

<?php get_footer(); ?>
