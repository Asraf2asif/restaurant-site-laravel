<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Testimonial Form</h4>
						<p class="card-description">Add testimonial info</p>
						<form action="{{ route('testimonial.store') }}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="reviewname">Name</label>
								<input
									type="text"
									class="form-control"
									id="reviewname"
									name="reviewname"
									placeholder="Input Client Name"
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
									placeholder="Input review Rating up to 2 decimal places"
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
										id="reviewimage"
										name="reviewimage"
										required
									/>
								</div>
							</div>
							<div class="form-group">
								<img id="tempreviewimage" src="#" alt="temp-uploded-img" class="h-auto shadow-sm w-1/2" style="display: none" />
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
								></textarea>
							</div>

							@if ($isAdmin === true)
							<button type="submit" class="btn btn-primary mr-2">Add</button>
							@else
							<button onclick="alert('Only admin can add food menu')" type="button" class="btn btn-primary mr-2">Add</button>
							@endif
							<a href="{{ route("testimonial.index") }}" class="btn btn-light">Cancel</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		var imgInput = document.getElementById("reviewimage");		
		imgInput.addEventListener('change', (event) => {
			if (event.target.files[0]) {
        var reader = new FileReader();
        
				var imgTemp = document.getElementById("tempreviewimage");	  
        reader.onload = function (e) {
        	imgTemp.setAttribute("src", e.target.result);
        }
        
        reader.readAsDataURL(event.target.files[0]);

        if (imgTemp.style.display === "inline") {
			    imgTemp.style.display = "block";
			  } else {
			    imgTemp.style.display = "inline";
			  }
	    }
		});
		
	</script>
</x-admin.index>
