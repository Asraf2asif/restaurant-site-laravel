<x-home.index>
	<div class="content-wrapper">
		<div class="col-lg-8 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Admin data</h4>
					{{--
					<p class="card-description">
						Add class <code>.table-hover</code> --}}
					</p>
					<table class="table table-hover">
						<thead>
							<tr class="bg-slate-800">
								<th class="font-bold text-white">Name</th>
								<th class="font-bold text-white">Email</th>
								<th class="font-bold text-white">Created</th>
								<th class="font-bold text-white">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $data)
							<tr>
								<td>{{$data->name}}</td>
								<td>{{$data->email}}</td>
								<td>{{$data->created_at}}</td>
								@if($data->usertype == "0")
								<td>
									<a
										href="{{url('/deleteuser', $data->id)}}"
										class="badge badge-danger cursor-pointer"
										>Delete</a
									>
								</td>
								@else
								<td><p class="badge badge-dark">Not allowded</p></td>
								@endif
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</x-home.index>