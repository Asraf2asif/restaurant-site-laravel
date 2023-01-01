<x-home.index>
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Food-Menu Form</h4>
						<p class="card-description">Add/Edit food menu info</p>
						<form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="productname">Name</label>
								<input
									type="text"
									class="form-control"
									id="productname"
									name="productname"
									placeholder="Input product name"
									required
								/>
							</div>

							<div class="form-group">
								<label for="productprice">Price</label>
								<input
									type="number"
									class="form-control"
									id="productprice"
									name="productprice"
									placeholder="Input product price up to 2 decimal places"
									pattern="[0-9]+([\.,][0-9]+)?" 
									step="0.01"
									repuired
								/>
							</div>

							<div class="form-group">
								<label>Image upload</label>
								<input type="file" name="img[]" class="file-upload-default" />
								<div class="input-group col-xs-12">
									<input
										type="file"
										class="form-control file-upload-info"
										placeholder="Upload product image"
										id="productimage"
										name="productimage"
										required
									/>
									{{-- <span class="input-group-append">
										<button
											class="file-upload-browse btn btn-primary"
											type="button"
										>
											Upload
										</button> --}}
									</span>
								</div>
							</div>

							<div class="form-group">
								<label for="productdescription">Description</label>
								<textarea
									class="form-control"
									id="productdescription"
									name="productdescription"
									rows="4"
									placeholder="Input product description"
								></textarea>
							</div>

							<button type="submit" class="btn btn-primary mr-2">Submit</button>
							<button class="btn btn-light">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="content-wrapper">
		<div class="col-lg-10 grid-margin stretch-card">
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
								@foreach(["Name", "Price", "Image", "Description", "Created at", "Action"] as $heading)
									<th class="font-bold text-white">{{$heading}}</th>
								@endforeach
							</tr>
						</thead>
						<tbody>
							@foreach($data as $data)
							<tr>
								<td>{{$data->name}}</td>
								<td>{{$data->price}}</td>
								<td>{{$data->img}}</td>
								<td class="max-w-[190px] min-w-[190px] !leading-normal !whitespace-normal break-words">{{$data->desc}}</td>
								<td>{{$data->created_at}}</td>
								@if($usertype == "1")
								<td>
									<a
										{{-- href="{{url('/deleteuser', $data->id)}}" --}}
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
