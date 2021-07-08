<a {{ $attributes->merge(['class' => 'inline-flex items-center bg-primary-light border border-transparent md:rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-light active:bg-primary focus:outline-none focus:border-primary focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
