@extends('layout')
@section('content')
@php
$user = Session::get('user');
use Carbon\Carbon;

          @endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muny Gems</title>
</head>
<body class="bg-gray-50">
      @include('navbar')

   <div class="p-24 flex w-full">
     <div class="space-y-4 text-right border-r-2 border-r-pink-200 min-h-screen px-4 w-1/4" >
     <div class="text-xl text-pink-600">Selamat Datang, {{$user->name}}</div>
     <div class="transition-color hover:text-pink-400 
      @if(request()->is('permataAnda'))
        text-pink-400 
    @endif
     transition duration-200 ease-in-out" > <a href="{{ route('permata_anda')  }}">Janji Yang akan datang</a> </div>
       <div class="transition-color hover:text-pink-400 
      @if(request()->is('permataAnda/aktivitas'))
        text-pink-400 
    @endif
     transition duration-200 ease-in-out" > <a href="{{ route('permata_anda.aktivitas')  }}">Aktivitas</a> </div>
       <div class="transition-color hover:text-pink-400 
      @if(request()->is('permataAnda/disetujui'))
        text-pink-400 
    @endif
     transition duration-200 ease-in-out"> <a href="{{ route('permata_anda.setuju')  }}"> Janji Disetujui</a></div>
       <div class="transition-color hover:text-pink-400 
      @if(request()->is('permataAnda/ditolak'))
        text-pink-400 
    @endif
     transition duration-200 ease-in-out" > <a href="{{ route('permata_anda.ditolak')  }}">Janji DiTolak</a> </div>
       <div class="transition-color hover:text-pink-400 
      @if(request()->is('permataAnda/history'))
        text-pink-400 
    @endif
     transition duration-200 ease-in-out"> <a href="{{ route('permata_anda.history')  }}">History</a> </div>
     </div>
     <div class="w-3/4">
        <div class="p-4 space-y-2">
             @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
             @forelse($dates as $date)
             <div class=" p-6 border-b-[1px] border-pink-200">
                 <p class="py-4 text-pink-600 font-bold">{{$date->tanggal}}</p>
              @php

           if(request()->is('permataAnda')){
                $pesans = DB::table('pesans')
                        ->select('users.*','pesans.jam')
                        ->join('users', 'pesans.id_user', '=', 'users.id')
                        ->whereDate('pesans.tanggal', '=', $date->tanggal)
                        ->where('pesans.aproval','=','sudah')
                        ->distinct()
                        ->get();
             }
             elseif(request()->is('permataAnda/aktivitas')){
                     $pesans = DB::table('pesans')
                        ->select('users.*','pesans.jam')
                        ->join('users', 'pesans.id_user', '=', 'users.id')
                        ->whereDate('pesans.tanggal', '=', $date->tanggal)
                        ->distinct()
                        ->get();
             }
               elseif(request()->is('permataAnda/disetujui')){
                     $pesans = DB::table('pesans')
                        ->select('users.*','pesans.jam')
                        ->join('users', 'pesans.id_user', '=', 'users.id')
                        ->whereDate('pesans.tanggal', '=', $date->tanggal)
                        ->where('pesans.aproval','=','sudah')
                        ->distinct()
                        ->get();
             }
                  elseif(request()->is('permataAnda/ditolak')){
                     $pesans = DB::table('pesans')
                        ->select('users.*','pesans.jam')
                        ->join('users', 'pesans.id_user', '=', 'users.id')
                        ->whereDate('pesans.tanggal', '=', $date->tanggal)
                        ->where('pesans.aproval','=','ditolak')
                        ->distinct()
                        ->get();
             }

                elseif(request()->is('permataAnda/history')){
                     $pesans = DB::table('pesans')
                        ->select('users.*','pesans.jam')
                        ->join('users', 'pesans.id_user', '=', 'users.id')
                        ->whereDate('pesans.tanggal', '=', $date->tanggal)
                        ->distinct()
                        ->get();
             }
              @endphp
              @forelse($pesans as $pesan )
              <div class="flex justify-between ">
     <div class="p-2 space-y-4  ">
                  
                      
                      <p>Janji pada Tanggal {{$date->tanggal}} Pukul {{$pesan->jam}}</p>
                    @php
                       if(request()->is('permataAnda')){
                    $datas = DB::table('pesans')
                           ->select('batus.*','pesans.catatan','pesans.aproval','pesans.id as pesan_id')
                            ->join('batus', 'pesans.id_item', '=', 'batus.id')
                            ->whereDate('pesans.tanggal', '=', $date->tanggal)
                            ->where('pesans.id_user','=',$user->id)
                             ->where('pesans.aproval','=','sudah')
                            ->get();
                       }

                         elseif(request()->is('permataAnda/aktivitas')){
                     $datas = DB::table('pesans')
                              ->select('batus.*','pesans.catatan','pesans.aproval','pesans.id as pesan_id')
                            ->join('batus', 'pesans.id_item', '=', 'batus.id')
                            ->whereDate('pesans.tanggal', '=', $date->tanggal)
                            ->where('pesans.id_user','=',$user->id)
                         
                            ->get();
             }
             
                elseif(request()->is('permataAnda/disetujui')){
                     $datas = DB::table('pesans')
                             ->select('batus.*','pesans.catatan','pesans.aproval','pesans.id as pesan_id')
                            ->join('batus', 'pesans.id_item', '=', 'batus.id')
                            ->whereDate('pesans.tanggal', '=', $date->tanggal)
                            ->where('pesans.id_user','=',$user->id)
                           ->where('pesans.aproval','=','sudah')
                            ->get();
             }
                              elseif(request()->is('permataAnda/ditolak')){
                     $datas = DB::table('pesans')
                            ->select('batus.*','pesans.catatan','pesans.aproval','pesans.alasan','pesans.id as pesan_id')
                            ->join('batus', 'pesans.id_item', '=', 'batus.id')
                            ->whereDate('pesans.tanggal', '=', $date->tanggal)
                            ->where('pesans.id_user','=',$user->id)
                      ->where('pesans.aproval','=','ditolak')
                            ->get();
             }
               elseif(request()->is('permataAnda/history')){
               $datas = DB::table('pesans')
                            ->select('batus.*','pesans.catatan','pesans.aproval','pesans.id as pesan_id')
                            ->join('batus', 'pesans.id_item', '=', 'batus.id')
                            ->whereDate('pesans.tanggal', '=', $date->tanggal)
                            ->where('pesans.id_user','=',$user->id)
                         
                            ->get();
             }




                     @endphp
                     <div class="text-pink-600 font-bold">Untuk Pembelian :</div>
                      <div class="grid grid-cols-2 gap-4">
                    @forelse($datas as $data)
                  
             <div class="flex space-x-4 shadow-md p-6 relative" >
                       <div class="flex border-r-[1px] border-r-pink-600 w-1/2 space-x-2 px-2">
                         <div class="w-full space-y-4">
                             <img class="w-[100px] h-[100px]" src="{{ asset('images/'.$data->gambar)}}"alt="">
                              
                      
                         </div>
       
                           @if($data->aproval == 'belum' &&  Carbon::now() < $date->tanggal )
                     <a href="{{ route('permata_anda.destroy', $data->pesan_id) }}"
                        class="absolute bottom-0 left-4  text-sm text-center py-2 px-4 text-red-500 mt-4 hover:text-red-800 transition-color duration-200" 
                        onclick="event.preventDefault(); if (confirm('Apakah Anda Yakin Ingin Membatalkan untuk item ini?')) 
                       { document.getElementById('delete-item-{{ $data->pesan_id }}').submit(); }"><p>Batalkan</p></a>
                         <form id="delete-item-{{$data->pesan_id }}" action="{{ route('permata_anda.destroy', $data->pesan_id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                            @else
                            <div class ="absolute bottom-0 left-4  text-sm text-center py-2 px-4">Status: {{$data->aproval}} Verifikasi</div>
                          
                            @endif
                          <div>
                            <p class="text-[14px]">{{$data->nama_batu}}</p>
                           <p class="font-bold text-[14px]">@format_uang($data->harga)</p>
                          </div>
                       </div>
                      
                       @if($data->catatan && !$data->alasan)
                       <div class="w-1/2">
                       <p>catatan:</p>
                      <p class="text-[10px]">
                        {{$data->catatan}}
                      </p> 
                       </div>
                    @else
                      <div class="w-1/2">
                       <p>alasan ditolak:</p>
                      <p class="text-[10px]">
                        {{$data->alasan}}
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
     </div>
     
     </div>

</body>

@extends('footer')
</html>