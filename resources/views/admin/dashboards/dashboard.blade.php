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

                    <div class="row">
                            <div class="p-4 w-full">
                                <div class="grid grid-cols-12 gap-4">
                                {{-- EFLUENTES --}}
                                @can('Efluentes')
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-purple-100 text-purple-500">
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
                                {{-- DOCUMENTOS --}}
                                @can('Documentos')
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
                                {{-- TÉCNICOS --}}
                                @can('Tecnicos')
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
                                {{-- Carousel --}}
{{--                                @can('Portal')                                    --}}
{{--                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">--}}
{{--                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">--}}
{{--                                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-yellow-100 text-yellow-500">--}}
{{--                                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex flex-col flex-grow ml-4">--}}
{{--                                            <div class="text-sm text-gray-500">--}}
{{--                                                <a href="{{ route('carousels.index') }}">Módulo Portal WEB</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="font-bold text-lg">--}}
{{--                                                <a href="{{ route('carousels.index') }}">CARROSSEL</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endcan--}}
                                {{-- @endadmin --}}
                                {{-- TENANTS --}}
                                @can('Clientes')
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
                                {{-- PLANOS --}}
                                @can('Planos')
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
                                {{-- PERFIS --}}
                                @can('Perfil')
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
                                {{-- PERMISSÃO --}}
                                @can('Permissão')
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
                                {{-- PERFIS / CARGOS --}}
                                @can('Cargos')
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
                                {{-- USUÁRIOS / ADMIN --}}
                                @can('Users')
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
                                {{-- USUÁRIOS --}}
                                @can('Usuarios')
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
                                {{-- CONTAS A PAGAR --}}
                                @can('Pagar')
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
                                {{-- CONTAS A RECEBER --}}
                                @can('Receber')
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
                                {{-- PARÂMETROS --}}
                                @can('Parameters')
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
                                {{-- LABORATÓRIOS --}}
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
                                {{-- ANÁLISES --}}
                                @can('Análises')
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
                                {{-- TIPOS RELATÓRIOS --}}
                                @can('Tipos Relatório')
                                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                    <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-yellow-100 text-yellow-500">
                                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>
                                        <div class="flex flex-col flex-grow ml-4">
                                            <div class="text-sm text-gray-500">
                                                <a href="{{ route('r_types.index') }}">Cadastro</a>
                                            </div>
                                            <div class="font-bold text-lg">
                                                <a href="{{ route('r_types.index') }}">TIPOS RELATÓRIO</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endcan
                                {{-- RELATÓRIOS --}}
                                {{-- @can('Relatórios')
                                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                    <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-yellow-100 text-yellow-500">
                                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                            </svg>
                                        </div>
                                        <div class="flex flex-col flex-grow ml-4">
                                            <div class="text-sm text-gray-500">
                                                <a href="{{ route('r_etes.index') }}">Efluentes | Laboratório</a>
                                            </div>
                                            <div class="font-bold text-lg">
                                                <a href="{{ route('r_etes.index') }}">PARÂMETROS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endcan --}}


                            </div>
                        </div>
                    </div><!-- FIM ROW -->

                </div>
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
