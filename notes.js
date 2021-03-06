 $(function() {
    var editBuffer  = '';
    var isMouseDown = false;
    var isDragging  = false,
        isResizing  = false;
    var editEl;

    $('body').mousedown(function() {
        isMouseDown = true;
    })
    .mouseup(function() {
        isMouseDown = false;
    });

    $( ".draggable" ).draggable({
      stack: '.draggable',
      cursor: 'move',
      delay: 100, 
      /*Save position to db after dragging*/
      /*TODO: Save z-index*/
      start: function(){
        isDragging = true;
      },
      stop: function(event,ui) {
        /*prevent edit when drag stops*/ 
        window.setTimeout(function () {
          isDragging = false;
        }, 100);
        $.post('ajax.php',
               {id: $(this).attr('id'), pos: ui.position},
               function(data) {
                  console.log(data);
                });
      }
    })
    .resizable({
      start: function(){
        isResizing = true;
      },
      stop: function(event,ui) {
         /*prevent edit when resize stops*/ 
         window.setTimeout(function () {
          isResizing = false;
        }, 100);
        $.post('ajax.php',
          {id: $(this).attr('id'), size: ui.size},
          function(data) {
                  console.log(data);
                });
        }
    });

    $('.draggable').mouseup(function () {
      editDone(editEl);
      enableEdit(this);
    });
    $('.draggable').dblclick(function(event) {
       $('textarea',this).select();
    });
    $('.draggable').focusout(function() {
      editDone(editEl);
      }
    );
    function enableEdit(el){
        if (!isDragging && !isResizing){
          editEl = el;
          $('.marked', el).hide();
          $('textarea',el).show().focus();
          editBuffer = $('textarea',el).val();
        }
    }
    function editDone(el){
      if (el !== undefined){
          showMarked(el);
      /*Save only after change*/
        if ($('textarea',el).val()!=editBuffer){
          $.post('ajax.php',
               {id: $(el).attr('id'), text: $('textarea',el).val()},
               function(data) {
                  console.log(data);
                });
        }
        editEl = undefined;
      }
    }
    function showMarked(el){
        var text_v   = $('textarea',el).val();
        var marked_v = marked(text_v);
        $('.marked',el).html(marked_v);
        $('textarea',el).hide();
        $('.marked',el).show();
    }




    /*Initialisation*/
    /*Get Notes from database*/
    function init(){
      marked.setOptions({
        breaks: true
      });
      $.get('ajax.php',
            {action: 'getAll'},
            function(data) {
                if (data!='null'){
                   try{
                        data = $.parseJSON(data);
                      } catch (e) {
                            alert(data);
                        return;
                      }
                /*Set positions*/
                    $.each(data,function(index,v){
                      if (v.key == 'pos'){
                        var pos = [];
                        pos = v.value.split(',');
                        $('#'+v.id).animate({top:pos[0]+'px',left:pos[1]+'px'},1000);
                      }
                /*Set Size*/      
                      else if  (v.key == 'size'){
                        var size = [];
                        size = v.value.split(',');
                        $('#'+v.id).animate({width:size[0]+'px',height:size[1]+'px'},1000);
                      }
                /*Set Text*/      
                      else if (v.key == 'text'){
                        $('#'+v.id+'>textarea').val(v.value);
                        showMarked('#'+v.id);
                      }
                     
                    });
                  }
                  else alert("An Error occured, cannot read data");
              }
            );//$.get end
        
       }
       init();
    $('#clear').click(function () {
       if (confirm("Delete really anything?\n this can't be undone!"))
       $.get('ajax.php',
            {action: 'clearAll'},
            function(data) {
              location.reload();
            }
        );
    });
  });