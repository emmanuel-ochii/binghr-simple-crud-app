
    $(document).ready(function() {

        getUser();

        function getUser() {
            $.ajax({
                type: "GET",
                url: "/user",
                dataType: "json",
                success: function(response) {
                    // console.log(response);
                    $('tbody').html("");
                }
            });
        }

        $(document).on('click', '.add_plan', function(e) {
            e.preventDefault();

            $(this).text('Saving...');

            var data = {
                'name': $('.name').val(),
                // 'course': $('.course').val(),
                // 'email': $('.email').val(),
                // 'phone': $('.phone').val(),
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/admin/btcManagement",
                data: data,
                dataType: "json",
                success: function(response) {
                    // console.log(response);
                    if (response.status == 400) {
                        $('#save_msgList').html("");
                        $('#save_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_value) {
                            $('#save_msgList').append('<li>' + err_value + '</li>');
                        });
                        $('.add_plan').text('Save');
                    } else {
                        $('#save_msgList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#addPlan').find('input').val('');
                        $('.add_plan').text('Save');
                        $('#addPlan').modal('hide');
                        getUser();
                    }
                }
            });

        });

        $(document).on('click', '.editbtn', function(e) {
            e.preventDefault();
            var id = $(this).val();
            // alert(id);
            $('#editPlan').modal('show');
            $.ajax({
                type: "GET",
                url: "/admin/edit-plan/" + id,
                success: function(response) {
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#editPlan').modal('hide');
                    } else {
                        // console.log(response.plan.name);
                        $('#name').val(response.plan.name);
                        // $('#course').val(response.plan.course);
                        // $('#email').val(response.plan.email);
                        // $('#phone').val(response.plan.phone);
                        $('#id').val(id);
                    }
                }
            });
            $('.btn-close').find('input').val('');

        });

        $(document).on('click', '.update_plan', function(e) {
            e.preventDefault();

            $(this).text('Updating..');
            var id = $('#id').val();
            // alert(id);

            var data = {
                'name': $('#name').val(),
                // 'course': $('#course').val(),
                // 'email': $('#email').val(),
                // 'phone': $('#phone').val(),
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT",
                url: "/admin/update-plan/" + id,
                data: data,
                dataType: "json",
                success: function(response) {
                    // console.log(response);
                    if (response.status == 400) {
                        $('#update_msgList').html("");
                        $('#update_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_value) {
                            $('#update_msgList').append('<li>' + err_value +
                                '</li>');
                        });
                        $('.update_plan').text('Update');
                    } else {
                        $('#update_msgList').html("");

                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#editPlan').find('input').val('');
                        $('.update_plan').text('Update');
                        $('#editPlan').modal('hide');
                        getUser();
                    }
                }
            });

        });

        $(document).on('click', '.deletebtn', function() {
            var id = $(this).val();
            $('#deletePlan').modal('show');
            $('#id').val(id);
        });

        $(document).on('click', '.delete_plan', function(e) {
            e.preventDefault();

            $(this).text('Deleting..');
            var id = $('#id').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "/admin/delete-plan/" + id,
                dataType: "json",
                success: function(response) {
                    // console.log(response);
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-danger');
                        $('#success_message').text(response.message);
                        $('.delete_plan').text('Yes Delete');
                    } else {
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-danger');
                        $('#success_message').text(response.message);
                        $('.delete_plan').text('Yes Delete');
                        $('#deletePlan').modal('hide');
                        getUser();
                    }
                }
            });
        });

    });
