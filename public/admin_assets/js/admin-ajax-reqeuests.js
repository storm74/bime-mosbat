$(document).ready(function () {
    function personalCarList(Id,Result) {
        $('#'+Id).mouseenter(function () {
            // console.log(this.getAttribute('href'))
           var Url = this.getAttribute('href');
            $.ajax({
                url:Url,
                type:'GET',
                success:function (personalCarList) {
                    if (!personalCarList.error){
                        $('#'+Result).html(personalCarList);
                        // console.log($('#'+Result));
                    }
                }
            });
            //ajax call
        });

    }
    //personalCarList end


    //admin functions
    // personalCarList("personal-car-list",'admin-result');
    // personalCarList('personal-car-list-refresh','admin-result');


});