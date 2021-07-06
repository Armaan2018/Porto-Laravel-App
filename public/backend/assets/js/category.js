(function($) {



    $(document).ready(function() {


        $('.modal-backdrop').remove();

        /*********************
         *   Category Insert  * 
         *********************/

        $(document).on('submit', 'form#category_form', function(event) {

            event.preventDefault();


            $('#error-category').text('');


            $.ajax({


                url: 'category-store',
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response) {

                        $('form#category_form')[0].reset();


                        swal("Good job!", "Category Added Successful", "success");

                        allCategories();



                    }

                },
                error: function(response) {

                    $('#error-category').text(response.responseJSON.errors.name);


                }




            });


        });


        /*********************
         *   Category show  * 
         *********************/


        function allCategories() {
            $.ajax({

                url: 'category-show',
                success: function(response) {

                    $('tbody#category_tbody').html(response);

                }

            });
        }
        allCategories();




        /*********************
         *   Category Delete  * 
         *********************/




        $(document).on('click', 'a#delete_id', function(event) {
            event.preventDefault();



            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this Category!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {


                    let id = $(this).attr('del_id');

                    $.ajax({


                        url: 'category-delete/' + id,
                        success: function(response) {


                            if (willDelete) {
                                swal("Opps! Your Category file has been deleted!", {
                                    icon: "success",
                                });

                                allCategories();
                            } else {
                                swal("Your Category hasn't deleted");
                            }






                        }






                    });



                });




        });


        /*********************
         *   Category Edit  * 
         *********************/

        $(document).on('click', 'a#edit_id', function(event) {
            event.preventDefault();


            let id = $(this).attr('edit_id');



            $.ajax({


                url: 'category-edit/' + id,
                success: function(response) {

                    $("#edit_modal input[name='name']").val(response.name);
                    $("#edit_modal input[name='id']").val(response.id);

                }



            });






        });


        /*********************
         *   Category Update  * 
         *********************/



        $(document).on('submit', 'form#category_update_form', function(event) {
            event.preventDefault();


            $('#error-category').text('');

            $.ajax({


                url: 'category-update',
                method: "POST",
                contentType: false,
                processData: false,
                data: new FormData(this),
                success: function(response) {


                    swal("Good job!", "You clicked the button!", "success");
                    allCategories();
                }





            });



        });






    });


})(jQuery)
