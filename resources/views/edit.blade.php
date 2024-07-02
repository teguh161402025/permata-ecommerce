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
        <div class="w-4/5">
            <div class="w-full p-8 bg-white shadow-lg">
                <p class="text-xl font-bold">Tambah Barang</p>
            </div>
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="p-4 space-y-2 bg-white m-4">
                <div class="px-6 py-4 bg-white">
                    <form id="itemForm" action="{{ route('update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Nama Batu -->
                        <div class="mt-4">
                            <label for="nama_batu" class="block text-sm font-medium text-gray-700">Nama Batu</label>
                            <input required type="text" name="nama_batu" id="nama_batu" autocomplete="off" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ old('nama_batu', $item->nama_batu) }}">
                        </div>
                        <!-- Jenis -->
                        <div class="mt-4">
                            <label for="jenis" class="block text-sm font-medium text-gray-700">Jenis</label>
                            <select name="jenis" id="jenis" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="Emerald" {{ $item->jenis == 'Emerald' ? 'selected' : '' }}>Emerald</option>
                                <option value="Ruby" {{ $item->jenis == 'Ruby' ? 'selected' : '' }}>Ruby</option>
                                <option value="Saphire" {{ $item->jenis == 'Saphire' ? 'selected' : '' }}>Saphire</option>
                                <option value="Diamond" {{ $item->jenis == 'Diamond' ? 'selected' : '' }}>Diamond</option>
                                <option value="Topaz" {{ $item->jenis == 'Topaz' ? 'selected' : '' }}>Topaz</option>
                                <option value="Opal" {{ $item->jenis == 'Opal' ? 'selected' : '' }}>Opal</option>
                                <option value="Citrine" {{ $item->jenis == 'Citrine' ? 'selected' : '' }}>Citrine</option>
                                <option value="Amethyse" {{ $item->jenis == 'Amethyse' ? 'selected' : '' }}>Amethyse</option>
                                <option value="Akik" {{ $item->jenis == 'Akik' ? 'selected' : '' }}>Akik</option>
                                <option value="Bacan" {{ $item->jenis == 'Bacan' ? 'selected' : '' }}>Bacan</option>
                            </select>
                        </div>
                        <!-- Harga -->
                        <div class="mt-4">
                            <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                            <input required type="number" name="harga" id="harga" autocomplete="off" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ old('harga', $item->harga) }}">
                        </div>
                        <!-- Rating -->
                        <input required type="number" value="{{ old('rating', $item->rating) }}" name="rating" id="rating" autocomplete="off" class="hidden mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        <!-- Gambar -->
                        <div class="mt-4">
                            <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                            <input type="file" name="gambar" id="gambar" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" onchange="previewImage(event)">
                            <img id="preview" class="mt-2" style="max-width: 200px;" src="{{ asset('images/' . $item->gambar) }}">
                        </div>
                        <!-- Kategori -->
                        <div class="mt-4">
                            <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                            <select id="kategori" name="kategori" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="permata" {{ $item->kategori == 'permata' ? 'selected' : '' }}>Permata</option>
                                <option value="cincin" {{ $item->kategori == 'cincin' ? 'selected' : '' }}>Cincin</option>
                                <option value="anting" {{ $item->kategori == 'anting' ? 'selected' : '' }}>Anting</option>
                                <option value="kalung" {{ $item->kategori == 'kalung' ? 'selected' : '' }}>Kalung</option>
                            </select>
                        </div>
                        <script>
                            function previewImage(event) {
                                var input = event.target;
                                var reader = new FileReader();
                                reader.onload = function() {
                                    var preview = document.getElementById('preview');
                                    preview.src = reader.result;
                                    preview.style.display = 'block';
                                }
                                reader.readAsDataURL(input.files[0]);
                            }
                        </script>
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
                        <script>
                            var valuesString = '@php echo $item->tag; @endphp';
                            var valuesArray = valuesString.split(',');
                            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                            checkboxes.forEach(function(checkbox) {
                                if (valuesArray.includes(checkbox.value)) {
                                    checkbox.checked = true;
                                }
                            });
                        </script>
                        <script>
                            var resultInput = document.getElementById("result");
                            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                            checkboxes.forEach(function(checkbox) {
                                checkbox.addEventListener('change', function() {
                                    var selectedCheckboxes = [];
                                    checkboxes.forEach(function(cb) {
                                        if (cb.checked) {
                                            selectedCheckboxes.push(cb.value);
                                        }
                                    });
                                    resultInput.value = selectedCheckboxes.join(",");
                                });
                            });
                        </script>
                        <!-- Detail -->
                        <div class="mt-4">
                            <label for="detail" class="block text-sm font-medium text-gray-700">Detail</label>
                            <textarea required id="detail" name="detail" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ old('detail', $item->detail) }}</textarea>
                        </div>
                        <div class="mt-4">
                            <label for="infopedia" class="block text-sm font-medium text-gray-700">Infopedia</label>
                            <textarea required name="infopedia" id="infopedia" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ old('infopedia', $item->infopedia) }}</textarea>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-gray-800 hover:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
</body>
</html>
@endsection