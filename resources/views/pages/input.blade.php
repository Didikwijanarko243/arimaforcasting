<x-layoutapp>

    <div class="grid md:grid-cols-2 gap-4 my-4 mx-4">
        <div class="...">
            <div
                class="flex flex-col  border-sage3 border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div
                    class="bg-sage3 rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                    <p class="mt-1 text-sm text-sage4 dark:text-neutral-500">
                        Input form
                    </p>
                </div>
                <div class="p-4 md:p-7 ">


                    <div class="max-w-sm mb-4">
                        <label for="input-label" class="block text-sm font-medium mb-2 dark:text-sage4">Email</label>
                        <input type="email" id="input-label"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="you@site.com">
                    </div>

                    <div class="max-w-sm mb-4">
                        <label for="input-label" class="block text-sm font-medium mb-2 dark:text-sage4">Email</label>
                        <input type="email" id="input-label"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="you@site.com">
                    </div>
                    <div class="max-w-sm mb-4">
                        <label for="input-label" class="block text-sm font-medium mb-2 dark:text-sage4">Email</label>
                        <input type="email" id="input-label"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="you@site.com">
                    </div>

                    <div class="max-w-sm mb-4">
                        <button type="button"
                            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-sage3 text-sage4 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Proses
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="...">
            <div
                class="flex flex-col  border-sage3 border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div
                    class="bg-sage3 rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                    <p class="mt-1 text-sm text-sage4 dark:text-neutral-500">
                        Upload file
                    </p>
                </div>
                <div class="p-4 md:p-7">

                    <form class="max-w-sm mb-4">
                        <label for="file-input" class="sr-only">Choose file</label>
                        <input type="file" name="file-input" id="file-input"
                            class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none
                          file:bg-gray-50 file:border-0
                          file:me-4
                          file:py-3 file:px-4 mb-4
                         ">

                        <div class="max-w-sm mb-4">
                            <button type="button"
                                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-sage3 text-sage4 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                Proses
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-layoutapp>
