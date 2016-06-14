$(function() {
$("#auto").autocomplete({
      minLength: 2,
    source: './search/autocomplete',
    select: function(event, ui) {
          $("#auto").val(ui.item.value);
    }});
});
