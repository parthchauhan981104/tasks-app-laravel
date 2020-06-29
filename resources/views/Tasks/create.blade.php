@extends('layouts.app')

@section('title')
<title>Create new task</title>
@endsection('title')

@section('main-section')

		<h1 class="text-center my-5">Create Tasks</h1>

		<div class="row justify-content-center">
			<div class="col-md-8">

				<div class="card">
					<div class="card-header">
						Create new task
					</div>
					<div class="card-body">
						
						@if($errors->any())
							<div class="alert alert-danger">
								<ul class="list-group">
									@foreach($errors->all() as $error)
										<li class="list-group-item">
											{{$error}}
										</li>
									@endforeach
								</ul>
							</div>
						@endif

						<form action="/create" method="post">
							@csrf
							
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Name">
							</div>
							<div class="form-group">
								<textarea class="form-control" cols="5" rows="5" name="description" placeholder="Description"></textarea>
							</div>
							<div class="form-group text-center">
								<button type="submit" class="btn btn-success">
									Create Task
								</button>
							</div>

						</form>
						
					</div>
				</div>
			</div>
		</div>

@endsection('main-section')