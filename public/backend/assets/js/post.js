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
         *    Post Insert    * 
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
                        allPost();


                    }

                }

            });




         });


        /*********************
         *    Post Show    * 
         *********************/


        function allPost() {
            $.ajax({
                url: 'post-show',
                success: function(response) {

                    $('tbody#post_tbody').html(response);

                }


            });
        }



         allPost();


        /*********************
         *    Post Delete    * 
         *********************/



         // $(document).on('click','a#post_delete_id',function(event){
         //    event.preventDefault();


         //    let id = $(this).attr('post_del_id');

         //    $.ajax({
         //        url:'post-delete/' + id,
         //        success:function(response){


         //            alert(response)

         //        }
         //    });

         // });


                 $(document).on('click', 'a#post_delete_id', function(event) {
            event.preventDefault();



            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this Post!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {


                    let id = $(this).attr('post_del_id');

                    $.ajax({


                        url: 'post-delete/' + id,
                        success: function(response) {


                            if (willDelete) {
                                swal("Your Post has been deleted!", {
                                    icon: "success",
                                });

                                allPost();
                            } else {
                                swal("post hasn't deleted");
                            }






                        }






                    });



                });




        });








    });


})(jQuery)
