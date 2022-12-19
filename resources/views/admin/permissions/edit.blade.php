<x-admin-master>
	@section('content')
	@if(session()->has('permission-updated'))
	<div class="alert alert-success">
		{{session('permission-updated')}}
	</div>
	@endif
	<div class="row">
		<div class="col-sm-6">
			<h1>Edit Permission: {{$permission->name}}</h1>
			<form method="post" action="{{route('permissions.update', $permission->id)}}">
				@csrf
				@method("PUT")
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name" id="name" value="{{$permission->name}}">
				</div>
				<button class="btn btn-primary">Update</button>
			</form>
		</div>
	</div>
	<!-- <div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Permissions</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="permissions-table" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Options</th>
									<th>Id</th>
									<th>Name</th>
									<th>Slug</th>
									<th>Attach</th>
									<th>Detach</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Options</th>
									<th>Id</th>
									<th>Name</th>
									<th>Slug</th>
									<th>Attach</th>
									<th>Detach</th>
								</tr>
							</tfoot>
							<tbody>
								
								<tr>
									<td><input type="checkbox"></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	@endsection
</x-admin-master>