@extends('layout')
@section('content')
@php
$user = Session::get('user');
$none = false;
use App\Models\Batu;
          @endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muny Gems</title>
       @include('navbar')
</head>
<body>
        <div class="pl-24 flex w-full mt-24">
            
            <div class="w-[40%]  ">
                 <img class="p-6 w-full  object-cover" src="{{ asset('images/'.$batu->gambar)}}" alt="">  
                
            </div>
                 <div class="p-8 w-[50%] ">

                     <p class="text-3xl font-bold">{{$batu->nama_batu}}</p>

                  
                              <div class="flex space-x-2 mt-4">
                               @for ($i = 0; $i < round($batu->rating); $i++)
                               <svg class="h-6 w-6 text-pink-400"  viewBox="0 0 24 24"  fill="currentColor"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"> 
                                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                                    @endfor
                                    @for($i= round($batu->rating); $i<5 ; $i++)
                                    <svg class="h-6 w-6 text-pink-400"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"> 
                                       <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                       @endfor
                          </div>
                     <p class="text-xl mt-4">@format_uang($batu->harga)</p>
                     @if(session('error'))
    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
        <p class="font-bold">Error</p>
        <p>{{ session('error') }}</p>
    </div>
@endif
   <div class="flex space-x-[2px] text-sm my-4">
                         @php
                         $tags = explode(',', $batu->tag);
                         @endphp

                         @foreach($tags as $tag)
                    <div class="p-2 text-white bg-slate-900">
                        {{$tag}}
                    </div>
                         @endforeach
                     </div>
                     @if($user)
                    <div data-modal-target="default-modal" data-modal-toggle="default-modal"
                     class="bg-black text-white text-center w-[350px] py-4 px-6 mt-12 hover:bg-pink-400 hover:transition-color hover:transition hover:ease-in-out hover:duration-600 cursor-pointer">
                        <p>PESAN SEKARANG</p>                        
                    </div>
                    @else
                  <a href="{{route('login')}}">    <div  class="bg-black text-white text-center w-[350px] py-4 px-6 mt-12 hover:bg-pink-400 hover:transition-color hover:transition hover:ease-in-out hover:duration-600 cursor-pointer">
                      <p>PESAN SEKARANG</p>                        
                    </div> </a>
                    @endif
                    <div class="w-full text-sm leading-relaxed mt-4 border-t-[1px] border-gray-400 py-2 text-justify">

                        
                    <div>{!! $batu->detail !!}</div>
                        

                    </div>
                 </div> 
        </div>

        <div class="mt-12 mx-24">
            <div class="border-b-[2px] border-pink-400 w-full p-2 text-3xl font-bold">
                <p>
                    INFOPEDIA
                </p>
            </div>

            <div class="text-sm text-justify leading-relaxed ">
                {!! $batu->infopedia !!}
            </div>
        
        </div>


        <div class="mt-12 mx-24">
            <div class="border-b-[2px] border-pink-400 w-full p-2 text-3xl font-bold">
                <p>
                   JIka Anda menyukai {{$batu->nama_batu}} Mungkin Anda juga suka :
                </p>
            </div>

            <div class="grid grid-cols-5  gap-y-8 mt-6">
            @foreach($apriori as $datas) 
           
                @if($batu->jenis == $datas[0])
                    @php
                       
                        $items = DB::table('Batus')->where('jenis', '=', $datas[1])->get();
                    @endphp

                    @foreach($items as $data)
                    <div>
             <div class="w-[200px] ">
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
                    @endforeach

            
                @endif
            @endforeach
            </div>
        
        </div>


        @if($none == true)
          <div class="mt-12 mx-24 grid grid-cols-5  gap-y-8 mt-6">
           
           
             
                    @php
                       
                        $items = DB::table('batus')
                            ->select('batus.*')
                            ->where('rating','>',3)
                             ->take(10)
                            ->get();
                    @endphp

                    @foreach($items as $data)
                    <div>
             <div class="w-[200px] ">
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
                    @endforeach

               
             
          
            </div>
        @endif

        <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Buat Janji untuk Pesanan Anda
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
                <form action="{{route('pesan.store')}}" method="POST" >
                         {{ csrf_field() }}
                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal">
                    Tanggal
                    </label>
                  <input id="tanggal" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tanggal" name="tanggal" type="date" placeholder="Pilih Tanggal" min="{{ now()->addDay()->format('Y-m-d') }}">
                </div>
                <div class="mb-4">
  <label class="block text-gray-700 text-sm font-bold mb-2" for="jam">
    Jam
  </label>
  <input id="jam" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="jam" name="jam" type="time" placeholder="Pilih Jam">
</div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="catatan">
                    Catatan
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="catatan" name="catatan" placeholder="Masukkan Catatan"></textarea>
                </div>
                
                 @if($user)
               <input type="hidden" name="id_user" value="{{ $user->id }}">
                 <input type="hidden" name="id_item" value="{{ $batu->id }}">
                 @endif
                </div>
                           <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button  type="submit" class="text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800">Submit</button>
                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-pink-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
            </div>
                </form>
            <!-- Modal footer -->
 
        </div>
    </div>
