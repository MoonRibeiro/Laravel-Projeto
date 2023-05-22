<!DOCTPE html>
<html>
<head>
<title>Pedidos</title>
<link rel="stylesheet" href="css/table.css">
</head>
<body>
<table class="styled-table" border = "1">
<thead>
<tr>
<td>Nome</td>
<td>Endereço</td>
<td>Combo</td>
<td>Pagamento</td>
</tr>
</thead>
@foreach ($orders as $order)
<tr>
<td>{{ $order->name }}</td>
<td>{{ $order->address }}</td>
<td>{{ $order->combo }}</td>
<td>{{ $order->payment }}</td>
</tr>
@endforeach
</table>
</body>
</html>