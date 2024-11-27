<form class="max-w-sm mx-auto"  action="{{ url('fornecedor') }}" method="POST">
@csrf
<div class="mb-5">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome"  required />
  </div>
  <div class="mb-5">
    <label for="contato">contato</label>
    <input type="text" name="contato" id="contato"  required />
  </div>

<button type="submit">Criar Categoria</button>
</form>