</div>

<style>
    .star {
  font-size: 10vh;
  cursor: pointer;
}
 
.one {
  color: rgb(240, 158, 223);
}
 
.two {
  color: rgb(240, 158, 223);
}
 
.three {
  color: rgb(240, 158, 223);
}
 
.four {
  color: rgb(240, 158, 223);
}
 
.five {
  color: rgb(240, 158, 223);
}
</style>
 @if(session('success'))
<div>
    <div class="w-full fixed top-0 h-screen z-40 bg-black opacity-40">

</div>
    <div class=" top-32 fixed z-50 w-full px-72 " >
   <div class="p-6 bg-white">
       <p class="text-2xl w-full px-8 border-b-[1px] border-pink-400 py-2">Beri Rating Anda</p>
       <div class="text-center">
<span onclick="gfg(1)"
              class="star">★
        </span>
        <span onclick="gfg(2)"
              class="star">★
        </span>
        <span onclick="gfg(3)"
              class="star">★
        </span>
        <span onclick="gfg(4)"
              class="star">★
        </span>
        <span onclick="gfg(5)"
              class="star">★
        </span>
        <h3 id="output">
              Rating : 0/5
          </h3>
       </div>

      
    <a id="kirimRatingLink" class="text-pink-500 p-2 " href="#">
        <p>Kirim Rating</p>
    </a>



   </div>
       
    </div>
</div>
@endif

    <script >
        let stars = 
    document.getElementsByClassName("star");
let output = 
    document.getElementById("output");
 let rating = 0;
// Funtion to update rating
function gfg(n) {
  rating = n ; 
    remove();
    for (let i = 0; i < n; i++) {
        if (n == 1) cls = "one";
        else if (n == 2) cls = "two";
        else if (n == 3) cls = "three";
        else if (n == 4) cls = "four";
        else if (n == 5) cls = "five";
        stars[i].className = "star " + cls;
    }
     var id_item = {{ $batu->id }}; // Melewatkan nilai variabel PHP ke JavaScript
  
     @if($user != null){
        var id_user = {{$user->id }}; 
     }
     @endif
   
    // Mendefinisikan data yang akan dikirim ke controller
    var data = {
        rating: n,
        id_item: id_item,
       id_user:id_user
    };
   $.ajax({
        url: '/store-rating', // Ganti dengan URL yang sesuai dengan rute di controller Laravel Anda
        type: 'POST',
        data: data,
         headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
        success: function(response) {
            // Lakukan sesuatu setelah berhasil
            console.log('Rating berhasil dikirim ke controller Laravel.');
        },
        error: function(xhr, status, error) {
            console.error('Terjadi kesalahan:', error);
        }
    });

    output.innerText = "Rating is: " + n + "/5";
}
 
// To remove the pre-applied styling
function remove() {
    let i = 0;
    while (i < 5) {
        stars[i].className = "star";
        i++;
    }
}
    </script>

    <script>
    // Fungsi untuk mengecek rating sebelum melakukan redirect
    function redirectWithRatingCheck() {
        // Mendapatkan nilai rating dari suatu sumber (misalnya variabel JavaScript)
     

        // Jika rating = 0, tampilkan alert dan tidak melakukan redirect
        if (rating === 0) {
           Toastify({
                    text: "Harap Beri Rating",
                    className: "info",
                    style: {
                        background: "linear-gradient(to right,#f6b26b, #96c93d)",
                    }
                    }).showToast();
        } else {
            // Jika rating > 0, lakukan redirect ke route tujuan
            window.location.href = "{{ route('item', ['id' => $batu->id ]) }}";
        }
    }

    // Menghubungkan fungsi redirectWithRatingCheck() dengan link
    document.getElementById('kirimRatingLink').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah default behavior dari link (redirect)
        redirectWithRatingCheck(); // Memanggil fungsi untuk mengecek rating
    });
</script>
<script>
   var tanggalPesans = {!! json_encode($tanggalPesans) !!};
    
    document.addEventListener('DOMContentLoaded', function() {
        console.log(tanggalPesans)
        var tanggalInput = document.getElementById('tanggal');
        var jamInput = document.getElementById('jam');
        tanggalInput.addEventListener('change', function() {
            var tanggal = tanggalInput.value; // Mendapatkan nilai tanggal yang dipilih

            var filteredArray = tanggalPesans.filter(function(data) {
                                    return data.tanggal == tanggal;
                                });
            
                                console.log(filteredArray[0].jam)
  if (filteredArray.length > 0) {
        // Jika terdapat data dengan tanggal yang dipilih
        jamInput.value = filteredArray[0].jam; // Set nilai input jam dengan nilai jam dari filtered array
        jamInput.readOnly = true;
        //jamInput.setAttribute('hidden', true); 
    } 

        });
    });
</script>
</div>
</body>
@include('footer')
</html>