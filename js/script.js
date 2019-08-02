
    // for Mass-Delete. JS
    $(document).ready(function(){
        $('#checkAll').click(function(){
         if(this.checked){
             $('.checkbox').each(function(){
                this.checked = true;
             });   
         }else{
            $('.checkbox').each(function(){
                this.checked = false;
             });
         } 
    });


    $('#delete').click(function(){
       var dataArr  = new Array();
       if($('input:checkbox:checked').length > 0){
          $('input:checkbox:checked').each(function(){
              dataArr.push($(this).attr('id'));
              $(this).closest('tr').remove();     // აქ class უნდა ჩაჯდეს მაგ: .class
          });
          sendResponse(dataArr)
       }else{
         alert('No record selected ');
       }
    });  



    // for Mass Delete. AJAX
    function sendResponse(dataArr){
        $.ajax({
            type    : 'post',
            url     : 'delete.php',
            data    : {'data' : dataArr},
            success : function(response){
                        alert(response);
                      },
            error   : function(errResponse){
                      alert(errResponse);
                      }                     
        });
      }
    });







    // for SPECIAL ATTRIBUTE with helpfull info. AJAX
    function fetch_select (val){
         $.ajax({
            type: 'post',
            url: 'create.php',
            datatype:'json',
            data: { option:val },
            success: function (response) {
                $('#print-ajax').html(response);
            }
        });
    }




    // for SPECIAL ATTRIBUTE with helpfull info. JS

$('#inputGroupSelect01').on('change', function(){

    if($(this).val() === 'Please, provide DVD Memory Size in MB format. Example: 120MB') {
    $("#weight, #height, #width, #length").prop('disabled', true); 
    }
    else if($(this).val() === 'Please, provide Book weight in KG format. Example: 5 KG') {
    $("#size, #height, #width, #length").prop('disabled', true);
    }
    else if($(this).val() === 'Please, provide furniture dimensions in HxWxL format. Example: 120x100x70 CM') {
    $("#size, #weight").prop('disabled', true);
    }

    

});
  