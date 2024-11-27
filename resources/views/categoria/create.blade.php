<form class="max-w-sm mx-auto"  action="{{ url('categoria') }}" method="POST">
@csrf
<div class="mb-5">
    <label for="descricao">descricao</label>
    <input type="text" name="descricao" id="descricao"  required />
  </div>

<button type="submit">Criar Categoria</button>
</form>