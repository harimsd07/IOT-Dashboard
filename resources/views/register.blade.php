<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .custom-input {
            border-color: #4F46E5;
            transition: border-color 0.3s ease;
        }
        .custom-input:focus {
            border-color: #805AD5;
        }
        .error-message {
            color: #EF4444;
            font-size: 0.875rem;
        }
    </style>
</head>
<body class="bg-gray-100">

<div class="min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full bg-white p-8 shadow-lg rounded-lg">
        <h2 class="text-3xl font-semibold mb-6 text-center text-gray-800">{{ __('Register') }}</h2>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-gray-700">{{ __('Name') }}</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 custom-input">
                @error('name')
                <span role="alert" class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-gray-700">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 custom-input">
                @error('email')
                <span role="alert" class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-gray-700">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 custom-input">
                @error('password')
                <span role="alert" class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-gray-700">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 custom-input">
            </div>

            <div>
                <label for="role" class="block text-gray-700">{{ __('Role') }}</label>
                <input id="role" type="text" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 custom-input">
                @error('role')
                <span role="alert" class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button  type="submit"
                        class="mb-5 w-full bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">{{ __('Register') }}</button>
            </div>

            <div class="text-gray-700 text-center">Already have an account? <a href="{{ route('login_form') }}" class="text-indigo-500">Sign in now</a></div>
        </form>
    </div>
</div>

</body>
</html>
