<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				{{ __('Modaliades') }}
		</h2>
	</x-slot>

	<div class="py-6 px-4 container">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="flex flex-col">
				<div class="flex justify-between mb-4">
					<p>Modalidades</p>
					<x-action-button class="bg-primary-light w-9 h-9 md:w-44 rounded-full flex-shrink-0 justify-center" href="{{ route('modalidades.create') }}">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
						</svg>
						<span class="hidden md:inline-flex">{{ __('Nova Modalidade') }}</span>
					</x-action-button>
				</div>
				<div class="max-w-full -my-2 overflow-x-auto md:overflow-x-hidden	sm:-mx-6 lg:-mx-8">
					<div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
						<div class="border-b border-gray-200 rounded-md shadow-md">
							<table class="min-w-full divide-y divide-gray-200">
								<thead class="bg-gray-50">
									<tr>
										<th
											scope="col"
											class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
										>
											Nome
										</th>
										<th
											scope="col"
											class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
										>
											Descrição
										</th>
										<th
											scope="col"
											class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
										>
											Status
										</th>
										<th scope="col" class="relative px-6 py-3">
											<span class="sr-only">Action</span>
										</th>
									</tr>
								</thead>
								<tbody class="bg-white divide-y divide-gray-200">
									@foreach ($modalidades as $modalidade)
										<tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
											<td class="px-6 py-4 whitespace-nowrap">
												<div class="flex items-center">
													{{-- <div class="flex-shrink-0 w-8 h-8 text-blue-300">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
														</svg>
													</div> --}}
													<div>
														<div class="text-sm font-medium text-gray-900">{{ $modalidade->nome }}</div>
													</div>
												</div>
											</td>
											<td class="px-6 py-4">
												<div class="text-sm text-gray-900">{{ $modalidade->descricao }}</div>
											</td>
											<td class="px-6 py-4  text-sm whitespace-nowrap">
												@if ($modalidade->status === 'inativo')
													<span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
														<span aria-hidden
														class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
														<span class="relative">{{ $modalidade->status }}</span>
													</span>
												@else
													<span
															class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
															<span aria-hidden
																	class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
															<span class="relative">{{ $modalidade->status }}</span>
													</span>
												@endif
											</td>
											<td class="px-6 py-4 text-sm font-medium text-right flex items-center flex-col  md:flex-row space-x-3">

												<a href="{{ route('modalidades.edit', $modalidade) }}" class="text-indigo-600 hover:text-indigo-900 mb-4 md:mb-0">Editar</a>

												<form action="{{ route('modalidades.destroy', $modalidade) }}" method="POST" class="mr-1">

													@csrf
													@method('DELETE')
													<button type="submit" class="text-red-500">Remover</button>

											</form>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</x-app-layout>
