<h1>Hello <span>{{$user->name}}</span></h1>
<form action="{{ url('/logout') }}" method="POST">
    @csrf
    <button type="submit" 
        class="w-full flex items-center gap-2.5 text-slate-500 hover:text-red-600 hover:bg-red-50 rounded-md px-3 py-2 transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-red-500">
        <span class="font-semibold">Logout</span>
    </button>
</form>