<x-app-layout>
<x-slot name="header">
	<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Dashboard') }}
	</h2>
</x-slot>

<div class="py-6 px-4">
	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
			<x-card-item>
				<x-slot name="icon">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path
							d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
						</path>
					</svg>
				</x-slot>
				<x-slot name="label">
					Total Membros
				</x-slot>
				<x-slot name="data">
					{{ $membros }}
				</x-slot>
			</x-card-item>
			<x-card-item>
				<x-slot name="icon">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
					</svg>
				</x-slot>
				<x-slot name="label">
					Total Treinadores
				</x-slot>
				<x-slot name="data">
					{{ $treinadores }}
				</x-slot>
			</x-card-item>
			<x-card-item>
				<x-slot name="icon">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
					</svg>
				</x-slot>
				<x-slot name="label">
					Planos
				</x-slot>
				<x-slot name="data">
					{{ $planos }}
				</x-slot>
			</x-card-item>
		</div>

	</div>
</div>
</x-app-layout>
