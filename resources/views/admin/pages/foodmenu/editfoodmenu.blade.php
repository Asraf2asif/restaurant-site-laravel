<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Food-Menu Form</h4>
						<p class="card-description">Edit food menu info</p>
						<form action="{{ route('foodmenu.update', $data->id ) }}" method="post" enctype="multipart/form-data">
							@method('PUT')
							@csrf
							<div class="form-group">
								<label for="productname">Name</label>
								<input
									type="text"
									class="form-control"
									id="productname"
									name="productname"
									value="{{ $data->name }}"
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
									value="{{ $data->price }}"
									placeholder="Input product price up to 2 decimal places"
									pattern="[0-9]+([\.,][0-9]+)?" 
									step="0.01"
									repuired
								/>
							</div>

							<div class="form-group">
								<label>Image upload</label>
								<div class="input-group col-xs-12">
									<input
										type="file"
										class="form-control file-upload-info"
										placeholder="Upload product image"
										id="productimageupdate"
										name="productimage"
										value="{{ $data->img }}"
									/>
								</div>
							</div>
							<div class="form-group">
								<img id="tempproductimageedit" src="{{ $data->img }}" alt="{{ $data->name }}" class="h-auto shadow-sm w-1/2" />
							</div>

							<div class="form-group">
								<label for="productdescription">Description</label>
								<textarea
									class="form-control"
									id="productdescription"
									name="productdescription"
									rows="4"
									required
									placeholder="Input product description"
								>{{ $data->desc }}</textarea>
							</div>

							@if ($isAdmin === true)
							<button type="submit" class="btn btn-primary mr-2">Edit</button>
							@else
							<button onclick="alert('Only admin can edit food menu')" type="button" class="btn btn-primary mr-2">Edit</button>
							@endif
							<a href="{{ route("foodmenu.index") }}" class="btn btn-light">Cancel</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		productimageupdate.onchange = evt => {
		  const [file] = productimageupdate.files
		  if (file) {
		    tempproductimageedit.src = URL.createObjectURL(file)
		  }
		}
		
	</script>
</x-admin.index>
