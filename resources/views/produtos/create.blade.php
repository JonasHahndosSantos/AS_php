<form action="{{ url('produtos') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="float" name="preco" placeholder="Preco" required>
    <input type="number" name="qualidade" placeholder="Qualidade" required>
    <select name="categoria_id" required>
        @foreach($categoria as $categoriaItem)
            <option value="{{ $categoriaItem->id }}">{{ $categoriaItem->descricao }}</option>
        @endforeach
    </select>
    <button type="submit">Create Produto</button>
</form>