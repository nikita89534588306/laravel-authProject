<div class="mx-auto mt-6 w-full max-w-md rounded-xl bg-white/80 p-6 shadow-xl backdrop-blur-xl sm:mt-10 sm:p-10">
    
    <form action="{{ route('register') }}" method="post" novalidate autocomplete="off" >
        
        @csrf
        <x-register-input name-input="name" type-input="text">
            <svg class="h-5 w-5 @error('name') text-red-400 @else text-gray-400 @enderror" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
        </x-register-input>
        

        <x-register-input name-input="email" type-input="email" >
            <svg class="h-5 w-5 @error('email') text-red-400 @else text-gray-400 @enderror" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
        </x-register-input>

        <x-register-input name-input="password" type-input="password">
            <svg class="h-5 w-5 @error('password') text-red-400 @else text-gray-400 @enderror" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>
        </x-register-input>

        <x-register-input name-input="password_confirmation" type-input="password">
            <svg class="h-5 w-5 @error('password_confirmation') text-red-400 @else text-gray-400 @enderror" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>
        </x-register-input>
        
        @php  $LANG_CONST = 'messages.registration.registrationForm.' @endphp
        <div class="mb-6">
            <button type="submit" class="w-full flex items-center justify-center rounded-md bg-green-600 py-2 px-4 font-semibold text-white shadow-lg transition duration-150 ease-in-out hover:bg-green-700 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">{{__($LANG_CONST.'buttonSubmit.textOnBtn')}}</button>
        </div>
    </form>

    @php  $LANG_CONST = 'messages.registration.registrationForm.' @endphp
    <div class="mt-6 flex items-center justify-center">
        <a href="login.html" class="text-sm font-medium text-green-600 hover:text-green-500">{{__($LANG_CONST.'referenceOnLogin.textRef')}}</a>
    </div>
</div>