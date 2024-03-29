<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				{{ __('Membros') }}
		</h2>
	</x-slot>

	<div class="py-6 px-4">
		<div class="sm:px-6 lg:px-8">
			<div class="flex flex-col">
				<div class="flex justify-between mb-4">
					<p>Membros</p>
					<x-action-button class="bg-primary-light w-9 h-9 md:w-40 space-x-2 rounded-full flex-shrink-0 justify-center" href="{{ route('membros.create') }}">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
						</svg>
						<span class="hidden md:inline-flex">{{ __('Novo Membro') }}</span>
					</x-action-button>
				</div>
				<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
					<div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
						<div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
							<table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
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
											NIF
										</th>
										<th
											scope="col"
											class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
										>
											Telemovel
										</th>
										<th
											scope="col"
											class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
										>
											Sexo
										</th>
										<th scope="col" class="relative px-6 py-3">
											<span class="sr-only">Action</span>
										</th>
									</tr>
								</thead>
								<tbody class="bg-white divide-y divide-gray-200">
									@foreach ($membros as $membro)
										<tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
											<td class="px-6 py-4">
												<div class="flex items-center">
													<div class="flex-shrink-0 w-8 h-8 text-blue-300">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
														</svg>
													</div>
													<div class="ml-4">
														<div class="text-sm font-medium text-gray-900">{{ $membro->nome_completo }}</div>
														<div class="text-sm text-gray-500">{{ $membro->email }}</div>
													</div>
												</div>
											</td>
											<td class="px-6 py-4 whitespace-nowrap">
												<div class="text-sm text-gray-900">{{ $membro->NIF }}</div>
											</td>
											<td class="px-6 py-4 whitespace-nowrap">
												<div
													class="class="text-sm font-medium text-gray-900""
												>
													{{ $membro->telemovel }}
												</div>
											</td>
											<td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $membro->genero }}</td>

											<td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap flex items-center space-x-3 flex-col md:flex-row">
												<a href="{{ route('membros.edit', $membro) }}" class="text-indigo-600 hover:text-indigo-900 mb-4 md:mb-0">Editar</a>
												
												<form action="{{ route('membros.destroy', $membro) }}" method="POST" class="mr-1">
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
