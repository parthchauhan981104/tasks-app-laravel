@extends('layouts.app')

@section('title')
<title>Edit task - {{$task->name}}</title>
@endsection('title')

@section('main-section')

		<h1 class="text-center my-5">Edit Tasks</h1>

		<div class="row justify-content-center">
			<div class="col-md-8">

				<div class="card">
					<div class="card-header">
						Edit - {{$task->name}}
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

						<form action="/update" method="post">
							@csrf

							<input type="hidden" name="taskId" value="{{$task->id}}">
							
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" name="name" value="{{$task->name}}">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control" cols="5" rows="5" name="description">{{$task->description}}</textarea>
							</div>
							<div class="form-group text-center">
								<button type="submit" class="btn btn-success">
									Update Task
								</button>
							</div>

						</form>
						
					</div>
				</div>
			</div>
		</div>

@endsection('main-section')