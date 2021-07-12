<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				{{ __('Calendário') }}
		</h2>
	</x-slot>

	<div class="py-6 px-4">
		<div class="container mx-auto sm:px-6 lg:px-8 flex flex-col items-center min-h-screen">
			<div id="calendar" class="w-full"></div>
		</div>
	</div>
</x-app-layout>
