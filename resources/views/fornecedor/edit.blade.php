<form action="{{ url('fornecedor/'.$fornecedor->id) }}" method="POST">
@csrf
@method('PUT')
<div class="mb-5">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="{{ $fornecedor->nome }}" required />
  </div>
  <label for="contato">contato</label>
    <input type="text" name="contato" id="contato" value="{{ $fornecedor->nome }}" required />
  </div>
<button type="submit">Update Produto</button>
</form>
