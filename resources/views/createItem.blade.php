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
    <title>Dashboard</title>
</head>
<body class="bg-gray-200">
       @include('adminnav')
       <div class="w-full flex justify-end">
     <div class="w-4/5 ">
        <div class="w-full p-8 bg-white shadow-lg">
             <p class="text-xl font-bold">Tambah Barang</p>
         </div>
          <div class="p-4 space-y-2">
            @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif
            <div class="px-6 py-4 bg-white">
                <form id="itemForm" action="{{ route('createItem.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Nama Batu -->
                    <div class="mt-4">
                        <label for="nama_batu" class="block text-sm font-medium text-gray-700">Nama Batu</label>
                        <input require type="text" name="nama_batu" id="nama_batu" autocomplete="off" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('nama_batu') border-red-500 @enderror" value="{{ old('nama_batu') }}">
                        @error('nama_batu')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Jenis -->
                    <div class="mt-4">
                        <label for="jenis" class="block text-sm font-medium text-gray-700">Jenis</label>
                        <select require name="jenis" id="jenis" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('jenis') border-red-500 @enderror">
                            <option value="Emerald">Emerald</option>
                            <option value="Ruby">Ruby</option>
                            <option value="Saphire">Saphire</option>
                            <option value="Diamond">Diamond</option>
                            <option value="Topaz">Topaz</option>
                            <option value="Opal">Opal</option>
                            <option value="Citrine">Citrine</option>
                            <option value="Amethyse">Amethyse</option>
                            <option value="Akik">Akik</option>
                            <option value="Bacan">Bacan</option>
                        </select>
                        @error('jenis')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Harga -->
                    <div class="mt-4">
                        <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                        <input require type="number" name="harga" id="harga" autocomplete="off" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('harga') border-red-500 @enderror" value="{{ old('harga') }}">
                        @error('harga')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Rating -->
                    <input require type="number" value="0" name="rating" id="rating" autocomplete="off" class="hidden mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    <!-- Infopedia -->
                    <div class="mt-4">
                        <label for="infopedia" class="block text-sm font-medium text-gray-700">Infopedia</label>
                        <textarea require name="infopedia" id="infopedia" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('infopedia') border-red-500 @enderror">{{ old('infopedia') }}</textarea>
                        @error('infopedia')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Gambar -->
                    <div class="mt-4">
                        <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                        <input require type="file" name="gambar" id="gambar" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('gambar') border-red-500 @enderror">
                        @error('gambar')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                          <div class="mt-4">
                            <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                            <select require id="kategori" name="kategori" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="permata" >Permata</option>
                                <option value="cincin">Cincin</option>
                                <option value="anting">Anting</option>
                                <option value="kalung">Kalung</option>
                            </select>
                        </div>
                    <!-- Tagline -->
                    <div class="my-8">
                        <p>Tagline</p>
                        <input type="checkbox" id="checkbox1" value="Elegan"> Elegan<br>
                        <input type="checkbox" id="checkbox2" value="Berkesan"> Berkesan<br>
                        <input type="checkbox" id="checkbox3" value="Bercahaya"> Bercahaya<br>
                        <input type="checkbox" id="checkbox4" value="Memukau"> Memukau<br>
                        <input type="checkbox" id="checkbox5" value="Berharga"> Berharga<br>
                        <input type="checkbox" id="checkbox6" value="Mewah"> Mewah<br>
                        <input type="text" hidden id="result" name="tag" readonly>
                    </div>
                    
                    <!-- Detail -->
                    <div class="mt-4">
                        <label for="detail" class="block text-sm font-medium text-gray-700">Detail</label>
                        <textarea require id="detail" name="detail" id="detail" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('detail') border-red-500 @enderror">{{ old('detail') }}</textarea>
                        @error('detail')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-gray-800 hover:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Simpan</button>
                    </div>
                </form>
            </div>
     </div>
</body>
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
      resultInput.value = selectedCheckboxes.join(", ");
    });
  });
</script>
 <script>
        document.getElementById('itemForm').addEventListener('submit', function(event) {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var checked = Array.prototype.slice.call(checkboxes).some(function(checkbox) {
                return checkbox.checked;
            });

            if (!checked) {
                event.preventDefault();
                Toastify({
  text: "Tolong Pilih Tagline",
  duration: 3000,
  destination: "https://github.com/apvarun/toastify-js",
  newWindow: true,
  close: true,
  gravity: "top", // `top` or `bottom`
  position: "center", // `left`, `center` or `right`
  stopOnFocus: true, // Prevents dismissing of toast on hover
  style: {
    background: "#ea3d3d",
  },
  onClick: function(){} // Callback after click
}).showToast();
            }
        });
    </script>
</html>
@endsection
