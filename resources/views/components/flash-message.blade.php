@if(session()->has('message'))

<div x-data="{show: true}" x-init="setTimeout(()=>show=false,3000)" x-show="show" class="fixed top-0 left-1/2 transform -translate-x-1/2 text-white px-48 py-3" style="background-color: #696cff;opacity:50%;">
    <p>
        {{session('message')}}
    </p>
</div>
@endif