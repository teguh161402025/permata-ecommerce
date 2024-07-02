@extends('layout')
@section('content')
@php
$user = Session::get('user');;

          @endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muny Gems</title>
</head>
<body>
   @include('navbar')

   <div class="flex justify-between h-[600px] w-full overflow-hidden mt-12">
       <div class="p-6 w-2/3 ">
           <div class="w-full h-[80%] overflow-hidden ">
<img class=" transform transition-transform ease-in-out transition duration-700 hover:scale-110"  src="{{ asset('images/arteum-ro-GKbfUFna-9I-unsplash.jpg')}}" alt="">
           </div>
 
 <div class="relative h-[20%]   ">
     <img class="w-full h-full object-cover mt-4 " src="{{ asset('images/banner4.jpg')}}" alt="">
     <div class="w-full h-full  bg-black opacity-50 absolute top-0 z-10">

     </div>
     <p class="absolute z-20 top-0 text-4xl font-bold text-white p-4">Mengungkap Kecantikan Alam - Kisah Batu Permata Anda
</p>
 </div>
       </div>

       <div class="pt-6 flex  w-1/3">
         
           <div class="w-2/3 ">
                 <p class="font-bold text-3xl py-4">Kisah Batu Permata Anda</p>
                 <div class=" h-[80%] overflow-hidden">
                 <img class="w-full  transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/banner2.jpg')}}" alt="">
                 </div>
           
           </div>
           <div class="w-1/3 h-full overflow-hidden mx-2">
    <img class=" h-full  object-cover  transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/banner3.jpg')}}" alt="">
           </div>
        
       </div>
   </div>
   
   <div class="w-full mt-20">
       <p class="p-4 text-2xl border-b-2 border-pink-400 w-fit text-gray-800 ml-24 mb-8 font-semibold">LIHAT KOLEKSI PERMATA KAMI</p>
       <div class="flex space-x-24  mx-24 justify-center" >

       <div data-aos="zoom-in" class="w-32 cursor-pointer " >
           <img class="w-full m-4 p-4 transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/emrald.png')}}" alt="">
      <p class="text-center ml-8"><a href="{{ route('belanja.show', ['jenis' => 'Emerald'])}}">Emerald</a> </p>
        </div>
  <div data-aos="zoom-in" class="w-32 cursor-pointer  " >
           <img class="w-full m-4 transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/ruby.png')}}" alt="">
        <p class="text-center ml-8"><a href="{{ route('belanja.show', ['jenis' => 'Ruby'])}}">Ruby</a></p>
        </div>
         <div data-aos="zoom-in" class="w-32 cursor-pointer  " >
           <img class="w-full m-4 transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/sapir.png')}}" alt="">
       <p class="text-center ml-8"><a href="{{ route('belanja.show', ['jenis' => 'Saphire'])}}">Saphire</a></p>
        </div>
         <div data-aos="zoom-in" class="w-32 cursor-pointer  " >
           <img class="w-full m-4 transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/diamond.png')}}" alt="">
         <p class="text-center ml-8"><a href="{{ route('belanja.show', ['jenis' => 'Diamond'])}}">Diamond</a></p>
        </div>
         <div data-aos="zoom-in" class="w-32 cursor-pointer  mt-10" >
           <img class="w-full m-4 mt-12 transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/topaz.png')}}" alt="">
         <p class="text-center ml-8"><a href="{{ route('belanja.show', ['jenis' => 'Topaz'])}}">Topaz</a></p>
        </div>
       </div>

        <div class="flex space-x-24  mx-24 justify-center  mt-12" >

       <div data-aos="zoom-in" class="w-32 cursor-pointer " >
           <img class="w-full m-4 p-4 transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/opal.png')}}" alt="">
      <p class="text-center ml-8"><a href="{{ route('belanja.show', ['jenis' => 'Opal'])}}">Opal</a></p>
        </div>
  <div data-aos="zoom-in" class="w-32 cursor-pointer " >
           <img class="w-full m-4 transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/citrine.png')}}" alt="">
        <p class="text-center ml-8"><a href="{{ route('belanja.show', ['jenis' => 'Citrine'])}}">Citrine</a></p>
        </div>
         <div data-aos="zoom-in" class="w-32 cursor-pointer  " >
           <img class="w-full m-4 p-6 transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/amethyse.png')}}" alt="">
       <p class="text-center ml-8"><a href="{{ route('belanja.show', ['jenis' => 'Amethyse'])}}">Amethyse</a></p>
        </div>
         <div data-aos="zoom-in" class="w-32 cursor-pointer  " >
           <img class="w-full m-4 transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/akik.png')}}" alt="">
         <p class="text-center ml-8"><a href="{{ route('belanja.show', ['jenis' => 'Akik'])}}">Akik</a></p>
        </div>
         <div data-aos="zoom-in" class="w-32 cursor-pointer mt-10 " >
           <img class="w-[70%] m-4 mt-12 transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/bacan.png')}}" alt="">
         <p class="text-center "><a href="{{ route('belanja.show', ['jenis' => 'Bacan'])}}">Bacan</a></p>
        </div>
       </div>
   </div>

   <div class="flex mx-24 wfull h-[600px] mt-24">
        <p class="w-[20%] text-5xl font-bold text-balance  text-gray-800 ">Untuk Setiap Momen <br> Spesial</p>
        <div class="w-[80%] h-full flex space-x-4">

                <div class="w-1/3 h-full space-y-4">
                    <div data-aos="fade-up" class="h-2/3 overflow-hidden relative">
   <img class=" object-cover h-full transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/arteum-ro-GKbfUFna-9I-unsplash.jpg')}}" alt="">
                    <div class="absolute bottom-8 bg-white p-2 px-4 mx-6 w-32 cursor-pointer">
                        <p class="text-xl border-b-2 border-b-black leading-relaxed">Elegan</p>
                    </div> 
