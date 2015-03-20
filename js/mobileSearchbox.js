$(document).ready(function() {
  $('#search_box').click(function(e) {
    var $region = $('#' + $(this).attr('aria-controls'));
    $region.slideToggle(100, function() {
      if ($region.attr('aria-expanded') == 'false') { 
        $region.attr('aria-expanded', 'true');
        $region.focus();
      }
      else {
        $region.attr('aria-expanded', 'false');
      }
    });

    e.stopPropagation();
    return false;
  });
}); 