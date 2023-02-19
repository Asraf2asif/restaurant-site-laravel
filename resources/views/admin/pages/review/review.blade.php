<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<a href="{{ route('testimonial.create') }}" class="btn btn-primary mx-2">Add Testimonial</a>
	</div>

	<div class="content-wrapper">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Testimonial Data-Table</h4>					
					<p class="card-description">
						Client testiomonials information table 
					</p>

					@if(session()->has('msg'))
					<p class="alert alert-info">{{ session()->get('msg') }}</p>
					@endif
					
					<table class="table table-hover overflow-auto block">
						<thead>
							<tr class="bg-slate-800">
								@foreach(["Image", "Name", "Bio", "Rating", "Description", "Created at", "", ""] as $heading)
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
								<td>{{$data->bio}}</td>								
								<td>{{$data->rating}}</td>								
								<td class="max-w-[190px] min-w-[190px] !leading-normal !whitespace-normal break-words">{{$data->review}}</td>
								<td>{{$data->created_at}}</td>
								<td>
									<a
										href="{{ route('testimonial.edit', $data->id) }}"
										class="badge badge-primary cursor-pointer"
										>Edit</a
									>
								</td>
								<td>
									@if ($isAdmin === true)
									<form method="POST" action="{{ route('testimonial.destroy', $data->id) }}">
						        @method('DELETE')
										@csrf
					        	<button 
					        		type="submit" 
					        		class="badge badge-danger cursor-pointer" 
					        		onclick="return confirmDeleteReview({{ $data->id }} , '{{ $data->name }}');"
					        		>Delete</button>
								  </form>
									@else
									<button
										onclick="alert('Only admin can delete testimonial')"
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
  function confirmDeleteReview(id, name) {
      if(!confirm("Are You Sure to delete this testimonial, Named: " + name + ", Id: " + id + "." ))
      event.preventDefault();
  }
 </script>
</x-admin.index>
