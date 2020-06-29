@extends('layouts.app')

@section('title')
<title>Task - {{$task->name}}</title>
@endsection('title')

@section('main-section')

		<h1 class="text-center my-5">{{$task->name}}</h1>

		<div class="row justify-content-center">
			<div class="col-md-6">

				<div class="card">
					<div class="card-header text-center">
						Description
					</div>
					<div class="card-body text-center">
						{{$task->description}}
					</div>
					<div class="card-footer text-center">
						<a href="/tasks/{{$task->id}}/edit" style="text-decoration: none !important;" class="btn btn-info mx-2">
								Edit
						</a>

						<a href="/tasks/{{$task->id}}/delete" style="text-decoration: none !important;" class="btn btn-danger mx-2">
								Delete
						</a>
					</div>
				</div>
			</div>
		</div>

@endsection('main-section')