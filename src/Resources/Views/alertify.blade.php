<script src="https://cdn.jsdelivr.net/alertifyjs/1.10.0/alertify.min.js"></script>
<script>
    alertify.alert('{{ $subtitle ? $string : ucfirst($type)}}', '{{ $subtitle ? $subtitle : $string }}');
</script>
