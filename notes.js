 $(function() {
    $( ".draggable" ).draggable({
      stack: '.draggable',
      /*Save position to db after dragging*/
      /*TODO: Save z-index*/
       stop: function(event,ui) {
        $.post('ajax.php',
               {id: $(this).attr('id'), pos: ui.position},
               function(data) {
                  console.log(data);
                });
      }
    })
    .resizable({
       stop: function(event,ui) {
        console.log(ui.size);
        $.post('ajax.php',{id: $(this).attr('id'), size: ui.size});
        }
    });
    $('.draggable').mouseup(function(){   
      $('textarea',this).focus();
    });
    $('.draggable').dblclick(function(event) {
      console.log(event);
       $('textarea',this).select();
       console.log($('textarea',this));
    });
    $('.draggable').focusout(function() {
        $.post('ajax.php',
               {id: $(this).attr('id'), text: $('textarea',this).val()});
        }
    );
    /*Initialisation*/
    /*Get Notes from database*/
    function init(){
      $.get('ajax.php',
            {action: 'getAll'},
            function(data) {
                if (data!='null'){
                    data = $.parseJSON(data);
                /*Set positions*/
                    $.each(data,function(index,v){
                      if (v.key == 'pos'){
                        pos = v.value.split(',');
                        $('#'+v.id).animate({top:pos[0]+'px',left:pos[1]+'px'},1000);
                      }
                /*Set Size*/      
                      else if  (v.key == 'size'){
                        size = v.value.split(',');
                        $('#'+v.id).animate({width:size[0]+'px',height:size[1]+'px'},1000);
                      }
                /*Set Text*/      
                      else if (v.key == 'text'){
                        $('#'+v.id+'>textarea').val(v.value);
                      }
                     
                    });
                  }
                  else alert("An Error occured, cannot read data");
              }
            );
       }
       init();
    $('#clear').click(function () {
       if (confirm("Delete really anything?\n this can't be undone!"))
       $.get('ajax.php',
            {action: 'clearAll'},
            function(data) {
              location.reload();
              // console.log(data);
            }
        );
    });
  });