@extends('layout')
@section('content')
@php 
use App\Models\Pesan;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body class="bg-gray-200">
     @include('adminnav')
    
     <div class="w-full flex justify-end">
     <div class="w-4/5 ">
        <div class="w-full p-8 bg-white shadow-lg">
             <p class="text-xl font-bold">Dashboard</p>
         </div>
        <div class="p-4 space-y-2 ">
             @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
             @forelse($dates as $date)
             <div class=" p-6 border-b-[1px] bg-white">
                 <p class="py-4 text-black-600 font-bold">{{$date->tanggal}}</p>
              @php
                $pesans = DB::table('pesans')
                        ->select('users.*','pesans.jam')
                        ->join('users', 'pesans.id_user', '=', 'users.id')
                        ->where('pesans.aproval','=','belum')
                        ->whereDate('pesans.tanggal', '=', $date->tanggal)
                        ->distinct()
                        ->get();
              @endphp
              @forelse($pesans as $pesan )
              <div class="flex justify-between ">
     <div class="p-2 space-y-4  ">
                  
                      
                      <p>Janji pada Tanggal {{$date->tanggal}} Pukul {{$pesan->jam}}</p>
                     <div class="flex space-x-4"><div>Atas Nama : </div><div class="font-bold">{{$pesan->name}}</div></div> 
                    @php
                    
                    $datas = DB::table('pesans')
                            ->select('batus.*','pesans.catatan','pesans.id as pesan_id')
                            ->join('batus', 'pesans.id_item', '=', 'batus.id')
                            ->whereDate('pesans.tanggal', '=', $date->tanggal)
                            ->where('pesans.aproval','=','belum')     
                      
                            ->get();
                     @endphp
                     <div class="text-black-600 font-bold">Untuk Pembelian :</div>
                      <div class="grid grid-cols-2 gap-4">
                    @forelse($datas as $data)
                  
             <div class="flex space-x-4 shadow-md p-6 relative" >
                       <div class="flex border-r-[1px] border-r-black-600 w-1/2 space-x-2 px-2">
                         <div class="w-full space-y-4">
                             <img class="w-[100px] h-[100px]" src="{{ asset('images/'.$data->gambar)}}"alt="">
                              
                      
                         </div>
                         
                          <div>
                            <p class="text-[14px]">{{$data->nama_batu}}</p>
                           <p class=" text-sm">@format_uang($data->harga)</p>
                          </div>

                             <div id="default-modal{{$data->pesan_id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                  Alasan Penolakan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal{{$data->pesan_id}}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form  action="{{ route('aproval.tolak_aproval')}}" method="POST" enctype="multipart/form-data">

   @csrf
            <input hidden type="number" name="id" value="{{$data->pesan_id}}"> 
           <textarea class="w-full" placeholder="Berikan Alasan Anda" rows="10" name="alasan"></textarea>

            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button  data-modal-hide="default-modal{{$data->pesan_id}}" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        
            </div>
            </form>
            <!-- Modal footer -->
            
        </div>
    </div>
</div>
                       </div>
                      
                       @if($data->catatan)
                       <div class="w-1/2">
                       <p>catatan:</p>
                      <p class="text-[10px]">
                        {{$data->catatan}}
                      </p> 
                       </div>
                    
                      @endif
                     @if(Carbon::now() < $date->tanggal)
     <div class="p-2 flex space-x-4">
                         <a class="p-2 bg-green-400 text-white text-sm hover:bg-green-600 transition-color h-10" href="{{ route('aproval.update_aproval', ['id' => $data->pesan_id]) }}">Terima</a>
                          <a data-modal-target="default-modal{{$data->pesan_id}}" data-modal-toggle="default-modal{{$data->pesan_id}}" class="p-2 bg-red-600 text-white text-sm hover:bg-red-800 transition-color h-10 cursor-pointer">Tolak</a>
                    </div>
                  @endif
                   </div>
                   
              
                  @empty
                    <div class="">
                    Data Post belum Tersedia.
                    </div>
                    @endforelse
                    </div>
                  

                    </div>
                   
              </div>
               
            @empty
            <div class="">
              Data Post belum Tersedia.
             </div>
              @endforelse
            
          
       

         
     </div>
              
         @empty
            <div class="">
                                      Data Post belum Tersedia.
                                  </div>
           
  @endforelse
            </div>
            <div class="p-4 w-[80%]">
 {!! $dates->withQueryString()->links() !!}
        </div>

     
</body>
</html>