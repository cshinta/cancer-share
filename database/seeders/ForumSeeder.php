<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userdata = [[
            'image' => 'null',
            'title' => 'Bukan Perokok, Saya Harus Menderita Kanker Paru',
            'content' => 'Kanker Paru memang selalu identik dengan perokok,.Namun, Saya harus menderita Kanker Paru meskipun Saya tidak merokok. Saya mengalami batuk yang berkepanjangan sampai sekitar satu tahun lamanya. Saat melakukan pemeriksaan di rumah sakit pada 2014, Saya didiagnosis kanker paru stadium 4. Sejak awal terdeteksi, pengobatan yang saya jalani adalah kemoterapi infus selama enam siklus dalam waktu 4,5 bulan. Namun, terapi yang dilakukan itu tidak cocok dengan tumor ganas yang Saya derita. Bahkan, dari beberapa terapi yang dilakukan justru membuat Saya makin lemah karena ternyata tumor ganas yang ada di paru-paru Saya sudah mengalami resisten obat. Akhirnya, Saya dan dokter melakukan tes darah kembali untuk mengetahui jenis kanker paru yang Saya miliki. Ternyata Saya mengidap kanker paru ALK-Positif (anaplastic lymphoma kinase/ALK). Dengan obat terapi target Anti ALK-Positif, akhirnya Saya bisa bertahan hidup hingga saat ini. Saya merasa dapat menjalani aktivitas sehari-hari yang bahkan jauh lebih aktif dibanding kebanyakan orang. 

            Saya dan dokter sudah hampir putus asa dalam menangani penyakit ini. Namun, apabila kamu bertekad untuk bertahan lebih lama lagi, harapan akan muncul dan semuanya tidak akan sia-sia. Sekalipun kamu gagal, yang terpenting adalah setidaknya kamu telah berusaha keras untuk mewujudkannya. Selalu semangat dan jangan menyerah!',
            'id' => 1,
            'type' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'image' => '/forum//Pernah Menjadi Penderita Kanker, Sekarang Menjadi Penyemangat Pejuang Kanker5.jpeg',
            'title' => 'Pernah Menjadi Penderita Kanker, Sekarang Menjadi Penyemangat Pejuang Kanker',
            'content' => 'Saat berusia 12 tahun, Saya didiagnosis leukemia dengan gejala-gejala tak biasa. Demam naik turun. Sudah minum paracetamol, sebentar reda besok ada lagi. Begitu terus dibawa ke dokter satu karena ada bintik-bintik dibilangnya malaria, satu lagi karena pucat dan kuning dibilang liver. Akhirnya dibawa ke spesialis penyakit dalam, dokter langsung curiga, cek darah Hb-nya 8 rendah sekali. Di RSCM dites dinyatakan leukemia. Menurut Saya, kanker bisa disembuhkan, asalkan para orang tua khususnya ibu memiliki tingkat kesadaran yang tinggi akan tanda-tanda awal pada anaknya. Ibu Saya memang cukup cepat tanggap saat mengetahui Saya mengidap kanker darah. Divonis sembuh dari leukemia, Saya pun akhirnya memutuskan untuk bergabung dalam Cancer Buster Community yang bertugas untuk memberikan semangat dan motivasi bagi pasien kanker dan juga orang tuanya.

            Untuk semua orang yang ada di luar sana, apabila sudah menjadi orang tua dan memiliki anak, ingatlah bahwa penyakit apapun itu tidak kenal umur. Oleh karena itu, selalu perhatikan dan rawat baik-baik anak Anda sebelum terlambat.',
            'id' => 2,
            'type' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'image' => '/forum//Selama Nyaris 14 Tahun Melawan Kanker, Saya Berhasil Sembuh6.jpeg',
            'title' => 'Selama Nyaris 14 Tahun Melawan Kanker, Saya Berhasil Sembuh',
            'content' => 'Saya menjalani hidup sebagai penyintas kanker hati dalam 14 tahun lamanya. Awalnya, Saya tidak menyadari jika kanker telah bersarang di salah satu organ vital Saya. Saya telat tahu karena terlalu asik bekerja. Saya sempat tidak merasakan gejala dari penyakit ini, hingga pada suatu ketika Saya mengalami muntah darah dan ditemukan banyak gelembung darah di saluran pencernaan yang siap pecah saat Saya melakukan konsultasi ke dokter. Dari situ Saya tahu bahwa pada hati Saya telah bersarang tiga buah kanker berukuran cukup besar dan pulihan bibit kanker. 

            Sebelum didiagnosis kanker, Saya memang pengidap hepatitis B. Awalnya, Saya tidak mengetahui muasal penyakit yang menyerang organ hati tersebut yang ternyata menyebabkan sirosis hingga kanker. Namun, belakangan itu Saya menyadari jika ibu, kakak, dan sepupu Saya juga memiliki riwayat gejala serupa hepatitis B dan meninggal karena penyakit tersebut di usia kurang dari 40 tahun. Karena Saya dibesarkan di perdesaan, pengetahuan mengenai higienitas saat masih kecil minim, dan akses vaksin pencegahan hepatitis belum ada seperti saat ini.
            
            Saya sempat menjalani beberapa jenis perawatan untuk menyembuhkan penyakit kanker hatinya. Saya pernah menjalani prosedur medis untuk memutus saluran darah pemasok makanan untuk kanker. Namun, selang sebulan kanker terpantau masih bertahan berbekal asupan dari saluran darah baru. Akhirnya, Saya mengambil keputusan menjalani operasi transplantasi hati di Tianjin First Central Hospital China, pada 6 Agustus 2007. Sebagai penyintas kanker hati, Saya sempat ragu, menyangkal, sampai akhirnya bisa menerima, dan mampu berpikir strategis untuk mencari cara terbaik mengatasi penyakit ini. Untuk para penderita kanker hati, teruslah bersemangat dan berjuang demi mendapatkan jalan dan kesembuhan. Kanker hati bisa ditangani. Semakin dini ditemukan, semakin cepat pengobatan, harapan sembuh juga besar.',
            'id' => 3,
            'type' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'image' => '/forum//Tetap Tabah Meski Didiagnosis Kanker Usus Besar7.jpeg',
            'title' => 'Tetap Tabah Meski Didiagnosis Kanker Usus Besar',
            'content' => 'Tahun 2007, Saya didiagnosis kanker kolon atau usus besar. Gejala yang Saya alami hanya perdarahan di anus satu kali. Setelah melakukan kolonoskopi, diketahui ada polip yang sudah berubah sifat menjadi kanker di usus besar stadium 3. Setelah itu, Saya pun akhirnya menjalani operasi dan kemoterapi. Ketika didiagnosis kanker kolon atau usus besar, Saya tidak merasa kaget. Saya memang sejak muda memiliki pola makan yang tidak teratur. Saya hobi sekali minum soft drink dan suka makan berbagai macam kue. Saya pun mencoba tenang menerima kenyataan yang ada dan terus berjuang demi kesembuhan.

            Jagalah pola makan sejak dini. Mungkin, sekarang memang belum merasakan apa-apa. Tapi, apabila pola makan yang rusak terus berkelanjutan, ditambah jarang melakukan olahraga, maka jangan heran apabila semakin lama kamu merasa semakin tidak sehat. Selalu jaga kesehatan untuk kesejahteraan masa tua-mu.',
            'id' => 4,
            'type' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'image' => 'null',
            'title' => 'Saya survivor kanker darah',
            'content' => 'saya adalah salah satu survivor kanker payudara yang berhasil mengatasi keterpurukan menghadapi diagnosis dan tekanan mental pasca terapi. Saya dididiiagnosa kanker ketika masih dalam usia 38 tahun.
            Benjolan pertama kali terasa di payudara pada saat melakukan SADARI (periksa payudara sendiri). Saat merasa ada yang aneh, saya pun memutuskan untuk berkonsultasi dengan dokter penyakit dalam. Setelah dilakukan USG dan mamografi, dokter pun mendiagnosisnya dengan kanker yang tergolong ganas dan dirujuk ke dokter bedah untuk segara dilakukan operasi.
            Rasanya mulai berkecamuk, antara tidak percaya dan menolak. Akhirnya kita pulang dengan 1001 pikiran di kepala saya. Dengan rasa putus asa, saya memutuskan untuk mempersiapkan segala sesuatunya. Yang terpikir oleh saya, karena saat itu saya bekerja, adalah mempersiapkan data-data pekerjaan. Mungkin sudah waktunya saya estafetkan pekerjaan saya. Hanya itu yang terpiikir, bukan bagaimana caranya berobat,
            Tak butuh waktu lama, seminggu setelah diagnosis diterimanya, saya pun langsung memutuskan untuk melakukan tindakan mastektomi (pengangkatan seluruh bagian payudara).
            Sebelah payudara saya diangkat semua (mastektomi), dilanjutkan dengan kemoterapi 6 kali. Saya dioperasi di Singapura. Sebenarnya saya dirujuk dokter bedah disini, tapi kebetulan dia sedang pindah klinik, sehingga saya tidak bisa ketemu dokter itu dan janjian secepatnya
            Mental saya yang drop bisa kembali bangkit setelah bergabung dengan support group sesama survivor kanker. saya mulai mengikuti acara-acara rutin yang diadakan kelompok tersebut.
            Saya percaya bahwa sesudah pengobatan ada kehidupan normal kembali. Tadinya saya selalu membayangkan penderita kanker itu berobat sampai akhirnya meninggal. Tapi setelah saya datang ke support group, banyak sekali survivor yang sudah kembali normal dan melakukan aktivitas seperti biasa',
            'id' => 5,
            'type' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'image' => 'null',
            'title' => 'Saya selamat dari kanker usus besar',
            'content' => 'Kanker bukanlah akhir dari segalanya

            Cerita saya bermula ketika saya mengalami pendarahan yang tidak kunjung berhenti selama dua minggu dan di luar siklus menstruasi. Sebagai seorang perempuan, tentunya kejadian itu terasa ganjil dan  membuat saya curiga bahwa ada sesuatu yang tidak beres dengan tubuh saya. Didorong oleh kecemasan dan kegelisahan, saya tidak menunda-nunda, saya memberanikan diri untuk berangkat dan memeriksakan diri ke dokter.
            
            Masih teringat diagnosa awal yang saya terima saat itu bahwa gejala-gejala aneh yang saya alami diakibatkan oleh miom geburt yang artinya adalah miom yang besar.  Saya pun diberikan obat yang perlu saya konsumsi selama tiga hari berturut-turut untuk menghentikan pendarahan.
            
            Anehnya, setelah tiga hari berlalu, pendarahan saya tidak kunjung berhenti. Ini menimbulkan prasangka bahwa ada yang sesuatu yang tidak beres dalam tubuh saya. Akan tetapi saya tidak bercerita kepada anak-anak karena takut mengganggu konsentrasi mereka dalam menghadapi ujian. Saat itu, tidak ada pilihan lain, saya harus kembali memeriksakan diri ke dokter.
            
            Didorong kerisauan dan rasa penasaran, sebelum saya berangkat ke dokter saya mencoba melakukan pengecekan secara mandiri dengan cara memasukkan jari telunjuk saya ke vagina dan meraba leher rahim saya. Bayangkan betapa shock saya ketika melihat  serpihan – serpihan daging bercampur darah segar yang menempel di telunjuk saya
            
            Teror dari kejadian tersebut menyerang psikologis saya ketika itu. Tidak henti-henti saya memikirkan, tentang apa yang sebetulnya terjadi kepada diri saya? dan kenapa saya mendapat gejala-gejala penyakit seperti ini?  Akankah saya bisa sembuh? Apakah ini adalah akhir dari segalanya? Semua pertanyaan ini menghantui benak saya setiap menit, jam, dan setiap harinya. Setelah kejadian ini, akhirnya saya menceritakan kondisi ini kepada keluarga.
            
            Tidak dapat dipungkiri, kejadian ini juga mempengaruhi keluarga saya. Anak-anak saya sangat khawatir terhadap kondisi kesehatan Ibunya. Akan tetapi saya bersyukur bahwa mereka tidak berhenti mendukung dan membesarkan hati saya.  Dengan support mereka, saya kembali melakukan konsultasi ke dokter.
            
            Saat itu dokter merekomendasikan agar saya segera di operasi.  Ini tentunya mengagetkan saya dan seluruh keluarga. Masih teringat jelas saat itu, tanggal 5 Maret 2017, saya melakukan operasi miom. Hasil operasi yang diperlihatkan lewat laporan patologi anatomi menunjukkan bahwa saya memiliki karsinoma berdiferensiasi buruk
            
            
            Jawaban dokterpun membuat saya terkejut, karena itu adalah sejenis sel kanker yang ganas.  Sungguh, tidak pernah terbayang sama sekali dalam benak saya bahwa saya akan terkena sakit kanker. Apalagi saya selalu menjaga pola makan dan berolahraga secara teratur. Dokter saya juga saat itu tidak percaya dan mengatakan akan mengobservasi dan akan menghubungi saya kembali.
            
            Sepuluh hari saya menunggu telpon dari dokter, tetapi kabar tidak kunjung datang. Saya menunggu dengan galau dan terus dihantui oleh hasil PA yang menegaskan bahwa karsinoma ini berdiferensiasi buruk. Kata buruk ini membuat saya resah karena saya berpikir bahwa ini harus segera ditindaklanjuti. Akan tetapi saat itu saya hanya bisa menunggu kabar dari dokter di rumah.
            
            Di masa-masa penantian, saya sering berjemur matahari pagi untuk pemulihan pasca operasi. Akan tetapi, saya kembali melihat kejanggalan atas hasil operasi saya. Saya menemukan benjolan di perut beberapa centimeter di atas jahitan operasi. Benjolan ini menonjol ke permukaan sebesar setengah bola ping pong. Sayapun kembali lagi ke dokter dan menanyakan penjelasan lebih lanjut. Untuk mempercepat proses, akhirnya saya meminta untuk dirujuk ke rumah sakit (RS) yang lebih besar
            
            Begitu saya dirujuk, saya merasa lebih optimis karena saya tahu bahwa sebagai  RS rujukan nasional, alat-alat di tempat tersebut lebih lengkap dan tenaga medis yang lebih ahli. Di RS baru saya diperiksa dari awal oleh dokter ObGyn dengan meminjam rekam medis dari RS tempat saya operasi.
            
            Setelah melakukan serangkaian pemeriksaan, dokter meminta saya untuk melakukan biopsi di unit patologi anatomi. Tindakan ini dilakukan untuk memastikan apakah betul bahwa apa yang ada di dalam benjolan tersebut, dan hasilnya positif karsinoma sudah dengan metastase (penyebaran).  Alangkah sedih sekali saya mengetahui hal ini terlebih lagi banyak kepercayaan dan pandangan miring di masyarakat tentang penyakit ini.
            
            Kemoterapi dan sinar luar merupakan beberapa bagian yang saya harus jalankan untuk menghadapi dan memerangi penyakit ini. Saat itu saya di vonis mengalami kanker serviks stadium 4A. Keluarga saya meskipun cukup terpukul dengan kondisi saya, tetapi selalu mendukung saya menjalani proses yang panjang dan sulit itu.
            
            Akhirnya, setelah menjalani serangkaian proses panjang yaitu dua puluh lima kali penyinaran dan lima kali kemoterapi (setiap lima kali sinar diselingi satu kali kemoterapi) yang saya jalani, saya merasa jauh lebih baik. Di masa-masa kritis, saya selalu percaya bahwa suatu hari nanti saya akan sembuh dan segera melewati proses panjang dan melelahkan ini.
            
            dua minggu dan di luar siklus menstruasi. Sebagai seorang perempuan, tentunya kejadian itu terasa ganjil dan  membuat saya curiga bahwa ada sesuatu yang tidak beres dengan tubuh saya. Didorong oleh kecemasan dan kegelisahan, saya tidak menunda-nunda, saya memberanikan diri untuk berangkat dan memeriksakan diri ke dokter.
            
            Masih teringat diagnosa awal yang saya terima saat itu bahwa gejala-gejala aneh yang saya alami diakibatkan oleh miom geburt yang artinya adalah miom yang besar.  Saya pun diberikan obat yang perlu saya konsumsi selama tiga hari berturut-turut untuk menghentikan pendarahan.
            
            Anehnya, setelah tiga hari berlalu, pendarahan saya tidak kunjung berhenti. Ini menimbulkan prasangka bahwa ada yang sesuatu yang tidak beres dalam tubuh saya. Akan tetapi saya tidak bercerita kepada anak-anak karena takut mengganggu konsentrasi mereka dalam menghadapi ujian. Saat itu, tidak ada pilihan lain, saya harus kembali memeriksakan diri ke dokter.
            
            
            Didorong kerisauan dan rasa penasaran, sebelum saya berangkat ke dokter saya mencoba melakukan pengecekan secara mandiri dengan cara memasukkan jari telunjuk saya ke vagina dan meraba leher rahim saya. Bayangkan betapa shock saya ketika melihat  serpihan – serpihan daging bercampur darah segar yang menempel di telunjuk saya. (Baca: Mengenal Gejala dan Pengobatan Kanker Serviks Stadium 1)
            
            Teror dari kejadian tersebut menyerang psikologis saya ketika itu. Tidak henti-henti saya memikirkan, tentang apa yang sebetulnya terjadi kepada diri saya? dan kenapa saya mendapat gejala-gejala penyakit seperti ini?  Akankah saya bisa sembuh? Apakah ini adalah akhir dari segalanya? Semua pertanyaan ini menghantui benak saya setiap menit, jam, dan setiap harinya. Setelah kejadian ini, akhirnya saya menceritakan kondisi ini kepada keluarga.
            
            Tidak dapat dipungkiri, kejadian ini juga mempengaruhi keluarga saya. Anak-anak saya sangat khawatir terhadap kondisi kesehatan Ibunya. Akan tetapi saya bersyukur bahwa mereka tidak berhenti mendukung dan membesarkan hati saya.  Dengan support mereka, saya kembali melakukan konsultasi ke dokter.
            
            Saat itu dokter merekomendasikan agar saya segera di operasi.  Ini tentunya mengagetkan saya dan seluruh keluarga. Masih teringat jelas saat itu, tanggal 5 Maret 2017, saya melakukan operasi miom. Hasil operasi yang diperlihatkan lewat laporan patologi anatomi menunjukkan bahwa saya memiliki karsinoma berdiferensiasi buruk. (Baca: Berbagai Risiko Komplikasi yang Umum Terjadi Akibat Kanker Serviks)
            
            Saya menanyakan kepada dokter, apa itu karsinoma?
            
            Jawaban dokterpun membuat saya terkejut, karena itu adalah sejenis sel kanker yang ganas.  Sungguh, tidak pernah terbayang sama sekali dalam benak saya bahwa saya akan terkena sakit kanker. Apalagi saya selalu menjaga pola makan dan berolahraga secara teratur. Dokter saya juga saat itu tidak percaya dan mengatakan akan mengobservasi dan akan menghubungi saya kembali.
            
            Sepuluh hari saya menunggu telpon dari dokter, tetapi kabar tidak kunjung datang. Saya menunggu dengan galau dan terus dihantui oleh hasil PA yang menegaskan bahwa karsinoma ini berdiferensiasi buruk. Kata buruk ini membuat saya resah karena saya berpikir bahwa ini harus segera ditindaklanjuti. Akan tetapi saat itu saya hanya bisa menunggu kabar dari dokter di rumah.
            
            Di masa-masa penantian, saya sering berjemur matahari pagi untuk pemulihan pasca operasi. Akan tetapi, saya kembali melihat kejanggalan atas hasil operasi saya. Saya menemukan benjolan di perut beberapa centimeter di atas jahitan operasi. Benjolan ini menonjol ke permukaan sebesar setengah bola ping pong. Sayapun kembali lagi ke dokter dan menanyakan penjelasan lebih lanjut. Untuk mempercepat proses, akhirnya saya meminta untuk dirujuk ke rumah sakit (RS) yang lebih besar. (Baca: Apakah Kanker Serviks Mengakibatkan Perempuan Jadi Tidak Subur?)
            
            Begitu saya dirujuk, saya merasa lebih optimis karena saya tahu bahwa sebagai  RS rujukan nasional, alat-alat di tempat tersebut lebih lengkap dan tenaga medis yang lebih ahli. Di RS baru saya diperiksa dari awal oleh dokter ObGyn dengan meminjam rekam medis dari RS tempat saya operasi.
            
            Setelah melakukan serangkaian pemeriksaan, dokter meminta saya untuk melakukan biopsi di unit patologi anatomi. Tindakan ini dilakukan untuk memastikan apakah betul bahwa apa yang ada di dalam benjolan tersebut, dan hasilnya positif karsinoma sudah dengan metastase (penyebaran).  Alangkah sedih sekali saya mengetahui hal ini terlebih lagi banyak kepercayaan dan pandangan miring di masyarakat tentang penyakit ini.
            
            Kemoterapi dan sinar luar merupakan beberapa bagian yang saya harus jalankan untuk menghadapi dan memerangi penyakit ini. Saat itu saya di vonis mengalami kanker serviks stadium 4A. Keluarga saya meskipun cukup terpukul dengan kondisi saya, tetapi selalu mendukung saya menjalani proses yang panjang dan sulit itu.
            
            Akhirnya, setelah menjalani serangkaian proses panjang yaitu dua puluh lima kali penyinaran dan lima kali kemoterapi (setiap lima kali sinar diselingi satu kali kemoterapi) yang saya jalani, saya merasa jauh lebih baik. Di masa-masa kritis, saya selalu percaya bahwa suatu hari nanti saya akan sembuh dan segera melewati proses panjang dan melelahkan ini. (Baca: Seberapa Ampuh Vaksin HPV untuk Mencegah Kanker Serviks?)
            
            Saya juga tidak mau berkecil hati karena saya yakin dan berserah kepada Tuhan Yang Maha Esa, saya juga sangat bersyukur karena senantiasa mendapat bantuan dari keluarga dan teman – teman saya. Saya juga selalu berusaha ikhlas menjalani rangkaian pengobatan ini.
            
            Pesan saya kepada semua perempuan Indonesia diluar sana, cegahlah kanker serviks dengan vaksinasi HPV dan pemeriksaan papsmear. Tes papsmear ini sangat penting untuk deteksi dini, jadi lakukan secara rutin setahun sekali bahkan sebelum ada keluhan. Saya sendiri kalau bisa mengulang akan melakukan pemeriksaan itu secara rutin dan melakukan vaksinasi.
            
            Sebagai seorang guru, saya juga tidak henti-henti memberikan edukasi tentang kanker serviks dan pencegahnya kepada murid-murid saya. Juga jangan pernah lupa untuk jalani hidup sehat dan olahraga yang teratu',
            'id' => 6,
            'type' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'image' => 'null',
            'title' => 'Kanker bisa menyerang siapa saja',
            'content' => "Kanker bisa menyerang siapa saja, tak terkecuali kanker payudara. Di usia yang masih 26 tahun, saya sudah didiagnosis mengalami kanker payudara stadium 3.

            Saya merasakan adanya benjolan di bagian payudara kanannya sekitar bulan Mei tahun lalu. Setelah melalui serangkaian pemeriksaan, biopsi pun dilakukan pada bulan Juni, dan menunjukkan hasil negatif.
            
            Kebetulan waktu periksa gula darah memang agak tinggi, tapi hasil biopsinya negatif, dokter menyarankan saya untuk kembali periksa 6 bulan lagi, sekaligus menjaga pola makan agar gula darah stabil,
            
            Dari genetik nggak ada yang kena kanker. Saya merokok nggak, minum alkohol juga nggak. Punya anak nggak, menikah saja belum. Usia masih 26 tahun
            
            Gejala yang dirasakan hanya rasa sakit di bagian ketiak. saya juga mulai mudah letih dan kehilangan stamina. Akhirnya, saya memutuskan untuk kembali berobat ke dokter di awal bulan Desember.
            
            Dokter pun melakukan open biopsi, yakni biopsi yang dilakukan dengan mengambil sampel jaringan di bagian dekat puting. Hasilnya keluar sepekan kemudian, dan kecurigaan terbukti, saya didiagnosis mengidap kanker payudara stadium 3.
            
            Tentu saja saya kaget dan syok, sempat menangis juga,terutama keluarga. Tapi lalu saya fokuskan pikiran untuk bagaimana caranya agar bisa segera menjalani pengobatan dan kemoterapi,
            
            saya juga dijadwalkan menjalani operasi pemasangan cell site untuk persiapan kemoterapi. Biaya operasi yang dibutuhkan mencapai Rp34 juta. Jika ditotal, biaya yang ia keluarkan hingga saat ini sudah mencapai lebih dari Rp50 juta.
            
            Saya sangat berterima kasih kepada dukungan yang datang dari rekan-rekan maupun keluarga. Namun tak sedikit pula yang bertanya tentang kondisinya karena hanya ingin tahu, yang terkadang pertanyaan yang diajukan cukup menusuk hati.
            
            Saya berusaha untuk melihat ke depan, fokus kepada upaya pengobatan. Tapi ketika ada yang bertanya 'kok bisa sih kamu kena kanker' ya saya nggak bisa jawab, karena saya juga nggak tahu
            
            Saya berpikir positif bahwa ini sudah menjadi ketentuan dari Allah, yang memang harus saya jalani sebagai bagian dari takdir
            
            Jangan mentang-mentang merasa masih muda lalu menyepelekan penyakit. SADARI (periksa payudara sendiri) penting buat perempuan, karena kanker payudara bisa menyerang siapa saja,",
            'id' => 7,
            'type' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'image' => '/forum//Saya divonis kanker saat merasa sehat11.jpeg',
            'title' => 'Saya divonis kanker saat merasa sehat',
            'content' => 'Ika Damajanti, seorang penyintas kanker payudara di Surabaya, sempat percaya diri jika tak akan pernah mengidap penyakit tersebut mengingat tak ada riwayat penyakit mematikan ini dalam garis keturunan keluarga. Namun takdir berkata lain, pada tahun 2000 silam, vonis kanker payudara harus dia terima.

            Pertengahan tahun 2000 saya ada benjolan di payudara, tapi enggak sampai kepikiran kalau itu bakal jadi kanker payudara. Waktu itu usia saya masih di bawah 30 tahun, dan di keluarga tidak ada yang punya sakit kanker payudara. Jadi waktu itu saya cukup yakin kalau benjolan itu bukan kanker,
            
            Hingga di bulan Oktober 2000, saya merasakan nyeri pada payudara. ternyata benjolan itu lebih besar dari biasanya. Karena adanya rasa nyeri itulah, saya baru tergerak untuk memeriksakan diri ke dokter.
            
            Untungnya Tuhan ngasih saya rasa nyeri, kalau saya enggak ngerasa nyeri saya enggak akan ke dokter. Saya kan tipe orang yang agak malas kalau harus periksa ke dokter
            
            Setelah melalui rangkaian pemeriksaan  dokter dan USG, dokter mengatakan jika benjolan tersebut padat sehingga harus dioperasi kurang lebih 30 menit. Namun sebelum dilakukan operasi, dokter akan melakukan biopsi untuk memastikan jenis benjolannya.
            
            Karena yakin hasilnya baik, waktu itu saya hanya ditemani oleh ibu mertua. Begitu masuk ruang dokter dan mendengar dokter menanyakan dimana suami saya, langsung saya menangkap sesuatu yang negatif, Karena yakin hasilnya baik, waktu itu saya hanya ditemani oleh ibu mertua. Begitu masuk ruang dokter dan mendengar dokter menanyakan dimana suami saya, langsung saya menangkap sesuatu yang negatif,
            
            Operasi berjalan kurang lebih 3,5 jam pada tanggal 1 November 2000. Kemudian saya menjalani rangkaian pengobatan kemoterapi sebanyak 6 kali dan radioterapi sebanyak 36 kali. saya mendapat banyak pelajaran berharga. Bahwa penyakit kanker payudara tak hanya diderita oleh mereka yang memiliki gen keturunan kanker. Gaya hidup menjadi penting untuk dijaga agar tak mengidap kanker payudara.
            
            SADARI penting untuk deteksi dini kanker payudara. Minimal satu bulan sekali, yaitu tujuh sampai 10 hari dihitung mulai dari hari pertama menstruasi,',
            'id' => 8,
            'type' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],[
            'image' => '/forum//Saya divonis kanker saat merasa sehat11.jpeg',
            'title' => 'Saya divonis kanker saat merasa sehat',
            'content' => 'Ika Damajanti, seorang penyintas kanker payudara di Surabaya, sempat percaya diri jika tak akan pernah mengidap penyakit tersebut mengingat tak ada riwayat penyakit mematikan ini dalam garis keturunan keluarga. Namun takdir berkata lain, pada tahun 2000 silam, vonis kanker payudara harus dia terima.

            Pertengahan tahun 2000 saya ada benjolan di payudara, tapi enggak sampai kepikiran kalau itu bakal jadi kanker payudara. Waktu itu usia saya masih di bawah 30 tahun, dan di keluarga tidak ada yang punya sakit kanker payudara. Jadi waktu itu saya cukup yakin kalau benjolan itu bukan kanker,
            
            Hingga di bulan Oktober 2000, saya merasakan nyeri pada payudara. ternyata benjolan itu lebih besar dari biasanya. Karena adanya rasa nyeri itulah, saya baru tergerak untuk memeriksakan diri ke dokter.
            
            Untungnya Tuhan ngasih saya rasa nyeri, kalau saya enggak ngerasa nyeri saya enggak akan ke dokter. Saya kan tipe orang yang agak malas kalau harus periksa ke dokter
            
            Setelah melalui rangkaian pemeriksaan  dokter dan USG, dokter mengatakan jika benjolan tersebut padat sehingga harus dioperasi kurang lebih 30 menit. Namun sebelum dilakukan operasi, dokter akan melakukan biopsi untuk memastikan jenis benjolannya.
            
            Karena yakin hasilnya baik, waktu itu saya hanya ditemani oleh ibu mertua. Begitu masuk ruang dokter dan mendengar dokter menanyakan dimana suami saya, langsung saya menangkap sesuatu yang negatif, Karena yakin hasilnya baik, waktu itu saya hanya ditemani oleh ibu mertua. Begitu masuk ruang dokter dan mendengar dokter menanyakan dimana suami saya, langsung saya menangkap sesuatu yang negatif,
            
            Operasi berjalan kurang lebih 3,5 jam pada tanggal 1 November 2000. Kemudian saya menjalani rangkaian pengobatan kemoterapi sebanyak 6 kali dan radioterapi sebanyak 36 kali. saya mendapat banyak pelajaran berharga. Bahwa penyakit kanker payudara tak hanya diderita oleh mereka yang memiliki gen keturunan kanker. Gaya hidup menjadi penting untuk dijaga agar tak mengidap kanker payudara.
            
            SADARI penting untuk deteksi dini kanker payudara. Minimal satu bulan sekali, yaitu tujuh sampai 10 hari dihitung mulai dari hari pertama menstruasi,',
            'id' => 8,
            'type' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]];
        
        DB::table('forum')->insert($userdata);
    }
}
