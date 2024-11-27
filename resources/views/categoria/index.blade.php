@foreach($categoria as $entity)
<div class="p-4 max-w-sm">
<h3 class=" text-xl font-medium dark:text-gray-900">{{ $entity->descricao }}</h3>
<a class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="{{ url('categoria/'.$entity->id.'/edit') }}">Edit</a>
<form action="{{ url('categoria/'.$entity->id) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit">Delete</button>
</form>
</div>
@endforeach