</div>
                            <div data-aos="fade-up" class="h-1/3 overflow-hidden relative">
   <img class=" object-cover w-full h-full transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/banner6.jpg')}}" alt="">
                        <div class="absolute bottom-8 bg-white p-2 px-4 mx-6 w-32 cursor-pointer">
                        <p class="text-xl border-b-2 border-b-black leading-relaxed">Memukau</p>
                    </div> 
                        </div>
                </div>

                    <div class="w-1/3 h-full space-y-4">
                               <div data-aos="fade-up" class="h-1/3 overflow-hidden relative">
   <img class=" object-cover w-full h-full transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/banner2.jpg')}}" alt="">
                       <div class="absolute bottom-8 bg-white p-2 px-4 mx-6 w-32 cursor-pointer">
                        <p class="text-xl border-b-2 border-b-black leading-relaxed">Berkesan</p>
                    </div>
</div>
                    <div data-aos="fade-up" class="h-2/3 overflow-hidden relative">
   <img class=" object-cover h-full transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/banner3.jpg')}}" alt="">
               <div class="absolute bottom-8 bg-white p-2 px-4 mx-6 w-32 cursor-pointer">
                        <p class="text-xl border-b-2 border-b-black leading-relaxed">Berharga</p>
                    </div>
</div>
                     
                </div>


                    <div class="w-1/3 h-full space-y-4">
                    <div data-aos="fade-up" class="h-2/3 overflow-hidden relative">
   <img class=" object-cover h-full transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/banner4.jpg')}}" alt="">
                     <div class="absolute bottom-8 bg-white p-2 px-4 mx-6 w-32 cursor-pointer">
                        <p class="text-xl border-b-2 border-b-black leading-relaxed">Bercahaya</p>
                    </div>
</div>
                            <div data-aos="fade-up" class="h-1/3 overflow-hidden relative">
   <img class=" object-cover w-full h-full transform  transition-transform transition duration-700 hover:scale-110" src="{{ asset('images/banner5.webp')}}" alt="">
                      <div class="absolute bottom-8 bg-white p-2 px-4 mx-6 w-32 cursor-pointer">
                        <p class="text-xl border-b-2 border-b-black leading-relaxed">Mewah</p>
                    </div>
</div>
                </div>

        </div>
   </div>

