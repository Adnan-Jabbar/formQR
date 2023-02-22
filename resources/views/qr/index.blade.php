<x-layout>
    {{-- @extends('layout')
    
    @section('content') --}}
    
    {{-- @include('partials/_hero')
    @include('partials/_search') --}}
    
    <div class="visible-print text-center">
        <h6>Scan QR - M3 Technologies</h6>
     
        <div class="w-full flex justify-center items-center">
            {!! QrCode::size(250)->generate('https://businessline.jazz.com.pk/Businessvpbx/admin/user/loginvpbx'); !!}
        </div>
     
        <p>Scan QR & Register Now</p>
    </div>

    
{{-- @endsection --}}
</x-layout>