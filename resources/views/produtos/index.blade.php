@foreach($produtos as $entity)
<div>
<h3>{{ $entity->name }}</h3>
<p>{{ $entity->type }}</p>
<p>{{ $entity->strenght }}</p>
<a href="{{ url('produtos/'.$entity->id.'/edit') }}">Edit</a>
<form action="{{ url('produtos/'.$entity->id) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit">Delete</button>
</form>
</div>
@endforeach