<!-- Header Area Starts -->
<header
	class="shadow-md left-0 lg:left-1/2 ml-4 w-56 lg:w-4/5 py-1 px-0 bg-white absolute top-5 z-1 lg:transform lg:-translate-x-1/2 lg:translate-y-0 rounded lg:mx-auto xl:w-11/12"
>
	<div class="mx-4 lg:flex lg:items-center">
		<div class="flex items-center">
			<div class="lg:shrink-0">
				<a href="index.html"
					><img src="assets/images/logo/logo.png" alt="logo" class="m-auto max-w-[200px] min-w-[130px] w-9/12 px-2 py-4 lg:p-5 h-auto lg:m-0"
				/></a>
			</div>
				<div class="nav-ham p-4 lg:hidden cursor-pointer transition ease-in-out duration-75 open">
					@foreach ([1, 2, 3] as $data)
		    		<span class="bg-gray-500 block w-5 h-[3px] my-1 mx-0"></span>
		    	@endforeach
				</div>		
				<div class="nav-ham p-4 lg:hidden cursor-pointer relative transition ease-in-out duration-75 close hidden">
					<span class="bg-gray-500 block w-5 h-[3px] my-1 mx-0 absolute top-3.5 right-4 transform rotate-45"></span>
	    		<span class="bg-gray-500 block w-5 h-[3px] my-1 mx-0  absolute top-3.5 right-4 transform -rotate-45"></span>
				</div>
		</div>
		
		<div class="lg:flex-1 nav-collapse hidden lg:block">			
			<ul class="pb-2 lg:pb-0 lg:flex lg:flex-wrap lg:items-center lg:justify-end">
				@foreach ($navdata as $data)
				     <li class="p-2.5 lg:p-4 text-right text-sm lg:font-bold text-slate-800 uppercase lg:text-left">
				     	<a href={{ $data['href'] }}>{{ $data['text'] }}</a>
				     </li> 
				@endforeach
				    
				
				@if (Route::has('login')) @auth
				<div class="m-2 flex justify-end lg:mx-4 lg:block">
					<x-jet-dropdown align="right" width="48">
						<x-slot name="trigger">
							@if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
							<button
								class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition"
							>
								<img
									class="h-8 w-8 rounded-full object-cover"
									src="{{ Auth::user()->profile_photo_url }}"
									alt="{{ Auth::user()->name }}"
								/>
							</button>
							@else
							<span class="inline-flex rounded-md">
								<button
									type="button"
									class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition"
								>
									{{ Auth::user()->name }}

									<svg
										class="ml-2 -mr-0.5 h-4 w-4"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 20 20"
										fill="currentColor"
									>
										<path
											fill-rule="evenodd"
											d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
											clip-rule="evenodd"
										/>
									</svg>
								</button>
							</span>
							@endif
						</x-slot>

						<x-slot name="content">
							<!-- Account Management -->
							<div class="block px-4 py-2 text-xs text-gray-400">
								{{ __('Manage Account') }}
							</div>

							<x-jet-dropdown-link href="{{ route('profile.show') }}">
								{{ __('Profile') }}
							</x-jet-dropdown-link>

							@if (Laravel\Jetstream\Jetstream::hasApiFeatures())
							<x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
								{{ __('API Tokens') }}
							</x-jet-dropdown-link>
							@endif

							<div class="border-t border-gray-100"></div>

							<!-- Authentication -->
							<form method="POST" action="{{ route('logout') }}" x-data>
								@csrf

								<x-jet-dropdown-link
									href="{{ route('logout') }}"
									@click.prevent="$root.submit();"
								>
									{{ __('Log Out') }}
								</x-jet-dropdown-link>
							</form>
						</x-slot>
					</x-jet-dropdown>
				</div>
				@else
				<li class="text-right p-2.5 text-sm font-bold text-slate-800 uppercase lg:text-left">
					<a href="{{ route('login') }}" class="text-sm text-gray-500">Login</a>
				</li>

				@if (Route::has('register'))
				<li class="text-right p-2.5 text-sm font-bold text-slate-800 uppercase lg:text-left">
					<a href="{{ route('register') }}" class="text-sm text-gray-500"
						>Register</a
					>
				</li>
				@endif @endif @endif
			</ul>
		</div>
	</div>
</header>
<!-- Header Area End -->
