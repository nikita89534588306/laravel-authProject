    <div class="mb-6">
        <label for="{{$nameInput}}" class="block text-sm font-medium text-gray-700 ">{{__($LANG_CONST. $nameInput.'.label')}}</label>
        <div class="relative mt-1 rounded-md shadow-sm">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                {{$slot}}
            </div>
            <input type="{{$typeInput}}" id="{{$nameInput}}" name="{{$nameInput}}" required 
                class="
                    w-full rounded-md  pl-10 text-sm
                    @error($nameInput) 
                        border-red-300 focus:border-red-500 focus:ring-red-500 
                    @else 
                        border-gray-300 focus:border-green-500 focus:ring-green-500  
                    @enderror 
                    "
                placeholder="{{__($LANG_CONST. $nameInput.'.placeholder')}}"
                value="{{ old($nameInput) }}"
            />
            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                @error($nameInput)    
                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                    </svg>
                @enderror 
            </div>
        </div>
        @error($nameInput)  <p class="mt-2 text-sm text-red-600">{{ ucfirst($message) }}</p> @enderror 
    </div>