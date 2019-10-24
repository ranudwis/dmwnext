<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CoursegroupSeeder::class
        ]);

        $semester1 = DB::table('coursegroups')->select('id')->where('name', 'Semester 1')->first()->id;
        $semester2 = DB::table('coursegroups')->select('id')->where('name', 'Semester 2')->first()->id;
        $semester3 = DB::table('coursegroups')->select('id')->where('name', 'Semester 3')->first()->id;
        $semester4 = DB::table('coursegroups')->select('id')->where('name', 'Semester 4')->first()->id;
        $semester5 = DB::table('coursegroups')->select('id')->where('name', 'Semester 5')->first()->id;
        $semester6 = DB::table('coursegroups')->select('id')->where('name', 'Semester 6')->first()->id;

        DB::table('courses')->insertOrIgnore([
            [
                'coursegroup_id' => $semester1,
                'code' => 'UNW00001',
                'name' => 'Pendidikan Agama',
                'slug' => 'agama',
                'credit' => '2',
                'description' => 'Visi mata kuliah Pendidikan Agama adalah "terbentuknya mahasiswa yang memiliki kepribadian utuh (kaffah) dengan menjadikan ajaran Islam sebagai landasan berpikir dan berperilaku dalam pengembangan kepribadian, keilmuan, dan profesinya". Mahasiswa belajar menjadi ilmuwan dan profesional yang beriman dan bertaqwa terhadap Tuhan Yang Maha Esa, berakhlak mulia, dan memiliki etos kerja, serta menjunjung tinggi nilai-nilai kemanusiaan dan kehidupan.'
            ], [
                'coursegroup_id' => $semester1,
                'code' => 'AIK21311',
                'name' => 'Dasar Pemrograman',
                'slug' => 'daspro',
                'credit' => '3',
                'description' => 'Pada semester 1, mahasiswa berkenalan dengan pemrograman sederhana dalam kuliah Dasar Pemrograman. Pemrograman ini memandang bahwa solusi persoalan adalah sekumpulan fungsi yang saling memanggil dan saling melayani. Konsep tipe data menjadi dasar pengolahan nilai dengan konsep rekursif. Fokus dari pemrograman ini adalah pembuatan rancanagan fungsi secara utuh, yang terdiri atas Definisi, Spesifikasi , Realisasi, dan Aplikasi. Di kelas, mahasiswa belajar notasi fungsional, sedangkan di laboratorium, mahasiswa belajar salah satu bahasa pemrograman yang relevan, misalnya LISP, Haskell, Scheme, atau F#.'
            ], [
                'coursegroup_id' => $semester1,
                'code' => 'AIK21312',
                'name' => 'Dasar Sistem',
                'slug' => 'dasis',
                'credit' => '3',
                'description' => 'Mata kuliah ini menjadi dasar pada bidang kajian infrastruktur siste yang mengenalkan sistem digital sebagai dasar membangun sistem komputer, hingga pembangunan komponen prosesor sederhana berupa SAP-1 (simple as possible - 1).'
            ], [
                'coursegroup_id' => $semester1,
                'code' => 'AIK21314',
                'name' => 'Logika Informatika',
                'slug' => 'logif',
                'credit' => '3',
                'description' => 'Materi yang diberikan pada kuliah ini mencakup pengantar computational logic, representasi proportional logic mencakup sintaks dari semantik, representasi relational logic mencakup sintaks dan semantik, berbagai teknk pembuktian dari pendekatan semanctic reasoning maupun proof method untuk proportional logic dan relational logic, serta paradigm pemrograman deklaratif yang menggunakan dasar relational logic untuk melakukan penalaran.'
            ], [
                'coursegroup_id' => $semester1,
                'code' => 'UNW00006',
                'name' => 'Bahasa Inggris',
                'slug' => 'inggris',
                'credit' => '2',
                'description' => 'Bahasa Inggris sebagai bahasa internasional perlu dikuasai mahasiswa terutama untuk mempelajari materi kuliah dan literatur berbahasa Inggris. Dalam kuliah ini, mahasiswa belajar materi uji bahasa Inggris sebagai bahasa asing yang meliputi aspek mendengar, menganalisis struktur, membaca, dan menulis paragraf dalam bahasa Inggris. Aspek berbicara dipelajari secara terpadu dengan aspek-aspek lain.'
            ], [
                'coursegroup_id' => $semester1,
                'code' => 'AIK21310',
                'name' => 'Matematika I',
                'slug' => 'matematika1',
                'credit' => '2',
                'description' => 'Mata kuliah ini menjelaskan konsep dasar Matematika I, konsep dan aplikasi deratif, integral tak tentu dan tentu.'
            ], [
                'coursegroup_id' => $semester1,
                'code' => 'AIK21313',
                'name' => 'Struktur Diskrit',
                'slug' => 'diskrit',
                'credit' => '4',
                'description' => 'Mata kuliah ini menjelaskan konsep dasar matematika kepada mahasiswa meliputi tentang himpunan, fungsi, relasi dan graph selain itu juga mengenai kombinatorik, system formal, tree dan aplikasi pemrograman agar memberikan dasar matematis untuk kuliah - kuliah di ilmu komputer.'
            ], [
                'coursegroup_id' => $semester2,
                'code' => 'UNW00004',
                'name' => 'Bahasa Indonesia',
                'slug' => 'indonesia',
                'credit' => '2',
                'description' => 'Mata kuliah ini berisi pengetahuan tentang sejarah kedudukan dan fungsi bahasa, ragam bahasa ilmiah, membaca kritis, EBI da kata baku, kalimat efektif, paragraf, menulis makalah dan laporan, menulis proposal, kutipan dan rujukan, daftar pustaka, presentasi ilmiah, dan penyajian lisan, dan menulis surat.'
            ], [
                'coursegroup_id' => $semester2,
                'code' => 'AIK21321',
                'name' => 'Algoritma dan Pemrograman',
                'slug' => 'alpro',
                'credit' => '4',
                'description' => 'Mahasiswa mampu memahami konsep-konsep bahasa pemrograman, mengidentifikasi model-model bahasa pemrograman, serta membandingkan berbagai solusi. Mahasiswa mampu menerapkan konsep abstraksi dan struktur data dalam merancang program komputer.'
            ], [
                'coursegroup_id' => $semester2,
                'code' => 'AIK21322',
                'name' => 'Organisasi dan Arsitektur Komputer',
                'slug' => 'oak',
                'credit' => '4',
                'description' => 'Mata kuliah ini menjelaskan dasar kerja dan komponen pembentuknya serta urutan untuk mengeksekusi suatu instruksi. Juga menjelaskan organisasi dan fungsi setiap komponen pembentuk komputer serta menjelaskan konsep pipelining sebagai salah satu cara pemrosesan paralel.'
            ], [
                'coursegroup_id' => $semester2,
                'code' => 'AIK21323',
                'name' => 'Statistika',
                'slug' => 'statistika',
                'credit' => '2',
                'description' => 'Mata kuliah Statistika merupakan mata kuliah yang berguna untuk membantu mata kuliah lain yang berhubungan dengan penelitian. Harapan yang ingin dicapai adalah dapat menggunakan ilmu statistik untuk penelitian dengan berdasar pada metode ilmiah. Perangkat lunak yang dipakai adalah SPSS. Dalam pembelajarannya menggunakan cara Discovery Lernaning dan Problem Based Learning yang digabung dengan Simulation/Demonstration. Untuk proses analisisnya dimulai dengan pemberian kasus, input data, komputasi, hingga keluar olahan. Selanjutnya dilakukan analisis dengan menggunakan metode yang relevan yang ada di statistika.'
            ], [
                'coursegroup_id' => $semester2,
                'code' => 'AIK21324',
                'name' => 'Aljabar Linear',
                'slug' => 'alin',
                'credit' => '3',
                'description' => 'Mata kuliah ini membekali kemampuan mahasiswa dalam memformulasikan masalah sains dan teknologi ke dalam ruang vektor, basis dan dimensi, transformasi linear, ruang inner product, eigen vektor dan eigen values, bentuk kuadrat, dan bentuk kanonik Jordan(pengayaan).'
            ], [
                'coursegroup_id' => $semester2,
                'code' => 'AIK21320',
                'name' => 'Matematika II',
                'slug' => 'matematika2',
                'credit' => '2',
                'description' => 'Mata kuliah ini membahas mengenai integral lipat dua serta persamaan differensial biasa dan parsial.'
            ], [
                'coursegroup_id' => $semester2,
                'code' => 'UNW00005',
                'name' => 'Olah Raga',
                'slug' => 'olahraga',
                'credit' => '1',
                'description' => 'Mata kuliah ini membekali mahassiswa dengan pemahaman tentang gerak, aktivitas fisik, permainan, dan olah raga.Mata kuliah ini juga memberikan pemahaman tentang fungsi dan esensi pendidikan jasmani, olah raga, serta hubungannya dengan kebugaran dan kesehatan.'
            ], [
                'coursegroup_id' => $semester3,
                'code' => 'UNW00002',
                'name' => 'Pancasila',
                'slug' => 'pancasila',
                'credit' => '2',
                'description' => 'Dengan penyelenggaraan Pendidikan Pancasila di Perguruan Tinggi, diharapkan dapat tercipta wahana pembelajaran bagi para mahasiswa untuk secara akademik mengkaji, menganalisis, dan memecahkan masalah-masalah pembangunan bangsa dan negara dalam perspektif nilai-nilai dasar pancasila sebagai ideologi dan dasar negara Republik Indonesia. Mahasiswa mampu membangun paradigma baru dalam dirinya sendiri nilai-nilai Pancasila melalui kemampuan menjelaskan sejarah, kedudukan dan hakikat sila-sila Pancasila, merespon persoalan aktual bangsa dan negara, dan menerapkan nilai-nilai Pancasila dalam kehidupan.'
            ], [
                'coursegroup_id' => $semester3,
                'code' => 'AIK21331',
                'name' => 'Struktur Data',
                'slug' => 'strukdat',
                'credit' => '4',
                'description' => 'Mata kuliah ini berisi tentang tipe tipe data yang dibutuhkan dalam pemrograman, seperti tipe data dasar, array, stack, queue, string, set, graph, list, dan hash.'
            ], [
                'coursegroup_id' => $semester3,
                'code' => 'AIK21332',
                'name' => 'Sistem Operasi',
                'slug' => 'so',
                'credit' => '3',
                'description' => 'Sistem Operasi merupakan kajian mendasar untuk pendidikan ilmu komputer yang membahas konsep-konsep secara teoritis dan aspek perancangan sistem operasi, yaitu apa yang dilakukan sistem operasi dan bagaimana sistem operasi diimplementasikan.'
            ], [
                'coursegroup_id' => $semester3,
                'code' => 'AIK21333',
                'name' => 'Basis Data',
                'slug' => 'basdat',
                'credit' => '4',
                'description' => 'Mata kuliah basis data bertujuan memberikan pengetahuan mengenai basis data secara teoritis dan praktis yang difokuskan pada sistem basis data relational, serta kemampuan dasar di dalam menggunakan Sistem Manajemen Basis Data. Pengetahuan dan kemampuan dasar tersebut memberikan manfaat di dalam merancang pengelolaan data untuk suatu sistem informasi. Praktikum di laboratorium komputer dan penyelesaian tugas dari dosen akan memberikan ketrampilan dasar di dalam menggunakan Sistem Manajemen Basis Data yang dirancang untuk sistem personal maupun sistem basis data komersial.'
            ], [
                'coursegroup_id' => $semester3,
                'code' => 'AIK21334',
                'name' => 'Metode Numerik',
                'slug' => 'metnum',
                'credit' => '3',
                'description' => 'Mata kuliah ini membekali kemampuan Mahasiswa dalam memformulasikan masalah sains dan teknologi ke dalam model matematika dan metode numerik, selanjutnya mencari penyelesaiannya dengan membuat program komputer.'
            ], [
                'coursegroup_id' => $semester3,
                'code' => 'AIK21335',
                'name' => 'Interaksi Manusia Komputer',
                'slug' => 'imk',
                'credit' => '3',
                'description' => 'Matakuliah ini memberikan dasar konsep dan praktis tentang interaksi manusia dan komputer, model interaksi, perancangan dan implementasi antar-muka manusia dan komputer serta penggunaan tools untuk pengembangan software interface manusia dan komputer. Setelah mengikuti kuliah ini diharapkan mahasiswa mempunyai pemahaman tentang human cognition, memori manusia, penyelesaian masalah, bahasa serta apa dan bagaimana keterkaitan hal-hal tersebut dalam merancang dan mengembangkan sistem interaktif.'
            ], [
                'coursegroup_id' => $semester4,
                'code' => 'AIK21341',
                'name' => 'Pemrograman Berorientasi Objek',
                'slug' => 'pbo',
                'credit' => '3',
                'description' => 'Mata kuliah Pemrograman Berorientasi Objek menyajikan konsep dan penerapan paradigma Pemrograman Berorientasi Objek.'
            ], [
                'coursegroup_id' => $semester4,
                'code' => 'AIK21342',
                'name' => 'Jaringan Komputer',
                'slug' => 'jarkom',
                'credit' => '3',
                'description' => 'Mata kuliah jaringan komputer diawali dengan pemahaman terhadap konsep protokol dilanjutkan dengan memperkenalkan dua stack protokol yaitu OSI dan TCP/IP. Berikutnya dibahas detil tiap lapisan pada TCP/IP dari bawah (lapisan fisik) hingga yang teratas (lapisan aplikasi). Pemahaman terhadap protokol-protokol TCP/IP menjadi dasar untuk dapat merancang jaringan komputer secara efektif, efisien, dan aman di suatu organisasi nyata.'
            ], [
                'coursegroup_id' => $semester4,
                'code' => 'AIK21343',
                'name' => 'Manajemen Basis Data',
                'slug' => 'mdb',
                'credit' => '3',
                'description' => 'Materi yang diberikan pada kuliah ini mencakup peningkatan perfomansi basis data melalui perbaikan skema (termasuk indeks) dan query, pengelolaan keamanan dan kontrol akses pengguna, pengelolaan transaksi serta pemulihan basis data saat terjadi gangguan, pemrograman basis data menggunakan fungsi dan prosedur tersimpan di basis data, oenjagaan integritas basis data dengan memanfaatkan constraint, assertions, dan triggers, serta pengelolaan basis data terdistribusi,'
            ], [
                'coursegroup_id' => $semester4,
                'code' => 'AIK21344',
                'name' => 'Grafika dan Komputasi Visual ',
                'slug' => 'gkv',
                'credit' => '3',
                'description' => 'Grafika dan Komputasi Visual adalah salah satu mata kuliah dalam Ilmu Komputer yang membahasa tentang konsep grafika komputasi dan pengelolaan citra digital. Pada mata kuliah ini akan dibahas tentang konsep dan perbedaan antara grafika komputer dan pengelolaan citra digital. Materi akan berkisar tentang pembangunan suatu primitif dalam grafika komputer dan diikuti dengan teknik-teknik manipulasi pada objek primitif. Primitif yang dimaksud adalah primitif pada dimensi 2 dan dimensi 3. Selain itu, pembahasan dilanjutkan dengan konsep citra digital dan teknik-teknik yang dapat digunakan dalam manipulasi dan pengelolaan citra digital. '
            ], [
                'coursegroup_id' => $semester4,
                'code' => 'AIK21345',
                'name' => 'Rekayasa Perangkat Lunak',
                'slug' => 'rpl',
                'credit' => '3',
                'description' => 'Mata kuliah ini merupakan mata kuliah wajib yang memberikan pengertian tentang rekayasa perangkat lunak dan kemampuan dasar dalam membangun perangkat lunak skala kecil dan sederhana, serta kemampuan mengoperasikan tools terkait pemodelan perangkat lunak. Adapun materi yang diberikan meliputi: Tipe Perangkat Lunak (P/L); Pengantar Rekayasa P/L; Siklus Hidup P/L, mencakup pengumpulan kebutuhan, analisis, perancangan, implementasi, pengujian, pengoperasian, dan perawatan; Berbagai Model Proses, mencakup waterfall, prototyping,, incremental, agile process model, dll; Metodologi Pembagunan P/L (termasuk metode berorientasi objek): kelebihan, kekurangan, dan aspek praktisnya di industri; Standard dan Dokumentasi P/L, mencakup SDD, SRS, SDD, STP; Alat Bantu Pemodelan P/L, mencakup UML dan DFD; Studi kasus: Pembangunan P/L Skala Kecil (diberikan spesifikasi kebutuhan, dilakukan analisis, perancangan, dan perencanaan pengujian). Dengan materi tersebut diharapkan mahasiswa mampu mengembangkan diri untuk mempelajari mata kuliah lain yang lebih lanjut dengan baik.'
            ], [
                'coursegroup_id' => $semester4,
                'code' => 'AIK21346',
                'name' => 'Sistem Cerdas',
                'slug' => 'sicer',
                'credit' => '3',
                'description' => 'Mata kuliah ini merupakan mata uliah wajib yang mempelajari tentang solusi-solusi dari masalah yang sulit dann tidak praktis jika menggunakan pendekatan tradisional. Hal ini untuk mendukung oencarian solusi bagi aplikasi-aplikasi harian seperti email, pemrosesan kata dan pencarian, dimana dalam desain dan analisis dari otomatis agent tergantung dari lingkungan dan persepsi yang di terima. Ada tiga hal utama yang dipelajari yaitu skema representasi pengetahuan, mekanisme penyelesaian masalah dan teknik pembelajaran.'
            ], [
                'coursegroup_id' => $semester5,
                'code' => 'AIK21354',
                'name' => 'Analisis dan Strategi Algoritma',
                'slug' => 'asa',
                'credit' => '3',
                'description' => 'Mahasiswa belajar cara menganalisis algoritma dari aspek komputasional dan merancang solusi berdasarkan kasus yang mirip dengan algoritma baku yang sudah ada, tentunya dengan sedikit penyesuaian.'
            ], [
                'coursegroup_id' => $semester5,
                'code' => 'AIK21351',
                'name' => 'Pengembangan Berbasis Platform',
                'slug' => 'pbp',
                'credit' => '3',
                'description' => 'Pada semester 5 (lima), mahasiswa belajar pemrograman Web dan aplikasi mobile. Mahasiswa belajar konsep skripting paling sederhana HTML-*ML, CSS, *script, sampai bahasa PHP/ASP. Mahasiswa juga belajar membuat aplikasi mobile sederhana. Selain itu mahasiswa dikenalkan pada platform lain yaitu game dan industrial.'
            ], [
                'coursegroup_id' => $semester5,
                'code' => 'AIK21352',
                'name' => 'Komputasi Tersebar dan Paralel',
                'slug' => 'ktp',
                'credit' => '3',
                'description' => 'Mata kuliah Kualitas Komputer Tersebar dan Paralel menyajian konsep dan penerapan Komputasi Tersebar dan Paralel.'
            ], [
                'coursegroup_id' => $semester5,
                'code' => 'UNW00007',
                'name' => 'Kewirausahaan',
                'slug' => 'kwu',
                'credit' => '2',
                'description' => 'Kewirausahaan adalah kemampuan kreatif dan inovatif yang dijadikan dasar, kiat, dan sumber daya untuk mencari peluang menuju sukses. Melalui proses kreatif dan inovatif akan tercipta sesuatu yang baru dan berbeda yang dapat dijadikan nilai tambah untuk mencapai keunggulan bersaing. Mata kuliah Kewirausahaan dirancang membekali mahasiswa agar dapat mempunyai pengetahuan, jiwa kewirausahaan, dan mampu melakukan simulasi kewirausahaan. Melalui kuliah ini kepada mahasiswa akan diberikan pengetahuan serta pemahaman tentang pentingnya karakter dan semangat Kewirausahaan, mengkomunikasikan ide dan pemikirannya kepada orang lain, dan mampu secara mandiri atau bersama-sama menciptakan produk jasa maupun layanan yang mempunyai potensi untuk dijual.'
            ], [
                'coursegroup_id' => $semester6,
                'code' => 'UNW00003',
                'name' => 'Kewarganegaraan',
                'slug' => 'kwn',
                'credit' => '2',
                'description' => 'Mahasiswa belajar untuk menganalisis masalah kontekstual kewarganegaraan, mengembangkan sikap positif, dan menampilkan perilaku mendukung yang berkaitan dengan semangat kebangsaan, cinta tanah air,  demokrasi berkeadaban dan kesadaran hukum.'
            ], [
                'coursegroup_id' => $semester6,
                'code' => 'AIK21353',
                'name' => 'Sistem Informasi',
                'slug' => 'si',
                'credit' => '3',
                'description' => 'Pada kuliah ini diberikan pengerian dan pengetahuan tentang jenis, fungsi, struktur dan peran informasi berbasis komputer pada suatu organisasi. Selain itu mahasiswa juga diberikan kemampuan untuk melakukan analisis dan penetapan kebutuhan informasi organisasi, mentransformasikan kebutuhan kedalam rancangan sistem informasi yang sesuai dan menerapkannya ke dalam bentuk prototipe, sehingga organisasi dan manajemen akan lebih produktif, efisien, dan efektif sehingga diharapkan akan memiliki keunggulan untuk berkompetisi.'
            ], [
                'coursegroup_id' => $semester6,
                'code' => 'AIK21355',
                'name' => 'Proyek Perangkat Lunak',
                'slug' => 'ppl',
                'credit' => '3',
                'description' => 'Definisi perangkat lunak skala besar; berbagai masalah dalam pengembangan perangkat lunak skala besar dan solusinya; abstraksi; SW Pattern; code generator; pengenalan berbagai platform, framework, dan tools; konfigurasi P/L (konsep, tools, pracitces...); dilengkapi dengan studi kasus berupa proyek pembangunan P/L skala besar dengan mempraktekkan semua teori yang telah diberikan, atau berupa reverse engineering suatu perangkat lunak skala besar untuk mendapatkan modelnya.'
            ], [
                'coursegroup_id' => $semester6,
                'code' => 'AIK21356',
                'name' => 'Machine Learning',
                'slug' => 'ml',
                'credit' => '3',
                'description' => 'eiring dengan semakin banyaknya berbagai aplikasi di berbagai domain (seperti bioinformatics, computer vision, robotics, dan lain-lain) maka kita akan menyaksikan semakin banyak pula dijumpai data yang kompleks, sehingga diperlukan sebuah cara untuk dapat menyajikan informasi data-data tersebut secara lebih efektif dan efisien. Bidang machine learning menawarkan beberapa teknik untuk (otomatis) menyimpulkan pola yang erguna dalam data, dan membuat prediksi dari data terebut. Teknik-teknik yang akan dipelajari dalam mata kuliah ini terfokus ke dalam tiga metode, yakni supervised learning, unsupervised learning dan reinforment learning. Pada mata kuliah ini juga akan dijelaskan bagaimana teknik evaluasi untuk menilai kinerja dari ketiga metode teserbut. Kajian mengenai teknik utuk mengatasi permasalahan curse of dimentionality serta ensamble learning menjadi bahasan akhir dari mata kuliah machine learning.'
            ], [
                'coursegroup_id' => $semester6,
                'code' => 'AIK21361',
                'name' => 'Uji Perangkat Lunak',
                'slug' => 'ujiperangkatlunak',
                'credit' => '3',
                'description' => 'Mata kuliah Uji Perangkat Lunak memberikan landasan pegetahuan mengenai pengujian perangkat lunak yang meliputi siklus hidup pengujian, dan berbagai macam jenis pengujian yang dapat dilakukan pada perangkat lunak. Materi disusun berdasarkan siklus hidup pengujian, dtambah dengan berbagai materi terkait seperti pengujian pada artifak/aplikasi spesifik, pembentukan tim pengujian, dan memonitoring pengujian.'
            ], [
                'coursegroup_id' => $semester6,
                'code' => 'AIK21362',
                'name' => 'Masyarakat dan Etika Profesi',
                'slug' => 'mep',
                'credit' => '3',
                'description' => 'Mata kuliah ini merupakan mata kuliah dasar berguna untuk membekali mahasiswa terkait isu sosial, etis, legal dan profesional dalam disiplin Ilmu Komputer. Adapun materi yang diberikan meliputi: etika komputer, kakas analitas dan pengambilan putusan, kekayaan intelektual, kejahatan komputer dan aspek legalnya, privasi, dampak sosial teknologi informasi, klasifikasi profesi, kode etik profesi, organisasi/asosiasi profesi dan sertifikasi di bidang TI. Dengan materi tersebut diharapkan mahasiswa memiliki bekal untuk bersikap etis dan profesional dalam menjalankan karirnya di bidang TI.'
            ], [
                'coursegroup_id' => $semester6,
                'code' => 'AIK21364',
                'name' => 'Teori Bahasa dan Otomata',
                'slug' => 'teoribahasadanotomata',
                'credit' => '3',
                'description' => 'Mata kuliah Teori Bahasa dan Automata merupakan matakuliah yang mempelajari konsep-konsep, metode-metode yang dapat digunakan untuk mengetahui macam-macam mesin automata, masukannya, atau keluarannya beserta tatabahasanya yang digunakan sebagai aturan yang berlaku pada mesin automata tersebut. Matakuliah ini berisi mengenai jenis-jenis automata, masukan string pada automata, beserta keluaran yang dihasilkan oleh automata tersebut.'
            ], [
                'coursegroup_id' => $semester6,
                'code' => 'AIK21365',
                'name' => 'Manajemen Proyek',
                'slug' => 'manajemenproyek',
                'credit' => '3',
                'description' => 'Kuliah ini memberikan landasan pengetahuan mengenai manajemen proyek dalam teknologi informasi dan penerapannya pada sebuah proyek perangkat lunak berdasarkan metodologi pengembangan perangkat lunak sesuai standar internasional.'
            ]
        ]);
    }
}
