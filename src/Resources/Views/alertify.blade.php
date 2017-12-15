<script src="https://cdn.jsdelivr.net/alertifyjs/1.10.0/alertify.min.js"></script>
<script>
    alertify.alert('{{ $subtitle ? $string : ucfirst($type)}}', @if($subtitle) {!! json_encode($subtitle) !!}.join('<br>') @else {{$string}} @endif).setting({
    'label': "{{ $okText }}"
  }).show();;
</script>
