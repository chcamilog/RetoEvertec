<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action= "{{ route('profile.update') }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">                            
                            <div class="grid grid-rows-2 gap-6">
                                <!-- Name -->
                                <div>
                                    <x-label for="name" :value="__('Name')" />
                                    
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ auth()->user()->name }}"  autofocus />
                                    </div>
                                    <!-- Email Address -->
                                    <div>
                                        <x-label for="email" :value="__('Email')" />
                                        
                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ auth()->user()->email }}"  />
                                        </div>
                                    </div>
                                    
                                    <div class="grid grid-rows-2 gap-6">
                                        <!-- Password -->
                                        <div>
                                            <x-label for="password" :value="__('New Password')" />
                                            
                                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            autocomplete="new-password" />
                                        </div>
                                        <!-- Confirm Password -->
                                        <div>
                                            <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation"  />
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                Update
                            </x-button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
