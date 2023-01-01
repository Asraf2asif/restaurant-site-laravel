<!-- Header Area Starts -->
<header
	class="w-4/5 py-1 px-0 bg-white absolute top-5 left-1/2 z-1 transform translate-x-[-50%] translate-y-0 rounded mx-auto xl:w-11/12"
>
	<div class="mx-4 md:flex md:items-center">
		<div class="px-4 md:shrink-0">
			<a href="index.html"
				><img src="assets/images/logo/logo.png" alt="logo" class="m-auto max-w-[200px] w-9/12 p-5 h-auto md:m-0"
			/></a>
		</div>
		<div class="md:flex-1">
			<div class="custom-navbar">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<ul class="md:flex md:flex-wrap md:items-center md:justify-end">
				@foreach ($navdata as $data)
				     <li class="text-right p-4 text-sm font-bold text-slate-800 uppercase md:text-left">
				     	<a href={{ $data['href'] }}>{{ $data['text'] }}</a>
				     </li> 
				@endforeach
				    
				
				@if (Route::has('login')) @auth
				<div class="m-2 flex justify-end md:mx-4 md:block">
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
				<li class="text-right p-4 text-sm font-bold text-slate-800 uppercase md:text-left">
					<a href="{{ route('login') }}" class="text-sm text-gray-500">Login</a>
				</li>

				@if (Route::has('register'))
				<li class="text-right p-4 text-sm font-bold text-slate-800 uppercase md:text-left">
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
