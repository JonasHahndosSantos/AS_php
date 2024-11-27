<form action="{{ url('categoria/'.$categoria->id) }}" method="POST">
@csrf
@method('PUT')
<div class="mb-5">
    <label for="descricao">Name</label>
    <input type="text" name="descricao" id="descricao" value="{{ $categoria->descricao }}" required />
  </div>
<button type="submit">Update Produto</button>
</form>