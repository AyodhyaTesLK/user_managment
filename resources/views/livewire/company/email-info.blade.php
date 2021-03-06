<div class="flex flex-col">

    {{-- SMTP and POP / IMAP server names --}}
    <div class="w-full py-2">
        <label for="smtp_pop_imap" class="block text-sm font-medium text-gray-700">SMTP and POP/IMAP server names
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input type="text" name="smtp_pop_imap" id="smtp_pop_imap"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('smtp_pop_imap') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- email_config_username --}}
    <div class="w-full py-2">
        <label for="email_config_username" class="block text-sm font-medium text-gray-700">Username
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input type="text" name="email_config_username" id="email_config_username"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('email_config_username') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>

    {{-- email_password --}}
    <div class="w-full py-2">
        <label for="text" class="block text-sm font-medium text-gray-700">Password
            <span class="font-thin px-1">(optional)</span>
        </label>
        <input type="text" name="email_password" id="email_password"
            class="px-2 py-1.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-sm">
        {{-- @error('email_password') <span
                class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror --}}
    </div>
</div>
