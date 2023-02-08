<x-home.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<a href="{{ route('spdish.create') }}" class="btn btn-primary mx-2">Add Special Dish</a>
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
								<td>
									<p class="font-bold">
		                <span class="text-amber-400">{{ $data['namepart1'] }}</span> <span class="leading-normal">{{ $data['namepart2'] }}</span>
		              </p>
		            </td>
								<td>{{$data->price}}</td>								
								<td class="max-w-[190px] min-w-[190px] !leading-normal !whitespace-normal break-words">{{$data->desc}}</td>
								<td>{{$data->created_at}}</td>
								<td>
									<a
										href="{{ route('spdish.edit', $data->id) }}"
										class="badge badge-primary cursor-pointer"
										>Edit</a
									>
								</td>
								<td>
									@if ($isAdmin === true)
									<form method="POST" action="{{ route('spdish.destroy', $data->id) }}">
						        @method('DELETE')
										@csrf

						        <div class="form-group">
						        	<button 
						        		type="submit" 
						        		class="badge badge-danger cursor-pointer" 
						        		onclick="return confirmDeleteSpDish({{ $data->id }} , '{{ $data->name }}');"
						        		>Delete</button>
						        </div>
								  </form>
									@else
									<button
										onclick="alert('Only admin can special dish info')"
										class="badge badge-danger cursor-pointer"
										>Delete</button>
									@endif
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script>
  function confirmDeleteSpDish(id, name) {
      if(!confirm("Are You Sure to delete this special dish item, Named: " + name + ", Id: " + id + "." ))
      event.preventDefault();
  }
 </script>
</x-home.index>