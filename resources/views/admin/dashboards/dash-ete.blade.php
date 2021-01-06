<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard - EFLUENTES') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-200 overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}   
                <br>             
                <div class="text-center">
                    {{-- <h3>Olá, <strong>{{ Auth::user()->name }}</strong>. Seja muito bem vindo(a) ao <strong>Lumus8x</strong></h3><br> --}}
                    <h3>Escolha e clique em uma das opções abaixo.</h3>                    
                </div>
                <br>
                {{-- <div class="text-center"> --}}
                    
                    <div class="row">
                        {{-- <div class="flex  min-h-screen bg-gray-200 text-gray-800"> --}}
                            <div class="p-4 w-full">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-green-500">
                                                {{-- <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg> --}}
                                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <div class="flex flex-col flex-grow ml-4">
                                                <div class="text-sm text-gray-500">
                                                    <a href="{{ route('visits.index') }}">Módulo Efluentes</a>
                                                </div>
                                                <div class="font-bold text-lg">
                                                     <a href="{{ route('visits.index') }}">VISITA TÉCNICA</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @can('Efluentes - Relatorios')
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                                            {{-- <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg> --}}
                                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>
                                        <div class="flex flex-col flex-grow ml-4">
                                            <div class="text-sm text-gray-500">
                                                <a href="{{ route('products.index') }}">Módulo Efluentes</a>
                                            </div>
                                            <div class="font-bold text-lg">
                                                <a href="{{ route('products.index') }}">RELATÓRIOS</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>  
                                    @endcan                                  

                                    @can('Efluentes - Analises')
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                                            {{-- <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg> --}}
                                            {{-- <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                            </svg> --}}
                                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="flex flex-col flex-grow ml-4">
                                            <div class="text-sm text-gray-500">
                                                <a href="{{ route('analyzes.index') }}">Módulo Efluentes</a>
                                            </div>
                                            <div class="font-bold text-lg">
                                                <a href="{{ route('analyzes.index') }}">ANÁLISES</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    @endcan                                  

                                    @can('Efluentes - Equipamentos')
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-red-100 text-red-500">
                                                {{-- <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> --}}
                                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <div class="flex flex-col flex-grow ml-4">
                                                <div class="text-sm text-gray-500">
                                                    <a href="{{ route('products.index') }}">Módulo Efluentes</a>
                                                </div>
                                                <div class="font-bold text-lg">
                                                    <a href="{{ route('products.index') }}">EQUIPAMENTOS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endcan                                  
                        {{-- </div> --}}
                    </div><!-- FIM ROW --> 
                    
                    <div class="flex flex-row flex-wrap flex-grow mt-2">
                        <div class="w-full md:w-1/2 p-3">
                            <!--Graph Card-->
                            <div class="bg-white border rounded shadow">
                                <div class="border-b p-3">
                                    <h5 class="font-bold uppercase text-gray-600">Gráfico Efluente Bruto - Outubro/2020</h5>
                                </div>
                                <div class="p-5">
                                    <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                                    <script>
                                    new Chart(document.getElementById("chartjs-7"), {
                                        "type": "bar",
                                        "data": {
                                            "labels": {!! $labels !!},
                                            "datasets": [{
                                                "label": "Efluente Bruto",
                                                "data": {{ $values }},
                                                "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                                                "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                                                "borderWidth": 1
                                            // }, {
                                            //     "label": "Adsense Clicks",
                                            //     "data": [5, 15, 10, 30],
                                            //     "type": "line",
                                            //     "fill": false,
                                            //     "borderColor": "rgb(54, 162, 235)"
                                            }]
                                        },
                                        "options": {
                                            "scales": {
                                                "yAxes": [{
                                                    "ticks": {
                                                        "beginAtZero": true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 p-3">
                            <!--Graph Card-->
                            <div class="bg-white border rounded shadow">
                                <div class="border-b p-3">
                                    <h5 class="font-bold uppercase text-gray-600">Gráfico Efluente Tratado - Outubro/2020</h5>
                                </div>
                                <div class="p-5">
                                    <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                                    <script>
                                    new Chart(document.getElementById("chartjs-1"), {
                                        "type": "bar",
                                        "data": {
                                            "labels": ["pH", "DBO5", "DQO", "O&G", "Coliformes Totais", "Coliformes Termo"],
                                            "datasets": [{
                                                "label": "Efluente Tratado",
                                                "data": [7.8, 53, 90, 14.5, 1600, 1600],
                                                "fill": false,
                                                "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                                                "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                                                "borderWidth": 1
                                            }]
                                        },
                                        "options": {
                                            "scales": {
                                                "yAxes": [{
                                                    "ticks": {
                                                        "beginAtZero": true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                    </script>
                                </div>
                        </div>
                    </div>              
                {{-- </div> --}}
            </div>
        </div>
    </div>
</x-app-layout>
