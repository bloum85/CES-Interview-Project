$(document).on('pageinit', function() {
  $(":jqmData(role='listview') li a").click(function(){
    var id = $(this).data('id');
    $.get('/api/panel/'+id, function(data){
      $('#panel p').text(data.panel.content);
      $('#panel').panel('open');
    });
  });
  $('#panel .close-panel').click(function(){
    $('#panel').panel('close');
  });
});
