$(document).ready(function(){
    $(document).on('click','.add_colalborator',function(e){
        e.preventDefault();
        var data = {
            'key': $("key").val(),
        }
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "/collaborator-add",
            data: data,
            dataType: "json",
            success: function (response){
                if(response.status == 400){
                     Swal.fire({
                        position: "top-end",
                        icon: "warning",
                        title: response.errors,
                        showConfirmButton: false,
                        timer: 1000
                    });
                }else{
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "La sucursal " + data.name + " se registro exitosamente.",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            }
        })
    });
})