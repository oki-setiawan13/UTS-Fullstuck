# 🏫 Sistem Informasi Data Siswa TK Tunas Nusantara

Aplikasi manajemen internal yang dirancang khusus untuk mempermudah para guru dan kepala sekolah di **TK Tunas Nusantara** dalam mendata siswa, mengelola kelas, mencatat absensi harian, serta mendistribusikan pengumuman penting secara terpusat dan efisien.

---

## 👥 Informasi Mahasiswa

<table>
  <tr>
    <td><b>Nama</b></td>
    <td>Shabilla Berliana Haryono</td>
  </tr>
  <tr>
    <td><b>NIM</b></td>
    <td>2305101149</td>
  </tr>
  <tr>
    <td><b>Kelas</b></td>
    <td>TIF - 6A</td>
  </tr>
  <tr>
    <td><b>Mata Kuliah</b></td>
    <td>Pemrograman Web Fullstack</td>
  </tr>
</table>

---

## 🚀 Fitur Utama Aplikasi

### 1. Fitur Login

<img width="1918" height="877" alt="1 LOGIN" src="https://github.com/user-attachments/assets/e3e4a05e-21ef-45e9-ae3f-b6264ec5b5d4" />

> 📑 **Deskripsi**
> Fitur Login merupakan halaman autentikasi yang digunakan untuk memverifikasi identitas pengguna sebelum dapat mengakses Sistem Informasi Data Siswa TK Tunas Nusantara. Fitur ini bertujuan untuk menjaga keamanan data dan membatasi akses hanya kepada pengguna yang memiliki hak akses.

* **Fungsi Utama:**
    * Memverifikasi email dan kata sandi pengguna.
    * Memberikan akses ke sistem sesuai akun yang digunakan.
    * Menjaga keamanan data dari akses yang tidak sah.
* **Komponen Fitur:**
    * `Email Address`: kolom untuk memasukkan alamat email pengguna.
    * `Password`: kolom untuk memasukkan kata sandi akun.
    * `Remember Me`: opsi untuk menyimpan sesi login pada perangkat yang digunakan.
    * `Forgot Your Password`: fasilitas pemulihan kata sandi apabila pengguna lupa kredensial akun.
    * `Log In`: tombol untuk melakukan proses masuk ke sistem.
    * `Sign Up`: menu pendaftaran akun baru apabila tersedia.
* **Output:** Pengguna berhasil masuk dan diarahkan menuju halaman Dashboard.

---

### 2. Fitur Dashboard

<img width="1911" height="880" alt="2 Dashboard" src="https://github.com/user-attachments/assets/f1daf1cc-fbcf-4672-a439-1e38c4dccc62" />

> 📑 **Deskripsi**
> Fitur Dashboard merupakan halaman utama yang ditampilkan setelah pengguna berhasil melakukan login. Halaman ini menyediakan informasi ringkas terkait data yang tersedia pada sistem serta navigasi menuju menu pengelolaan data.

* **Fungsi Utama:**
    * Menampilkan ringkasan informasi sistem.
    * Memberikan akses cepat ke seluruh fitur utama.
    * Membantu admin memantau kondisi data secara umum.
* **Informasi yang Ditampilkan:**
    * `Total Siswa`: jumlah keseluruhan data siswa yang telah tersimpan.
    * `Total Kelas`: jumlah kelas yang tersedia.
    * `Pengumuman`: jumlah pengumuman yang telah dibuat.
* **Menu Navigasi:**
    * `Dashboard` : menampilkan halaman utama sistem.
    * `Data Siswa` : pengelolaan data identitas siswa.
    * `Data Kelas` : pengelolaan data kelas.
    * `Absensi` : pengelolaan data kehadiran siswa.
    * `Pengumuman` : pengelolaan informasi dan pemberitahuan.
* **Output:** Sistem menampilkan statistik singkat dan menyediakan akses menuju fitur pengelolaan data.

---

### 3. Fitur Pengumuman

<img width="1918" height="872" alt="3 Pengumuman" src="https://github.com/user-attachments/assets/488a871f-c6bb-4047-84ca-34ac0732464a" />

> 📑 **Deskripsi**
> Fitur Pengumuman digunakan untuk mengelola dan menampilkan informasi resmi yang disampaikan oleh pihak sekolah kepada siswa maupun orang tua siswa.

* **Fungsi Utama:**
    * Menampilkan daftar pengumuman yang tersedia.
    * Menyampaikan informasi sekolah secara terpusat.
    * Memudahkan pengelolaan informasi oleh administrator.
* **Komponen Fitur:**
    * `Judul Pengumuman`: menampilkan nama atau topik pengumuman.
    * `Isi Pengumuman`: menampilkan rincian informasi yang disampaikan.
    * `Informasi Pembuat`: menampilkan identitas pembuat pengumuman.
    * `Tanggal Publikasi`: menampilkan waktu pengumuman dibuat.
    * `Tombol Hapus`: digunakan untuk menghapus pengumuman.
    * `Tombol Tambah Pengumuman`: digunakan untuk membuat pengumuman baru.
