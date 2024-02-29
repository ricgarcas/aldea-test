<section class="py-6">
    <div class="container mx-auto px-4">
        <div
            class="flex items-center justify-between px-10 py-5 bg-white border rounded-full shadow-sm">
            <a href="/dashboard"
               class="font-bold text-2xl text-gray-600">
                Aldea
            </a>
            <div class="ml-auto flex gap-2 text-gray-800">
                <span>
                    Bienvenido, <span class="font-bold">{{ auth()->user()->name }}</span>
                </span>
                <a href="/register"
                   class="ml-4 text-gray-600 font-medium tracking-tight">
                    Cerrar Sesión
                </a>
            </div>
        </div>
    </div>
</section>
