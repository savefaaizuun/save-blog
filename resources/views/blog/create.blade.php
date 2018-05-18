@extends('includes.head')

@section('content')

<br>
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="well">
			<form action="{{route('posts.store')}}" method="post">
				<div class="text-center"><h4>Buat Posts</h4></div>
				{{csrf_field()}}
				<div class="form-group">
					<label>Title:</label>
					<input type="text" name="title" class="form-control" placeholder="Input title..">
				</div>
				<div class="form-group">
					<label>Content:</label>
					<textarea type="text" name="content" class="form-control" placeholder="Input Content.."> </textarea>
				</div>
				<button type="submit" class="btn btn-success">Save</button>
			</form>
		</div>
	</div>
</div>

@endsection