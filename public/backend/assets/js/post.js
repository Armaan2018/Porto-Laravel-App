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
                $('form#preque').hide();

                $(function(){

                  $('.qtagselect__select').tagselect();

                });


         $('#post_format').change(function(){

            let format = $(this).val();





            if (format == 'image') {
                 $('form#preque').show();
                $('#image').show();
            }else{

              
                $('#image').hide(); 
            }

            if (format == 'video') {
                $('#video').show();
            }else{

                $('#video').hide(); 
            }


            if (format == 'audio') {
                $('#audio').show();
            }else{

                $('#audio').hide(); 
            }

           if (format == 'gallery') {
                $('#gallery').show();
            }else{

                $('#gallery').hide(); 
            }


            


           






         });








    });


})(jQuery)
