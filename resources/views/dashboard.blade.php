<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="flex-none w-1/6 box-border " style="background-color: #101115">
            <div class="p-8 text-center">
                <h1 class="text-2xl font-bold text-white">SI-LITE</h1>
            </div>
            <nav class="mt-8 text-center">
                <ul>
                    <li class="px-7 py-7">
                        <a href="#" class="block text-white">Dashboard</a>
                    </li>
                    <li class="px-7 py-7">
                        <a href="#" class="block text-gray-300">Registrasi</a>
                    </li>
                    <li class="px-7 py-7">
                        <a href="#" class="block text-gray-300">IRS</a>
                    </li>
                    <li class="px-7 py-7">
                        <a href="#" class="block text-gray-300">KHS</a>
                    </li>
                    <li class="px-7 py-7">
                        <a href="#" class="block text-gray-300">Log Out</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Content -->
        <div class="flex-grow" style="background-color: #17181C;">

            <!-- Navbar Atas-->
            <nav class="pr-8 pt-5 pb-5 flex justify-end items-center box-border border-b-2 border-black" style="background-color: #1E1F24;">
                <!-- Nama dan NIM -->
                <div class="text-right">
                    <h2 class="text-xl font-semibold">Naufal Rizki Saputra</h2>
                    <h2 class="text-lg text-gray-400">24060122120011</h2>
                </div>
                <!-- Foto Profil -->
                <div class="pl-8">
                    <img src="https://via.placeholder.com/40" alt="Foto Profil" class="w-16 h-16 rounded-full">
                </div>
            </nav>

            <!-- Main Content -->
            <div class="bg-gray-800 px-8 pt-5 flex justify-center items-center" style="background-color: #17181C;">
                <div class="grid grid-cols-12 w-full gap-14">
                    <!-- Box Status Akademik -->
                    <div class="col-span-8 bg-gray-700 rounded-lg shadow-lg flex flex-col" style="background-color: #17181C;">
                        <h2 class="text-center text-lg font-semibold mb-4">Status Akademik</h2>

                        <!-- Box Utama Status Akademik -->
                        <div class="grid grid-cols-12 w-full rounded-lg flex-grow" style="background-color: #2A2C33;">
                            <div class="col-span-8 p-6 rounded-tl-lg rounded-bl-lg text-lg space-y-5 box-border border-black">
                                <div>
                                    <p style="color: #F0B90B"><strong>Dosen Wali :</strong></p>
                                    <p>Luthfan Lazuardi,S.Kom, M.Cs</p>
                                </div>
                                <div>
                                    <p style="color: #F0B90B"><strong>NIP Dosen Wali :</strong></p>
                                    <p class="mb-1">10101010101010</p>
                                </div>
                                <div>
                                    <p style="color: #F0B90B"><strong>Semester Akademik :</strong></p>
                                    <p>2024/2025 Ganjil</p>
                                </div>
                            </div>
                            <div class="col-span-4 p-6 text-center rounded-tr-lg rounded-br-lg text-lg space-y-2 box-border border-black flex flex-col items-center gap-1.5">
                                <p style="color: #F0B90B"><strong>Semester Studi :</strong></p>
                                <div class="box-border border-2 w-20 h-20 flex justify-center items-center rounded-lg" style="border-color: #F0B90B">
                                    <span class="text-5xl"><strong>5</strong></span>
                                </div>
                            </div>
                            <div class="col-span-12 text-white text-center py-3 rounded-md mx-5 mb-5" style="background-color: #34803C">
                                <p><strong>AKTIF</strong></p>
                            </div>
                        </div>
                    </div>

                    <!-- Box Capaian Akademik -->
                    <div class="col-span-4 bg-gray-700 rounded-lg shadow-lg flex flex-col" style="background-color: #17181C">
                        <h2 class="text-center text-lg font-semibold mb-4">Capaian Akademik</h2>

                        <!-- Box Utama Capaian Akademik -->
                        <div class="p-6 rounded-tl-lg rounded-tr-lg text-lg space-y-4 flex-grow flex items-center justify-center" style="background-color: #2A2C33">
                            <div class="text-center w-full">
                                <p class="text-gray-300"><strong>IPK</strong></p>
                                <div class="text-white text-center py-2 mx-5 rounded-lg mt-2" style="background-color: #B39741">
                                    <p class="font-semibold text-3xl text-gray-50">3.89</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-5 space-y-4 flex-grow flex items-center justify-center" style="background-color: #2A2C33">
                            <div class="p-0.5 rounded-lg text-lg space-y-4 flex-grow flex items-center justify-center" style="background-color: #FFFFFF">
                            </div>
                        </div>
                        <div class="p-6 rounded-bl-lg rounded-br-lg text-lg space-y-4 flex-grow flex items-center justify-center" style="background-color: #2A2C33">
                            <div class="text-center w-full">
                                <p class="text-gray-300"><strong>SKS</strong></p>
                                <div class="text-white text-center py-2 mx-5 rounded-lg mt-2" style="background-color: #486AAD">
                                    <p class="font-semibold text-3xl text-gray-50">90</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box Jadwal Mata Kuliah -->
            <div class="px-8 pt-5 mt-5">
                <h2 class="text-center text-lg font-semibold mb-4">Jadwal Mata Kuliah</h2>
                <div class="grid grid-cols-12 w-full">
                    <!-- Kolom Waktu -->
                    <span class="col-span-3 flex flex-col rounded-tl-lg rounded-bl-lg border-r-2" style="background-color: #2A2C33">
                        <div class="w-full text-center rounded-tl-lg" style="background-color: #878A91"><strong>Waktu</strong></div>
                        <div class="w-full text-center my-5 space-y-5">
                            <p>Senin, 07.00 - 09.30</p>
                            <p>Senin, 10.00 - 12.00</p>
                            <p>Rabu, 07.00 - 09.30</p>
                            <p>Sabtu, 09.40 - 12.10</p>
                        </div>
                    </span>
                    <!-- Kolom Mata Kuliah -->
                    <span class="col-span-6 flex flex-col" style="background-color: #2A2C33">
                        <div class="w-full text-center" style="background-color: #878A91"><strong>Mata Kuliah</strong></div>
                        <div class="w-full text-center my-5 space-y-5">
                            <p>Proyek Perangkat Lunak - D</p>
                            <p>Pengembangan Berbasis Platform - C</p>
                            <p>Sistem Informasi - C</p>
                            <p>Manajemen Basis Data - B</p>
                        </div>
                    </span>
                    <!-- Kolom Ruangan -->
                    <span class="col-span-3 flex flex-col rounded-tr-lg rounded-br-lg border-l-2" style="background-color: #2A2C33">
                        <div class="w-full text-center rounded-tr-lg" style="background-color: #878A91">Ruangan</div>
                        <div class="w-full text-center my-5 space-y-5">
                            <p>E101</p>
                            <p>A304</p>
                            <p>E304</p>
                            <p>A302</p>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>