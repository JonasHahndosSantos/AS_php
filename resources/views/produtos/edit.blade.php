<form action="{{ url('produtos/'.$produto->id) }}" method="POST">
@csrf
@method('PUT')
<input type="text" name="nome" placeholder="Nome" value="{{ $produto->nome }}"
required>
<input type="float" name="preco" placeholder="Preco" value="{{ $produto->preco }}"
required>
<input type="number" name="qualidade" placeholder="Qualidade" value="{{
$produto->qualidade }}" required>
<button type="submit">Update Produto</button>
</form>
