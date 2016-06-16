$(function() {
$("#user_nome").autocomplete({
      minLength: 2,
    source: '/search/autocomplete',
    select: function(event, ui) {
          $("#user_nome").val(ui.item.value);
    }});
});
