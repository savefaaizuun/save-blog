@extends('includes.head')

@section('title', 'Create Category')

@section('content')

<div class="container">
	<div class="text-center"><h1>Halaman Buat Kategori</h1></div>
	<hr>

	<div class="col-md-8 col-md-offset-2">
		<div class="form-groupm">
			<form action="" method="post">
				<div class="form-group">
					<input type="text" name="" class="form-control" placeholder="Buat Kategori Baru ...">
				</div>

				<button type="submit" class="btn btn-success btn-block" style="margin-bottom: 20px;"> Save </button>

			</form>
		</div>
	</div>
</div>

@endsection