(function($) {



    $(document).ready(function() {


$('.dropify').dropify();

        /*********************
         *    Post Format    * 
         *********************/

                $('#image').hide();
                $('#video').hide();
                $('#audio').hide();
                $('#gallery').hide();
                $('#basicEditor').hide();


                $(function(){

                  $('.qtagselect__select').tagselect();

                });


         $('#post_format').change(function(){

            let format = $(this).val();





            if (format == 'image') {

                $('#image').show();
                $('#basicEditor').show();
            }else{

              
                $('#image').hide(); 
            }

            if (format == 'video') {
                $('#video').show();
                $('#basicEditor').show();
            }else{

                $('#video').hide(); 
            }


            if (format == 'audio') {
                $('#audio').show();
                $('#basicEditor').show();
            }else{

                $('#audio').hide(); 
            }

           if (format == 'gallery') {
                $('#gallery').show();
                $('#basicEditor').show();
            }else{

                $('#gallery').hide(); 
            }


            


           






         });



        /*********************
         *    Post Format    * 
         *********************/

         $(document).on('submit','form#post_form',function(event){

            event.preventDefault();


            $.ajax({


                url:'post-store',
                method:"POST",
                data:new FormData(this),
                processData:false,
                contentType:false,
                success:function(response){

                    if (response) {
                        $('form#post_form')[0].reset();
                        $('#image').hide();
                        $('#video').hide();
                        $('#audio').hide();
                        $('#gallery').hide();
                        $('#basicEditor').hide();
                        $('#exampleModal').hide();
                        swal("All Done!", "Post Published!", "success");

                    }

                }

            });




         });









    });


})(jQuery)
