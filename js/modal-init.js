(function(){
  var $contentR = $('#resumen').detach();   // Remove modal from page
  var $contentO = $('#objetivos').detach();   // Remove modal from page
  var $content;

  $('#resumen-btn').on('click', function() {           // Click handler to open modal
    $content = $contentR;
    modal.open({content: $content, width:340, height:300});
  });
  
  $('#obj-btn').on('click', function() {           // Click handler to open modal
    $content = $contentO;
    modal.open({content: $content, width:340, height:300});
  });
}());