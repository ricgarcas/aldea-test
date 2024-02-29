<div class="max-w-5xl mx-auto">
    <div class="flex justify-center mx-auto">
        <div class="w-full lg:w-1/2 relative rounded-3xl bg-gray-100 px-8 py-4">
            <h1 class="font-semibold text-xl mb-6">
                Editar Gasto
            </h1>
            <form class="w-full mx-auto flex flex-col gap-2" wire:submit.prevent="save">
                <div>
                    <label class="block mb-3 text-neutral-600 font-medium tracking-tight">
                        Descripción
                    </label>
                    <input
                        class="w-full mb-2 py-2 px-4"
                        wire:model="description"
                        type="text"
                        placeholder="Descripción del gasto"
                        required>

                    @error('description')
                    <div class="bg-gray-600 border border-gray-400 text-gray-100 px-4 py-2 rounded relative mb-4 mt-4"
                         role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div>
                    <label class="block mb-3 text-neutral-600 font-medium tracking-tight">
                        Cantidad
                    </label>
                    <input
                        class="w-full mb-2 py-2 px-4"
                        wire:model="amount"
                        type="number"
                        placeholder="Descripción del gasto"
                        required>

                    @error('description')
                    <div class="bg-gray-600 border border-gray-400 text-gray-100 px-4 py-2 rounded relative mb-4 mt-4"
                         role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div>
                    <label class="block mb-3 text-neutral-600 font-medium tracking-tight">
                        Fecha
                    </label>
                    <input
                        class="w-full mb-2 py-2 px-4"
                        wire:model="date"
                        type="date"
                        required>

                    @error('date')
                    <div class="bg-gray-600 border border-gray-400 text-gray-100 px-4 py-2 rounded relative mb-4 mt-4"
                         role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div>
                    <label class="block mb-3 text-neutral-600 font-medium tracking-tight">
                        Categoría
                    </label>

                    <select
                        class="w-full mb-2 py-2 px-3"
                        wire:model="category"
                        required>
                        <option value="">Selecciona una categoría</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}">{{ $category }}</option>
                        @endforeach
                    </select>

                    @error('date')
                    <div class="bg-gray-600 border border-gray-400 text-gray-100 px-4 py-2 rounded relative mb-4 mt-4"
                         role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="flex justify-end mt-4">
                    <button
                        class="w-full rounded mb-4 px-8 py-3 font-semibold text-white bg-neutral-900 hover:bg-neutral-800"
                        type="submit">
                        Importar
                    </button>
                </div>


            </form>

            <div
                class="absolute inset-0 bg-gray-100 bg-opacity-50 flex justify-center items-center"
                wire:loading.flex
                wire:target="file">
                <div class="flex justify-center items-center">
                    <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-t-2 border-neutral-900"></div>
                </div>
            </div>
        </div>
    </div>
</div>
