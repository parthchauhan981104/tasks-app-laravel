@extends('layouts.app')

@section('title')
<title>Tasks</title>
@endsection('title')

@section('main-section')

		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<h1 class="text-center">Tasks</h1>
					</div>
					<div class="card-body">
						<ul class="list-group">

							@if(! sizeof($tasks))
							<div class="alert alert-danger">
								<ul class="list-group">
									<li class="list-group-item">
										No Tasks to show.
									</li>
								</ul>
							</div>
							@endif

							@foreach($tasks as $task)

							  <li class="list-group-item">{{$task->name}}


							  	@if(! $task->completed)
									<a href="/tasks/{{$task->id}}/complete" class="btn btn-warning btn-sm float-right mx-2">
							  			Mark Completed
							  		</a>
								@endif

								@if($task->completed)
									<img style="height:5%; width:5%; border-radius:100%;"src="images/tick.png" alt="Done" class="float-right mx-1">
								@endif

								<a href="/tasks/{{$task->id}}" class="btn btn-primary btn-sm float-right mx-2">
							  			View
							  	</a>

							  	
							  	
							  </li>

								
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		

@endsection('main-section')