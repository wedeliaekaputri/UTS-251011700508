<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sports')->insert([
            [
                'name' => 'Padel Modern',
                'category' => 'Raket / Ganda',
                'equipment' => 'Raket Padel, Bola Khusus, Sepatu Court',
                'rules' => 'Dimainkan 2 lawan 2 di lapangan berdinding kaca yang boleh memantulkan bola.',
                'origin_country' => 'Meksiko',
                'image' => 'padel.jpg',
                'description' => 'Olahraga raket yang sangat adiktif, memadukan elemen tenis dan squash dengan tempo cepat. Sejarah padel bermula di Acapulco, Meksiko, pada tahun 1969 oleh Enrique Corcuera, yang memodifikasi lapangan tenis di rumahnya agar ukurannya lebih kecil dan dikelilingi tembok. Olahraga ini kemudian menyebar luas ke Spanyol, Argentina, dan kini menjadi salah satu tren olahraga paling berkembang pesat di seluruh dunia karena ramah bagi pemula namun tetap menantang bagi atlet profesional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tenis Lapangan',
                'category' => 'Raket / Individu',
                'equipment' => 'Raket Tenis, Bola Tenis, Sepatu Lapangan',
                'rules' => 'Memukul bola melewati net ke area lawan menggunakan sistem skor game dan set.',
                'origin_country' => 'Prancis / Inggris',
                'image' => 'tennis.jpg',
                'description' => 'Olahraga prestasi bergengsi yang menuntut ketahanan fisik, teknik pukulan, dan strategi tingkat tinggi. Akar sejarah tenis modern dapat ditelusuri dari permainan istana abad pertengahan di Prancis yang disebut "Jeu de Paume", sebelum akhirnya dikodifikasikan secara resmi di Inggris pada abad ke-19. Turnamen Grand Slam bergengsi seperti Wimbledon, US Open, French Open, dan Australian Open menjadi puncak prestasi tertinggi para petenis profesional di kancah internasional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tenis Meja (Pingpong)',
                'category' => 'Raket / Indoor',
                'equipment' => 'Bet, Bola Seluloid/Plastik, Meja Khusus',
                'rules' => 'Memantulkan bola di atas meja dengan bantuan net sesuai aturan servis dan reli.',
                'origin_country' => 'Inggris',
                'image' => 'pingpong.jpg',
                'description' => 'Olahraga kilat yang melatih koordinasi tangan-mata, refleks luar biasa, dan konsentrasi tinggi. Tenis meja bermula di Inggris pada era Victorian sebagai permainan indoor kaum bangsawan setelah makan malam menggunakan peralatan seadanya. Seiring berjalannya waktu, olahraga ini berevolusi menjadi cabang kompetitif dunia yang sangat mendominasi di kawasan Asia, khususnya Tiongkok, dengan kecepatan laju bola yang bisa mencapai lebih dari 100 km/jam.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tai Chi Harmoni',
                'category' => 'Kebugaran / Mental',
                'equipment' => 'Pakaian Longgar, Alas Kaki Fleksibel',
                'rules' => 'Melakukan rangkaian gerakan lambat, lembut, dan terarah disertai pernapasan.',
                'origin_country' => 'Tiongkok',
                'image' => 'taichi.jpg',
                'description' => 'Seni bela diri internal Tiongkok kuno yang berfokus pada kesehatan mental, kelenturan tubuh, dan meditasi gerak. Tai Chi dikembangkan berdasarkan prinsip filosofi Taoisme mengenai keseimbangan energi yin dan yang. Gerakannya yang mengalir perlahan terbukti secara ilmiah mampu menurunkan tingkat stres, memperbaiki keseimbangan postur tubuh lansia, serta melatih ketenangan pikiran yang mendalam.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Yoga Fleksibilitas',
                'category' => 'Wellness / Fleksibilitas',
                'equipment' => 'Matras Yoga, Yoga Block, Pakaian Nyaman',
                'rules' => 'Memposisikan tubuh dalam berbagai pose (asana) dipadukan dengan kontrol napas.',
                'origin_country' => 'India Kuno',
                'image' => 'yoga.jpg',
                'description' => 'Latihan holistik kuno dari India untuk meredakan stres, meningkatkan keseimbangan, dan menguatkan otot inti. Yoga bukan hanya sekadar olahraga fisik, melainkan sebuah disiplin spiritual dan mental yang menyatukan kesadaran diri melalui meditasi, teknik pernapasan (pranayama), dan berbagai pose (asana) yang dirancang untuk menjaga kesehatan organ tubuh serta kelenturan sendi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pilates Core Strength',
                'category' => 'Wellness / Kekuatan',
                'equipment' => 'Matras, Resistance Band, Pilates Ring',
                'rules' => 'Serangkaian gerakan terkontrol untuk memperkuat otot perut, panggul, dan punggung.',
                'origin_country' => 'Jerman / AS',
                'image' => 'pilates.jpg',
                'description' => 'Metode latihan fisik yang sangat efektif membentuk postur tubuh ideal dan stabilitas inti (core stability). Diciptakan oleh Joseph Pilates pada awal abad ke-20 sebagai metode rehabilitasi bagi para tentara yang terluka dan penari profesional. Pilates menitikberatkan pada presisi gerakan, kontrol pernapasan, dan konsentrasi tinggi tanpa memberikan beban berlebih pada persendian.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Futsal Energik',
                'category' => 'Tim / Bola',
                'equipment' => 'Sepatu Futsal, Bola, Jersey, Shin Guard',
                'rules' => 'Dimainkan 5 orang per tim, durasi 2x20 menit bersih di lapangan indoor.',
                'origin_country' => 'Uruguay / Brasil',
                'image' => 'futsal.jpg',
                'description' => 'Olahraga cepat yang melatih kelincahan, kerja sama tim, dan stamina tinggi. Futsal pertama kali dicetuskan di Montevideo, Uruguay, pada tahun 1930 oleh Juan Carlos Ceriani. Dengan area lapangan yang lebih kecil dan bola yang lebih berat dibanding sepak bola konvensional, futsal memaksa pemain untuk berpikir cepat, mengasah teknik dribble jarak dekat, dan membangun taktik yang solid.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Badminton Smash',
                'category' => 'Raket / Individu',
                'equipment' => 'Raket, Shuttlecock, Sepatu khusus lapangan',
                'rules' => 'Pemain memukul shuttlecock melewati net hingga jatuh di area lawan.',
                'origin_country' => 'Inggris / India',
                'image' => 'badminton.jpg',
                'description' => 'Olahraga nasional yang membutuhkan refleks kilat, kekuatan otot lengan, dan daya tahan kardio yang prima. Bulu tangkis memiliki sejarah panjang yang berakar dari permainan tradisional anak-anak di Inggris kuno dan Pune di India. Di Indonesia, bulu tangkis telah mendarah daging sebagai cabang olahraga paling berprestasi yang kerap mengharumkan nama bangsa di kancah olimpiade.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Basket Streetball',
                'category' => 'Tim / Bola',
                'equipment' => 'Bola Basket, Ring, Jersey',
                'rules' => 'Memasukkan bola ke ring lawan dan mematuhi aturan dribble.',
                'origin_country' => 'Amerika Serikat',
                'image' => 'basketball.jpg',
                'description' => 'Permainan bola besar yang dinamis dengan mengandalkan lompatan tinggi serta trik individu yang memukau. Diciptakan oleh Dr. James Naismith pada tahun 1891 di Massachusetts, basket berkembang pesat dari olahraga musim dingin di gimnasium menjadi budaya jalanan urban (streetball) dan liga profesional NBA yang digandrungi jutaan penggemar muda di seluruh dunia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jogging & Marathon',
                'category' => 'Atletik / Individu',
                'equipment' => 'Sepatu Lari, Pakaian Dry-fit, Smartwatch',
                'rules' => 'Menyelesaikan jarak tempuh tertentu dengan berlari atau berjalan konstan.',
                'origin_country' => 'Yunani Kuno',
                'image' => 'running.jpg',
                'description' => 'Aktivitas kardio terbaik untuk menjaga kesehatan jantung, membakar kalori, dan melatih ketahanan mental. Istilah maraton diabadikan dari kisah heroik prajurit Yunani Kuno, Pheidippides, yang berlari tanpa henti sejauh 42 kilometer dari medan pertempuran Marathon ke Athena. Saat ini, lari telah menjelma menjadi gaya hidup sehat modern yang menyatukan komunitas global dalam berbagai ajang festival lari.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Berenang Gaya Bebas',
                'category' => 'Akuatik / Individu',
                'equipment' => 'Pakaian Renang, Kacamata Renang, Cap',
                'rules' => 'Menempuh jarak di dalam air menggunakan teknik gaya renang yang sah.',
                'origin_country' => 'Mesir Kuno',
                'image' => 'swimming.jpg',
                'description' => 'Olahraga air low-impact yang melatih seluruh otot tubuh, kapasitas paru-paru, dan sistem pernapasan secara menyeluruh. Bukti arkeologis menunjukkan bahwa aktivitas renang telah dilakukan manusia sejak ribuan tahun lalu di dinding gua Mesir kuno. Sebagai cabang utama dalam Olimpiade modern, renang gaya bebas dikenal sebagai gaya tercepat dan paling efisien.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bersepeda Santai & Roadbike',
                'category' => 'Outdoor / Ketahanan',
                'equipment' => 'Sepeda, Helm, Sarung Tangan, Botol Minum',
                'rules' => 'Mengayuh sepeda mengikuti jalur atau rute perjalanan yang ditentukan.',
                'origin_country' => 'Prancis / Jerman',
                'image' => 'cycling.jpg',
                'description' => 'Aktivitas luar ruangan yang menyegarkan pikiran sekaligus memperkuat otot kaki dan sistem kardiovaskular. Sejarah sepeda modern berawal dari penemuan mesin roda dua oleh Karl Drais di Jerman pada awal abad ke-19. Kini, bersepeda terbagi menjadi penjelajahan santai di akhir pekan hingga ajang balap jalan raya profesional kelas dunia seperti Tour de France.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}