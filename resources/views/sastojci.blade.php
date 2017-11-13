@extends ('master')

@section ('content')
 Recepti:<br>
	
	@foreach($ingredients as $ingredient)
	{{ $ingredient->id }} &nbsp; 
	{{ $ingredient->name }}<br>
	@endforeach
	
	
@endsection