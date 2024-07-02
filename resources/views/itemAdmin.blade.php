@extends('layout')
@section('content')
@php 
use App\Models\Pesan;
use App\Models\Batu;
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
             <p class="text-xl font-bold">Tambah Barang</p>
         </div>
          @if (session('success'))
            <div class="alert alert-success p-4 text-green-500">
                {{ session('success') }}
            </div>
        @endif
          <div class="p-4 space-y-2 bg-white m-4">
     <table id="myTable" class="table">
            <thead>
                <tr class="text-white bg-gray-400">
                    <th>Nama Batu</th>
                    <th>Jenis</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Rating</th>
                    <th>Gambar</th>
              <th>Aksi</th>
        
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr class="border-b-[2px] ">
                        <td ><p class="hover:text-blue-500 cursor-pointer" data-modal-target="default-modal{{$item->id}}" data-modal-toggle="default-modal{{$item->id}}" >{{ $item->nama_batu }}</p></td>
                        <td>{{ $item->jenis }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->rating }}</td>
                        <td>
                            @if ($item->gambar)
                                <img src="{{ asset('images/'.$item->gambar) }}" alt="{{ $item->nama_batu }}" style="max-width: 100px;">
                            @else
                                No Image
                            @endif
                        </td>
                           <td>
                              <div class="flex space-x-4 p-2">
                                <a class="text-white text-center py-2 px-4 bg-blue-500" href="{{ route('edit', $item->id) }}">Edit</a>
                  
                                  <a href="{{ route('items.destroy', $item->id) }}" class="text-white text-center py-2 px-4 bg-red-500" onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this item?')) { document.getElementById('delete-item-{{ $item->id }}').submit(); }">Delete</a>
                               <form id="delete-item-{{ $item->id }}" action="{{ route('items.destroy', $item->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                                </div> 
                           </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
     </div>
    
</body>

</html>