        <div id="footer" class="o-panel o-panel--footer">
            <div class="c-footer">
                <div class="row">
                    <div class="small-24 medium-6 columns c-footer__logo-col">
                      <a class="c-footer__logo" href="<?php bloginfo('url'); ?>/home-new">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer-logo-2x.png" alt="">
                      </a>
                      <p class="c-footer__copyright">© Copyright <?php echo date('Y'); ?> Shiftlab <br/> All Rights Reserved <br/> <span>Design by <a href="https://r1creative.net" target="_blank">R. One Creative</a></span></p>
                    </div><!--/ Footer Col -->

                    <div class="small-24 medium-6 columns c-footer__menu">
                      <h4 class="c-footer__title">Quick Links</h4>
                      <?php
                        $defaults = array(
                            'theme_location'  => 'quick-links-menu',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                        );

                        wp_nav_menu( $defaults );
                    ?> 
                    </div><!--/ Footer Col -->

                    <div class="small-24 medium-6 columns c-footer__menu">
                      <h4 class="c-footer__title">Shiftlab Solutions </h4>
                      <?php
                        $defaults = array(
                            'theme_location'  => 'shiftlab-solutions-menu',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                        );

                        wp_nav_menu( $defaults );
                    ?>
                    </div><!--/ Footer Col -->

                    <div class="small-24 medium-6 columns c-footer__mail-col">
                      <a class="c-footer__mail" href="mailto:support@myshiftlab.com"><!-- <i class="fa fa-envelope"></i>  --><?php echo get_field('email_address', 'options'); ?></a>

                      <a class="u-button" href="<?php bloginfo('url'); ?>/contact"><span>Book a Demo</span></a>
                    </div><!--/ Footer Col -->

                    <div class="small-24 columns text-center c-footer__back-btn-col">
                      <a class="u-back-to-top js-back-to-top" href="javascript:void(0)">BACK TO TOP</a>
                    </div>
                </div>
            </div>
        </div><!-- End Footer Panel -->

        <?php wp_footer(); ?>
        <script type="text/javascript">
          jQuery('.js-menu-trgr').click(function() {
              if(jQuery(this).hasClass('opend')){
                  jQuery('.s-hamburger-menu__wrap-inner').toggleClass('opened');
                  jQuery('.s-hamburger-menu').delay(400).slideToggle();
                  jQuery('.s-hamburger-menu__logo').delay(400).toggleClass('opened');
                  jQuery(this).removeClass('opend');
              }else{
                  jQuery('.s-hamburger-menu').slideToggle(function(){
                      jQuery('.s-hamburger-menu__wrap-inner').toggleClass('opened');
                      jQuery('.s-hamburger-menu__logo').toggleClass('opened');
                  });
                  jQuery(this).addClass('opend');
              }
          });
            
          (function($) {
              "use strict";

            var defaults = {
              topOffset: 200, //px - offset to switch of fixed position
              hideDuration: 300, //ms
              stickyClass: "is-fixed"
            };

            $.fn.stickyPanel = function(options) {
              if (this.length == 0) return this; // returns the current jQuery object

              var self = this,
                settings,
                isFixed = false, //state of panel
                stickyClass,
                animation = {
                  normal: self.css("animationDuration"), //show duration
                  reverse: "", //hide duration
                  getStyle: function(type) {
                    return {
                      animationDirection: type,
                      animationDuration: this[type]
                    };
                  }
                };

              // Init carousel
              function init() {
                settings = $.extend({}, defaults, options);
                animation.reverse = settings.hideDuration + "ms";
                stickyClass = settings.stickyClass;
                $(window)
                  .on("scroll", onScroll)
                  .trigger("scroll");
              }

              // On scroll
              function onScroll() {
                if (window.pageYOffset > settings.topOffset) {
                  if (!isFixed) {
                    isFixed = true;
                    self.addClass(stickyClass).css(animation.getStyle("normal"));
                  }
                } else {
                  if (isFixed) {
                    isFixed = false;

                    self
                      .removeClass(stickyClass)
                      .each(function(index, e) {
                        // restart animation
                        // https://css-tricks.com/restart-css-animation/
                        void e.offsetWidth;
                      })
                      .addClass(stickyClass)
                      .css(animation.getStyle("reverse"));

                    setTimeout(function() {
                      self.removeClass(stickyClass);
                    }, settings.hideDuration);
                  }
                }
              }

              init();

              return this;
            };
          })(jQuery);

          //run
          jQuery(function() {
            jQuery("#header").stickyPanel();
          });

          // jQuery(".c-bio__box-wrap").hover(function () {
          //   jQuery(this).find('.c-bio__more-text').slideToggle();
          // });


          jQuery('.c-blog__posts').infiniteScroll({
            path: '.c-blog__next-post-link',
            append: '.c-blog__post-item',
            history: false,
            hideNav: '.c-blog__next-post-link',
            status: '.page-load-status',
            scrollThreshold: false,
            checkLastPage: true,
            button: '.c-blog__see-more'
          });

          jQuery('.js-related-posts').slick({
            autoplay: false,
            prevArrow: jQuery('#related-posts-prev'),
            nextArrow: jQuery('#related-posts-next'),
            dots: true,
            speed: 900,
            autoplaySpeed: 5000,
            useCSS: false,
            slidesToShow: 2,
            slidesToScroll: 1,
            adaptiveHeight: false,
            appendDots: jQuery('.s-related-posts-controller'),
            infinite: true,
            pauseOnFocus: true,
            pauseOnHover: true,
            touchMove: true,
            responsive: [{
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }]
          });

          jQuery('.js-testimonial').slick({
            autoplay: true,
            prevArrow: jQuery('#testimonial-prev'),
            nextArrow: jQuery('#testimonial-next'),
            dots: true,
            speed: 900,
            autoplaySpeed: 9999,
            useCSS: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: false,
            appendDots: jQuery('.s-testimonial-controller'),
            infinite: true,
            pauseOnFocus: false,
            pauseOnHover: false,
            touchMove: true
          });

          jQuery('.comments__round-btn').on('click', function(e) {
              e.preventDefault();
              jQuery('html, body').animate({
                  scrollTop: jQuery( jQuery.attr(this, 'href') ).offset().top
              }, 600);
          });

          // jQuery(document).ready(function (){
          //     // e.preventDefault();

          //     jQuery('html, body').animate({
          //         scrollTop: jQuery('#c-wireless-retail__content').offset().top - 200
          //     }, 1000);
          // });
        </script>
    </body>
</html>