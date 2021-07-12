<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				{{ __('Editar Treinador') }}
		</h2>
	</x-slot>

	<div class="py-6 px-4 container mx-auto">
		<div class="sm:px-6 lg:px-8">
			<div class="flex flex-col items-center justify-center">
				<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 w-full md:w-2/3 lg:w-1/2 ">
					<div class="inline-block w-full py-2 align-middle ">
						<!-- Validation Errors -->
						<x-auth-validation-errors class="mb-4" :errors="$errors" />

						<form method="POST" action="{{ route('treinadores.update', $treinador) }}">
							@csrf
							@method('PUT')
							<!-- Name -->
							<div>
									<x-label for="nome" :value="__('Nome Completo')" />

									<x-input id="nome" class="block mt-1 w-full" type="text" name="nome" value="{{ $treinador->nome_completo}}" required autofocus />
							</div>

							<!-- Email Address -->
							<div class="mt-4">
									<x-label for="email" :value="__('Email')" />

									<x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $treinador->email }}" required />
							</div>
							
							<!-- Telemovel  -->
							<div class="mt-4">
									<x-label for="telemovel" :value="__('Telemovel')" />

									<x-input id="telemovel" class="block mt-1 w-full" type="tel" name="telemovel" value="{{ $treinador->telemovel }}" required />
							</div>

							<!-- NIF -->
							<div class="mt-4">
									<x-label for="nif" :value="__('NIF')" />

									<x-input id="nif" class="block mt-1 w-full"
										type="text"
										name="nif"
										required  value="{{ $treinador->NIF }}"/>
							</div>
							<!-- Data de Nascimento -->
							<div class="mt-4">
									<x-label for="data_NS" :value="__('Data de Nascimento')" />

									<x-input id="data_NS" class="block mt-1 w-full"
										type="date"
										name="data_NS"
										required value="{{ $treinador->data_de_nascimento }}" />
							</div>
							<!-- Genero -->
							<div class="mt-4">
								<x-label for="genero" :value="__('Sexo')" />
								
								<select name="genero" id="genero" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required v-model="{{ $treinador->genero }}">
									<option value="M">Masculino</option>
									<option value="F">Feminino</option>
								</select>
							</div>
							
							<!-- Endereço -->
							<div class="mt-4">
									<x-label for="address" :value="__('Endereço')" />

									<x-input id="address" class="block mt-1 w-full"
																	type="text"
																	name="address" required value="{{ $treinador->endereco }}"/>
							</div>
							<div class="flex items-center justify-between mt-4">
									<a class="inline-flex items-center text-center px-4 py-2 text-sm bg-red-400 text-white rounded-md" href="{{ route('treinadores.index') }}">
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
