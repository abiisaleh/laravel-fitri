<footer id="footer" class="footer">
    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h4>Beri Donasi</h4>
                    <p>
                        Dengan dukungan Anda, kami percaya setiap anak memiliki kesempatan untuk meraih masa depan yang
                        cerah dan penuh harapan.
                    </p>
                </div>
            </div>
            <section id="stats" class="stats section">
                <div>
                    <div class="row gy-4">

                        @php
                            $banks = [
                                [
                                    'rek' => '4411-01-010964-53-0',
                                    'nama' => 'PSAA Al-Fitroh',
                                    'bank' => 'BRI',
                                ],
                                [
                                    'rek' => '4411-01-000702-50-8',
                                    'nama' => 'Yayasan Al-Fitroh',
                                    'bank' => 'BRI',
                                ],
                                [
                                    'rek' => '0006243177100',
                                    'nama' => 'Yayasan Al-Fitroh',
                                    'bank' => 'Jabar',
                                ],
                            ];
                        @endphp

                        @foreach ($banks as $bank)
                            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
                                <i class="bi bi-wallet"></i>
                                <div class="stats-item">
                                    <p>Bank {{ $bank['bank'] }}</p>
                                    <span>{{ $bank['rek'] }}</span>
                                    <p>{{ $bank['nama'] }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>
        </div>

    </div>

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.html" class="d-flex align-items-center">
                    <span class="sitename">BizLand</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>{{ $kontak['alamat'] }}</p>
                    <p>New York, NY 535022</p>
                    <p class="mt-3">
                        <strong>Phone:</strong> <span>{{ $kontak['telp'] }}</span>
                    </p>
                    <p><strong>Email:</strong> <span>{{ $kontak['email'] }}</span></p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                    <li>
                        <i class="bi bi-chevron-right"></i> <a href="#">About us</a>
                    </li>
                    <li>
                        <i class="bi bi-chevron-right"></i> <a href="#">Services</a>
                    </li>
                    <li>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">Terms of service</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li>
                        <i class="bi bi-chevron-right"></i> <a href="#">Web Design</a>
                    </li>
                    <li>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">Web Development</a>
                    </li>
                    <li>
                        <i class="bi bi-chevron-right"></i>
                        <a href="#">Product Management</a>
                    </li>
                    <li>
                        <i class="bi bi-chevron-right"></i> <a href="#">Marketing</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <h4>Follow Us</h4>
                <p>
                    Follow social media kami untuk update informasi terbaru.
                </p>
                <div class="social-links d-flex">
                    <a href="https://www.twitter.com/{{ $kontak['twitter'] }}"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://www.facebook.com/{{ $kontak['facebook'] }}"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/{{ $kontak['instagram'] }}"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>
            © <span>Copyright</span>
            <strong class="px-1 sitename">{{ config('app.name') }}</strong>
            <span>All Rights Reserved</span>
        </p>
    </div>
</footer>
