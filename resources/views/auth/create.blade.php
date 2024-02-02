<x-layout>
    <h1 class="my-16 text-4xl text-center font-medium text-slate-600">Sign in to your account</h1>
    <x-card class="py-8 px-16">
        <form action="{{ route('auth.store') }}" method="POST">
            @csrf

            <div class="mb-8">
                <label for="email" class="mb-2 block text-sm font-medium text-slate-900">E-Mail</label>
                <x-text-input name="email" type="email"/>
            </div>

            <div>
                <label for="password" class="mb-2 block text-sm font-medium text-slate-900">Password</label>
                <x-text-input name="password" type="password"/>
            </div>

            <div class=" mt-4 mb-4 flex justify-between text-sm font-medium">
                <div>
                    <div class="flex  items-center space-x-1">
                        <input type="checkbox" name="remember" id="" class="rounded-sm border border-slate-300">
                        <label for="remember">Remember me</label>
                    </div>
                </div>
                <div>
                    <a class="text-indigo-600 hover:underline" href="#">
                        Reset Password?
                    </a>
                </div>
            </div>
            <button class="w-full rounded-md border-slate-300 bg-green-100 py-2 text-sm text-slate-500 font-bold">
                Login
            </button>
        </form>
    </x-card>
</x-layout>
