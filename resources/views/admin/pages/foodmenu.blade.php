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
								@foreach(["Image", "Name", "Price", "Description", "Created at", "", ""] as $heading)
									<th class="font-bold text-white">{{$heading}}</th>
								@endforeach
							</tr>
						</thead>
						<tbody>
							@foreach($data as $data)
							<tr>
								<td class="w-32">
									<img src="{{$data->img}}" alt="{{$data->name}}" class="!w-full !h-auto !rounded-none">
								</td>
								<td>{{$data->name}}</td>
								<td>{{$data->price}}</td>								
								<td class="max-w-[190px] min-w-[190px] !leading-normal !whitespace-normal break-words">{{$data->desc}}</td>
								<td>{{$data->created_at}}</td>
								@if($usertype == "1")
								<td>
									<a
										href="{{ url('/updatefoodmenu', $data->id) }}"
										class="badge badge-primary cursor-pointer"
										>Update</a
									>
								</td>
								<td>
									<a
										onclick="return confirmDeleteFood({{ $data->id }} , '{{ $data->name }}');"
										href="{{ url('/delfoodmenu', $data->id) }}"
										class="badge badge-danger cursor-pointer"
										>Delete</a
									>
								</td>
								@else
								<td><p class="badge badge-dark">Not allowded</p></td>
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
	<script>
  function confirmDeleteFood(id, name) {
      if(!confirm("Are You Sure to delete this food item, Named: " + name + ", Id: " + id + "." ))
      event.preventDefault();
  }
 </script>
</x-home.index>