@if($results != null)
   <div class="mt-32 pb-6 px-24 ">
     <p class="w-full px-4 border-b-[1px] border-pink-400 by-6 text-3xl font-bold text-gray-900">
       REKOMENDASI UNTUK ANDA 
     </p>
    
     <div class="grid grid-cols-5  gap-y-8 mt-6">
        @forelse ($results as $data)
 <div>
             <div data-aos="zoom-in-up" class="w-[200px]  ">
               <div class="relative group">
                <img class=" object-fill w-[200px] h-[200px]" src="{{ asset('images/'.$data->gambar)}}" alt="">
                <div class="bg-black absolute top-0 w-full opacity-0  h-full bg-black group-hover:transition-opacity  group-hover:opacity-40  group-hover:transition  group-hover:ease-in-out  group-hover:duration-500 transition ease-in-out duration-500">

                </div>
         
                  <div class=" w-full absolute z-50 top-[50%] opacity-0   group-hover:transition-opacity  group-hover:opacity-100  group-hover:transition  group-hover:ease-in-out  group-hover:duration-500 transition ease-in-out duration-500">
                     <a href="{{route('item', ['id' => $data->id ])}}"> <p class="text-xl text-white text0 text-center mx-12 py-4 px-6 border-2 border-white hover:bg-black transition-color transition ease-in-out duration-300 cursor-pointer">SHOP</p>
                 </a>
                    </div>
               
               </div>
                <div class="space-y-2 mt-2">
                           <p>{{$data->nama_batu}}</p>
                           <div class="flex space-x-2 mt-6">
                               @for ($i = 0; $i < round($data->rating); $i++)
                               <svg class="h-4 w-4 text-pink-400"  viewBox="0 0 24 24"  fill="currentColor"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"> 
                                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                                    @endfor
                                    @for($i= round($data->rating); $i<5 ; $i++)
                                    <svg class="h-4 w-4 text-pink-400"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"> 
                                       <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                       @endfor
                          </div>
                            <p>@format_uang($data->harga)</p>
</div>
        
             </div>
       </div>
         @empty
       <p>No recommendations available.</p>
     @endforelse
     </div>
      
   
   </div>

   @else
    <div class="mt-32 pb-6 px-24 ">
     <p class="w-full px-4 border-b-[1px] border-pink-400 by-6 text-3xl font-bold text-gray-900">
       REKOMENDASI UNTUK ANDA 
     </p>
    
     <div class="grid grid-cols-5  gap-y-8 mt-6">
      @php
           $results = DB::table('batus')
                            ->select('batus.*')
                            ->where('rating','>',3)
                             ->take(10)
                            ->get();
      @endphp
     
        @forelse ($results as $data)
 <div>
             <div class="w-[200px]  ">
               <div class="relative group">
                <img class=" object-fill w-[200px] h-[200px]" src="{{ asset('images/'.$data->gambar)}}" alt="">
                <div class="bg-black absolute top-0 w-full opacity-0  h-full bg-black group-hover:transition-opacity  group-hover:opacity-40  group-hover:transition  group-hover:ease-in-out  group-hover:duration-500 transition ease-in-out duration-500">

                </div>
         
                  <div class=" w-full absolute z-50 top-[50%] opacity-0   group-hover:transition-opacity  group-hover:opacity-100  group-hover:transition  group-hover:ease-in-out  group-hover:duration-500 transition ease-in-out duration-500">
                     <a href="{{route('item', ['id' => $data->id ])}}"> <p class="text-xl text-white text0 text-center mx-12 py-4 px-6 border-2 border-white hover:bg-black transition-color transition ease-in-out duration-300 cursor-pointer">SHOP</p>
                 </a>
                    </div>
               
               </div>
                <div class="space-y-2 mt-2">
                           <p>{{$data->nama_batu}}</p>
                           <div class="flex space-x-2 mt-6">
                               @for ($i = 0; $i < round($data->rating); $i++)
                               <svg class="h-4 w-4 text-pink-400"  viewBox="0 0 24 24"  fill="currentColor"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"> 
                                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                                    @endfor
                                    @for($i= round($data->rating); $i<5 ; $i++)
                                    <svg class="h-4 w-4 text-pink-400"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"> 
                                       <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                       @endfor
                          </div>
                            <p>@format_uang($data->harga)</p>
</div>
        
             </div>
       </div>
         @empty
       <p>No recommendations available.</p>
     @endforelse
     </div>
      
   
   </div>
@endif
</body>
@include('footer')
</html>