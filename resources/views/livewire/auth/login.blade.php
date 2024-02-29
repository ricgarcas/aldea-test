<div class="min-h-screen w-full flex justify-center items-center bg-gray-100">
    <div class="w-full lg:w-1/3 md:px-4 px-8">
        <form class="max-w-5xl mx-auto" wire:submit.prevent="login">
            <h3 class="text-4xl font-semibold mb-8">Inicia Sesión</h3>
            <div>
                <label class="block mb-3 text-neutral-600 font-medium tracking-tight">
                    Correo Electrónico
                </label>
                <input
                    class="w-full mb-6 px-8 py-5 text-lg outline-none rounded-lg border border-neutral-100 placeholder-neutral-300 font-medium focus:ring-4 focus:ring-neutral-100 transition duration-200"
                    wire:model="email"
                    type="email"
                    placeholder="ejemplo@getaldea.com"
                    required>
                @error('email')
                <div class="bg-gray-600 border border-gray-400 text-gray-100 px-4 py-2 rounded relative mb-4 mt-4"
                     role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div>
                <label class="block mb-3 text-neutral-600 font-medium tracking-tight">
                    Contraseña
                </label>
                <input
                    class="w-full px-8 py-5 text-lg outline-none rounded-lg border border-neutral-100 placeholder-neutral-300 font-medium focus:ring-4 focus:ring-neutral-100 transition duration-200"
                    type="password"
                    placeholder="********"
                    wire:model="password"
                    required>
                @error('password')
                <div class="bg-gray-600 border border-gray-400 text-gray-100 px-4 py-2 rounded relative mb-4 mt-4"
                     role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mt-8">
                <button
                    class="flex justify-center items-center text-center w-full mb-6 p-5 font-semibold tracking-tight text-lg text-white bg-neutral-900 hover:bg-neutral-800 focus:bg-neutral-800 rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200"
                    type="submit">
                    Iniciar Sesión
                </button>
            </div>

            <div class="text-right">

                <a class="inline-block text-neutral-600 text-sm font-medium hover:text-neutral-800 tracking-tight transition duration-200"
                   href="/register">
                    ¿No tienes cuenta? Regístrate
                </a>
            </div>

        </form>

    </div>
</div>
