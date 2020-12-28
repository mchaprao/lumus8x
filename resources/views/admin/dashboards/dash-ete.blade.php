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
                    <h3>Escolha e clique em uma das opções de menu abaixo.</h3>                    
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
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
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
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
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
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                        </div>
                                        <div class="flex flex-col flex-grow ml-4">
                                            <div class="text-sm text-gray-500">
                                                <a href="{{ route('products.index') }}">Módulo Efluentes</a>
                                            </div>
                                            <div class="font-bold text-lg">
                                                <a href="{{ route('products.index') }}">ANÁLISES</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-red-100 text-red-500">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
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
                                            "labels": ["Temperatura", "pH", "DBO5", "DQO"],
                                            "datasets": [{
                                                "label": "Efluente Bruto",
                                                "data": [31.2, 8, 90, 639],
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
