 function saeed_ajax(formId,resultId,emptyId) {
     $('#'+formId).submit(function (event) {
         event.preventDefault();
         var postData = $(this).serialize();
         var url = $(this).attr('action');
         $.post(url,postData, function (data) {
             if (resultId!=null){
                 $('#'+resultId).display="block";
                 $('#'+resultId).html(data);
             }
             if (emptyId!=null){
                 $('#'+emptyId).val('');
             }
             // if (reload == 1){
             //     location.reload();
             // }
         });
     })
     //ajax post send

}
