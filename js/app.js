/******/ (function(modules) { // webpackBootstrap
/******/  // The module cache
/******/  var installedModules = {};
/******/
/******/  // The require function
/******/  function __webpack_require__(moduleId) {
/******/
/******/    // Check if module is in cache
/******/    if(installedModules[moduleId]) {
/******/      return installedModules[moduleId].exports;
/******/    }
/******/    // Create a new module (and put it into the cache)
/******/    var module = installedModules[moduleId] = {
/******/      i: moduleId,
/******/      l: false,
/******/      exports: {}
/******/    };
/******/
/******/    // Execute the module function
/******/    modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/    // Flag the module as loaded
/******/    module.l = true;
/******/
/******/    // Return the exports of the module
/******/    return module.exports;
/******/  }
/******/
/******/
/******/  // expose the modules object (__webpack_modules__)
/******/  __webpack_require__.m = modules;
/******/
/******/  // expose the module cache
/******/  __webpack_require__.c = installedModules;
/******/
/******/  // define getter function for harmony exports
/******/  __webpack_require__.d = function(exports, name, getter) {
/******/    if(!__webpack_require__.o(exports, name)) {
/******/      Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/    }
/******/  };
/******/
/******/  // define __esModule on exports
/******/  __webpack_require__.r = function(exports) {
/******/    if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/      Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/    }
/******/    Object.defineProperty(exports, '__esModule', { value: true });
/******/  };
/******/
/******/  // create a fake namespace object
/******/  // mode & 1: value is a module id, require it
/******/  // mode & 2: merge all properties of value into the ns
/******/  // mode & 4: return value when already ns object
/******/  // mode & 8|1: behave like require
/******/  __webpack_require__.t = function(value, mode) {
/******/    if(mode & 1) value = __webpack_require__(value);
/******/    if(mode & 8) return value;
/******/    if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/    var ns = Object.create(null);
/******/    __webpack_require__.r(ns);
/******/    Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/    if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/    return ns;
/******/  };
/******/
/******/  // getDefaultExport function for compatibility with non-harmony modules
/******/  __webpack_require__.n = function(module) {
/******/    var getter = module && module.__esModule ?
/******/      function getDefault() { return module['default']; } :
/******/      function getModuleExports() { return module; };
/******/    __webpack_require__.d(getter, 'a', getter);
/******/    return getter;
/******/  };
/******/
/******/  // Object.prototype.hasOwnProperty.call
/******/  __webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/  // __webpack_public_path__
/******/  __webpack_require__.p = "";
/******/
/******/
/******/  // Load entry module and return exports
/******/  return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/assets/js/app.js":
/*!******************************!*\
  !*** ./src/assets/js/app.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 * Contains site wide javascript codes
 */
(function () {
  function ShyftlabCommunications() {
    var _self = this;

    _self.$header = jQuery('#header');
    _self.$window = jQuery(window);
    _self.$body = jQuery('body'); // Automatically clearing default values

    _self.clearDefault(); // Sticky Header


    _self.stickyHeader(); // Various click events


    _self.clickEvents(); // Slick slider initializations


    _self.initSkrollr();

    var $animationElement = jQuery('.wow.wow-visible');

    TweenMax.set($animationElement, {y:60});
    TweenMax.set($animationElement, {opacity:0});

    var controller = new ScrollMagic.Controller();

    var d2 = 0.36;
    var d3 = d2 + 0.3;

    jQuery(window).load(function(){
        jQuery('.shiftlab-preloader').fadeOut();
        
        jQuery('.wow.wow-visible').each(function(){
            var currentScreen = this;
            var animationScene = new ScrollMagic.Scene({
                triggerElement: currentScreen,
                triggerHook: 0.9,
                reverse: false
            })
            .on('start', function(){
                var $handler = jQuery(this.triggerElement());
                
                TweenMax.to($handler, 0.8, {y:0, ease:Power2.easeOut, delay: 0.5});
                TweenMax.to($handler, 0.9, {opacity:1, ease:Power2.easeOut, delay: 0.5});
            })
            .addTo(controller);
        }); 
    });

    // if(jQuery(window).width() > 767){
        //_self.initWow();
    // }

    // jQuery('.c-bio__box').hover(function(){
    //     jQuery(this).find('.c-bio__more-text').slideDown();
    // },
    // function(){
    //     jQuery(this).find('.c-bio__more-text').slideUp();
    // });
  }

  ShyftlabCommunications.prototype.clearDefault = function () {
    jQuery.fn.cleardefault = function () {
      return this.focus(function () {
        if (this.value == this.defaultValue) {
          this.value = "";
          jQuery(this).addClass('selected-input');
        }
      }).blur(function () {
        if (!this.value.length) {
          this.value = this.defaultValue;
          jQuery(this).removeClass('selected-input');
        }
      });
    };

    jQuery(".ginput_container input, .ginput_container textarea").cleardefault();
  };

  ShyftlabCommunications.prototype.stickyHeader = function () {
    var _self = this;

    _self.$window.scroll(function () {
      if (_self.$window.scrollTop() > 200) {
        _self.$body.addClass('nav-is-sticky');
      } else {
        _self.$body.removeClass('nav-is-sticky');
      }
    });
  };

  ShyftlabCommunications.prototype.clickEvents = function () {
    var $downArrow = jQuery('.js-arrow-dwn, .js-demo-btn');
    var $buttonBackToTop = jQuery('.js-back-to-top');
    $downArrow.on('click', function (e) {
      e.preventDefault();
      jQuery('html, body').animate({
        scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top - 70
      }, 900);
    });
    $buttonBackToTop.each(function () {
      jQuery(this).click(function () {
        jQuery('html,body').animate({
          scrollTop: 0
        }, 1500);
        return true;
      });
    });
    jQuery('.js-go-to-href').click(function(){
        var $handler = jQuery(this),
            href = $handler.attr('href'),
            elmObj = jQuery(href);
        
        if(elmObj.length){
            jQuery('html,body').animate({
                scrollTop: elmObj.offset().top
            }, 1000);
        }

        return false;
    });
  };

  ShyftlabCommunications.prototype.initSkrollr = function () {
    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      var s = skrollr.init();
    }
  };

  ShyftlabCommunications.prototype.initWow = function () {
    var wow = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
          // the callback is fired every time an animation is started
          // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
      }
    );
    wow.init();

    // jQuery(window).scroll(function(){
    //   jQuery('.wow').not('.animated').removeClass('wow-visible').addClass('fadeInUp');
    // });
  };

  new ShyftlabCommunications();
})();

 // jQuery(window).load(function() {
 //    jQuery("#c-wireless-retail__content").animate({ scrollTop: jQuery('#c-wireless-retail__content').height()}, 1000);

 //    // return false;
 //  });

