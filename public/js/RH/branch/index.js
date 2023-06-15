$(document).ready(function () {
    fetchbranch();

    function fetchbranch() {
        $.ajax({
            type: "GET",
            url: "/fetch-branch",
            dataType: 'json',
            success: function (response) {
                $('tbody').html("");
                $.each(response.branchs, function (key, item) {
                    $('tbody').append(
                        '<tr>\
                                    <td class="col-1">' + item.id_branch + '</td>\
                                    <td class="col-4">' + item.name_branch + '</td>\
                                    <td class="col-3"> <button value="'+ item.id_branch + '" class="edit_branchs edit"><i class="fa-solid fa-pen-to-square "></i></button><button value="' + item.id_branch + '" class="edit_branchs delete"><i class="fa-solid fa-trash"></i></button></td>\
                            </tr>'
                    );
                });
            }
        });
    }
    $(document).on('click', '.cancel', function (e) {
        e.preventDefault();
        $('#saveform_errList').html("");
        $('#saveform_errList').removeClass("alert alert-success");
        $('#AddBranchsModel').modal('hide');
        $('#AddBranchsModel').find('input').val("");
        fetchbranch();
    });
    $(document).on('click', '.add_branchs', function (e) {
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
            url: "/addbranchs",
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
                    $('#AddBranchsModel').find('input').val("");
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "La sucursal " + data.name + " se registro exitosamente.",
                        showConfirmButton: false,
                        timer: 1500
                    });

                    fetchbranch();
                }
            }
        });
    });
    $(document).on('click', '.edit_branchs', function (e) {
        e.preventDefault();
        var branch_id = $(this).val();
        console.log(branch_id);
        $('#EditBranchsModel').modal('show');
        $.ajax({
            type: "GET",
            url: "/edit-branchs/" + branch_id,
            dataType: "json",
            success: function (response) {
                if (response.status == 404) {
                    $('#success_message').html("");
                    $('#success_message').addClass('alert alert-danger');
                    $('#success_message').text(response.message);
                } else {
                    $('#edit_branch_id').val(branch_id);
                    $('#edit_name').val(response.branch.name_branch);
                }
            }

        });
    });
    $(document).on('click', '.update_branchs', function (e) {
        e.preventDefault();
        var branch_id = $('#edit_branch_id').val();
        var data = {
            'name': $("#edit_name").val(),
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "PUT",
            url: "/update-branch/" + branch_id,
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
                    $('.update_branchs').text("Editar");
                    fetchbranch();
                } else if (response.status==404) {
                    $('#updateform_errList').html("");
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    fetchbranch();
                }else{
                    $('#updateform_errList').html("");

                    $('.update_branchs').text("Editar");
                    fetchbranch();
                }
            }
        });
        fetchbranch();
    });
})