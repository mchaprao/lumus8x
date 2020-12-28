<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-50 overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}                
                <div class="text-center">
                    <br>
                    <h3>Olá, <strong>{{ Auth::user()->name }}</strong>. Seja bem-vindo(a) ao <strong>Lumus8x</strong></h3><br>
                    <h3>Escolha e clique em uma das opções de menu abaixo.</h3>                    
                </div>
                <br>                  

                    {{-- <div class="row">
                        
                        <!-- CardS -->
                        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                            <!-- Card -->
                            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                    ETE
                                    </p>
                                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                    10
                                    </p>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                        LICENÇAS E DOCUMENTOS
                                    </p>
                                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                    24
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                PRODUÇÃO
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                376
                                </p>
                            </div>
                            </div>
                            <!-- Card -->
                            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">                            
                                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                    SITE
                                    </p>
                                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                    35
                                    </p>
                                </div>
                            </div>
                        </div>                        
                    </div><!-- FIM ROW -->

                    <div class="row">
                        <div class="flex flex-wrap mb-2">
                            <div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pr-2">
                                <div class="bg-green-600 border rounded shadow p-2">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pl-1 pr-4"><i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                                        <div class="flex-1 text-right">
                                            <h5 class="text-white">Total Revenue</h5>
                                            <h3 class="text-white text-3xl">3249&euro;<span class="text-green-400"><i class="fas fa-caret-down"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pl-2">
                                <div class="bg-blue-600 border rounded shadow p-2">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pl-1 pr-4"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                                        <div class="flex-1 text-right">
                                            <h5 class="text-white">Total Users</h5>
                                            <h3 class="text-white text-3xl">13 <span class="text-blue-400"><i class="fas fa-caret-up"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- FIM ROW --> --}}

                    <div class="row">
                        {{-- <div class="flex  min-h-screen bg-gray-200 text-gray-800"> --}}
                            <div class="p-4 w-full">
                                <div class="grid grid-cols-12 gap-4">

                                @can('Efluentes')
                                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                    <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                        </div>
                                        <div class="flex flex-col flex-grow ml-4">
                                            <div class="text-sm text-gray-500">
                                                <a href="{{ route('dash.ete') }}">Módulo</a>
                                            </div>
                                            <div class="font-bold text-lg">
                                                <a href="{{ route('dash.ete') }}">EFLUENTES</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 @endcan
                                 @can('Documentos')
                                {{-- DOCUMENTOS --}}
                                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                    <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-green-500">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                                        </div>
                                        <div class="flex flex-col flex-grow ml-4">
                                            <div class="text-sm text-gray-500">
                                                <a href="{{ route('dash.doc') }}">Módulo</a>
                                            </div>
                                            <div class="font-bold text-lg">
                                                <a href="{{ route('dash.doc') }}">DOCUMENTOS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endcan
                                 @can('Tecnicos')
                                {{-- TÉCNICOS --}}
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                            </div>
                                            <div class="flex flex-col flex-grow ml-4">
                                                <div class="text-sm text-gray-500">
                                                    <a href="{{ route('dash.tec') }}">Módulo</a>
                                                </div>
                                                <div class="font-bold text-lg">
                                                    <a href="{{ route('dash.tec') }}">TÉCNICOS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endcan
                                    {{-- @admin() --}}
                                    @can('Portal')
                                    {{-- SITE --}}
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                        </div>
                                        <div class="flex flex-col flex-grow ml-4">
                                            <div class="text-sm text-gray-500">
                                                <a href="{{ route('dash.portal') }}">Módulo</a>
                                            </div>
                                            <div class="font-bold text-lg">
                                                <a href="{{ route('dash.portal') }}">PORTAL WEB</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    @endcan

                                    @can('Portal')
                                    {{-- Carousel --}}
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                        </div>
                                        <div class="flex flex-col flex-grow ml-4">
                                            <div class="text-sm text-gray-500">
                                                <a href="{{ route('carousels.index') }}">Módulo Portal WEB</a>
                                            </div>
                                            <div class="font-bold text-lg">
                                                <a href="{{ route('carousels.index') }}">CARROSSEL</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    @endcan
                                    {{-- @endadmin --}}
                                
                            {{-- </div> --}}
                        {{-- </div> --}}

                        {{-- <div class="text-center">
                            <br>
                            <h3>Opções ADMIN</h3> 
                        </div> --}}

                    {{-- </div><!-- FIM ROW -->

                    <div class="row"> --}}
                        {{-- <div class="text-center">
                            <br>
                            <h3>ADMIN</h3> 
                        </div> --}}
                        {{-- <br> --}}
                        {{-- <div class="flex  min-h-screen bg-gray-200 text-gray-800"> --}}
                            {{-- <div class="p-4 w-full"> --}}
                                {{-- <div class="grid grid-cols-12 gap-4"> --}}
                                    
                                    @can('Clientes')
                                    {{-- TENANTS --}}
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-red-100 text-red-500">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            </div>
                                            <div class="flex flex-col flex-grow ml-4">
                                                <div class="text-sm text-gray-500">
                                                    <a href="{{ route('tenants.index') }}">Cadastro</a>
                                                </div>
                                                <div class="font-bold text-lg">
                                                    <a href="{{ route('tenants.index') }}">CLIENTES</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endcan
                                    @can('Planos')
                                    {{-- PLANOS --}}
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                            </div>
                                            <div class="flex flex-col flex-grow ml-4">
                                                <div class="text-sm text-gray-500">
                                                    <a href="{{ route('plans.index') }}">Cadastro</a>
                                                </div>
                                                <div class="font-bold text-lg">
                                                    <a href="{{ route('plans.index') }}">PLANOS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endcan
                                    @can('Perfil')
                                    {{-- PERFIS --}}                                    
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-green-500">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                                            </div>
                                            <div class="flex flex-col flex-grow ml-4">
                                                <div class="text-sm text-gray-500">
                                                    <a href="{{ route('properfis.index') }}">Cadastro</a>
                                                </div>
                                                <div class="font-bold text-lg">
                                                    <a href="{{ route('properfis.index') }}">PERFIS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endcan
                                    @can('Permissão')
                                    {{-- PERMISSÃO --}}
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                            </div>
                                            <div class="flex flex-col flex-grow ml-4">
                                                <div class="text-sm text-gray-500">
                                                    <a href="{{ route('permissions.index') }}">Cadastro</a>
                                                </div>
                                                <div class="font-bold text-lg">
                                                    <a href="{{ route('permissions.index') }}">PERMISSÕES</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endcan
                                    @can('Cargos')
                                    {{-- PERFIS --}}                                    
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-green-500">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                                            </div>
                                            <div class="flex flex-col flex-grow ml-4">
                                                <div class="text-sm text-gray-500">
                                                    <a href="{{ route('roles.index') }}">Cadastros</a>
                                                </div>
                                                <div class="font-bold text-lg">
                                                    <a href="{{ route('roles.index') }}">CARGOS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endcan
                                    @can('Usuarios')
                                    {{-- USUÁRIOS --}}
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                            </div>
                                            <div class="flex flex-col flex-grow ml-4">
                                                <div class="text-sm text-gray-500">
                                                    <a href="{{ route('users.index') }}">Cadastro</a>
                                                </div>
                                                <div class="font-bold text-lg">
                                                    <a href="{{ route('users.index') }}">USUÁRIOS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endcan

                                    @can('Pagar')
                                    {{-- TENANTS --}}
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-red-100 text-red-500">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            </div>
                                            <div class="flex flex-col flex-grow ml-4">
                                                <div class="text-sm text-gray-500">
                                                    <a href="{{ route('tenants.index') }}">Cadastro</a>
                                                </div>
                                                <div class="font-bold text-lg">
                                                    <a href="{{ route('tenants.index') }}">CONTAS A PAGAR</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endcan

                                    @can('Receber')
                                    {{-- TENANTS --}}
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-green-500">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            </div>
                                            <div class="flex flex-col flex-grow ml-4">
                                                <div class="text-sm text-gray-500">
                                                    <a href="{{ route('tenants.index') }}">Cadastro</a>
                                                </div>
                                                <div class="font-bold text-lg">
                                                    <a href="{{ route('tenants.index') }}">CONTAS A RECEBER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endcan
                                    
                                </div>
                            </div>
                    </div><!-- FIM ROW -->
                                       
                </div>
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