/*=====================================
    Custom JS
=======================================*/
// jQuery('#hero').parallax("50%", 0.0);

// jQuery(window).load(function(){
//     new Vivus('transparency_animated', {duration: 150});
// });

if(jQuery('#decisions_animated').length){
    new Vivus('decisions_animated', {duration: 150});
}

if(jQuery('#implement_animated').length){
    new Vivus('implement_animated', {duration: 150});
}

if(jQuery('#shiftdesigner_animated').length){
    new Vivus('shiftdesigner_animated', {duration: 150});
}

if(jQuery('#kpiwidgets_animated').length){
    new Vivus('kpiwidgets_animated', {duration: 150});
}

if(jQuery('#datawhite_animated_green').length){
    new Vivus('datawhite_animated_green', {duration: 150});
}

if(jQuery('#schedule-white_animated').length){
    new Vivus('schedule-white_animated', {duration: 150});
}

if(jQuery('#tracking_animated').length){
    new Vivus('tracking_animated', {duration: 150});
}

if(jQuery('#analytics_animated_white').length){
    new Vivus('analytics_animated_white', {duration: 150});
}

if(jQuery('#ease_animated').length){
    new Vivus('ease_animated', {duration: 150});
}

if(jQuery('#check_animated').length){
    new Vivus('check_animated', {duration: 150});
}

// new Vivus('transparency_animated', {duration: 150});

// new Vivus('datawhite_animated', {duration: 150});



// new Vivus('schedule_animated', {duration: 150});


// new Vivus('management_svg', {duration: 150});

// var cursorHover = function(e) {
//     var element = $(this);
//     var cursor = $('.site-cursor');
//     var cursors = $('.mouse-cursor').not(cursor);
//     if (e.type == 'mouseenter') {
//         cursor.addClass('is-hover');
//         if (element.hasClass('has-cursor')) {
//             cursor.addClass('is-hidden')
//         } else {
//             cursor.removeClass('is-hidden');
//             cursors.addClass('is-hidden')
//         }
//     } else {
//         cursors.removeClass('is-hidden');
//         cursor.removeClass('is-hover is-hidden')
//     }
//     if (element.hasClass('btn')) {
//         var hover = element.find('.btn__hover');
//         var offset = element.offset();
//         var x = e.pageX - offset.left;
//         var y = e.pageY - offset.top;
//         if (x <= 10) {
//             x -= 20
//         } else if (x >= element.outerWidth() - 10) {
//             x += 20
//         }
//         if (y <= 5) {
//             y -= 20
//         } else if (y >= element.outerHeight() - 5) {
//             y += 20
//         }
//         if (e.type == 'mouseenter') {
//             TweenLite.fromTo(hover, 0.4, {
//                 left: x,
//                 top: y,
//                 transform: 'translate3d(-50%, -50%, 0) scale(0)'
//             }, {
//                 left: element.outerWidth() / 2,
//                 top: element.outerHeight() / 2,
//                 transform: 'translate3d(-50%, -50%, 0) scale(1)',
//                 ease: Power1.easeOut
//             })
//         } else {
//             TweenLite.fromTo(hover, 0.4, {
//                 left: element.outerWidth() / 2,
//                 top: element.outerHeight() / 2,
//                 transform: 'translate3d(-50%, -50%, 0) scale(1)'
//             }, {
//                 left: x,
//                 top: y,
//                 transform: 'translate3d(-50%, -50%, 0) scale(0)',
//                 ease: Power1.easeInOut
//             })
//         }
//     }
// }



/***/ }),

/***/ 0:
/*!************************************!*\
  !*** multi ./src/assets/js/app.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Volumes/Development/HTML/Shyftlab/src/assets/js/app.js */"./src/assets/js/app.js");


/***/ })

/******/ });
//# sourceMappingURL=app.js.map