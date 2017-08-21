<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js"></script>
<script>
    swal({
        title: '{{ $string }}',
        text: '{{ $subtitle }}',
        type: '{{ $type }}',
        // confirmButtonColor: "#DD6B55",
        confirmButtonText: '{{ $okText }}',
    })
</script>
