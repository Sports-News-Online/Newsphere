<?php
if (!function_exists('newsphere_banner_tabbed_posts')):
  /**
   * Ticker Slider
   *
   * @since Newsphere 1.0.0
   *
   */
  function newsphere_banner_tabbed_posts()
  {
    $dir = 'ltr';
    if (is_rtl()) {
      $dir = 'rtl';
    }

?>
    <div class="banner-trending-posts-wrapper clearfix" dir="<?php echo esc_attr($dir); ?>">

      <?php
      $show_excerpt = 'false';
      $excerpt_length = '20';
      $number_of_posts = '5';

      $enable_categorised_tab = 'true';
      $latest_title = newsphere_get_option('latest_tab_title');
      $popular_title = newsphere_get_option('popular_tab_title');
      $categorised_title = newsphere_get_option('trending_tab_title');
      $category = newsphere_get_option('select_trending_tab_news_category');
      $tab_id = 'aft-main-banner-latest-trending-popular';
      $is_recent_active = true;
      ?>
      <div class="tabbed-container">
        <div class="tabbed-head">
          <ul class="nav nav-tabs af-tabs tab-warpper" role="tablist">
            <li role="presentation" class="tab tab-recent">
              <a href="#<?php echo esc_attr($tab_id); ?>-recent"
                aria-label="<?php esc_attr_e('Recent', 'newsphere'); ?>"
                role="tab"
                id="<?php echo esc_attr($tab_id); ?>-recent-tab"
                aria-controls="<?php echo esc_attr($tab_id); ?>-recent"
                aria-selected="<?php echo $is_recent_active ? 'true' : 'false'; ?>"
                data-toggle="tab"
                class="font-family-1 <?php echo $is_recent_active ? 'active' : ''; ?>">
                <i class="fa fa-clock-o"
                  aria-hidden="true"></i> <?php echo esc_html($latest_title); ?>
              </a>
            </li>

            <li role="presentation" class="tab tab-popular">
              <a href="#<?php echo esc_attr($tab_id); ?>-popular"
                aria-label="<?php esc_attr_e('Popular', 'newsphere'); ?>"
                role="tab"
                id="<?php echo esc_attr($tab_id); ?>-popular-tab"
                aria-controls="<?php echo esc_attr($tab_id); ?>-popular"
                aria-selected="<?php echo $is_recent_active ? 'false' : 'true'; ?>"
                data-toggle="tab"
                class="font-family-1 <?php echo $is_recent_active ? '' : 'active'; ?>">
                <i class="fa fa-fire"
                  aria-hidden="true"></i> <?php echo esc_html($popular_title); ?>
              </a>
            </li>


            <li class="tab tab-categorised" role="presentation">
              <a href="#<?php echo esc_attr($tab_id); ?>-categorised"
                aria-label="<?php esc_attr_e('Categorised', 'newsphere'); ?>"
                role="tab"
                id="<?php echo esc_attr($tab_id); ?>-categorised-tab"
                aria-controls="<?php echo esc_attr($tab_id); ?>-categorised"
                aria-selected="<?php echo $is_recent_active ? 'false' : 'true'; ?>"
                data-toggle="tab"
                class="font-family-1">
                <i class="fa fa-bolt"
                  aria-hidden="true"></i> <?php echo esc_html($categorised_title); ?>
              </a>
            </li>
          </ul>
        </div>
        <div class="tab-content">
          <div id="<?php echo esc_attr($tab_id); ?>-recent"
            role="tabpanel"
            aria-labelledby="<?php echo esc_attr($tab_id); ?>-recent-tab"
            aria-hidden="<?php echo $is_recent_active ? 'false' : 'true'; ?>"
            class="tab-pane <?php echo $is_recent_active ? 'active' : ''; ?>">
            <?php
            newsphere_render_posts('recent', $show_excerpt, $excerpt_length, $number_of_posts);
            ?>
          </div>

          <div id="<?php echo esc_attr($tab_id); ?>-popular"
            role="tabpanel"
            aria-labelledby="<?php echo esc_attr($tab_id); ?>-popular-tab"
            aria-hidden="<?php echo $is_recent_active ? 'true' : 'false'; ?>"
            class="tab-pane <?php echo $is_recent_active ? '' : 'active'; ?>">
            <?php
            newsphere_render_posts('popular', $show_excerpt, $excerpt_length, $number_of_posts);
            ?>
          </div>

          <?php if ($enable_categorised_tab == 'true'): ?>
            <div id="<?php echo esc_attr($tab_id); ?>-categorised"
              role="tabpanel"
              aria-labelledby="<?php echo esc_attr($tab_id); ?>-categorised-tab"
              aria-hidden="<?php echo $is_recent_active ? 'true' : 'false'; ?>"
              class="tab-pane <?php echo $is_recent_active ? '' : 'active'; ?>">
              <?php
              newsphere_render_posts('categorised', $show_excerpt, $excerpt_length, $number_of_posts, $category);
              ?>
            </div>
          <?php endif; ?>

        </div>
      </div>
    </div>
    <!-- Trending line END -->
<?php

  }
endif;

add_action('newsphere_action_banner_tabbed_posts', 'newsphere_banner_tabbed_posts', 10);
