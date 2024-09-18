<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dekan</title>
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
                        <a href="#" class="block text-gray-300">Perwalian</a>
                    </li>
                    <li class="px-7 py-7">
                        <a href="#" class="block text-gray-300">Jadwal Kuliah Departemen</a>
                    </li>
                    <li class="px-7 py-7">
                        <a href="#" class="block text-gray-300">Input Nilai</a>
                    </li>
                    <li class="px-7 py-7">
                        <a href="#" class="block text-gray-300">Jadwal Mengajar</a>
                    </li>
                    <li class="px-7 py-7">
                        <a href="#" class="block text-gray-300">Verifikasi IRS</a>
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
                    <h2 class="text-xl font-semibold">Dr.Kusworo Adi,S.kom, M.Cs</h2>
                    <h2 class="text-lg font-semibold text-gray-400">19801221042387</h2>
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
                        <h2 class="text-center text-lg font-semibold mb-4">Status Dosen</h2>

                        <!-- Box Utama Status Akademik -->
                        <div class="grid grid-cols-12 w-full rounded-lg flex-grow" style="background-color: #2A2C33;">
                            <div class="col-span-8 p-6 rounded-tl-lg rounded-bl-lg text-lg space-y-5 box-border border-black">
                                <div>
                                    <p style="color: #F0B90B"><strong>Nama :</strong></p>
                                    <p class="font-semibold text">Dr.Kusworo Adi,S.kom, M.Cs</p>
                                </div>
                                <div>
                                    <p style="color: #F0B90B"><strong>NIP :</strong></p>
                                    <p class="font-semibold text">19801221042387</p>
                                </div>
                                <div>
                                    <p style="color: #F0B90B"><strong>Status :</strong></p>
                                    <p class="font-semibold text">Dosen/Dekan</p>
                                </div>
                            </div>
                            <div class="col-span-12 text-white text-center py-3 rounded-md mx-5 mb-5" style="background-color: #34803C">
                                <p><strong>AKTIF</strong></p>
                            </div>
                        </div>
                    </div>

                    <!-- Box Status Perwalian -->
                    <div class="col-span-4 bg-gray-700 rounded-lg shadow-lg flex flex-col" style="background-color: #17181C">
                        <h2 class="text-center text-lg font-semibold mb-4">Status Mahasiswa Perwalian</h2>

                        <!-- Box Utama Status Perwalian -->
                        <div class="p-6 rounded-tl-lg rounded-tr-lg text-lg space-y-4 flex-grow flex flex-col items-center justify-center" style="background-color: #2A2C33">
                            <!-- Status Akademik -->
                            <div class="text-center w-full">
                                <p style="color: #F0B90B"><strong>Status Akademik :</strong></p>
                                <p class="font-semibold text" >2024/2025 Ganjil</p>
                            </div>
                        
                            <!-- Mahasiswa Aktif -->
                            <div class="text-center w-full mt-4">
                                <p class="text-gray-300"><strong>Mahasiswa Aktif</strong></p>
                                <div class="text-white text-center py-2 mx-5 rounded-lg mt-2" style="background-color: #4476e2">
                                    <p class="font-semibold text-3xl text-gray-50">34</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="px-5 space-y-4 flex-grow flex items-center justify-center" style="background-color: #2A2C33">
                            <div class="p-0.5 rounded-lg text-lg space-y-4 flex-grow flex items-center justify-center" style="background-color: #FFFFFF">
                            </div>
                        </div>
                        <div class="p-6 rounded-bl-lg rounded-br-lg text-lg space-y-4 flex-grow flex items-center justify-center" style="background-color: #2A2C33">
                            <div class="text-center w-full">
                                <p class="text-gray-300"><strong>Mahasiswa Cuti</strong></p>
                                <div class="text-white text-center py-2 mx-5 rounded-lg mt-2" style="background-color: #c04848">
                                    <p class="font-semibold text-3xl text-gray-50">12</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- Box Status Pengajuan Departemen -->
            <div class="px-8 pt-5 mt-5">
                <h2 class="text-center text-lg font-semibold mb-4">Status Pengajuan Departemen</h2>
                <div class="flex w-full">
                    <!-- Kolom No -->
                    <div class="flex flex-col w-1/6" style="background-color: #2A2C33">
                        <div class="w-full text-center" style="background-color: #878A91"><strong>No</strong></div>
                        <div class="flex flex-col items-center w-full text-center">
                            <p>1</p>
                            <p>2</p>
                            <p>3</p>
                            <p>4</p>
                        </div>
                    </div>
                    <!-- Kolom Kode MK -->
                    <div class="flex flex-col w-1/6" style="background-color: #2A2C33">
                        <div class="w-full text-center" style="background-color: #878A91"><strong>KodeMK</strong></div>
                        <div class="flex flex-col items-center w-full text-center">
                            <p>PAIK101</p>
                            <p>PAIK201</p>
                            <p>PAIK301</p>
                            <p>PAIK401</p>
                        </div>
                    </div>
                    <!-- Kolom Mata Kuliah -->
                    <div class="flex flex-col w-2/6" style="background-color: #2A2C33">
                        <div class="w-full text-center" style="background-color: #878A91"><strong>Mata Kuliah</strong></div>
                        <div class="flex flex-col items-center w-full text-center">
                            <p>Proyek Perangkat Lunak</p>
                            <p>Pengembangan Berbasis Platform</p>
                            <p>Sistem Informasi</p>
                            <p>Manajemen Basis Data</p>
                        </div>
                    </div>
                    <!-- Kolom Hari -->
                    <div class="flex flex-col w-1/6" style="background-color: #2A2C33">
                        <div class="w-full text-center" style="background-color: #878A91"><strong>Hari</strong></div>
                        <div class="flex flex-col items-center w-full text-center">
                            <p>Senin</p>
                            <p>Senin</p>
                            <p>Rabu</p>
                            <p>Sabtu</p>
                        </div>
                    </div>
                    <!-- Kolom Jam -->
                    <div class="flex flex-col w-1/6" style="background-color: #2A2C33">
                        <div class="w-full text-center" style="background-color: #878A91"><strong>Jam</strong></div>
                        <div class="flex flex-col items-center w-full text-center">
                            <p>07.00 - 09.30</p>
                            <p>10.00 - 12.00</p>
                            <p>07.00 - 09.30</p>
                            <p>09.40 - 12.10</p>
                        </div>
                    </div>
                    <!-- Kolom Ruang -->
                    <div class="flex flex-col w-1/6" style="background-color: #2A2C33">
                        <div class="w-full text-center" style="background-color: #878A91"><strong>Ruangan</strong></div>
                        <div class="flex flex-col items-center w-full text-center">
                            <p>E101</p>
                            <p>A304</p>
                            <p>E304</p>
                            <p>A302</p>
                        </div>
                    </div>
                    <!-- Kolom Departemen -->
                    <div class="flex flex-col w-1/6" style="background-color: #2A2C33">
                        <div class="w-full text-center" style="background-color: #878A91"><strong>Departemen</strong></div>
                        <div class="flex flex-col items-center w-full text-center">
                            <p>Informatika</p>
                            <p>Informatika</p>
                            <p>Informatika</p>
                            <p>Informatika</p>
                        </div>
                    </div>
                    <!-- Kolom Pengajuan -->
                    <div class="flex flex-col w-1/6" style="background-color: #2A2C33">
                        <div class="w-full text-center" style="background-color: #878A91"><strong>Pengajuan</strong></div>
                        <div class="flex flex-col items-center w-full text-center">
                            <div class="text-white text-center py-2 px-4 rounded-lg mx-1" style="background-color: #45dd4d; min-width: 100px;">
                                <p class="font-semibold text-lg text-gray-50">Terverifikasi</p>
                            </div>
                            <div class="text-white text-center py-2 px-4 rounded-lg mx-1" style="background-color: #45dd4d; min-width: 100px;">
                                <p class="font-semibold text-lg text-gray-50">Terverifikasi</p>
                            </div>
                            <div class="text-white text-center py-2 px-4 rounded-lg mx-1" style="background-color: #e04350; min-width: 100px;">
                                <p class="font-semibold text-lg text-gray-50">Ditolak</p>
                            </div>
                            <div class="text-white text-center py-2 px-4 rounded-lg mx-1" style="background-color: #45dd4d; min-width: 100px;">
                                <p class="font-semibold text-lg text-gray-50">Terverifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="flex justify-end mt-5 mr-7">
                <div class="text-white text-center py-2 px-4 rounded-lg" style="background-color: #fdbc0b; min-width: 150px;">
                    <p class="font-semibold text-3xl ">Selengkapnya >></p>
                </div>
            </div>

        </div>
    </div>
</body>

</html>