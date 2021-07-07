{{-- <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
	<div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
		{{ $icon }}
	</div>
	<div>
		<p class="mb-2 text-sm font-medium text-gray-600">
			{{ $label }}
		</p>
		<p class="text-lg font-semibold text-gray-700">
			{{ $data }}
		</p>
	</div>
</div> --}}
<div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
	<div class="flex items-start justify-between">
		<div class="flex flex-col space-y-2">
			<span class="text-gray-400">{{ $label }}</span>
			<span class="text-lg font-semibold">{{ $data }}</span>
		</div>
		<div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
		{{ $icon }}
	</div>
	</div>
	<div>
		<span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
		<span>from 2019</span>
	</div>
</div>