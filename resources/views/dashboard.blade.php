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
                    <h3>Escolha e clique em uma das opções abaixo.</h3>                    
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
                                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-purple-100 text-purple-500">
                                            {{-- <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg> --}}
                                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                                            </svg>
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
                                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                            </svg>
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
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-pink-100 text-pink-500">
                                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
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
                                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                            </svg>
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
                                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-yellow-100 text-yellow-500">
                                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                            </svg>
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
                                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                                                </svg>
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
                                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                                </svg>
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
                                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                                                </svg>
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
                                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                                </svg>
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
                                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
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

                                    @can('Users')
                                    {{-- USUÁRIOS --}}
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                            </div>
                                            <div class="flex flex-col flex-grow ml-4">
                                                <div class="text-sm text-gray-500">
                                                    <a href="{{ route('users.index') }}">Cadastro Admin</a>
                                                </div>
                                                <div class="font-bold text-lg">
                                                    <a href="{{ route('users.index') }}">USUÁRIOS</a>
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
                                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                            </div>
                                            <div class="flex flex-col flex-grow ml-4">
                                                <div class="text-sm text-gray-500">
                                                    <a href="{{ route('users-tenant.index') }}">Cadastro</a>
                                                </div>
                                                <div class="font-bold text-lg">
                                                    <a href="{{ route('users-tenant.index') }}">USUÁRIOS</a>
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
                                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
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
                                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
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

                                    @can('Parameters')
                                    {{-- TENANTS --}}
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-yellow-100 text-yellow-500">
                                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                                </svg>
                                            </div>
                                            <div class="flex flex-col flex-grow ml-4">
                                                <div class="text-sm text-gray-500">
                                                    <a href="{{ route('parameters.index') }}">Efluentes | Laboratório</a>
                                                </div>
                                                <div class="font-bold text-lg">
                                                    <a href="{{ route('parameters.index') }}">PARÂMETROS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endcan

                                    @can('Laboratórios')
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-green-500">
                                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                                </svg>
                                            </div>
                                            <div class="flex flex-col flex-grow ml-4">
                                                <div class="text-sm text-gray-500">
                                                    <a href="{{ route('laboratories.index') }}">Módulo Efluentes</a>
                                                </div>
                                                <div class="font-bold text-lg">
                                                    <a href="{{ route('laboratories.index') }}">LABORATÓRIOS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endcan

                                    @can('Análises')
                                    {{-- TENANTS --}}
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="flex flex-col flex-grow ml-4">
                                                <div class="text-sm text-gray-500">
                                                    <a href="{{ route('analyzes.index') }}">Efluentes | Laboratório</a>
                                                </div>
                                                <div class="font-bold text-lg">
                                                    <a href="{{ route('analyzes.index') }}">ANÁLISES</a>
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
