@extends('main')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                    <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                        <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                            {{ __('Contacto') }}
                        </div>

                    <form class="w-full p-6" method="post" action="{{ route('contacto') }}">
                        @csrf

                        <div class="flex flex-wrap mb-6">
                        <label for="Nombre" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Nombre') }}:
                        </label>
                        <input type="text" class="form-input w-full" name="name" >
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('E-Mail Address') }}:
                            </label>
                            <input type="email" class="form-input w-full" name="email" >

                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Numero de telefono') }}:
                            </label>
                        <input type="number" class="form-input w-full" name="phone" >
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="affair" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Asunto') }}:
                            </label>
                        <input type="text" class="form-input w-full" name="subject" >
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Mensaje') }}:
                            </label>
                        <textarea class="form-input w-full" name="content" ></textarea>
                    </div>

                        <div class="flex mb-6">
                            <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                                <input type="checkbox" name="remember" id="remember" class="form-checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <span class="ml-2">{{ __('No soy un robot') }}</span>
                            </label>
                        </div>

                        <div class="flex flex-wrap items-center">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Enviar') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
