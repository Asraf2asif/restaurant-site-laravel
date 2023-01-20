<x-home.index>
	<div class="content-wrapper">
		<a href="{{ url('/addfoodmenu') }}" class="btn btn-primary mx-2">Add New Food</a>
	</div>

	<div class="content-wrapper">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Admin data</h4>					
					<p class="card-description">
						Add class <code>.table-hover</code> 
					</p>
					<table class="table table-hover overflow-auto block">
						<thead>
							<tr class="bg-slate-800">
								@foreach(["Name", "Phone number", "Date", "Time", "Person", "Created at"] as $heading)
									<th class="font-bold text-white">{{$heading}}</th>
								@endforeach
							</tr>
						</thead>
						<tbody>
							@foreach($data as $data)
							<tr>
								<td>{{$data->name}}</td>
								<td>{{$data->phone_number}}</td>								
								<td>{{$data->date}}</td>								
								<td>{{$data->time}}</td>								
								<td>{{$data->person}}</td>
								<td>{{$data->created_at}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</x-home.index>
