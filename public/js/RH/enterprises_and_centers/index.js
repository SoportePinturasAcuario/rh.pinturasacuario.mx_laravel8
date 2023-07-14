$(document).ready(function () {
    fetchcenter();

    function fetchcenter() {
        $.ajax({
            type: "GET",
            url: "/fetch-center",
            dataType: 'json',
            success: function (response) {
                $('tbody').html("");
                $.each(response.center, function (key, item) {
                    $('tbody').append(
                        '<tr>\
                                    <td class="col-1">' + item.id_center + '</td>\
                                    <td class="col-4">' + item.name_center + '</td>\
                                    <td class="col-3"> <button value="'+ item.id_center + '" class="edit_centers edit"><i class="fa-solid fa-pen-to-square "></i></button><button value="' + item.id_center + '" class="delete_centers delete"><i class="fa-solid fa-trash"></i></button></td>\
                            </tr>'
                    );
                });
            }
        });
    }
    $(document).on('click', '.cancel', function (e) {
        e.preventDefault();
        $('#saveform_errList').html("");
        $('#updateform_errList').html("");
        $('#updateform_errList').removeClass('alert alert-danger');
        $('#saveform_errList').removeClass("alert alert-success");
        $('#AddcentersModel').modal('hide');
        $('#AddcentersModel').find('input').val("");
        fetchcenter();
    });
    $(document).on('click', '.add_centers', function (e) {
        e.preventDefault();
        var data = {
            'name': $(".name").val(),
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "/addcenters",
            data: data,
            dataType: "json",
            success: function (response) {
                if (response.status == 400) {
                    // Mensaje de error y las cajas
                    $('#saveform_errList').html("");
                    $('#saveform_errList').addClass("alert alert-danger");
                    $.each(response.errors, function (key, err_values) {
                        $('#saveform_errList').append('<li>' + err_values +
                            '</li>');
                    });
                } else {
                    // Mensaje de exito de registro
                    $('#saveform_errList').html("");
                    $('#saveform_errList').removeClass("alert alert-danger");
                    $('#AddcentersModel').find('input').val("");
                    toastr["success"]("Have fun storming the castle!");
                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                      };
                    fetchcenter();
                }
            }
        });
    });
    $(document).on('click', '.edit_centers', function (e) {
        e.preventDefault();
        var center_id = $(this).val();
        $('#EditcentersModel').modal('show');
        $.ajax({
            type: "GET",
            url: "/edit-center/" + center_id,
            dataType: "json",
            success: function (response) {
                if (response.status == 404) {
                    $('#success_message').html("");
                    $('#success_message').addClass('alert alert-danger');
                    $('#success_message').text(response.message);
                } else {
                    $('#edit_center_id').val(center_id);
                    $('#edit_name').val(response.center.name_center);
                }
            }

        });
    });
    $(document).on('click', '.update_centers', function (e) {
        e.preventDefault();
        var center_id = $('#edit_center_id').val();
        var data = {
            'name': $('#edit_name').val(),
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "PUT",
            url: "/update-center/" + center_id,
            data: data,
            dataType: 'json',
            success: function (response) {
                if (response.status == 400) {
                    $('#updateform_errList').html("");
                    $('#updateform_errList').addClass('alert alert-danger');
                    $.each(response.errors, function (key, err_values) {
                        $('#updateform_errList').append('<li>' + err_values +
                            '</li>');
                    });
                    fetchcenter();
                } else if (response.status == 404) {
                    $('#updateform_errList').html("");
                    Swal.fire({
                        position: "top-end",
                        icon: "warning",
                        title: response.message,
                        showConfirmButton: false,
                        timer: 2500
                    });
                    fetchcenter();
                } else {
                    $('#updateform_errList').html('');
                    $('#updateform_errList').removeClass('alert alert-danger');
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    fetchcenter();
                }
            }
        });
        fetchcenter();
    });
    $(document).on('click', '.delete_centers', function (e) {
        e.preventDefault();
        var center_id = $(this).val();
        $('#delete_center_id').val(center_id);
        $('#DeletecentersModel').modal('show');
    });
    $(document).on('click', '.delete_centers_btn', function (e) {
        e.preventDefault();
        var center_id = $('#delete_center_id').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "DELETE",
            url: '/delete-center/' + center_id,
            success: function (response) {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1500
                });
                $('#DeletecentersModel').modal('hide');
                fetchcenter();
            }
        })
    });
})