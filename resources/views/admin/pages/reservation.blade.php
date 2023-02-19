<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Reservation Data-Table</h4>					
					<p class="card-description">
						Reservation information table 
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
							@if ($isAdmin === false)
							<tr>
								<td>Only Admin</td>
								<td>can view</td>								
								<td>or edit</td>								
								<td>reservations</td>								
								<td>info</td>
								<td>.</td>
							</tr>
							@else
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
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</x-admin.index>
