@extends('layout')
@section('content')
@php 
use App\Models\Pesan;

use Illuminate\Support\Facades\DB;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                        ->where('pesans.aproval','=','sudah')
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
                            ->where('pesans.aproval','=','sudah')     
                      
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

                       </div>
                      
                       @if($data->catatan)
                       <div class="w-1/2">
                       <p>catatan:</p>
                      <p class="text-[10px]">
                        {{$data->catatan}}
                      </p> 
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