<div class="container mx-auto">
    <div class="max-w-sm flex justify-center mx-auto">
        <div class="relative rounded-3xl bg-gray-100 px-8 py-4 w-full">
            <h1 class="font-semibold text-xl mb-6">
                Importar archivo
            </h1>
            <form class="max-w-5xl mx-auto flex flex-col gap-8 " wire:submit.prevent="save">
                <div>
                    <label class="block mb-3 text-neutral-600 font-medium tracking-tight">
                        Archivo Excel
                    </label>
                    <input
                        class="w-full mb-2"
                        wire:model="file"
                        type="file"
                        placeholder="ejemplo@getaldea.com"
                        required>
                    <small class="text-sm">
                        Archivos Permitidos: .xls, .xlsx, .csv
                    </small>

                    @error('file')
                    <div class="bg-gray-600 border border-gray-400 text-gray-100 px-4 py-2 rounded relative mb-4 mt-4"
                         role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="flex justify-end">
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
