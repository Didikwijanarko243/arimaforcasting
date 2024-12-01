<x-layoutapp>

    <div class="grid md:grid-cols-3 gap-4 my-4 mx-4">
        <div class="...">
            <div
                class="flex flex-col  border-sage3 border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="bg-sage3 rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                    <p class="mt-1 text-sm text-sage4 dark:text-neutral-500">
                        Input form
                    </p>
                </div>
                <div class="p-4 md:p-7 ">
                    @if (count($errors->all()) != 0)
                    
                        <div class="mt-2 bg-red text-sm text-white rounded-lg p-4 mb-4" role="alert" tabindex="-1"
                            aria-labelledby="hs-solid-color-danger-label">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> <span id="hs-solid-color-danger-label" class="font-bold">{{ $error }}
                                        </span> </li>
                                @endforeach
                            </ul>

                        </div>
                    @endif


                    <form action="{{ url('proses') }}" method="post">

                        @csrf
                        <div class="mb-4">
                            <div class="max-w-sm space-y-3">
                                <textarea name="data" id="data"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    rows="3" placeholder="Data Time series masuk di sini eg: 10,20,30,40,50">{{ old('data') }}</textarea>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="input-label" class="block text-sm font-medium mb-2">AR
                                (p)</label>
                            <input type="number" name="p" id="p" value="{{ old('p', 1) }}"
                                min="0"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Masukan AR (p)">
                        </div>

                        <div class="mb-4">
                            <label for="input-label" class="block text-sm font-medium mb-2">Differencing
                                (d)</label>
                            <input type="number" name="d" id="d" value="{{ old('d', 1) }}"
                                min="0"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="you@site.com">
                        </div>
                        <div class="mb-4">
                            <label for="input-label" class="block text-sm font-medium mb-2">MA
                                (q)</label>
                            <input type="number" name="q" id="q" value="{{ old('q', 1) }}"
                                min="0"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="you@site.com">
                        </div>
                        <div class="mb-4">
                            <label for="input-label" class="block text-sm font-medium mb-2">Steps</label>
                            <input type="number" name="steps" id="steps" value="{{ old('steps', 5) }}"
                                min="1"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="you@site.com">
                        </div>
                        <div class="mb-4">
                            <button type="submit"
                                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-sage3 text-sage4 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                Proses
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="md:col-span-2">
            <div class="mb-4">
                <div
                    class="flex flex-col  border-sage3 border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                    <div
                        class="bg-sage3 rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                        <p class="mt-1 text-sm text-sage4 dark:text-neutral-500">
                            Output data
                        </p>
                    </div>
                    <div class="p-4 md:p-7">
                        <div>
                            <span class="font-medium text-sm text-gray-500 font-mono mb-3 dark:text-neutral-400">Forcast
                                Data</span>
                            <ul class="list-disc list-inside text-gray-800 dark:text-white">
                                @if (isset($data_forcast))
                                    @foreach ($data_forcast as $value)
                                        <li>{{ $value }}</li>
                                    @endforeach
                                @endif


                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div>
                <div
                    class="flex flex-col  border-sage3 border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                    <div
                        class="bg-sage3 rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                        <p class="mt-1 text-sm text-sage4 dark:text-neutral-500">
                            Output Chart
                        </p>
                    </div>
                    <div class="p-4 md:p-7">

                        <canvas id="chart"></canvas>

                    </div>
                </div>
            </div>
        </div>

    </div>
    @pushIf(isset($data_asli), 'script')
    <script>
        const ctx = document.getElementById('chart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [...Array({{ count($data_asli) }}).keys()].map(i => 'T' + (i + 1)).concat(
                    [...Array({{ count($data_forcast) }}).keys()].map(i => 'F' + (i + 1))
                ),
                datasets: [{
                        label: 'Data Asli',
                        data: {!! json_encode($data_asli) !!},
                        borderColor: 'green',
                        tension: 0.3
                    },
                    {
                        label: 'Data Forcast',
                        data: [...Array({{ count($data_asli) }}).fill(null), ...{!! json_encode($data_forcast) !!}],
                        borderColor: 'orange',
                        tension: 0.3
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Waktu'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Data'
                        }
                    }
                }
            }
        });
    </script>
    @endPushIf

</x-layoutapp>
