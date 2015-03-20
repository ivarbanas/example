(function($) {
    $(document).ready(function() {
      var mySlidebars = new $.slidebars();
      $('').on('click', function() {
        mySlidebars.slidebars.toggle('left');
      });
    });
  }) (jQuery);