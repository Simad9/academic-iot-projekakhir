<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../src/output.css" />
  <link rel="icon" href="../img/icon-parkir.svg" type="image/x-icon" />
  <title>IoT | Pilih Akses</title>
</head>

<body class="bg-gray-50 min-h-screen">
  <div class="p-3 w-full flex flex-col md:flex-row gap-5 h-screen">
    <!-- Hiasan Samping -->
    <div class="w-full md:w-[35%] h-[135px] md:h-full rounded-[20px] bg-[#6D90D0] flex md:flex-col items-center justify-between shadow-lg">
      <img src="../img/login-hiasanAtas.svg" alt="hiasan atas" class="w-[25%] -rotate-90 -translate-x-[25px] md:rotate-0 md:translate-x-0 md:w-[60%]">
      <img src="../img/login-tulisan.svg" alt="tulisan" class="w-[25%] md:w-5/12">
      <img src="../img/login-hiasanBawah.svg" alt="hiasan bawah" class="w-[25%] -rotate-90 translate-x-[25px] md:rotate-0 md:translate-x-0 md:w-[60%]">
    </div>

    <!-- Pilihan Akses -->
    <div class="w-full md:w-[65%] h-full border p-6 md:p-[50px] rounded-[20px] shadow-lg flex flex-col justify-center text-hitam bg-white">
      <div class="mb-8 text-center md:text-left">
        <h1 class="text-3xl md:text-4xl font-semibold mb-2">Pilih Akses Masuk</h1>
        <p class="font-medium text-gray-600 text-base">Silahkan pilih peran Anda untuk melanjutkan</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2x">
        <!-- Kartu User -->
        <a href="login.php" class="group border-2 border-[#6D90D0] p-6 rounded-2xl hover:bg-[#6D90D0] transition-all duration-300 shadow-md flex flex-col justify-between">
          <div>
            <div class="w-12 h-12 rounded-xl bg-[#6D90D0]/20 group-hover:bg-white/20 flex items-center justify-center mb-4 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#6D90D0] group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
            </div>
            <h2 class="text-2xl font-bold text-[#6D90D0] group-hover:text-white mb-2 transition-colors">User</h2>
            <p class="text-gray-600 group-hover:text-white/90 text-sm transition-colors">Masuk sebagai Pengguna untuk melihat status parkir dan informasi.</p>
          </div>
          <div class="mt-6 flex items-center text-[#6D90D0] group-hover:text-white font-medium text-sm transition-colors">
            <span>Lanjut ke Login User</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </div>
        </a>

        <!-- Kartu Admin -->
        <a href="dashboard.php" class="group border-2 border-slate-700 p-6 rounded-2xl hover:bg-slate-800 transition-all duration-300 shadow-md flex flex-col justify-between">
          <div>
            <div class="w-12 h-12 rounded-xl bg-slate-100 group-hover:bg-white/10 flex items-center justify-center mb-4 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-slate-700 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
            </div>
            <h2 class="text-2xl font-bold text-slate-800 group-hover:text-white mb-2 transition-colors">Admin</h2>
            <p class="text-gray-600 group-hover:text-white/90 text-sm transition-colors">Masuk sebagai Administrator untuk mengelola seluruh sistem dashboard.</p>
          </div>
          <div class="mt-6 flex items-center text-slate-800 group-hover:text-white font-medium text-sm transition-colors">
            <span>Lanjut ke Dashboard Admin</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </div>
        </a>
      </div>
    </div>
  </div>
</body>

</html>