<?php get_header(); ?>

<main>
<div id="mainvisual">
  <img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual.jpg')); ?>" alt="テキストテキストテキスト"
</div>

<section id="about" class="wrapper">
<h2 class="section-title">About</h2>
<div class="content">
  <img src="<?php echo esc_url(get_theme_file_uri('img/about.jpg)); ?>" alt="テキストテキストテキスト">
                               <div class="text">
                               <h3 class="content-title">KAKERU MIYAICHI</h3>
                               <p>
                               テキストテキストテキストテキストテキスト<br>
                               テキストテキストテキストテキストテキスト<br>
                               テキストテキストテキストテキストテキスト
                               </p>
                               </div>
                               </div>
                               </section> 

                               <section id="bicycle" class="wrapper">
                               <h2 class="section-title">Bicyclele</h2>
                               <?php if (have_posts()); ?>
                               <ul>
                               <?php while(have_posts()):the_post(); ?>
                               <li>
                               <a href="<?php the_permalink(); ?>">
                               <img src="<?php the_post_thumnail_url("full"); ?>" alt="">
                               <h3 class="content-title"><?php the_title(); ?></h3>
                               <p><?php echo wp_trim_words(get_the_content(), 30, "_"); ?></p>
                               </a>
                               </li>
                               <?php endwhile; ?>
                               </ul>
                               <?php endif; ?>
                               </section>

                               </main>
                               <?php get_footer(); ?>


