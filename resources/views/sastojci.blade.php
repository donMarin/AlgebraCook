@extends ('master')

@section ('content')
 
 Recepti:<br>
	
	@foreach($recipes as $recipes)
	{{ $recipe->id }} &nbsp; 
	{{ $recipe->name }}<br>
	@endforeach

<br>Sastojci:<br>
	@foreach($ingredients as $ingredient)
	{{ $ingredient->id }} &nbsp; 
	{{ $ingredient->name }}<br>
	@endforeach
	
@endsection