<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-100 leading-tight tracking-tight">
            {{ __('Panel de Control') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 dark:border-gray-700 p-8 relative">
                <div class="absolute top-0 right-0 -mt-4 -mr-4 w-32 h-32 bg-indigo-500 opacity-10 rounded-full blur-3xl"></div>
                <div class="flex items-center gap-6 relative z-10">
                    <div class="flex-shrink-0 w-16 h-16 bg-indigo-100 dark:bg-indigo-900/50 rounded-full flex items-center justify-center border border-indigo-200 dark:border-indigo-800/50">
                        <span class="text-3xl">👋</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-1">
                            ¡Bienvenido de nuevo, {{ Auth::user()->name }}!
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            Aquí tienes un resumen rápido del estado de tus registros y accesos directos del sistema.
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <a href="{{ route('articles.index') }}" class="group block bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-2xl border border-gray-100 dark:border-gray-700 hover:border-indigo-500/50 dark:hover:border-indigo-500/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Gestión de Articulos</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Organiza y clasifica toda la información del sistema en diferentes áreas o temáticas.</p>
                            </div>
                            <div class="p-3 bg-blue-50 dark:bg-blue-900/30 rounded-xl border border-blue-100 dark:border-blue-800/50 text-blue-600 dark:text-blue-400 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            </div>
                        </div>
                        <div class="flex items-center text-sm font-semibold text-indigo-600 dark:text-indigo-400">
                            Administrar Articulos
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </div>
                </a>

                <a href="{{ route('article_factories.index') }}" class="group block bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-2xl border border-gray-100 dark:border-gray-700 hover:border-emerald-500/50 dark:hover:border-emerald-500/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">Control de articulos de fabrica</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Crea, visualiza y gestiona todos tus apuntes vinculados de forma estructurada.</p>
                            </div>
                            <div class="p-3 bg-emerald-50 dark:bg-emerald-900/30 rounded-xl border border-emerald-100 dark:border-emerald-800/50 text-emerald-600 dark:text-emerald-400 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </div>
                        </div>
                        <div class="flex items-center text-sm font-semibold text-emerald-600 dark:text-emerald-400">
                            Ver articulos de fabrica
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </div>
                </a>

                <a href="{{ route('clients.index') }}" class="group block bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-2xl border border-gray-100 dark:border-gray-700 hover:border-emerald-500/50 dark:hover:border-emerald-500/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">Control de clientes</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Crea, visualiza y gestiona todos tus apuntes vinculados de forma estructurada.</p>
                            </div>
                            <div class="p-3 bg-emerald-50 dark:bg-emerald-900/30 rounded-xl border border-emerald-100 dark:border-emerald-800/50 text-emerald-600 dark:text-emerald-400 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </div>
                        </div>
                        <div class="flex items-center text-sm font-semibold text-emerald-600 dark:text-emerald-400">
                            Ver clientes
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </div>
                </a>

                <a href="{{ route('factories.index') }}" class="group block bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-2xl border border-gray-100 dark:border-gray-700 hover:border-emerald-500/50 dark:hover:border-emerald-500/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">Control de fabricas</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Crea, visualiza y gestiona todos tus apuntes vinculados de forma estructurada.</p>
                            </div>
                            <div class="p-3 bg-emerald-50 dark:bg-emerald-900/30 rounded-xl border border-emerald-100 dark:border-emerald-800/50 text-emerald-600 dark:text-emerald-400 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </div>
                        </div>
                        <div class="flex items-center text-sm font-semibold text-emerald-600 dark:text-emerald-400">
                            administrar fabricas
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </div>
                </a>

                <a href="{{ route('orders.index') }}" class="group block bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-2xl border border-gray-100 dark:border-gray-700 hover:border-emerald-500/50 dark:hover:border-emerald-500/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">Control de ordenes</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Crea, visualiza y gestiona todos tus apuntes vinculados de forma estructurada.</p>
                            </div>
                            <div class="p-3 bg-emerald-50 dark:bg-emerald-900/30 rounded-xl border border-emerald-100 dark:border-emerald-800/50 text-emerald-600 dark:text-emerald-400 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </div>
                        </div>
                        <div class="flex items-center text-sm font-semibold text-emerald-600 dark:text-emerald-400">
                            Ver ordenes 
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </div>
                </a>

                <a href="{{ route('order_lines.index') }}" class="group block bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-2xl border border-gray-100 dark:border-gray-700 hover:border-emerald-500/50 dark:hover:border-emerald-500/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">Control de lineas de envio</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Crea, visualiza y gestiona todos tus apuntes vinculados de forma estructurada.</p>
                            </div>
                            <div class="p-3 bg-emerald-50 dark:bg-emerald-900/30 rounded-xl border border-emerald-100 dark:border-emerald-800/50 text-emerald-600 dark:text-emerald-400 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </div>
                        </div>
                        <div class="flex items-center text-sm font-semibold text-emerald-600 dark:text-emerald-400">
                            Ver lineas de envio
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </div>
                </a>

                <a href="{{ route('shipping_addresses.index') }}" class="group block bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-2xl border border-gray-100 dark:border-gray-700 hover:border-emerald-500/50 dark:hover:border-emerald-500/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">Control de rutas de envio</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Crea, visualiza y gestiona todos tus apuntes vinculados de forma estructurada.</p>
                            </div>
                            <div class="p-3 bg-emerald-50 dark:bg-emerald-900/30 rounded-xl border border-emerald-100 dark:border-emerald-800/50 text-emerald-600 dark:text-emerald-400 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </div>
                        </div>
                        <div class="flex items-center text-sm font-semibold text-emerald-600 dark:text-emerald-400">
                            Ver rutas de envio
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>