<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				{{ __('Treinadores') }}
		</h2>
	</x-slot>

	<div class="py-6 px-4 container">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="flex flex-col">
				<div class="flex justify-between mb-4" x-data="{ showModal: false}">
					<p>Treinadores</p>
					<x-action-button class="mr-3 bg-primary-light w-9 h-9 md:w-44 rounded-full flex-shrink-0 justify-center" >
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
						</svg>
						<span class="hidden md:inline-flex">{{ __('Criar Treinador') }}</span>
					</x-action-button>
				</div>
				<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
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
											Genéro
										</th>
										<th scope="col" class="relative px-6 py-3">
											<span class="sr-only">Action</span>
										</th>
									</tr>
								</thead>
								<tbody class="bg-white divide-y divide-gray-200">
									@foreach ($treinadores as $treinador)
										<tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
											<td class="px-6 py-4 whitespace-nowrap">
												<div class="flex items-center">
													<div class="flex-shrink-0 w-10 h-10">
														<img
															class="w-10 h-10 rounded-full"
															src="https://avatars0.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
															alt=""
														/>
													</div>
													<div class="ml-4">
														<div class="text-sm font-medium text-gray-900">{{ $treinador->nome_completo }}</div>
														<div class="text-sm text-gray-500">{{ $treinador->email }}</div>
													</div>
												</div>
											</td>
											<td class="px-6 py-4 whitespace-nowrap">
												<div class="text-sm text-gray-900">{{ $treinador->NIF }}</div>
											</td>
											<td class="px-6 py-4 whitespace-nowrap">
												<div
													class="class="text-sm font-medium text-gray-900""
												>
													{{ $treinador->telemovel }}
												</div>
											</td>
											<td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $treinador->genero }}</td>
											<td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
												<a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
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
