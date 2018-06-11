@extends('includes.head')

@section('title', 'Create Category')

@section('content')

<div class="container">
	<div class="text-center"><h1>Halaman Buat Kategori</h1></div>
	<hr>

	<div class="col-md-8 col-md-offset-2">
		<div class="form-groupm">
			<form action="{{route('category.store')}}" method="post">
				{{csrf_field()}}
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Buat Kategori Baru ...">
				</div>

				<button type="submit" class="btn btn-success btn-block" style="margin-bottom: 20px;"> Save </button>

			</form>
		</div>

			<div class="text-center"><h4>Semua Kategori</h4></div>
				<table class="table table-striped table-hover">
					<thead>
						<tr class="info">
							<td>No.</td>
							<td>Nama Kategori</td>
							<td>Edit</td>
							<td>Delete</td>
							<td>Tanggal Edit</td>
						</tr>
					</thead>
					<tbody>
						@foreach($category as $showcat)
						<tr>
							<td>{{ $showcat->id }}</td>
							<td>{{ $showcat->name }}</td>
							<td><a href="#{{ $showcat->id }}" data-toggle="modal"><i class="fa fa-edit"></i></a></td>
							<td><a href="#"><i class="fa fa-trash"></i></a></td>
							<td>{{ date('j F Y', strtotime($showcat->updated_at)) }}</td>
						</tr>

						<div class="modal fade" id="{{ $showcat->id }}">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden='true'>@times;</button>
										<h4 class="modal-title"> Edit Category</h4>
									</div>
									<div class="modal-body">
										<form action="{{route('category.update', $showcat->id)}}" method="post" role="form">
											{{csrf_field()}}
											{{method_field('put')}}
											<div class="form-group">
												<input type="text" class="form-control" name="name" value="{{ $showcat->name }}">
											</div>

											<button type="submit" class="btn btn-primary"> Save</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</tbody>
				</table>
	</div>
</div>

@endsection