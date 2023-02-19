<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Special Dishes Form</h4>
						<p class="card-description">Edit special dishes info</p>
						<form action="{{ route('specialdishes.update', $data->id ) }}" method="post" enctype="multipart/form-data">
							@method('PUT')
							@csrf
							<div class="form-group">
								<label for="spdishesname1edit">Name first part</label>
								<input
									type="text"
									class="form-control"
									id="spdishesname1edit"
									name="spdishesname1edit"
									value="{{ $data->namepart1 }}"
									placeholder="Input dishes name first part"
									required
								/>
							</div>

							<div class="form-group">
								<label for="spdishesname2edit">Name second part</label>
								<input
									type="text"
									class="form-control"
									id="spdishesname2edit"
									name="spdishesname2edit"
									value="{{ $data->namepart2 }}"
									placeholder="Input dish name second part"
									required
								/>
							</div>

							<div class="form-group">
								<label for="spdishespriceedit">Price</label>
								<input
									type="number"
									class="form-control"
									id="spdishespriceedit"
									name="spdishespriceedit"
									value="{{ $data->price }}"
									placeholder="Input dish price up to 2 decimal places"
									pattern="[0-9]+([\.,][0-9]+)?" 
									step="0.01"
									repuired
								/>
							</div>

							<div class="form-group">
								<label for="spdishesimageedit">Image upload</label>
								<div class="input-group col-xs-12">
									<input
										type="file"
										class="form-control file-upload-info"
										placeholder="Upload dish image"
										id="spdishesimageedit"
										name="spdishesimageedit"
										value="{{ $data->img }}"
									/>
								</div>
							</div>
							<div class="form-group">
								<img id="tempspdishesimageedit" src="{{ $data->img }}" alt="{{ $data->name }}" class="h-auto shadow-sm w-1/2" />
							</div>

							<div class="form-group">
								<label for="spdishesdescedit">Description</label>
								<textarea
									class="form-control"
									id="spdishesdescedit"
									name="spdishesdescedit"
									rows="4"
									required
									placeholder="Input dish description"
								>{{ $data->desc }}</textarea>
							</div>

							@if ($isAdmin === true)
							<button type="submit" class="btn btn-primary mr-2">Edit</button>
							@else
							<button onclick="alert('Only admin can edit spdish item')" type="button" class="btn btn-primary mr-2">Edit</button>
							@endif
							<a href="{{ route('specialdishes.index') }}" class="btn btn-light">Cancel</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		spdishesimageedit.onchange = evt => {
		  const [file] = spdishesimageedit.files
		  if (file) {
		    tempspdishesimageedit.src = URL.createObjectURL(file)
		  }
		}
		
	</script>
</x-admin.index>
