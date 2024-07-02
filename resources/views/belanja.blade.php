@extends('layout')
@section('content')
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

     <div class="mt-24 w-full h-[500px]   relative">

     <img class="w-full h-[500px] object-cover "  src="{{ asset('images/arteum-ro-GKbfUFna-9I-unsplash.jpg')}}" alt="">
     <div class="absolute bottom-6 font-bold m-4 " >
        <p class="text-5xl text-gray-900">BELANJA</p>
          <p class="text-3xl text-gray-900">Temukan Permata Untuk Anda</p>
     </div>

     </div>

     <div class="flex flex-row w-full mt-12 ">
        <div class="w-[20%] ml-12">

       

        <div class="border-t-2 border-gray-400">
             <p class="text-xl p-2 pt-6">Jenis Permata</p>

             <div class="space-y-6 mt-8">
       <div class="flex space-x-6  hover:text-green-400 transition duration-300 ease-in-out cursor-pointer duration-100 w-fit">
                     <img class="rounded-full w-6 h-6 object-none " src="{{ asset('images/emrald.png')}}" alt="">
                   
                    <p class=""> <a href="{{ route('belanja.show', ['jenis' => 'Emerald'])}}">Emerald</a> </p>
                </div>
           

                   <div class="flex space-x-6  hover:text-red-700 transition duration-300 ease-in-out cursor-pointer duration-100 w-fit">
                     <img class="rounded-full w-6 h-6 object-none " src="{{ asset('images/ruby.png')}}" alt="">
                   
                    <p class=""><a href="{{ route('belanja.show', ['jenis' => 'Ruby'])}}">Ruby</a></p>
                </div>
                
                   <div class="flex space-x-6  hover:text-blue-700 transition duration-300 ease-in-out cursor-pointer duration-100 w-fit">
                     <img class="rounded-full w-6 h-6 object-none " src="{{ asset('images/sapir.png')}}" alt="">
                   
                    <p class=""><a href="{{ route('belanja.show', ['jenis' => 'Saphire'])}}">Saphire</a></p>
                </div>

                  <div class="flex space-x-6  hover:text-gray-700 transition duration-300 ease-in-out cursor-pointer duration-100 w-fit">
                     <img class="rounded-full w-6 h-6 object-none " src="{{ asset('images/diamond.png')}}" alt="">
                   
                    <p class=""><a href="{{ route('belanja.show', ['jenis' => 'Diamond'])}}">Diamond</a></p>
                </div>
                   <div class="flex space-x-6  hover:text-yellow-400 transition duration-300 ease-in-out cursor-pointer duration-100 w-fit">
                     <img class="rounded-full w-6 h-6 object-cover " src="{{ asset('images/topaz.png')}}" alt="">
                   
                    <p class=""><a href="{{ route('belanja.show', ['jenis' => 'Topaz'])}}">Topaz</a></p>
                </div>
                   <div class="flex space-x-6  hover:text-pink-400 transition duration-300 ease-in-out cursor-pointer duration-100 w-fit">
                     <img class="rounded-full w-6 h-6 object-cover " src="{{ asset('images/opal.png')}}" alt="">
                   
                    <p class=""><a href="{{ route('belanja.show', ['jenis' => 'Opal'])}}">Opal</a></p>
                </div>
                  <div class="flex space-x-6  hover:text-yellow-700 transition duration-300 ease-in-out cursor-pointer duration-100 w-fit">
                     <img class="rounded-full w-6 h-6 object-none " src="{{ asset('images/citrine.png')}}" alt="">
                   
                    <p class=""><a href="{{ route('belanja.show', ['jenis' => 'Citrine'])}}">Citrine</a></p>
                </div>  
                   <div class="flex space-x-6  hover:text-purple-700 transition duration-300 ease-in-out cursor-pointer duration-100 w-fit">
                     <img class="rounded-full w-6 h-6 object-none " src="{{ asset('images/amethyse.png')}}" alt="">
                   
                    <p class=""><a href="{{ route('belanja.show', ['jenis' => 'Amethyse'])}}">Amethyse</a></p>
                </div> 
                  <div class="flex space-x-6  hover:text-blue-700 transition duration-300 ease-in-out cursor-pointer duration-100 w-fit">
                     <img class="rounded-full w-6 h-6 object-none " src="{{ asset('images/akik.png')}}" alt="">
                   
                    <p class=""><a href="{{ route('belanja.show', ['jenis' => 'Akik'])}}">Akik</a></p>
                </div>
                     <div class="flex space-x-6  hover:text-green-700 transition duration-300 ease-in-out cursor-pointer duration-100 w-fit">
                     <img class="rounded-full w-6 h-6 object-none " src="{{ asset('images/bacan.png')}}" alt="">
                   
                    <p class=""><a href="{{ route('belanja.show', ['jenis' => 'Bacan'])}}">Bacan</a></p>
                </div>
             </div>
         
        <div class="border-t-2 border-gray-400 mt-12">
             <p class="text-xl p-2 pt-6">Kategori</p>

             <div class="space-y-4 mt-4 flex flex-col">

            <a href="{{ route('belanja.kategori', ['kategori' => 'permata'])}}"> <div class="bg-gray-900 text-white p-4 hover:bg-gray-600 cursor-pointer tarnsition-colors duration-200">
                Batu Permata
             </div> </a>
             <a  href="{{ route('belanja.kategori', ['kategori' => 'cincin'])}}" class="bg-gray-900 text-white p-4 hover:bg-gray-600 cursor-pointer tarnsition-colors duration-200">
                Cincin
            </a>
             <a href="{{ route('belanja.kategori', ['kategori' => 'Kalung'])}}" class="bg-gray-900 text-white p-4 hover:bg-gray-600 cursor-pointer tarnsition-colors duration-200">
                Kalung
