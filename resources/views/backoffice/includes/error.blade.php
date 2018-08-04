@if(Session::has('success'))
    <script>
    swal({   
        title: "{{ Session::get('success') }}",
        timer: 2000,   
        type: 'success',
        showConfirmButton: false 
    });
    </script>
@endif


