@extends('layouts.app')
@section('title', 'mybank-register')

@section('content')
    <main class="font-poppins px-4 md:px-8 min-h-screen flex flex-col items-center justify-center bg-slate-50 dark:bg-neutral-900">
        <div class="max-w-md w-full">
            <div class="p-6 rounded-lg bg-white border border-slate-300 shadow-sm md:p-8 dark:bg-neutral-800 dark:border-neutral-700">
                <h1 class="text-center text-[24px] font-semibold mb-6 dark:text-white">Create account</h1>
                
                <form action="{{ url('register') }}" class="space-y-6" method="POST">
                    @csrf
                    <div>
                        <label for="username" class="mb-1.5 text-slate-900 font-medium text-[12px] inline-block dark:text-slate-200">Username</label>
                        <input type="text" name="username" id="username" value="{{ old('username') }}"
                                class="pe-2 ps-3 py-2.5 text-[12px] text-slate-900 rounded-md bg-white w-full outline-1 -outline-offset-1 @error('username') outline-red-500 @else outline-slate-300 @enderror focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600"
                                placeholder="John Doe">
                        @error('username')
                            <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="-mt-4">
                        <label for="email" class="mb-1.5 text-slate-900 font-medium text-[12px] inline-block dark:text-slate-200">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="pe-2 ps-3 py-2.5 text-[12px] text-slate-900 rounded-md bg-white w-full outline-1 -outline-offset-1 @error('email') outline-red-500 @else outline-slate-300 @enderror focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600"
                                placeholder="johndoe@gmail.com">
                        @error('email')
                            <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="-mt-4">
                        <label for="password" class="mb-1.5 text-slate-900 font-medium text-[12px] inline-block dark:text-slate-200">Password</label>
                        <input type="password" name="password" id="password" 
                                class="pe-2 ps-3 py-2.5 text-[12px] text-slate-900 rounded-md bg-white w-full outline-1 -outline-offset-1 @error('password') outline-red-500 @else outline-slate-300 @enderror focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600" 
                                placeholder="••••••••">
                        @error('password')
                            <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="-mt-4">
                        <label for="password_confirmation" class="mb-1.5 text-slate-900 font-medium text-[12px] inline-block dark:text-slate-200">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" 
                                class="pe-2 ps-3 py-2.5 text-[12px] text-slate-900 rounded-md bg-white w-full outline-1 -outline-offset-1 outline-slate-300 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600" 
                                placeholder="••••••••">
                    </div>

                    <div class="flex items-start flex-wrap gap-2">
                        <label class="flex items-center group has-[input:checked]:text-slate-900 mb-3 cursor-pointer">
                            <input id="remember" name="remember" type="checkbox" class="sr-only" />
                            <span class="flex h-3 w-3 shrink-0 items-center justify-center rounded outline-1 outline-slate-300 dark:outline-neutral-600 bg-white group-has-[input:checked]:bg-blue-600 group-has-[input:checked]:outline-blue-600 group-focus-within:outline-2 group-focus-within:outline-blue-600" aria-hidden="true">
                                <svg class="size-3 text-white opacity-0 group-has-[input:checked]:opacity-100" viewBox="0 0 12 10" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 5l3 3 7-7" />
                                </svg>
                            </span>
                            <span class="ml-3 text-[10px] text-slate-700 dark:text-slate-300">
                                I agree to all statements in <a href="#" class="text-blue-700 hover:underline font-medium dark:text-blue-500">Terms of Service</a>
                            </span>
                        </label>
                        
                        <button type="submit" class="w-full py-2 px-3 text-[12px] rounded-md font-semibold cursor-pointer tracking-wide text-white border border-blue-600 bg-[#6E4AB6] hover:bg-[#5a3ca3] transition-all focus:outline-none">
                            Register
                        </button>
                    </div>
                </form>

                <div class="mt-6 flex justify-center items-center text-[10px] text-slate-900 dark:text-slate-50">
                    <span>Already have an account?</span>
                    <a href="{{ url('/login') }}" class="text-blue-700 hover:underline ml-1 dark:text-blue-500">
                        Login here
                    </a>
                </div>

            </div>
        </div>
    </main>
@endsection