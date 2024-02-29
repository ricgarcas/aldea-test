<section class="bg-gray-50 py-4">
    <div class="container px-4 mx-auto flex flex-col gap-4">
        <h1 class="text-3xl font-semibold text-gray-800">
            Bienvenido, {{ auth()->user()->name  }} 👋
        </h1>
        <div class="p-8 border bg-white rounded-3xl  shadow-sm">
            <div class="flex flex-wrap items-center justify-between -m-6">
                <div class="w-full lg:w-1/2 p-6">
                    <div class="relative xl:top-4">
                        <canvas id="chart"></canvas>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 p-6">
                    <div class="grid grid-cols-2 -m-2">
                        <div class="p-2">
                            <div class="h-full p-10 text-center border border-gray-100 rounded-md">
                                <h2 class="font-medium text-4xl text-gray-900 tracking-tighter">
                                    {{ $expenses->count() }}
                                </h2>
                                <p class="font-medium text-sm text-gray-500">Gastos</p>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="h-full p-10 text-center border border-gray-100 rounded-md">
                                <h2 class="font-medium text-3xl text-gray-900 tracking-tighter">
                                    {{ Number::currency($expenses->sum('amount')) }}
                                </h2>
                                <p class="font-medium text-sm text-gray-500">
                                    Total Gastado
                                </p>
                            </div>
                        </div>
                        <div class="p-2">
                            <a href="/expenses">
                                <div
                                    class="h-full p-10 text-center bg-gray-100 text-gray-800 rounded-md hover:bg-gray-200 text-2xl flex justify-center items-center">
                                    Mis Gastos
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <a href="/expenses/import">
                                <div
                                    class="h-full p-10 text-center bg-gray-100 text-gray-800 rounded-md hover:bg-gray-200 text-2xl flex justify-center items-center">
                                    Importar Excel
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@once
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            const ctx = document.getElementById('chart');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: @json($labels),
                    datasets: [{
                        label: 'Cantidad Gastada',
                        data: @json($data),
                        borderWidth: 1
                    }]
                },
            });
        </script>
    @endpush
@endonce
