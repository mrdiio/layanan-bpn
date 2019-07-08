var url = 'role';
var m_title = 'Role';

// Create
$(function() {
    $(document).on('click', '#addModal', function(e) {
        e.preventDefault();
        $('.modal.'+url).modal('show');
        $('.modal-title').text('Tambah ' + m_title);
        $('#form')[0].reset();
        $('#form').attr('action', url);
        $('#form').addClass('add').removeClass('edit');
    })

    $(document).on('submit', '.add', function(e) {
        e.preventDefault();
        var permissions = [];
        $(':checkbox').each(function(){
            if($(this).is(":checked")) {
                permissions.push($(this).val());
            }
        });
        $.ajax({
            type: 'post',
            url: url,
            data: {
                '_token': $('input[name=_token]').val(),
                'name' : $('#name').val(),
                'permissions' : permissions,
            },
            success: function(data) {
                if(data.errors){
                    toastr.error('Terjadi kesalahan saat input data.', 'Error', {timeOut: 5000});
                    // console.log(data.errors);
                } else {
                    toastr.success('Data berhasil disimpan!', 'Sukses', {timeOut: 5000});
                    location.reload();
                    $('.modal.'+url).modal('toggle');
                }
            },
        })
    })
})

// Update
$(function() {
    $(document).on('click', '#editModal', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            type: 'get',
            url: url + '/' + id + '/edit',
            success: function(data){
                $('.modal.'+url).modal('show');
                $('.modal-title').text('Edit ' + m_title);
                $('#form')[0].reset();
                $('#form').attr('action', url+'/'+data.id);
                $('#form').addClass('edit').removeClass('add');

                $('#_id').val(data.role.id);
                $('#name').val(data.role.name);

                $.each(data.permissions, function (i, item) {
                    $('#'+item.id).prop('checked', true);
                })
            },
            error: function(data){
                toastr.error('Terjadi kesalahan saat menampilkan data.', 'Error', {timeOut: 5000});
                // console.log(data);
            },
        })
    })

    $(document).on('submit', '.edit', function(e) {
        e.preventDefault();
        var permissions = [];
        $(':checkbox').each(function(){
            if($(this).is(":checked")) {
                permissions.push($(this).val());
            }
        });
        $.ajax({
            type: 'put',
            url: url+'/'+$('#_id').val(),
            data: {
                '_token': $('input[name=_token]').val(),
                'name' : $('#name').val(),
                'permissions' : permissions,
            },
            success: function(data){
                if(data.errors){
                    toastr.error('Terjadi kesalahan saat ubah data.', 'Error', {timeOut: 5000});
                } else {
                    toastr.success('Data berhasil disimpan!', 'Sukses', {timeOut: 5000});
                    location.reload();
                    $('.modal.'+url).modal('toggle');
                }
            }
        })
    })
})

// Destroy
$(function() {
    $(document).on('click', '#hapusModal', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var name = $(this).data('name');
        swal({
            title: "Anda yakin ingin menghapus "+url+"?",
            text: name,
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF7043",
            confirmButtonText: "Yes, delete it!"
        },
        function() {
            $.ajax({
                type: 'delete',
                url: url + '/' + id,
                data: {
                    '_token': $('input[name=_token]').val(),
                },
                success: function(data) {
                    toastr.success('Data berhasil dihapus!', 'Terhapus', {timeOut: 5000});
                    location.reload();
                    // console.log(id);
                    
                },
                error: function(errors) {
                    toastr.error("Data Error.");
                    var error = errors.responseJSON;
                    // console.log(error);
                },
            })
        })
    })
})
// destroy