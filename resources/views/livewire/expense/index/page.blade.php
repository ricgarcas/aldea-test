<div class="container mx-auto">
    <div class="flex justify-center mx-auto">
        <div class="max-w-4xl relative rounded-3xl bg-gray-100 px-10 py-8 w-full">
            <div class="flex justify-between">

                <h1 class="font-semibold text-xl mb-6">
                    Mis Gastos
                </h1>

                <div>
                    <a href="/expenses/import" wire:navigate class="px-4 py-2 bg-neutral-900 text-white rounded-lg">
                        Importar Gastos
                    </a>
                </div>
            </div>

            <table class="w-full">
                <thead>
                <tr>
                    <th class="text-neutral-600 font-semibold tracking-tight text-left py-2 px-4 text-md">Gasto</th>
                    <th class="text-neutral-600 font-semibold tracking-tight text-left py-2 px-4 text-md">Fecha</th>
                    <th class="text-neutral-600 font-semibold tracking-tight text-right py-2 px-4 text-md">Cantidad</th>
                    <th class="text-neutral-600 font-semibold tracking-tight text-left py-2 px-4 text-md">Categoría
                    </th>
                    <th class="text-neutral-600 font-semibold tracking-tight text-right"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($expenses as $expense)
                    <tr class="hover:bg-gray-200">
                        <td class="text-left py-1 text-gray-600 px-4">
                            {{ $expense->description }}
                        </td>
                        <td class="text-left text-gray-600 px-4">
                            {{ $expense->date->diffForHumans() }}
                        </td>
                        <td class="text-right text-gray-600 px-4">
                            $ {{ Number::format($expense->amount) }}
                        </td>
                        <td class="text-center text-gray-600 px-4 py-1">
                            @if($expense->category !== null)
                                <div class="bg-slate-300 text-sm rounded-full px-1 py-1">
                                    {{ $expense->category }}
                                </div>
                            @else

                            @endif

                        </td>
                        <td class="text-gray-600 px-4">
                            <a href="/expenses/{{ $expense->id }}/edit"
                               class="text-sm text-gray-700 rounded-lg underline">
                                @if($expense->category === null)
                                    Asignar Categoría
                                @else
                                    Editar
                                @endif

                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
