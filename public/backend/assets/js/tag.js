(function($) {



    $(document).ready(function() {




        /*********************
         *   Tag Insert  * 
         *********************/


        $(document).on('submit', 'form#tag_form', function(event) {

            event.preventDefault();


            $('#error_tag').text('');


            $.ajax({


                url: 'tag-store',
                method: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response) {
                        $('form#tag_form')[0].reset();
                        swal("Good job!", "Tag Added!", "success");
                        allTags();

                    }

                },

                error: function(response) {

                    $('#error_tag').text(response.responseJSON.errors.name);





                }



            })

        });



        /*********************
         *      Tag Show      * 
         *********************/


        function allTags() {
            $.ajax({
                url: 'tag-show',
                success: function(response) {

                    $('tbody#tag_tbody').html(response);

                }


            });
        }


        allTags();



        /*********************
         *      Tag Delete    * 
         *********************/



        $(document).on('click', 'a#tag_delete_id', function(event) {
            event.preventDefault();



            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this Tag!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {


                    let id = $(this).attr('tag_del_id');

                    $.ajax({


                        url: 'tag-delete/' + id,
                        success: function(response) {


                            if (willDelete) {
                                swal("Your tag has been deleted!", {
                                    icon: "success",
                                });

                                allTags();
                            } else {
                                swal("tag hasn't deleted");
                            }






                        }






                    });



                });




        });



        /*********************
         *      Tag Edit    * 
         *********************/


        $(document).on('click', 'a#tag_edit_id', function(event) {

            event.preventDefault();

            let id = $(this).attr('tag_edit_id');

            $.ajax({

                url: 'tag-edit/' + id,
                success: function(response) {

                    $("#tag_edit_modal input[name='name']").val(response.name);
                    $("#tag_edit_modal input[name='id']").val(response.id);


                }




            });




        });




        $(document).on('submit', 'form#tag_update_form', function(event) {
            event.preventDefault();


            $('#error_tag').text('');

            $.ajax({

                url: 'tag-update',
                method: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response) {

                        swal("Done!", "Tag Updated successful!", "success");
                        allTags();



                    }
                },

                error: function(response) {

                    $('#error_tag').text(response.responseJSON.errors.name);

                }



            });



        });








    });


})(jQuery)
