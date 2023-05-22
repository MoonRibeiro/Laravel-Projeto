<!DOCTYPE html>
<html>
<head>
    <title>Pedido</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form.css">
    <script src="https://kit.fontawesome.com/28dc79afa9.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Faça seu pedido!
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="petName" ><i class="fa-solid fa-paw fa-bounce"></i>Digite o nome do seu bichinho</label>
          <input type="text" id="name" name="name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="address"><i class="fa-solid fa-paw fa-bounce"></i>Digite o seu endereço</label>
          <textarea name="address" class="address" required=""></textarea>
        </div>
        <div class="form-group">
          <label for="combo"><i class="fa-solid fa-paw fa-bounce"></i>Selecione um combo:</label>
          <select id="combo" name="combo">
            <option value="tosa">Tosa - R$45</option>
            <option value="banho">Banho - R$25</option>
            <option value="tosa-banho">Tosa + Banho - R$70</option>
            <option value="racao">Ração</option>
          </select> 
        </div>
        <div class="form-group">
          <label for="payment"><i class="fa-solid fa-paw fa-bounce"></i>Selecione a forma de pagamento:</label>
          <select id="payment" name="payment">
            <option value="vista">A vista</option>
            <option value="credit">Cartão de crédito</option>
            <option value="debit">Cartão de Débito</option>
            <option value="pix">Pix</option>
          </select> 
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>