* **Output:** Daftar pengumuman tampil dan dapat dikelola oleh admin.

---

### 4. Fitur Tambah Pengumuman

<img width="1918" height="881" alt="4 Tambah pengumuman" src="https://github.com/user-attachments/assets/6fb77f13-b352-4bab-a626-8f8e42b272d4" />

> 📑 **Deskripsi**
> Fitur Tambah Pengumuman digunakan untuk menambahkan informasi atau pemberitahuan baru ke dalam sistem sehingga dapat ditampilkan pada halaman pengumuman.

* **Fungsi Utama:**
    * Menambahkan pengumuman baru.
    * Menyimpan informasi yang akan dipublikasikan kepada pengguna sistem.
* **Komponen Fitur:**
    * `Judul Pengumuman`: kolom untuk memasukkan judul informasi.
    * `Isi Pengumuman`: area untuk menuliskan isi atau detail pengumuman.
    * `Tombol Simpan`: digunakan untuk menyimpan data pengumuman ke sistem.
    * `Tombol Batal`: digunakan untuk membatalkan proses input.
* **Alur Proses:**
    1. Pengguna memilih menu Pengumuman.
    2. Pengguna menekan tombol Tambah Pengumuman.
    3. Pengguna mengisi judul dan isi pengumuman.
    4. Pengguna menekan tombol Simpan.
    5. Sistem menyimpan dan menampilkan pengumuman pada halaman daftar pengumuman.
* **Output:** Pengumuman baru berhasil ditambahkan dan tersedia pada halaman pengumuman.

---

### 5. Fitur Absensi Siswa

<img width="1918" height="873" alt="5 Absensi" src="https://github.com/user-attachments/assets/0e7721bb-1bbe-41b5-9985-137bb02c8ecd" />

> 📑 **Deskripsi**
> Fitur Absensi Siswa digunakan untuk mencatat dan memantau kehadiran siswa setiap hari. Fitur ini membantu pihak sekolah dalam mendokumentasikan riwayat kehadiran siswa secara terstruktur dan terdokumentasi.

* **Fungsi Utama:**
    * Mencatat kehadiran siswa.
    * Menyimpan status kehadiran harian.
    * Menampilkan riwayat absensi siswa.
    * Mengelola data absensi yang telah tersimpan.
* **Komponen Fitur:**
    * `Tanggal` : Tanggal pelaksanaan absensi.
    * `Nama Siswa` : Nama siswa yang diabsen.
    * `Kelas` : Kelas siswa.
    * `Status Kehadiran` : Informasi kehadiran siswa, meliputi:
        * Hadir
        * Izin
        * Sakit
        * Alpha (jika tersedia)
    * `Keterangan` : Informasi tambahan terkait absensi.
    * `Tambah Absensi` : Tombol untuk menambahkan data absensi baru.
    * `Hapus` : Tombol untuk menghapus data absensi.
* **Output:** Sistem menampilkan daftar absensi siswa berdasarkan tanggal, kelas, dan status kehadiran.

---

### 6. Fitur Data Kelas

<img width="1918" height="866" alt="6 Kelas yang ada" src="https://github.com/user-attachments/assets/714f5191-dd7e-4ebe-a4e4-5fdabc2731da" />

> 📑 **Deskripsi**
> Fitur Data Kelas digunakan untuk mengelola informasi kelas yang tersedia di TK Tunas Nusantara. Setiap kelas memiliki informasi mengenai nama kelas, wali kelas, tahun ajaran, dan jumlah siswa yang terdaftar.

* **Fungsi Utama:**
    * Menampilkan daftar kelas yang tersedia.
    * Mengelola informasi kelas dan wali kelas.
    * Menampilkan jumlah siswa pada setiap kelas.
    * Mengubah dan menghapus data kelas.
* **Komponen Fitur:**
    * `Nama Kelas` : Identitas kelas.
    * `Wali Kelas` : Nama guru yang bertanggung jawab terhadap kelas.
    * `Tahun Ajaran` : Tahun akademik yang berlaku.
    * `Jumlah Siswa` : Total siswa yang terdaftar pada kelas tersebut.
    * `Tambah Kelas` : Tombol untuk menambahkan kelas baru.
    * `Edit` : Tombol untuk memperbarui data kelas.
    * `Hapus` : Tombol untuk menghapus data kelas.
* **Output:** Sistem menampilkan daftar kelas beserta informasi wali kelas, tahun ajaran, dan jumlah siswa.

---

### 7. Fitur Tambah Kelas

<img width="1918" height="872" alt="7 tambah Kelas yang ada" src="https://github.com/user-attachments/assets/5773b799-dfa9-4317-ad05-2559c56d3afb" />

> 📑 **Deskripsi**
> Fitur Tambah Kelas digunakan untuk membuat dan menyimpan data kelas baru ke dalam sistem. Data kelas yang ditambahkan akan tersedia sebagai pilihan pada saat pendaftaran siswa.

* **Fungsi Utama:**
    * Menambahkan kelas baru.
    * Menentukan wali kelas.
    * Menentukan tahun ajaran yang berlaku.
