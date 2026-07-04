<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-100 leading-tight tracking-tight">
                {{ __('Ver Detalles de la Línea de Pedido') }}
            </h2>
            <a href="{{ route('order_lines.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 border border-transparent rounded-xl font-semibold text-xs text-gray-800 dark:text-gray-200 uppercase tracking-widest hover:bg-gray-300 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 shadow-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Volver a la lista
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 dark:border-gray-700 p-8">
                
                <div class="mb-6 grid grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Pedido Relacionado</h3>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400">
                            Pedido #{{ $order_line->order->id ?? 'No encontrado' }}
                        </span>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Artículo Solicitado</h3>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-mono font-medium bg-indigo-100 text-indigo-800 dark:bg-indigo-900/30 dark:text-indigo-400">
                            {{ $order_line->article->internal_code ?? 'Artículo eliminado' }}
                        </span>
                    </div>
                </div>

                <div class="mt-8 border-t border-gray-100 dark:border-gray-700 pt-6 grid grid-cols-3 gap-6 bg-gray-50 dark:bg-gray-900/50 p-4 rounded-xl">
                    <div>
                        <h3 class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Cantidad Solicitada</h3>
                        <p class="text-xl font-bold text-gray-900 dark:text-white">{{ $order_line->requested_quantity }} <span class="text-sm font-normal text-gray-500">unidades</span></p>
                    </div>
                    <div>
                        <h3 class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Precio Unitario</h3>
                        <p class="text-xl font-semibold text-gray-900 dark:text-white">${{ number_format($order_line->unit_price, 2) }}</p>
                    </div>
                    <div>
                        <h3 class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Subtotal de Línea</h3>
                        <p class="text-xl font-bold text-green-600 dark:text-green-400">${{ number_format($order_line->line_subtotal, 2) }}</p>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-4 mt-8 pt-6 border-t border-gray-100 dark:border-gray-700">
                    <form action="{{ route('order_lines.destroy', $order_line) }}" method="POST" class="inline" id="form-delete-{{ $order_line->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="confirmarEliminacion({{ $order_line->id }})" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-red-200 dark:border-red-900/50 rounded-xl font-semibold text-xs text-red-600 dark:text-red-400 uppercase tracking-widest shadow-sm hover:bg-red-50 dark:hover:bg-red-900/20 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Eliminar
                        </button>
                    </form>

                    <a href="{{ route('order_lines.edit', $order_line) }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 transition ease-in-out duration-150 shadow-lg shadow-indigo-500/30">
                        Editar Línea
                    </a>
                </div>

            </div>
        </div>
    </div>

    <script>
        function confirmarEliminacion(id) {
            Swal.fire({
                title: '¿Eliminar de forma permanente?',
                text: "Esta acción no se puede deshacer.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#4f46e5',
                cancelButtonColor: '#ef4444',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar',
                background: '#1e293b',
                color: '#ffffff',
                customClass: {
                    popup: 'rounded-2xl border border-gray-700'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-delete-' + id).submit();
                }
            })
        }
    </script>
</x-app-layout>