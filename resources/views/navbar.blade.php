<style>
  /* Styling untuk contoh ini */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  #nav-1 {
   
    z-index: 100;
    transition: transform 0.3s ease;
  }
  #nav-2 {
    z-index: 10;
     transition: transform 0.3s ease;
  }
</style>
@php
$user = Session::get('user');;

          @endphp
<div class="w-full  pb-2">
<div id="nav-1"id="nav-1" class=" p-1.5 text-sm bg-pink-300  flex space-x-2">
 

  <p>  Muny Gems Kecantikan Abadi, Dalam Setiap Permata. </p>
</div>

<div id="nav-2"  class="w-full z-50 fixed bg-white h-26 w-full flex justify-between px-8 py-6 border-b-4 border-pink-400" >
<div class="font-bold text-2xl cursor-pointer ">
    Muny Gems
</div>
  <div>
       <form  class="border-2 border-gray-300 " action="{{ route('belanja.pencarian') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input placeholder="cari permata anda..." class="h-8 w-[500px] border-white focus:ring-0" type="text" name="cari">
                <button class="w-8 " type="submit"><svg class="w-6 h-6 text-gray-800 pt-2 dark:text-white hover:text-pink-500 transition-color duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
</svg>
</button>
</form>
  </div>
<div class="flex flex-row space-x-6" >
 <div class="hover:text-pink-400 transition duration-300 ease-in-out cursor-pointer">
          <a href="{{route('homepage')}}">
         Home
        </a>
    </div>
    <div class="hover:text-pink-400 transition duration-300 ease-in-out cursor-pointer">
       <a href="{{route('belanja.index')}}">
        Belanja
        </a>
    </div>
       <div class="hover:text-pink-400 transition duration-300 ease-in-out cursor-pointer">
      @if($user)
        <a href="{{route('permata_anda')}}">
          Permata Anda
        </a>
        @else
      
        @endif
    </div>
    <div class="hover:text-pink-400 transition duration-300 ease-in-out cursor-pointer">
      @if($user)
        <a href="{{route('logout')}}">
          logout
        </a>
        @else
        <a href="{{route('login')}}">
          Login
        </a>
        @endif
    </div>
</div>
</div>


</div>
<script>
window.addEventListener('scroll', function() {
  var nav1 = document.getElementById('nav-1');
  var nav2 = document.getElementById('nav-2');
  
  if (window.scrollY > 0) {
    nav1.style.transform = 'translateY(-100%)';
        nav2.style.transform = 'translateY(-50%)';
  } else {
    nav1.style.transform = 'translateY(0)';
   nav2.style.transform = 'translateY(0)';
  }
});
</script>