* **Komponen Fitur:**
    * `Nama Kelas` : Input nama kelas.
    * `Nama Wali Kelas` : Input nama guru wali kelas.
    * `Tahun Ajaran` : Input tahun ajaran.
    * `Simpan` : Tombol untuk menyimpan data kelas.
    * `Batal` : Tombol untuk membatalkan proses input.
* **Output:** Data kelas baru tersimpan dan ditampilkan pada halaman Data Kelas.

---

### 8. Fitur Data Siswa

<img width="1918" height="882" alt="8 Data siswa" src="https://github.com/user-attachments/assets/bf3f538c-6804-4369-8fee-0f90d20c2f46" />

> 📑 **Deskripsi**
> Fitur Data Siswa merupakan modul yang digunakan untuk mengelola seluruh informasi peserta didik yang terdaftar di TK Tunas Nusantara. Melalui fitur ini, administrator dapat melihat, menambahkan, mengubah, dan menghapus data siswa sehingga informasi siswa dapat tersimpan secara terstruktur dan mudah diakses.

* **Fungsi Utama:**
    * Menampilkan daftar seluruh siswa yang terdaftar.
    * Menyimpan data identitas siswa.
    * Mengelola informasi orang tua atau wali siswa.
    * Mengelompokkan siswa berdasarkan kelas.
    * Memperbarui dan menghapus data siswa apabila diperlukan.
* **Komponen Fitur:**
    * `NIS` : Nomor Induk Siswa sebagai identitas unik siswa.
    * `Nama Siswa` : Nama lengkap siswa.
    * `Kelas` : Kelas tempat siswa terdaftar.
    * `Jenis Kelamin` : Informasi jenis kelamin siswa.
    * `Nama Orang Tua` : Nama ayah, ibu, atau wali siswa.
    * `Nomor HP Orang Tua` : Nomor telepon yang dapat dihubungi.
    * `Tambah Siswa` : Tombol untuk menambahkan data siswa baru.
    * `Edit` : Tombol untuk memperbarui data siswa.
    * `Hapus` : Tombol untuk menghapus data siswa.
* **Output:** Sistem menampilkan daftar siswa yang tersimpan beserta informasi identitas dan kelas masing-masing.

---

### 9. Fitur Tambah Data Siswa

<img width="1918" height="867" alt="9 Tambah data siswa" src="https://github.com/user-attachments/assets/b749b0df-3c96-476f-b7f1-fe5d35ab934a" />

> 📑 **Deskripsi**
> Fitur Tambah Data Siswa digunakan untuk memasukkan data siswa baru ke dalam sistem. Data yang diinput akan tersimpan ke basis data dan dapat digunakan dalam proses pengelolaan kelas maupun absensi.

* **Fungsi Utama:**
    * Menambahkan data siswa baru.
    * Menyimpan identitas lengkap siswa.
    * Menghubungkan siswa dengan kelas yang tersedia.
    * Menyimpan informasi orang tua atau wali siswa.
* **Komponen Fitur:**
    * `NIS` : Input nomor induk siswa.
    * `Nama Lengkap` : Input nama lengkap siswa.
    * `Tanggal Lahir` : Input tanggal lahir siswa.
    * `Jenis Kelamin` : Pilihan jenis kelamin siswa.
    * `Nama Orang Tua` : Input nama orang tua atau wali.
    * `Nomor HP Orang Tua` : Input nomor telepon orang tua atau wali.
    * `Kelas` : Pilihan kelas siswa.
    * `Alamat` : Input alamat lengkap siswa.
    * `Simpan` : Tombol untuk menyimpan data.
    * `Batal` : Tombol untuk membatalkan proses input.
* **Output:** Data siswa baru berhasil tersimpan dan ditampilkan pada halaman Data Siswa.

---

## ⚖️ Analisis Aplikasi

### 👍 Kelebihan
1. **Aksesibilitas Tinggi:** Mempermudah guru dalam mengakses, meninjau, dan memperbarui profil siswa secara berkala.
2. **Monitoring Terpusat:** Kepala Sekolah dapat memantau grafik kehadiran harian siswa serta ketersediaan kuota per kelas dengan cepat.
3. **Diseminasi Informasi Efektif:** Pengumuman internal sekolah dapat disampaikan secara transparan dan terpusat dalam satu pintu aplikasi.

### ⚠️ Kekurangan & Pengembangan Selanjutnya (*Future Improvement*)
* **Sistem Hak Akses (RBAC):** Saat ini belum ada pembatasan hak akses (*Role-Based Access Control*). Semua pengguna yang masuk masih memiliki akses penuh (tambah, edit, hapus).
* ***Rencana Selanjutnya:*** Menerapkan sistem multi-role yang memisahkan batasan menu antara **Kepala Sekolah** (Full Akses/Monitoring), **Guru/Wali Kelas** (Input Absen/Data Siswa), dan **Orang Tua** (Read-Only/Melihat Pengumuman & Absen anak).

---
*Proyek ini dikembangkan guna memenuhi tugas praktikum dan teori matakuliah Pemrograman Web Fullstack.*
