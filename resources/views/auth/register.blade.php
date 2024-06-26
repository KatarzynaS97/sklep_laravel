@extends('layout.app')

@section('content')
<div class=" mt-1">
    <h1 class="text-center" >Wpisz dane i ciesz się swoim kontem!</h1>
        <section class=" contact">

        <div class="container_rejestracja ">
            <section class="py-5   ">

                <div class="container px-4 px-lg-5 form_register">
                    <form method="POST" action="{{ route('register') }}"  > 
                        @csrf
                
                        <!-- Name -->
                        <div >
                            <x-input-label for="name" :value="__('Imię:')" />
                            <x-text-input id="name" class="block mt-1 w-full dane_rejestracja" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email:')" />
                            <x-text-input id="email" class="block mt-1 w-full dane_rejestracja" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Hasło:')" />
                
                            <x-text-input id="password" class="block mt-1 w-full dane_rejestracja"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                
                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Powtórz Hasło:')" />
                
                            <x-text-input id="password_confirmation" class="block mt-1 w-full dane_rejestracja"
                                            type="password"
                                            name="password_confirmation" required autocomplete="new-password" />
                
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                
                        <div class="flex items-center justify-end mt-4 ">
                            <a class=" btn btn_logowanie fs-5" href="{{ route('login') }}">
                                {{ __('Masz już konto?') }}
                            </a>
                
                           <x-primary-button class="ms-4 btn btn_logowanie fs-5 ">
                                {{ __('Załóż konto') }}
                            </x-primary-button> 
                         </div>
                     </form>
                </div>
               
               
        </div>

    </section>
</div>
@endsection
