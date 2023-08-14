@extends('layouts.front')

@section('content')
<section class="home" id="home">
        <div class="home-container container grid">
          <div class="home-img-bg">
          </div>

          <div class="home-data">
            <h1 class="home-title">
              Asosiasi Pendidik Teknik Mesin dan Fabrikasi Logam Indonesia
            </h1>
            <p class="home-description">
              Indonesian Manufacture and Fabrication Educators Association (IMFEA)
            </p>
            <div class="home-btns">
              <a href="#kursus" class="button button-home">Available Courses</a>
            </div>
          </div>
        </div>
      </section>

      <section class="story section container">
        <div class="">
          <div class="story-data">
            <h2 class="section-title story-section-title">Visi & Misi</h2>
            <h1 class="story-title">
              Visi
            </h1>
            <p class="story-description">
              1. Perkumpulan Pendidik Teknik Mesin dan Fabrikasi Logam Indonesia atau dalam bahasa Inggris diberikan nama Indonesian Manufacture and Fabrication Educators Association (IMFEA) bergerak di bidang Pendidikan Vokasi dan Kegiatan Sosial. <br> <br>
              2. Menghimpun dan memberdayakan potensi sumber daya manusia para pendidik di bidang teknik mesin dan fabrikasi logam termasuk Guru, Instruktur dan Dosen guna menunjang program pemerintah dalam upaya  melaksanakan program Pendidikan Vokasi untuk menjadikan Indonesia yang maju dan berdaya saing global. <br> <br>
              3. Sebagai wadah utama komunikasi bagi para pendidik teknik mesin dan fabrikasi logam untuk bersama-sama membicarakan dan memecahkan masalah-masalah yang dihadapi anggota, memperjuangkan kepentingan-kepentingan anggotanya kepada pemerintah dan pihak-pihak lain dengan menerapkan asas “Solidarity Forever”. <br> <br>
              4. Mempersatukan, membina, memperjuangkan serta memberikan layanan kepada anggota dalam pengembangan karir dalam dunia Pendidikan Vokasi. <br> <br>
              5. Meningkatkan kerjasama, pertukaran informasi, dan menumbuhkan sikap saling berjejaring di antara para anggota maupun dengan Pemerintah atau pihak lainnya, sehingga tercipta hubungan yang baik dan harmonis. <br> <br>
              6. Mengembangkan dan memajukan peranan perkumpulan sebagai salah satu alternatif stakeholder pemerintah untuk memberikan sumbangsih bagi kemajuan dunia Pendidikan Vokasi di bidang teknik mesin dan fabrikasi logam.<br> <br>
              7. Memberikan pendapat dan saran kepada Pemerintah/Instansi/Badan yang terkait, dalam rangka pengembangan sumber daya manusia di lingkungan Pendidikan Vokasi  di Indonesia serta memperjuangkan kepentingan bersama para anggotanya.
            <h1 class="story-title">
              Misi
            </h1>
            <p class="story-description">
              1. Menjadikan Perkumpulan sebagai wadah utama untuk bertukar pikiran dan informasi, mengumpulkan, mengadakan penelitian atau mengolah data serta informasi yang berhubungan dengan masalah-masalah pendidikan vokasi yang terjadi di dalam bidang teknik mesin dan fabrikasi logam. <br> <br>
              2. Menampung serta membahas masalah-masalah yang dihadapi para anggota dalam pelaksanaan kegiatan-kegiatan pendidikan vokasi dan bilamana perlu menyampaikan pendapatnya kepada instansi Pemerintah baik ditingkat daerah maupun pusat dan atau lembaga-lembaga lain yang berwenang.<br> <br>
              3. Memberikan penerangan, saran, pendidikan, latihan dan bimbingan serta layanan kepada para anggota, guna meningkatkan kemampuan dan ketrampilan para anggota untuk menjamin terlaksananya proses pembelajaran yang berkualitas di dunia Pendidikan Vokasi terutama di bidang teknik mesin dan fabrikasi logam.<br> <br>
              4. Membentuk komite-komite kerja diberbagai bidang yang dianggap baik dalam rangka melancarkan kegiatan dan usaha anggota untuk memajukan pendidikan vokasi di Indonesia.<br><br>
              5. Menggalang kerjasama dan hubungan baik dengan Instansi-instansi / Badan-badan / Lembaga-lembaga Pemerintah dan Swasta maupun Industri baik di dalam maupun luar negeri sepanjang tidak bertentangan dengan asas dan tujuan Perkumpulan, serta dengan cara yang tidak bertentangan dengan perundang-undangan yag berlaku.<br><br>
              6. Mengadakan usaha-usaha yang koperatif untuk melayani kebutuhan anggota serta usaha-usaha lain yang sah dan bermanfaat sepanjang tidak bertentangan dengan anggaran dasar dan anggaran rumah tangga perkumpulan.<br><br>
              7. Mewujudkan para pendidik teknik mesin dan fabrikasi logam yang mandiri, komunikatif, berjejaring, berdaya saing dan mampu mencetak lulusan yang berkualitas sesuai dengan kebutuhan dunia kerja.<br><br>
              8. Melakukan usaha-usaha lainnya sepanjang tidak bertentangan dengan asas dan tujuan Perkumpulan.
            </p>
            </p>
          </div>
          </div>
        </div>
      </section>

      <section class="products section container" id="kursus">
        <h2 class="section-title">Pelatihan yang Tersedia</h2>

        <div class="new-container">
          <div class="swiper new-swipper">
            <div class="swiper-wrapper">
    
            </div>
            <div
              class="swiper-button-next"
              style="
                bottom: initial;
                top: 50%;
                right: 0;
                left: initial;
                border-radius: 50%;
              "
            >
              <i class="bx bx-right-arrow-alt"></i>
            </div>
            <div
              class="swiper-button-prev"
              style="bottom: initial; top: 50%; border-radius: 50%"
            >
              <i class="bx bx-left-arrow-alt"></i>
            </div>
          </div>
        </div>
      </section>


      <section class="newsletter section container">
        <div class="newsletter-bg grid">
          <div>
            <h2 class="newsletter-title">
              Subscribe Our <br />
              Newsletter
            </h2>
            <p class="newsletter-description">
              Be the first to know the new course and discount.
            </p>
          </div>

          <form action="" class="newsletter-subscribe">
            <input
              type="email"
              placeholder="Enter your email"
              class="newsletter-input"/>
            <button class="button">BUTTON</button>
          </form>
        </div>
      </section>
@endsection