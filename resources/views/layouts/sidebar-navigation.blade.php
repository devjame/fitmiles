<aside 
	x-transition:enter="transition transform duration-300"
	x-transition:enter-start="-translate-x-full opacity-30  ease-in"
	x-transition:enter-end="translate-x-0 opacity-100 ease-out"
	x-transition:leave="transition transform duration-300"
	x-transition:leave-start="translate-x-0 opacity-100 ease-out"
	x-transition:leave-end="-translate-x-full opacity-0 ease-in"
	class="fixed inset-y-0 z-10 bg-primary h-screen  hidden sm:block shadow-xl transition-all transform" :class="sidebarOpen ? 'w-64' : 'w-20'"
	:class="{'-translate-x-full lg:translate-x-0 lg:w-20': !isSidebarOpen}">

    <!-- Logo -->
	<div class="flex-shrink-0 flex items-center p-6">
		<a href="{{ route('dashboard') }}">
			<x-application-logo class="block h-10 w-auto fill-current text-secondary" />
		</a>
		<span class="pl-4 text-2xl uppercase text-white font-bold hidden sm:inline-block" x-show="sidebarOpen">FitMiles</span>
	</div>

	<div class="absolute top-2 right-0 px-1 text-accent cursor-pointer hover" @click=" sidebarOpen = ! sidebarOpen ">
		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-show="sidebarOpen">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-show="!sidebarOpen">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
		</svg>
	</div>

	<nav class="text-white text-base font-semibold pt-3">

		<x-sidebar-link class="w-full" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
			</svg>
			<span x-show="sidebarOpen" class="hidden sm:inline-block pl-4">{{ __('Dashboard') }}</span>
		</x-sidebar-link>

		<x-sidebar-link class="w-full" :href="route('treinadores')" :active="request()->routeIs('treinadores')">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
			</svg>
			<span x-show="sidebarOpen" class="hidden sm:inline-block pl-4">{{ __('Treinadores') }}</span>
		</x-sidebar-link>

		<x-sidebar-link class="w-full" :href="route('membros')" :active="request()->routeIs('membros')">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
			<span x-show="sidebarOpen" class="hidden sm:inline-block pl-4">{{ __('Membros') }}</span>
		</x-sidebar-link>
		
		<x-sidebar-link class="w-full" :href="route('calendario')" :active="request()->routeIs('calendario')">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
			</svg>
			<span x-show="sidebarOpen" class="hidden sm:inline-block pl-4">{{ __('Calendario') }}</span>
		</x-sidebar-link>

		<x-sidebar-link class="w-full" :href="route('planos')" :active="request()->routeIs('planos')">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
			</svg>
			<span x-show="sidebarOpen" class="hidden sm:inline-block pl-4">{{ __('Planos') }}</span>
		</x-sidebar-link>

		<x-sidebar-link class="w-full" :href="route('modalidades')" :active="request()->routeIs('modalidades')">
			<x-gym-icon class="h-6 w-6 " fill="none" stroke="currentColor"></x-gym-icon>
			<span x-show="sidebarOpen" class="hidden sm:inline-block pl-4">{{ __('Modalidades') }}</span>
		</x-sidebar-link>

	</nav>

	<div class="absolute w-full bottom-0 mb-6 ml-6 text-red-300">
		<form method="POST" action="{{ route('logout') }}">
			@csrf
			<a href="{{ route('dashboard') }}" 
				class="inline-flex items-center"
				onclick="event.preventDefault();
				this.closest('form').submit();">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
				</svg>
				<span class="pl-4" x-show="sidebarOpen">{{ __('Sair') }}</span>
			</a>
		</form>
	</div>
</aside>