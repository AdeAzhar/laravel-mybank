@extends('layouts.app')
@section('title', 'mybank')

@section('content')
    @include('layouts.header')

    <main class="pt-[72px]">
        <section class="relative min-h-[921px] flex items-center overflow-hidden hero-gradient px-10 py-12">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="z-10">
                    <h1 class=" text-[56px] leading-tight font-extrabold text-[#1d1a21] mb-4">
                        Perbankan Cerdas untuk <span class="text-[#6E4AB6]">Masa Depan</span> Anda
                    </h1>
                    <p class=" text-lg text-[#5d5f5f] mb-8 max-w-lg">
                        Wujudkan kebebasan finansial bersama MyBank. Kami memberikan Anda kendali penuh untuk mengelola keuangan kapan saja dan di mana saja secara instan.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-6">
                        <a href="{{ url('/register') }}">
                            <button class="bg-[#6E4AB6] text-[#ffffff] font-bold text-lg px-12 py-6 rounded-xl shadow-xl hover:shadow-[#572d97]/20 transition-all active:scale-95 flex items-center justify-center gap-2">
                                Daftar Sekarang
                            </button>
                        </a>
                    </div>
                </div>
                
                <div class="relative z-0 hidden lg:block">
                    <div class="absolute -top-20 -right-20 w-80 h-80 bg-[#7047b1]/20 blur-[100px] rounded-full"></div>
                    <div class="relative glass-card rounded-[32px] p-6 shadow-2xl">
                        <img src="{{ asset('images/family.png') }}"alt="Financial Dashboard Visual" class="rounded-[24px] w-full h-[500px] object-cover"/>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('layouts.footer')
@endsection