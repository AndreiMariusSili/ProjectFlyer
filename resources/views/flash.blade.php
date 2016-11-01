@if(session()->has('flash_message'))
    <script type="text/javascript">
        swal({
            title: "{{ session('flash_message.title') }}",
            text: "{{ session('flash_message.text') }}",
            type: "{{ session('flash_message.type') }}",
            timer: 1500,
            showConfirmButton: false
        });
    </script>
@endif

@if(session()->has('flash_message_overlay'))
    <script type="text/javascript">
        swal({
            title: "{{ session('flash_message_overlay.title') }}",
            text: "{{ session('flash_message_overlay.text') }}",
            type: "{{ session('flash_message_overlay.type') }}",
            confirmButtonText: 'Okay'
        });
    </script>
@endif