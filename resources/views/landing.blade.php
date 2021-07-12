<x-guest-layout>
    <nav class="relative px-4 py-4 flex justify-between items-center bg-white">
		<a class="text-3xl font-bold leading-none text-secondary" href="/">
			<x-application-logo class="h-10 fill-current"/>
		</a>		
        
        @if (Route::has('login'))
        <div>
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="lg:inline-block lg:ml-auto mr-3 py-2 px-6 bg-gray-100 hover:bg-gray-200 text-sm text-gray-900 font-bold  rounded-xl transition duration-200">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="lg:inline-block py-2 px-6 bg-primary hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200">Register</a>
                @endif
            @endauth
        </div>
        @endif

	</nav>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mb-8">
        <section class="pt-24 bg-white">
            <div class="px-12 mx-auto max-w-7xl">
                <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
                    <h1 class="mb-8 text-4xl font-extrabold leading-none tracking-normal text-gray-900 md:text-6xl md:tracking-tight">
                        <span>Leve</span> <span >o seu Ginásio</span> <span class="block w-full py-2 text-transparent bg-clip-text leading-12 bg-gradient-to-r from-secondary to-primary-light lg:inline">milhas a frente</span>🚀
                    </h1>
                    <p class="px-0 mb-8 text-lg text-gray-600 md:text-xl lg:px-24">
                        Ganhe a produtividade que tanto deseja com <span class="text uppercase text-primary font-bold text-2xl">Fitmiles</span>. Contruido para facilitar a gestão do seu ginásio.
                    </p>
                    <div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
                        <a href="{{ route('login') }}" class="inline-flex items-center justify-center w-full px-6 py-3 mb-2 text-lg text-white bg-green-400 rounded-2xl sm:w-auto sm:mb-0">
                            Comece já
                            <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center w-full px-6 py-3 mb-2 text-lg bg-gray-100 rounded-2xl sm:w-auto sm:mb-0">
                            Aprenda mais
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="w-full mx-auto mt-20 text-center md:w-10/12">
                    <div class="relative z-0 w-full mt-8">
                        <div class="relative overflow-hidden shadow-2xl">
                            <div class="flex items-center flex-none px-4 bg-secondary rounded-b-none h-11 rounded-xl">
                                <div class="flex space-x-1.5">
                                    <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                                    <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                                    <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                                </div>
                            </div>
                            <img src="{{ asset('storage/dashboard.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-guest-layout>
