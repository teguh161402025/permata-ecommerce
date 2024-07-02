@extends('layout')
@section('content')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main class="bg-pink-300 min-h-screen">
            <div class="container mx-auto">
                <div class="flex justify-center">
                    <div class="w-full md:w-1/2 lg:w-1/3">
                        <div class="bg-white shadow-lg rounded-lg mt-32">
                            <div class="px-8 py-8">
                                <div class="text-center">
                                    <h3 class="text-lg font-semibold mb-4">Create Account</h3>
                                </div>
                            </div>
                            <div class="px-8 py-6">
                                <form action="{{route('proses_register')}}" method="POST" id="regForm">
                                    {{ csrf_field() }}
                                    <div class="mb-4">
                                        <label class="block text-sm font-semibold mb-1" for="inputFirstName">Nama</label>
                                        <input required class="form-input w-full py-2 px-4 rounded border border-gray-300 focus:outline-none focus:border-indigo-500" id="inputFirstName" type="text" name="name" placeholder="Masukkan Nama" />
                                        @if ($errors->has('name'))
                                          <span class="text-red-500 text-sm"> * {{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                  
                                    <div class="mb-4">
                                        <label class="block text-sm font-semibold mb-1" for="inputEmailAddress">Email</label>
                                        <input required class="form-input w-full py-2 px-4 rounded border border-gray-300 focus:outline-none focus:border-indigo-500" id="inputEmailAddress" type="email" aria-describedby="emailHelp" name="email" placeholder="Masukkan Email" />
                                        @if ($errors->has('email'))
                                          <span class="text-red-500 text-sm"> * {{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                      <div class="mb-4">
                                        <label class="block text-sm font-semibold mb-1" for="inputusername">No no_telepon</label>
                                        <input required class="form-input w-full py-2 px-4 rounded border border-gray-300 focus:outline-none focus:border-indigo-500" id="no_telepon" type="text" name="no_telepon" placeholder="Masukkan no_telepon" />
                                        @if ($errors->has('no_telepon'))
                                          <span class="text-red-500 text-sm"> * {{ $errors->first('no_telepon') }}</span>
                                        @endif
</div>
                                     <div class="mb-4">
                                        <label class="block text-sm font-semibold mb-1" for="inputusername">Alamat</label>
                                        <textarea required class="form-input w-full py-2 px-4 rounded border border-gray-300 focus:outline-none focus:border-indigo-500" id="alamat" type="text" name="alamat" placeholder="Masukkan alamat" ></textarea>
                                        @if ($errors->has('no_telepon'))
                                          <span class="text-red-500 text-sm"> * {{ $errors->first('no_telepon') }}</span>
                                        @endif
</div>
  <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="jenis_kelamin">
                    Jenis Kelamin
                </label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option disabled selected value="">Pilih Jenis Kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>

                                    <div class="mb-4">
                                        <label class="block text-sm font-semibold mb-1" for="inputPassword">Password</label>
                                        <input required class="form-input w-full py-2 px-4 rounded border border-gray-300 focus:outline-none focus:border-indigo-500" id="inputPassword" type="password" name="password" placeholder="Masukkan Password" />
                                        @if ($errors->has('password'))
                                          <span class="text-red-500 text-sm"> * {{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-4">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full" type="submit">Daftar!</button>
                                    </div>
                                </form>
                            </div>
                            <div class="px-8 py-4 bg-gray-100 border-t border-gray-200">
                                <div class="text-center text-sm">
                                    <div class="small"><a href="{{route('login')}}">Sudah Punya Akun? Login!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <script>
        document.getElementById('no_telepon').addEventListener('input', function(event) {
            const input = event.target.value;
            const regex = /[a-zA-Z]/;
            if (regex.test(input)) {
              Toastify({
                        text: "no_telepon  Harus Angka",
                        className: "info",
                        style: {
                            background: "#ea3d3d",
                        }
                        }).showToast();
                // Remove the last character which is a letter
                event.target.value = input.replace(/[a-zA-Z]/g, '');
            }
        });
    </script>
        </main>
    </div>
</div>
@endsection