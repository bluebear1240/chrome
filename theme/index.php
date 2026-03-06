<?php
/**
 * The main template file
 *
 * @package YourTheme
 */

get_header();
?>

<main class="mt-main" role="main">
  <section class="mt-hero" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero.jpg' ); ?>');">
    <div class="mt-hero__overlay"></div>
    <div class="mt-hero__inner">
      <div class="mt-hero__content">
        <h1 class="mt-hero__title"><?php esc_html_e( '静寂という豊かさを防音室で', 'your-theme' ); ?></h1>
        <p class="mt-hero__subtitle"><?php esc_html_e( '遮音性能保証、性能クレームゼロ 支持されて15年', 'your-theme' ); ?></p>
        <a class="mt-hero__button" href="#posts"><?php esc_html_e( 'お問い合わせ', 'your-theme' ); ?></a>
      </div>

      <div class="mt-hero__cards">
        <a href="#" class="mt-hero__card">
          <div class="mt-hero__card-media"></div>
          <div class="mt-hero__card-body">
            <span class="mt-hero__card-icon">🎸</span>
            <span class="mt-hero__card-title"><?php esc_html_e( '家で楽器を弾きたい方へ', 'your-theme' ); ?></span>
          </div>
        </a>
        <a href="#" class="mt-hero__card">
          <div class="mt-hero__card-media"></div>
          <div class="mt-hero__card-body">
            <span class="mt-hero__card-icon">🏢</span>
            <span class="mt-hero__card-title"><?php esc_html_e( 'マンションでの防音室', 'your-theme' ); ?></span>
          </div>
        </a>
        <a href="#" class="mt-hero__card">
          <div class="mt-hero__card-media"></div>
          <div class="mt-hero__card-body">
            <span class="mt-hero__card-icon">🎛️</span>
            <span class="mt-hero__card-title"><?php esc_html_e( '企業様向けの防音室', 'your-theme' ); ?></span>
          </div>
        </a>
      </div>
    </div>
  </section>

  <div class="mt-container" id="posts">
    <?php if ( have_posts() ) : ?>
      <div class="mt-posts">
        <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'mt-card' ); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" class="mt-card__thumb">
                <?php the_post_thumbnail( 'medium_large', array( 'class' => 'mt-card__image' ) ); ?>
              </a>
            <?php endif; ?>

            <div class="mt-card__body">
              <h2 class="mt-card__title">
                <a href="<?php the_permalink(); ?>" class="mt-card__link"><?php the_title(); ?></a>
              </h2>

              <div class="mt-card__meta">
                <span class="mt-card__date"><?php echo get_the_date(); ?></span>
                <span class="mt-card__author"><?php the_author_posts_link(); ?></span>
              </div>

              <div class="mt-card__excerpt">
                <?php the_excerpt(); ?>
              </div>

              <a href="<?php the_permalink(); ?>" class="mt-card__readmore"><?php esc_html_e( 'Read more', 'your-theme' ); ?></a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <div class="mt-pagination">
        <?php
        the_posts_pagination(
          array(
            'mid_size'  => 1,
            'prev_text' => esc_html__( 'Previous', 'your-theme' ),
            'next_text' => esc_html__( 'Next', 'your-theme' ),
          )
        );
        ?>
      </div>

    <?php else : ?>
      <div class="mt-no-posts">
        <p><?php esc_html_e( 'No posts found.', 'your-theme' ); ?></p>
      </div>
    <?php endif; ?>
  </div>
</main>

<?php
get_footer();
