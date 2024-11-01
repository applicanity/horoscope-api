<?php

use App\Models\Horoscope;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('horoscopes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('image', 255);
            $table->longText('description');
            $table->date('date_start');
            $table->date('date_end');
            $table->timestamps();
        });

        $data =  array(
            [
                'name' => 'Aries',
                'image' => 'Aries.webp',
                'description' => 'Rasi bintang Aries memiliki lambang domba jantan. Menjadi zodiak pertama, Aries menyukai sesuatu yang bersifat alamiah.<br />Orang dengan zodiak Aries memiliki karakter yang ambisius, berani, serta menyukai sesuatu yang penuh tantangan.<br />Aries tak segan untuk terjun ke dalam situasi yang paling berbahaya sekalipun. Mereka pun akan berusaha keras untuk selalu menjadi yang teratas.<br />Sebagai salah satu dari tiga lambang bintang api, mereka yang lahir sebagai Aries adalah orang yang terkenal penuh semangat.<br />Mereka cenderung memiliki kepribadian yang berapi-api, dan umumnya menjadi pemimpin di antara teman-temannya.',
                'date_start' => '2000-03-21',
                'date_end' => '2000-04-19',
            ],
            [
                'name' => 'Taurus',
                'image' => 'Taurus.webp',
                'description' => 'Rasi Bintang Taurus memiliki lambang banteng. Rasi bintang zodiak Taurus dikenal dengan sikapnya yang keras kepala.<br />Menjadi bagian dari lambang bumi, pemilik zodiak ini termasuk materialistis, praktis, dan sangat tekun.<br />Zodiak Taurus bagi yang lahir di bulan April dan Mei ini juga menyukai sesuatu yang berkaitan dengan makanan dan kekayaan.<br />Ketenangan dan makanan-makanan enak menjadi titik perhatian seorang Taurus sepanjang masa.',
                'date_start' => '2000-04-20',
                'date_end' => '2000-05-20',
            ],
            [
                'name' => 'Gemini',
                'image' => 'Gemini.webp',
                'description' => 'Rasi bintang zodiak Gemini berlambang angka Romawi untuk dua angka, menggambarkan kembaran (dua orang).<br />Rasi bintang Gemini adalah nama zodiak ke 3 yang sering menjadi perdebatan banyak orang karena sifat uniknya.<br />Zodiak Gemini sering menganggap dirinya sebagai orang yang luar biasa dan terdepan dari yang lain.<br />Gemini didorong oleh rasa ingin tahunya yang tak terpuaskan. Ia pun senang bergaul dengan siapa pun di sekitarnya.<br />Sayangnya, pemilik zodiak ini sering mendapat kritikan karena sifatnya yang senang tebar pesona.<br />Melansir dari The Sun, zodiak ini juga terkenal dengan sifat cerdas dan ekspresif.',
                'date_start' => '2000-05-21',
                'date_end' => '2000-06-20',
            ],
            [
                'name' => 'Cancer',
                'image' => 'Cancer.webp',
                'description' => 'Hadir dengan lambang kepiting, Cancer senang menjalin pertemanan dengan banyak orang.<br />Rasi bintang zodiak Cancer menyukai sesuatu yang berkaitan dengan ketulusan dan selalu mengedepankan kerja keras.<br />Untuk berteman dengan pemilik zodiak ini, seseorang harus membangun kepercayaan yang tinggi.<br />Cancer biasanya rendah hati, dan suka mengelilingi diri mereka dengan keluarga atau hal-hal yang mengingatkan mereka pada rumah.',
                'date_start' => '2000-06-21',
                'date_end' => '2000-07-22',
            ],
            [
                'name' => 'Leo',
                'image' => 'Leo.webp',
                'description' => 'Rasi bintang zodiak Leo berlambang raja hutan, yaitu singa.<br />Berlambang api, Leo cenderung bersemangat, berhati hangat, dan tak kenal takut akan apa pun.<br />Mereka selalu bersiap untuk hal apa pun dan cenderung melihat diri sebagai pusat perhatian. Zodiak Leo adalah orang yang penuh gairah, setia, dan cukup dramatis.<br />Mereka senang merangkul status kerajaan di hidupnya, dan menyukai perayaan bahkan untuk hal-hal kecil sekalipun.',
                'date_start' => '2000-07-23',
                'date_end' => '2000-08-22',
            ],
            [
                'name' => 'Virgo',
                'image' => 'Virgo.webp',
                'description' => 'Rasi bintang zodiak Virgo memiliki lambang seorang perempuan atau gadis perawan.<br />Lahir di antara bulan Agustus dan September, karakteristik Virgo dikatakan sebagai kesetiaan dan kebaikan.<br />Pekerja keras dan penuh kepraktisan adalah sifat seorang Virgo lain yang jarang dikenali. Kelemahan mereka adalah obsesinya dengan detail dan hal-hal terperinci.<br />Jangan pernah meremehkan ketekunan seorang Virgo, apalagi jika ia sudah mencintai sesuatu yang berkaitan dengan hidupnya.',
                'date_start' => '2000-08-23',
                'date_end' => '2000-09-22',
            ],
            [
                'name' => 'Libra',
                'image' => 'Libra.webp',
                'description' => 'Rasi bintang dari Libra adalah timbangan. Keseimbangan, harmonis, dan keadilan adalah karakteristik utama pemilik zodiak Libra.<br />Libra terobsesi dengan simetri dan berusaha menciptakan keseimbangan di semua bidang kehidupan. Obsesi ini terutama jika menyangkut masalah hati atau percintaan.<br />Rasi bintang zodiak Libra juga menyukai ketertiban dan benci akan kekacauan di dalam hidup.',
                'date_start' => '2000-09-23',
                'date_end' => '2000-10-22',
            ],
            [
                'name' => 'Scorpio',
                'image' => 'Scorpio.webp',
                'description' => 'Bintang zodiak Scorpio melambangkan hewan kalajengking.<br />Mereka yang lahir dari 24 Oktober cenderung berani dan bersemangat, tetapi bisa keras kepala dan juga pencemburu.<br />Lambang air terakhir dari zodiak ini identik dengan keganasan dan penuh obsesi yang tinggi. Scorpio juga merasa sebagai sosok yang sangat perlu diperjuangkan.<br />Sulit ditebak dan misterius, Scorpio pun menjadi salah satu tanda zodiak yang paling sering disalahpahami.<br />Scorpio adalah lambang air yang menggunakan energi emosional sebagai bahan bakar untuk menumbuhkan kebijaksanaan kuat.',
                'date_start' => '2000-10-23',
                'date_end' => '2000-11-21',
            ],
            [
                'name' => 'Sagitarius',
                'image' => 'Sagitarius.webp',
                'description' => 'Sagitarius adalah karakteristik yang penuh dengan energi dan menyukai filosofi.<br />Diwakili oleh lambang pemanah, Sagitarius selalu mencari pengetahuan akan hal-hal baru.<br />Berpetualang dan segala hal yang penuh intelektual adalah sasaran tepat pemilik zodiak Sagitarius.<br />Rasi bintang zodiak ini juga dikenal dengan kesetiaannya dengan pasangan, lho!',
                'date_start' => '2000-11-22',
                'date_end' => '2000-12-21',
            ],
            [
                'name' => 'Capricorn',
                'image' => 'Capricorn.webp',
                'description' => 'Capricorn sangat berdedikasi pada tujuan mereka. Meskipun keras kepala, ia bersedia bersabar dan bekerja keras untuk mencapai tujuan tersebut.<br />Namun, zodiak berlambang kambing ini cenderung menyimpan dendam dan bisa menjadi keras kepala serta tidak optimis.<br />Diketahui juga, Capricorn adalah sosok yang terampil dalam menavigasi material alam dan emosional dalam dirinya.',
                'date_start' => '2000-12-22',
                'date_end' => '2000-01-19',
            ],
            [
                'name' => 'Aquarius',
                'image' => 'Aquarius.webp',
                'description' => 'Zodiak ini memiliki lambang yang menggambarkan seseorang sedang menuangkan air.<br />Aquarius adalah sekelompok rasi bintang yang berjiwa bebas, dengan banyak sekali pesona dalam diri.<br />Zodiak ini juga punya keinginan yang kuat untuk membuat dunia lebih baik.<br />Keras kepala di dalam dirinya terkadang membuat sosok Aquarius sulit dikendalikan.<br />Orang sekitarnya juga sering merasa tidak nyaman karena sifatnya tersebut. Aquarius juga dikenal sebagai tanda astrologi yang paling manusiawi.',
                'date_start' => '2000-01-20',
                'date_end' => '2000-02-18',
            ],
            [
                'name' => 'Pisces',
                'image' => 'Pisces.webp',
                'description' => 'Pisces identik dengan seseorang yang penuh kecintaannya terhadap seni. Zodiak dengan lambang ikan ini juga digambarkan sebagai seseorang yang kreatif dan penuh akal.<br />Mereka dapat membaur dan membenamkan diri ke dalam kelompok dengan sangat mudah.<br />Tetapi, mereka memiliki kecenderungan untuk mundur ketika telah merasa ragu atau sulit bertindak.<br />Karena sering merasa sulit berteman dengan orang lain, Pisces lebih memilih untuk menghabiskan waktu sendiri.',
                'date_start' => '2000-02-19',
                'date_end' => '2000-03-20',
            ],
        );

        foreach ($data as $value){
            $horoscope = new Horoscope();
            $horoscope->name = $value['name'];
            $horoscope->image = $value['image'];
            $horoscope->description = $value['description'];
            $horoscope->date_start = $value['date_start'];
            $horoscope->date_end = $value['date_end'];
            $horoscope->save();
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horoscopes');
    }
};
