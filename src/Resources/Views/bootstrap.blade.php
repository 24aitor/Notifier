<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js"></script>
<script>
    $.notify({
        title: '{{ $string }}',
        message: '{{ $subtitle }}'
    },{
        type: '{{ $type }}'
    });
</script>
