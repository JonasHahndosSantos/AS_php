@foreach($fornecedor as $entity)
<div>
<h3>{{ $entity->nome }}</h3>
<p>{{ $entity->contato }}</p>
<a href="{{ url('fornecedor/'.$entity->id.'/edit') }}">Edit</a>
<form action="{{ url('fornecedor/'.$entity->id) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit">Delete</button>
</form>
</div>
@endforeach
