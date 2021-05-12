<html lang="en">
<head>
    <title>Register</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<body>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- First Name -->
            <div>
                <x-label for="firstname" :value="__('First Name')" />

                <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" required autofocus />
            </div>

            <!-- Last Name -->
            <div class="mt-4">
                <x-label for="lastname" :value="__('Last Name')" />

                <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" required />
            </div>

            <!-- Userame -->
            <div class="mt-4">
                <x-label for="username" :value="__('Username')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
            
            <!-- Avatar -->
            <div class="mt-4">
                <x-label for="avatar" :value="__('Avatar')"/>
            </div>
            <div class="mt-1 form-file-group" style="background-color:aqua; 
                                                     width:200px; 
                                                     height:200px; 
                                                     border-radius:50%">
                <input type="file" style="display:none" id="avatar" name="avatar" onchange="preview(this)"/>
                <p onclick="document.querySelector('#avatar').click()" style="text-align:center; 
                                                                              line-height:200px;">click here</p>
            </div>
            <div class="mt-1" id="previewBox" style="display:none">
                <img src="" id="previewImg" style="width:200px; 
                                                   height:200px; 
                                                   border-radius:50%" onclick="document.querySelector('#avatar').click()">
            </div>

            <!-- If already registered -->
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

<script>
    function preview(input) {
        let file = $("input[type=file]").get(0).files[0];
        if(file) {
            let reader = new FileReader();
            reader.onload = function() {
                $("#previewImg").attr('src', reader.result);
                $("#previewBox").css('display', 'block');
            }
            $(".form-file-group").css('display', 'none');
            reader.readAsDataURL(file);
        }
    }
</script>
</body>