(function($, Drupal, drupalSettings) {
  // Use beahvior and context to execute piece of codes in every case : page loaded, page after ajax...
  // @see https://www.drupal.org/docs/8/api/javascript-api/javascript-api-overview
  // External links...
  Drupal.behaviors.externalLink = {
    attach: function (context, settings) {
      $("a[href^='http']", context).attr('target', '_blank');
      $(".node a[href^='http']", context).addClass('external-link');
    }
  }
  // Collapsable blocks...
  Drupal.behaviors.collapsableBlock = {
    attach: function (context, settings) {
      $('.sidebar .block h2', context).click(function() {
        // Visual debugging ;-)
        // alert('Hello !');
        // Debugging with console
        // console.log('Hello !');
        $(this).siblings('.content').slideToggle('fast');
      });
    }
  }
})(jQuery, Drupal, drupalSettings);
