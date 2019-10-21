<html>

<head>
</head>
<body>

@foreach($pessoas as $pessoa)
   Nome: {{ $pessoa->nome }} <br>
   @foreach($pessoa->telefones as $telefone)
        Telefone: ({{ $telefone->ddd }}){{ $telefone->telefone}} <br>
   @endforeach

@endforeach
</body>

</html>