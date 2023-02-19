<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Testimonial Form</h4>
						<p class="card-description">Edit testimonial info</p>
						<form action="{{ route('testimonial.update', $data->id ) }}" method="post" enctype="multipart/form-data">
							@method('PUT')
							@csrf
							<div class="form-group">
								<label for="reviewname">Name</label>
								<input
									type="text"
									class="form-control"
									id="reviewname"
									name="reviewname"
									value="{{ $data->name }}"
									placeholder="Input Client name"
									required
								/>
							</div>

							<div class="form-group">
								<label for="reviewbio">Bio</label>
								<input
									type="text"
									class="form-control"
									id="reviewbio"
									name="reviewbio"
									value="{{ $data->bio }}"
									placeholder="Input Client Bio"
									required
								/>
							</div>

							<div class="form-group">
								<label for="reviewrating">Rating</label>
								<input
									type="number"
									class="form-control"
									id="reviewrating"
									name="reviewrating"
									value="{{ $data->rating }}"
									placeholder="Input Review Rating up to 2 decimal places"
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
										placeholder="Upload review image"
										id="reviewimageupdate"
										name="reviewimage"
										value="{{ $data->img }}"
									/>
								</div>
							</div>
							<div class="form-group">
								<img id="tempreviewimageedit" src="{{ $data->img }}" alt="{{ $data->name }}" class="h-auto shadow-sm w-1/2" />
							</div>

							<div class="form-group">
								<label for="reviewtext">Review</label>
								<textarea
									class="form-control"
									id="reviewtext"
									name="reviewtext"
									rows="4"
									required
									placeholder="Input Client Review"
								>{{ $data->review }}</textarea>
							</div>

							@if ($isAdmin === true)
							<button type="submit" class="btn btn-primary mr-2">Edit</button>
							@else
							<button onclick="alert('Only admin can edit food menu')" type="button" class="btn btn-primary mr-2">Edit</button>
							@endif
							<a href="{{ route("testimonial.index") }}" class="btn btn-light">Cancel</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		reviewimageupdate.onchange = evt => {
		  const [file] = reviewimageupdate.files
		  if (file) {
		    tempreviewimageedit.src = URL.createObjectURL(file)
		  }
		}
		
	</script>
</x-admin.index>
