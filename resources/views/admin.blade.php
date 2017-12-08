<!-- DO NOT DELETE THIS FILE -->

<!-- this page follows this layout -->
<!-- i suggest make all new pages follow this layout -->
@extends('layout.app')

<!-- title at tab -->
@section('title', 'Admin')
<!-- title at body -->
@section('page-title', 'Admin')

<!-- css styles -->
@section('style')
	<!-- insert custom css styles here -->
	<!-- i suggest to avoid custom css styles and have it in the .css file in `public/css` -->
@endsection

<!-- modals -->
@section('modals')
	<!-- insert css styles here -->
  @include('modals.new_announcement')
  @include('modals.new_project')
@endsection

<!-- left-sidenav -->
@section('left-sidenav')
  <p><a href="#modal-container-new-announcement" role="button" class="btn btn-primary btn-block" data-toggle="modal">New Announcement</a></p>
  <p><a href="#modal-container-new-project" role="button" class="btn btn-primary btn-block" data-toggle="modal">New Project</a></p>
@endsection

@section('body')
	
	<h4>List of Users:</h4>
	@foreach($users as $user)
		{{ $user }}<br>
	@endforeach
	<br>

	<h4>List of Admins:</h4>
	@foreach($admins as $admin)
		{{ $admin }}<br>
	@endforeach
	<br>

	<h4>List of Projects:</h4>
	@foreach($projects as $project)
		{{ $project }}<br>
	@endforeach
	<br>

	<h4>Project Archive:</h4>
	@foreach($project_archives as $project)
		{{ $project }}<br>
	@endforeach
	<br>

	<h4>Positions: </h4>

	<ul class="list-group">

  	<!-- list of tags -->
    @foreach($organization_positions as $position)
	  	<li class="list-group-item">
	  		<form class="form-inline" method="POST" action="/organization/{{$position->organization_position_id}}/remove-position">
	  			{{ $position->name }}&nbsp;
				{{ csrf_field() }}
				<button type="submit" class="btn btn-outline-danger">&times;</button>
			</form>
	  @endforeach

	  <!-- form to add tags -->
	  <li class="list-group-item">
	  	<form class="form-inline" method="POST" action="/organization/add-position">
				{{ csrf_field() }}
			  <input class="form-control" type="text" id="tag_name" name="organization_id" placeholder="Organization ID">&nbsp;			<!-- Gets the "id" of the organization as Organization has not been fully implemented yet to get Name -->
			  <input class="form-control" type="text" id="tag_name" name="position" placeholder="Position">&nbsp; <!-- Gets the name of the new position -->

			  <button class="btn btn-primary" type="submit">Add</button>
			</form>
	</ul>

	<p>
	<div class="alert alert-warning" role="alert">
	  To add a position, input the "organization_id" of the organization for now. You can check their "organization_id" by checking the database. This will be fixed in the future.
	</div>

  @endsection

<!-- right-sidenav -->
@section('right-sidenav')
  <!-- insert featured projects here -->
  @include('layout.right-sidenav') <!-- you can remove this if you do not want the featured projects to be shown -->
@endsection