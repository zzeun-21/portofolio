<section class="contact" id="contact">
    <h2 class="section-title">Kontak</h2>
    <div class="contact-content">
        <form class="contact-form" action="#" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama Anda">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email Anda">
            </div>
            <div class="form-group">
                <label for="message">Pesan</label>
                <textarea id="message" name="message" placeholder="Tulis pesan Anda di sini"></textarea>
            </div>
            <button type="submit" class="submit-btn">Kirim Pesan</button>
        </form>
    </div>
</section>
