<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>UNTAN Cashless</title>

<!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet" type="text/css">
    @stack('css')
<!-- /global stylesheets -->

<!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/core/libraries/bootstrap.min.js') }}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('js/core/app.js') }}"></script>    
    @stack('js')

    <script type="text/javascript" src="{{ asset('js/plugins/notifications/toastr.min.js') }}"></script>
    <script>
        @if($errors->any())
            $(document).ready(function() {
                toastr.error('Kesalahan pada input data!', 'Error', {timeOut: 5000});
            })
        @endif
        
        @if(Session::has('tambah'))
        $(document).ready(function() {
            toastr.success('Data berhasil disimpan!', 'Sukses', {timeOut: 5000});
        })
        @endif
    
        @if(Session::has('ubah'))
        $(document).ready(function() {
            toastr.success('Data berhasil dirubah!', 'Sukses', {timeOut: 5000});
        })
        @endif
    
        @if(Session::has('hapus'))
        $(document).ready(function() {
            toastr.error('Data berhasil dihapus!', 'Sukses', {timeOut: 5000});
        })
        @endif
    </script>
<!-- /theme JS files -->