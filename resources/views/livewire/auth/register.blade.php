<div class="min-h-screen w-full flex justify-center items-center bg-gray-100">
    <div class="w-full lg:w-1/3 md:px-4 px-8">
        <form class="max-w-5xl mx-auto" wire:submit.prevent="register">
            <h3 class="text-4xl font-semibold mb-8">Regístrate</h3>
            <div>
                <label
                    for="name"
                    class="block mb-3 text-neutral-600 font-medium tracking-tight">
                    Nombre
                </label>
                <input
                    class="w-full mb-6 px-8 py-5 text-lg outline-none rounded-lg border border-neutral-100 placeholder-neutral-300 font-medium focus:ring-4 focus:ring-neutral-100 transition duration-200"
                    wire:model="name"
                    id="name"
                    type="text"
                    placeholder="Jorge Dzul"
                    required>
                @error('name')
                <div class="bg-teal-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
                @enderror
            </div>

            <div>
                <label
                    for="email"
                    class="block mb-3 text-neutral-600 font-medium tracking-tight">
                    Correo Electrónico
                </label>
                <input
                    class="w-full mb-6 px-8 py-5 text-lg outline-none rounded-lg border border-neutral-100 placeholder-neutral-300 font-medium focus:ring-4 focus:ring-neutral-100 transition duration-200"
                    wire:model="email"
                    id="email"
                    type="email"
                    placeholder="ejemplo@getaldea.com"
                    required>
                @error('email')
                <div class="bg-teal-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
                @enderror
            </div>

            <div>
                <label
                    for="password"
                    class="block mb-3 text-neutral-600 font-medium tracking-tight">
                    Contraseña
                </label>
                <input
                    class="w-full mb-8 px-8 py-5 text-lg outline-none rounded-lg border border-neutral-100 placeholder-neutral-300 font-medium focus:ring-4 focus:ring-neutral-100 transition duration-200"
                    type="password"
                    id="password"
                    placeholder="********"
                    wire:model="password"
                    required>
                @error('password')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
                @enderror
            </div>

            <div>
                <button
                    class="flex justify-center items-center text-center w-full mb-6 p-5 font-semibold tracking-tight text-lg text-white bg-black hover:bg-neutral-800 focus:bg-neutral-800 rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200"
                    type="submit">
                    Regístrate
                </button>
            </div>

            <div class="text-right">

                <a class="inline-block text-neutral-600 text-sm font-medium hover:text-neutral-800 tracking-tight transition duration-200"
                   href="/register">
                    ¿Ya tienes cuenta? Inicia Sesión
                </a>
            </div>

        </form>

    </div>
</div>
