<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				{{ __('Novo Plano') }}
		</h2>
	</x-slot>

	<div class="py-6 px-4">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="flex flex-col items-center justify-center">
				<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 w-full md:w-2/3 lg:w-1/2 ">
					<div class="inline-block w-full py-2 align-middle">
						<!-- Validation Errors -->
						<x-auth-validation-errors class="mb-4" :errors="$errors" />

						<form method="POST" action="{{ route('planos.store') }}">
							@csrf

							<!-- Name -->
							<div>
									<x-label for="nome" :value="__('Nome')" />

									<x-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus />
							</div>

							<!-- Descrição -->
							<div class="mt-4">
									<x-label for="descricao" :value="__('Descricão')" />

									<textarea id="descricao" 
									class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
									name="descricao" :value="old('descricao')" required >

									</textarea>
							</div>

							<!-- Preço -->
							<div class="mt-4">
									<x-label for="montante" :value="__('Preço')" />

									<x-input id="montante" class="block mt-1 w-full" type="number" name="montante" :value="old('montante')" required autofocus />
							</div>
							
							<!-- Duração -->
							<div class="mt-4">
								<x-label for="duracao" :value="__('Valido Até')" />
								
								<select name="duracao" id="duracao" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required v-model="old('duracao')">
									<option value="30 dias" selected>1 mês</option>
									<option value="90 dias">3 meses</option>
									<option value="180 dias">6 meses</option>
									<option value="360 dias">12 meses</option>
								</select>
							</div>
							
							<!-- Actions button-->
							<div class="flex items-center justify-between mt-4">
									<a class="inline-flex items-center text-center px-4 py-2 text-sm bg-red-400 text-white rounded-md" href="{{ route('planos.index') }}">
											{{ __('Cancelar') }}
									</a>

									<x-button class="ml-4">
											{{ __('Guardar') }}
									</x-button>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</x-app-layout>
