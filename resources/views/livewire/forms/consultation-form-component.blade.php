<div x-data="{ showModal: false }" x-bind:class="{ 'overflow-hidden': showModal }"
     class="flex items-center justify-center min-h-screen bg-gray-100 px-4">

    <div class="w-full md:w-2/3 lg:w-1/2 p-8 bg-white rounded-lg shadow-lg space-y-8">

        @if (session()->has('message'))
            <div class="mb-4 text-green-700 bg-green-100 border border-green-400 rounded-md p-4">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit.prevent="submit" class="space-y-6">

            <div class="px-10 mx-auto max-w-7xl md:px-16 tails-selected-element">
                <div class="max-w-3xl mx-auto mb-10 md:mb-16">
                    <p class="text-xs font-bold text-blue-500 uppercase">Contact Us for help</p>
                    <h2 class="mt-1 text-2xl font-bold text-left text-gray-800 lg:text-3xl md:mt-2">Something wrong with your HVAC equipment? </h2>
                    <p class="max-w-screen-md mx-auto mt-4 text-left text-gray-500 md:text-lg md:mt-6">
                        You've come to the right place! Do you need help immediately? If so, you can also call us at: <a href="tel:+18163590905" class="font-medium text-blue-500 underline">816-359-0905</a>. If you do not need immediate assistance, please fill out the form below and we will get back to you as soon as possible.
                    </p>
                </div>

                    <div class="">
                        <x-label for="name" value="Name" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Name</x-label>
                        <x-input type="text" id="name" wire:model="name" autocomplete="name" required name="name" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" />
                        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>


                    <div class="sm:col-span-2">
                        <x-label for="address" value="Address" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Address</x-label>
                        <x-input type="text" id="address" wire:model="address" autocomplete="street-address" required name="address" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" />
                         @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <x-label for="email" value="Email" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Email</x-label>
                        <x-input type="email" id="email" wire:model="email" autocomplete="email" required name="email" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" />
                         @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>



                    <div class="sm:col-span-2">
                        <x-label for="issue" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base"></x-label>
                        <x-textarea type="text" id="issue" wire:model="issue" required name="issue" label="Issue" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" ></x-textarea>
                        @error('issue') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <x-label for="equipment_type" value="Equipment Type" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Equipment Type<br></x-label>
                        <x-input type="text" id="equipment_type" wire:model="equipment_type" required name="equipment_type" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" />
                        @error('equipment_type') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <x-label for="consultation_type" value="Consultation Type" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Consultation Type<br></x-label>
                        <x-input type="text" id="consultation_type" wire:model="consultation_type" required name="consultation_type" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" />
                        @error('consultation_type') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex pt-5 items-center justify-between sm:col-span-2">
                        <x-button class="inline-block px-8 py-3 text-sm font-semibold text-center text-white transition duration-100 bg-blue-600 rounded-md outline-none hover:bg-blue-500 active:bg-blue-700 ring-blue-300 md:text-base">Send Message</x-button>
                    </div>

                <p class="flex pt-5 items-center justify-between sm:col-span-2">
                    Please allow up to 24-48 hour response during the weekdays.
                </p>
            </div>
        </form>
    </div>
</div>
