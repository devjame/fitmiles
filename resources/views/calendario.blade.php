<x-app-layout>
<x-slot name="header">
	<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Calendario') }}
	</h2>
</x-slot>

<div class="py-12">
	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="overflow-hidden">

				<div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
					<x-card-item>
						<x-slot name="icon">
							<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
								<path
										d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
								</path>
							</svg>
						</x-slot>
						<x-slot name="label">
							Total Users
						</x-slot>
						<x-slot name="data">
							19238
						</x-slot>
					</x-card-item>
					<x-card-item>
						<x-slot name="icon">
							<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
								<path
										d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
								</path>
							</svg>
						</x-slot>
						<x-slot name="label">
							Total Users
						</x-slot>
						<x-slot name="data">
							19238
						</x-slot>
					</x-card-item>
					<x-card-item>
						<x-slot name="icon">
							<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
								<path
										d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
								</path>
							</svg>
						</x-slot>
						<x-slot name="label">
							Total Users
						</x-slot>
						<x-slot name="data">
							19238
						</x-slot>
					</x-card-item>
				</div>

		</div>
	</div>
</div>
</x-app-layout>
