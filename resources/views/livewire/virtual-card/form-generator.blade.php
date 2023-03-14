<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-12">
    <div class="mx-auto max-w-3xl">
        <form class="space-y-8 divide-y divide-gray-200" wire:submit.prevent="submit">
            @csrf
            <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                <div class="space-y-6 sm:space-y-5">
                    <div>
                        <h1 class="font-semibold leading-9 text-gray-900 text-3xl">QR Code Image Generator</h1>
                    </div>

                    <div class="space-y-6 sm:space-y-5">
                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Name</label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <input type="text" wire:model="name" id="name" autocomplete="name" class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                @error('name') <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}.</p> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6 sm:space-y-5">
                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="phone" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Phone</label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <input type="tel" wire:model="phone" id="phone" autocomplete="phone" class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                @error('phone') <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}.</p> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6 sm:space-y-5">
                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="linkedin_url" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">LinkedIn URL</label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <input type="url" wire:model="linkedin_url" id="linkedin_url" autocomplete="linkedin_url" class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                @error('linkedin_url') <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}.</p> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6 sm:space-y-5">
                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="github_url" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">GitHub URL</label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <input type="text" wire:model="github_url" id="github_url" autocomplete="github_url" class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                @error('github_url') <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}.</p> @enderror
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="pt-5">
                <div class="flex justify-start gap-x-3">
                    <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2.5 px-3.5 text-md font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Generate Image</button>
                </div>
            </div>
        </form>
    </div>
</div>