</a>
              <a href="{{ route('belanja.kategori', ['kategori' => 'Anting'])}}" class="bg-gray-900 text-white p-4 hover:bg-gray-600 cursor-pointer tarnsition-colors duration-200">
               Anting
</a>
</div>


</div>

 <div class="border-t-2 border-gray-400 mt-12">
             <p class="text-xl p-2 pt-6">Range Harga</p>

             <div class="space-y-4 mt-4 flex flex-col">
<div class="mt-4">
<form   action="{{ route('belanja.harga') }}" method="POST" enctype="multipart/form-data">
                @csrf
  <div class="mt-1 relative rounded-md shadow-sm p-4">
        <input type="range" name="harga" id="price_range" min="0" max="15000000" class="slider appearance-none bg-gray-200 h-1 w-full outline-none focus:outline-none" />
        <div class="absolute top-0 right-0 -mt-3 -mr-2 text-sm text-gray-500">15 JT</div>
        <div class="absolute top-0 left-0 -mt-3 -ml-2 text-sm text-gray-500">0</div>

        <div class="flex justify-between">
            <div class="flex">Rp. <div  class="bottom-full left-14 -mb-2 text-lg ">0</div></div> 
            <div>-</div>
  <div class="flex">Rp. <div id="price_value" class="bottom-full left-14 -mb-2 text-lg ">5000000</div></div> 
        </div>
    
    </div>

    <button  type="submit" class="bg-gray-900 py-2 px-6 text-white hover:bg-gray-600 transition-color-">Filter</button>
</form>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var priceRange = document.getElementById('price_range');
        var priceValue = document.getElementById('price_value');

        priceRange.addEventListener('input', function() {
            priceValue.textContent = priceRange.value;
        });
    });
</script>
</div>

</div>
</div>


 <div class="border-t-2 border-gray-400 mt-12">
             <p class="text-xl p-2 pt-6">Tag Line</p>

             <div class="space-y-4 mt-4 flex flex-col">
