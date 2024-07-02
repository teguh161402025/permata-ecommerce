<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
 [
                'name' => 'Hafizhan Shidqi',
                'email' => 'hafizhanshidqi@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0812345678901',
                'alamat' => 'Medan No 1'
            ],
            [
                'name' => 'Gandhi Wibowo',
                'email' => 'gandhiwibowo@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0823456789012',
                'alamat' => 'Medan No 2'
            ],
            [
                'name' => 'Aldio Mahendra Purwandrarto',
                'email' => 'aldiomp@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0834567890123',
                'alamat' => 'Medan No 3'
            ],
            [
                'name' => 'Benny Putra',
                'email' => 'bennyputra@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0845678901234',
                'alamat' => 'Medan No 4'
            ],
            [
                'name' => 'Vicky Vernando Dasta',
                'email' => 'vickyvernando@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0856789012345',
                'alamat' => 'Medan No 5'
            ],
            [
                'name' => 'Jufianto Henri',
                'email' => 'jufiantohenri@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0867890123456',
                'alamat' => 'Medan No 6'
            ],
            [
                'name' => 'Aan Nuraini',
                'email' => 'aannuraini@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'perempuan',
                'no_telepon' => '0878901234567',
                'alamat' => 'Medan No 7'
            ],
            [
                'name' => 'Abdur Rahman',
                'email' => 'abdurrahman@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0889012345678',
                'alamat' => 'Medan No 8'
            ],
            [
                'name' => 'Abdurrahman',
                'email' => 'abdurrahman2@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0890123456789',
                'alamat' => 'Medan No 9'
            ],
            [
                'name' => 'Ade Indra Sukma',
                'email' => 'adeindrasukma@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0801234567890',
                'alamat' => 'Medan No 10'
            ],
               [
                'name' => 'Ade Irmayani',
                'email' => 'adeirmayani@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'perempuan',
                'no_telepon' => '0912345678901',
                'alamat' => 'Medan No 11'
            ],
            [
                'name' => 'Bakti Yoga Fiyandana',
                'email' => 'baktiyoga@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0923456789012',
                'alamat' => 'Medan No 12'
            ],
            [
                'name' => 'Daniel Sepra Fatama',
                'email' => 'danielsepra@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0934567890123',
                'alamat' => 'Medan No 13'
            ],
            [
                'name' => 'Dayu M Sandro',
                'email' => 'dayumsandro@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0945678901234',
                'alamat' => 'Medan No 14'
            ],
            [
                'name' => 'Dean Mareti Hariani',
                'email' => 'deanhariani@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'perempuan',
                'no_telepon' => '0956789012345',
                'alamat' => 'Medan No 15'
            ],
            [
                'name' => 'Edi Kurniawan Wibowo',
                'email' => 'ediwibowo@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0967890123456',
                'alamat' => 'Medan No 16'
            ],
            [
                'name' => 'Fadil Rahmat Andini',
                'email' => 'fadilandini@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0978901234567',
                'alamat' => 'Medan No 17'
            ],
            [
                'name' => 'Fahmi Iqbal Firmananda',
                'email' => 'fahmi@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0989012345678',
                'alamat' => 'Medan No 18'
            ],
            [
                'name' => 'Fairuzi',
                'email' => 'fairuzi@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0990123456789',
                'alamat' => 'Medan No 19'
            ],
            [
                'name' => 'Gustian',
                'email' => 'gustian@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1001234567890',
                'alamat' => 'Medan No 20'
            ],
                [
                'name' => 'Habil Sabilla Do\'A',
                'email' => 'habilsabilla@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'perempuan',
                'no_telepon' => '1121234567890',
                'alamat' => 'Medan No 31'
            ],
            [
                'name' => 'Hermawan Syah',
                'email' => 'hermawansyah@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1131234567890',
                'alamat' => 'Medan No 32'
            ],
            [
                'name' => 'Ibnuyohanzah Ahmad',
                'email' => 'ibnuyohanzah@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1141234567890',
                'alamat' => 'Medan No 33'
            ],
            [
                'name' => 'Lia Pertiwi',
                'email' => 'liapertiwi@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'perempuan',
                'no_telepon' => '1151234567890',
                'alamat' => 'Medan No 34'
            ],
            [
                'name' => 'Muhammad Maksum Sugondo',
                'email' => 'muhmmadsugondo@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1161234567890',
                'alamat' => 'Medan No 35'
            ],
            [
                'name' => 'Muhammad Risfandanu',
                'email' => 'muhammadrifandanu@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1171234567890',
                'alamat' => 'Medan No 36'
            ],
            [
                'name' => 'Adnil Riza',
                'email' => 'adnilriza@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1181234567890',
                'alamat' => 'Medan No 37'
            ],
            [
                'name' => 'Nadia Gustiana',
                'email' => 'nadiagustiana@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'perempuan',
                'no_telepon' => '1191234567890',
                'alamat' => 'Medan No 38'
            ],
            [
                'name' => 'Nanda Aditya',
                'email' => 'nandaaditya2@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1201234567890',
                'alamat' => 'Medan No 39'
            ],
            [
                'name' => 'Nurgivo Alfajri',
                'email' => 'nurgivoalfajri2@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1211234567890',
                'alamat' => 'Medan No 40'
            ],
              [
                'name' => 'Pita Irul Sayekti',
                'email' => 'pitairul@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1221234567890',
                'alamat' => 'Medan No 41'
            ],
            [
                'name' => 'Rahmadi Gusri',
                'email' => 'rahmadigusri@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1231234567890',
                'alamat' => 'Medan No 42'
            ],
            [
                'name' => 'Rahmat',
                'email' => 'rahmat@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1241234567890',
                'alamat' => 'Medan No 43'
            ],
            [
                'name' => 'Sadra Wilis',
                'email' => 'sadrawilis@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1251234567890',
                'alamat' => 'Medan No 44'
            ],
            [
                'name' => 'Said Rio Apriadi',
                'email' => 'saidrio@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1261234567890',
                'alamat' => 'Medan No 45'
            ],
            [
                'name' => 'Tania Rahmadhini',
                'email' => 'taniarahmadhini@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'perempuan',
                'no_telepon' => '1271234567890',
                'alamat' => 'Medan No 46'
            ],
            [
                'name' => 'Tarikhul Mahfudz',
                'email' => 'tarikhulmahfudz@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1281234567890',
                'alamat' => 'Medan No 47'
            ],
            [
                'name' => 'Vido Idramedi',
                'email' => 'vidoidramedi@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1291234567890',
                'alamat' => 'Medan No 48'
            ],
            [
                'name' => 'Wahyu Darmawan',
                'email' => 'wahyudarmawan@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1301234567890',
                'alamat' => 'Medan No 49'
            ],
            [
                'name' => 'Yana Famana',
                'email' => 'yanafamana@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'perempuan',
                'no_telepon' => '1311234567890',
                'alamat' => 'Medan No 50'
            ],
            [
                'name' => 'Yusrika Dewi',
                'email' => 'yusrikadewi@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'perempuan',
                'no_telepon' => '1321234567890',
                'alamat' => 'Medan No 51'
            ],
            [
                'name' => 'Zakiah Nurviani',
                'email' => 'zakiahnurviani@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'perempuan',
                'no_telepon' => '1331234567890',
                'alamat' => 'Medan No 52'
            ],
            [
                'name' => 'Aditya Dwi Nugraha',
                'email' => 'adityadwinugraha@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1341234567890',
                'alamat' => 'Medan No 53'
            ],
            [
                'name' => 'Afrian Djugi',
                'email' => 'afriandjugi@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1351234567890',
                'alamat' => 'Medan No 54'
            ],
            [
                'name' => 'Debby Jayadi Nugroho',
                'email' => 'debbyjayadi@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'perempuan',
                'no_telepon' => '1361234567890',
                'alamat' => 'Medan No 55'
            ],
            [
                'name' => 'Dede Dwi Arviyanti',
                'email' => 'dededwi@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'perempuan',
                'no_telepon' => '1371234567890',
                'alamat' => 'Medan No 56'
            ],
            [
                'name' => 'Della Maulina Herianda',
                'email' => 'dellamaulina@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'perempuan',
                'no_telepon' => '1381234567890',
                'alamat' => 'Medan No 57'
            ],
            [
                'name' => 'Deny Gustriansyah',
                'email' => 'denygustriansyah@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1391234567890',
                'alamat' => 'Medan No 58'
            ],
            [
                'name' => 'Desi Fitri',
                'email' => 'desifitri@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'perempuan',
                'no_telepon' => '1401234567890',
                'alamat' => 'Medan No 59'
            ],
            [
                'name' => 'Edmund Andriano',
                'email' => 'edmundandriano@mail.com',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '1411234567890',
                'alamat' => 'Medan No 60'
            ],
            [
        'name' => 'Fajar Aulia Rahman',
        'email' => 'fajarauliarahman@mail.com',
        'level' => 'user',
        'password' => Hash::make('123456'),
        'jenis_kelamin' => 'laki-laki',
        'no_telepon' => '0812345678901',
        'alamat' => 'Medan No 12'
    ],
    [
        'name' => 'Fathiya Hasyifah Sibarani',
        'email' => 'fathiyahasyifahsibarani@mail.com',
        'level' => 'user',
        'password' => Hash::make('123456'),
        'jenis_kelamin' => 'perempuan',
        'no_telepon' => '0812345678901',
        'alamat' => 'Medan No 11'
    ],
    [
        'name' => 'Fauzar',
        'email' => 'fauzar@mail.com',
        'level' => 'user',
        'password' => Hash::make('123456'),
        'jenis_kelamin' => 'laki-laki',
        'no_telepon' => '0812345678901',
        'alamat' => 'Medan No 19'
    ],
    [
        'name' => 'Habzer Maisera',
        'email' => 'habzermaisera@mail.com',
        'level' => 'user',
        'password' => Hash::make('123456'),
        'jenis_kelamin' => 'laki-laki',
        'no_telepon' => '0812345678901',
        'alamat' => 'Medan No 18'
    ],
    [
        'name' => 'Herzavina',
        'email' => 'herzavina@mail.com',
        'level' => 'user',
        'password' => Hash::make('123456'),
        'jenis_kelamin' => 'perempuan',
        'no_telepon' => '0812345678901',
        'alamat' => 'Medan No 17'
    ],
    [
        'name' => 'Ikbal Gazalba',
        'email' => 'ikbalgazalba@mail.com',
        'level' => 'user',
        'password' => Hash::make('123456'),
        'jenis_kelamin' => 'laki-laki',
        'no_telepon' => '0812345678901',
        'alamat' => 'Medan No 16'
    ],
    [
        'name' => 'Ikhsan Firdaus',
        'email' => 'ikhsanfirdaus@mail.com',
        'level' => 'user',
        'password' => Hash::make('123456'),
        'jenis_kelamin' => 'laki-laki',
        'no_telepon' => '0812345678901',
        'alamat' => 'Medan No 12'
    ],
    [
        'name' => 'Ilda Ikhwana Lubis',
        'email' => 'ildaihwanalubis@mail.com',
        'level' => 'user',
        'password' => Hash::make('123456'),
        'jenis_kelamin' => 'perempuan',
        'no_telepon' => '0812345678901',
        'alamat' => 'Medan No 15'
    ],
    [
        'name' => 'Jayus Suryawan',
        'email' => 'jayussuryawan@mail.com',
        'level' => 'user',
        'password' => Hash::make('123456'),
        'jenis_kelamin' => 'laki-laki',
        'no_telepon' => '0812345678901',
        'alamat' => 'Medan No 13'
    ],
    [
        'name' => 'Muhammad Bagoes Samaron',
        'email' => 'muhammadbagoessamaron@mail.com',
        'level' => 'user',
        'password' => Hash::make('123456'),
        'jenis_kelamin' => 'laki-laki',
        'no_telepon' => '0812345678901',
        'alamat' => 'Medan No 12'
    ],
            [
    'name' => 'Muhammad Hanafi',
    'email' => 'muhammadhanafi@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1521234567890',
    'alamat' => 'Medan No 71'
],
[
    'name' => 'Muhammad Ilham Akbar Khoiri',
    'email' => 'muhammadilham@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1531234567890',
    'alamat' => 'Medan No 72'
],
[
    'name' => 'Narendra Benny',
    'email' => 'narendrabenny@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1541234567890',
    'alamat' => 'Medan No 73'
],
[
    'name' => 'Naufal Abiyyu',
    'email' => 'naufalabiyyu@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1551234567890',
    'alamat' => 'Medan No 74'
],
[
    'name' => 'Nurhikmah',
    'email' => 'nurhikmah@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'perempuan',
    'no_telepon' => '1561234567890',
    'alamat' => 'Medan No 75'
],
[
    'name' => 'Fadana Bagus Harsono',
    'email' => 'fadanabagus@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1571234567890',
    'alamat' => 'Medan No 76'
],
[
    'name' => 'Rahmi Omya Ulta',
    'email' => 'rahmiomaya@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'perempuan',
    'no_telepon' => '1581234567890',
    'alamat' => 'Medan No 77'
],
[
    'name' => 'Rahmi Septhianingrum',
    'email' => 'rahmisepti@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'perempuan',
    'no_telepon' => '1591234567890',
    'alamat' => 'Medan No 78'
],
[
    'name' => 'Rangga Arief Putra',
    'email' => 'ranggaarief@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1601234567890',
    'alamat' => 'Medan No 79'
],
[
    'name' => 'Rangga Dwi Nugrawan',
    'email' => 'ranggadwi@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1611234567890',
    'alamat' => 'Medan No 80'
],
[
    'name' => 'Saiful Wahyudi',
    'email' => 'saifulwahyudi@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1621234567890',
    'alamat' => 'Medan No 81'
],
[
    'name' => 'Sari Devia Agustina',
    'email' => 'saridevia@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'perempuan',
    'no_telepon' => '1631234567890',
    'alamat' => 'Medan No 82'
],
[
    'name' => 'Taufik Oktafiyardi',
    'email' => 'taufikoktafi@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1641234567890',
    'alamat' => 'Medan No 83'
],
[
    'name' => 'Teddy Franwijaya',
    'email' => 'teddyfranwijaya@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1651234567890',
    'alamat' => 'Medan No 84'
],
[
    'name' => 'Vigo Farlandi',
    'email' => 'vigofarlandi@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1661234567890',
    'alamat' => 'Medan No 85'
],
[
    'name' => 'Wahyu Ernu Setiawan',
    'email' => 'wahyusetiawan@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1671234567890',
    'alamat' => 'Medan No 86'
],
[
    'name' => 'Yofaldi Laksmana Putra',
    'email' => 'yofaldiputra@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1681234567890',
    'alamat' => 'Medan No 87'
],
[
    'name' => 'Zubaidah',
    'email' => 'zubaidah@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'perempuan',
    'no_telepon' => '1691234567890',
    'alamat' => 'Medan No 88'
],
[
    'name' => 'Agus Faturrahman',
    'email' => 'agusfaturrahman@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1701234567890',
    'alamat' => 'Medan No 89'
],
[
    'name' => 'Agustiando Rahmat',
    'email' => 'agustiandorahmat@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1711234567890',
    'alamat' => 'Medan No 90'
],
[
    'name' => 'Aidil Badri',
    'email' => 'aidilbadri@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1721234567890',
    'alamat' => 'Medan No 91'
],
[
    'name' => 'Alfajri',
    'email' => 'alfajri@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1731234567890',
    'alamat' => 'Medan No 92'
],
[
    'name' => 'Bayu Hasan Basyir Aljawi',
    'email' => 'bayualjawi@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1741234567890',
    'alamat' => 'Medan No 93'
],
[
    'name' => 'Desi Fransiska',
    'email' => 'desifransiska@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'perempuan',
    'no_telepon' => '1751234567890',
    'alamat' => 'Medan No 94'
],
[
    'name' => 'Desnando',
    'email' => 'desnando@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1761234567890',
    'alamat' => 'Medan No 95'
],
[
    'name' => 'Desri Ardika',
    'email' => 'desriardika@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1771234567890',
    'alamat' => 'Medan No 96'
],
[
    'name' => 'Dessy Masdianata P',
    'email' => 'dessymasdianata@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'perempuan',
    'no_telepon' => '1781234567890',
    'alamat' => 'Medan No 97'
],
[
    'name' => 'Destria Membrane',
    'email' => 'destriamembrane@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'perempuan',
    'no_telepon' => '1791234567890',
    'alamat' => 'Medan No 98'
],
[
    'name' => 'Eka Nur Safitri',
    'email' => 'ekanursafitri@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'perempuan',
    'no_telepon' => '1801234567890',
    'alamat' => 'Medan No 99'
],
[
    'name' => 'Fauziah',
    'email' => 'fauziah@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'perempuan',
    'no_telepon' => '1811234567890',
    'alamat' => 'Medan No 100'
],
[
    'name' => 'Feny Afrisilia',
    'email' => 'fenyafrisilia@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'perempuan',
    'no_telepon' => '1821234567890',
    'alamat' => 'Medan No 101'
],
[
    'name' => 'Hesty Afriani Srg',
    'email' => 'hestyafriani@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'perempuan',
    'no_telepon' => '1831234567890',
    'alamat' => 'Medan No 102'
],
[
    'name' => 'Ilham Afandi Aziz',
    'email' => 'ilhamafandi@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1841234567890',
    'alamat' => 'Medan No 103'
],
[
    'name' => 'Ilham Fajri',
    'email' => 'ilhamfajri@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1851234567890',
    'alamat' => 'Medan No 104'
],
[
    'name' => 'Indah Permata Sari',
    'email' => 'indahsari@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'perempuan',
    'no_telepon' => '1861234567890',
    'alamat' => 'Medan No 105'
],
[
    'name' => 'Jukhri Syahputra',
    'email' => 'jukhrisyahputra@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1871234567890',
    'alamat' => 'Medan No 106'
],
[
    'name' => 'M. Muawam',
    'email' => 'mmuawam@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1881234567890',
    'alamat' => 'Medan No 107'
],
[
    'name' => 'M. Yassir Saputra Jamina',
    'email' => 'myassirjamina@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1891234567890',
    'alamat' => 'Medan No 108'
],
[
    'name' => 'Mardiyyat Fadliellah',
    'email' => 'mardiyyatfadliellah@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1901234567890',
    'alamat' => 'Medan No 109'
],
[
    'name' => 'Mukhtar Lutfi',
    'email' => 'mukhtarlutfi@mail.com',
    'level' => 'user',
    'password' => Hash::make('123456'),
    'jenis_kelamin' => 'laki-laki',
    'no_telepon' => '1911234567890',
    'alamat' => 'Medan No 110'
]
            
        ];
  

        

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}