<div class="mt-4">
<form   action="{{ route('belanja.tag') }}" method="POST" enctype="multipart/form-data">
                @csrf
    <div class="my-2">
    <input type="checkbox" id="checkbox1" value="Elegan" class="mr-2 rounded-md border-gray-300 my-4">
    <label for="checkbox1" class="text-gray-700 my-4">Elegan</label><br>
    
    <input type="checkbox" id="checkbox2" value="Berkesan" class="mr-2 rounded-md border-gray-300 my-4">
    <label for="checkbox2" class="text-gray-700 my-4">Berkesan</label><br>
    
    <input type="checkbox" id="checkbox3" value="Bercahaya" class="mr-2 rounded-md border-gray-300 my-4">
    <label for="checkbox3" class="text-gray-700 my-4">Bercahaya</label><br>
    
    <input type="checkbox" id="checkbox4" value="Memukau" class="mr-2 rounded-md border-gray-300 my-4">
    <label for="checkbox4" class="text-gray-700 my-4">Memukau</label><br>
    
    <input type="checkbox" id="checkbox5" value="Berharga" class="mr-2 rounded-md border-gray-300 my-4">
    <label for="checkbox5" class="text-gray-700 my-4">Berharga</label><br>
    
    <input type="checkbox" id="checkbox6" value="Mewah" class="mr-2 rounded-md border-gray-300 my-4">
    <label for="checkbox6" class="text-gray-700 my-4">Mewah</label><br>
    
    <input type="text" hidden id="result" name="tag" readonly>
</div>
    <button  type="submit" class="bg-gray-900 py-2 px-6 text-white hover:bg-gray-600 transition-color-">Cari Tagline</button>
</form>

</div>

</div>
</div>
        </div>


        </div>
<style>
  
  </style>
  <div class="w-[100%]">
 <div class="w-[80%] ml-12 grid grid-cols-3  gap-y-8 ">
             @forelse ($batu as $data)
             <div class="w-[300px]  ">
               <div class="relative group">
                <img class=" object-fill w-[300px] h-[300px]" src="{{ asset('images/'.$data->gambar)}}" alt="">
                <div class="bg-black absolute top-0 w-full opacity-0  h-full bg-black group-hover:transition-opacity  group-hover:opacity-40  group-hover:transition  group-hover:ease-in-out  group-hover:duration-500 transition ease-in-out duration-500">

                </div>
         
                  <div class=" w-full absolute z-50 top-[50%] opacity-0   group-hover:transition-opacity  group-hover:opacity-100  group-hover:transition  group-hover:ease-in-out  group-hover:duration-500 transition ease-in-out duration-500">
                     <a href="{{route('item', ['id' => $data->id ])}}"> <p class="text-xl text-white text0 text-center mx-12 py-4 px-6 border-2 border-white hover:bg-black transition-color transition ease-in-out duration-300 cursor-pointer">SHOP</p>
                 </a>
                    </div>
               
               </div>
                <div class="space-y-2 mt-2">
                           <p>{{$data->nama_batu}}</p>
                           <div class="flex space-x-2">
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
          @empty
            <div class="">
                                      Data Post belum Tersedia.
                                  </div>
              @endforelse

               
        </div>
       <script>
  // Mengambil elemen input dan semua checkbox
  var resultInput = document.getElementById("result");
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');

  // Membuat event listener untuk setiap checkbox
  checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
      var selectedCheckboxes = [];
      // Memfilter checkbox yang dicentang
      checkboxes.forEach(function(cb) {
        if (cb.checked) {
          selectedCheckboxes.push(cb.value);
        }
      });
      // Mengubah nilai input dengan nilai checkbox yang dipilih
      resultInput.value = selectedCheckboxes.join(",");
    });
  });
</script>
         <div class="p-4 w-[80%]">
 {!! $batu->withQueryString()->links() !!}
        </div>
  </div>
       
     </div>
     
</body>
@include('footer')
</html>