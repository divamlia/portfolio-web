<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diva Amalia - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        pink: {
                            50: '#fef5f8',
                            100: '#ffe9f3',
                            200: '#ffd3e3',
                            300: '#ffb8d2',
                            400: '#f8a5c2',
                            500: '#f472b6',
                            600: '#ec4899',
                            700: '#db2777',
                            800: '#be185d',
                            900: '#4a2b3d',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes float {
            0% {
                transform: translateY(100vh) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 0.6;
            }
            90% {
                opacity: 0.6;
            }
            100% {
                transform: translateY(-100vh) translateX(var(--float-x));
                opacity: 0;
            }
        }

        .bubble {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(251, 207, 232, 0.3), rgba(253, 164, 175, 0.3));
            animation: float linear infinite;
            bottom: -100px;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }
        .delay-600 { animation-delay: 0.6s; }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-pink-50 via-rose-50 to-pink-100 relative">
    <!-- Animated Bubbles Background -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden" id="bubbles-container"></div>

    <!-- Main Content -->
    <div class="relative z-10">

        <!-- Hero Section -->
        <section class="pt-20 pb-16 px-4 fade-in-up">
            <div class="max-w-4xl mx-auto text-center">
                <div class="mb-8 delay-200 fade-in-up opacity-0">
                    <div class="w-40 h-40 mx-auto rounded-full overflow-hidden border-4 border-pink-300 shadow-xl">
                        <img src="{{ asset('images/profile.jpg') }}"
                             alt="Diva Amalia"
                             class="w-full h-full object-cover"
                             onerror="this.src='https://images.unsplash.com/photo-1664277497095-424e085175e8?w=400&h=400&fit=crop'">
                    </div>
                </div>

                <h1 class="text-5xl md:text-6xl mb-4 text-pink-900 tracking-tight font-semibold delay-400 fade-in-up opacity-0">
                    DIVA AMALIA
                </h1>

                <p class="text-2xl md:text-3xl mb-8 text-pink-700 delay-500 fade-in-up opacity-0">
                    HOST LIVE & CONTENT CREATOR
                </p>

                <div class="flex flex-wrap justify-center gap-4 text-sm text-pink-800 delay-600 fade-in-up opacity-0">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>0881027067545</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span>divamliaaa@gmail.com</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Sidoarjo</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Profile Section -->
        <section class="py-8 px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white/80 backdrop-blur-sm border border-pink-200 shadow-lg rounded-xl p-6">
                    <h2 class="text-2xl mb-4 text-pink-900 font-semibold flex items-center gap-2">
                        <svg class="w-6 h-6 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                        Profil Singkat
                    </h2>
                    <p class="text-pink-900 leading-relaxed">
                        Mahasiswi D3 Teknologi Multimedia Broadcasting dengan keahlian di bidang public speaking,
                        live hosting, dan content creation. Berpengalaman sebagai MC, moderator, host live,
                        narasumber, serta voice over talent di berbagai event dan platform digital. Memiliki
                        kemampuan komunikasi yang kuat, percaya diri di depan publik, serta mampu membangun
                        engagement audiens dengan pendekatan kreatif berbasis konten.
                    </p>
                </div>
            </div>
        </section>

        <!-- Work Experience -->
        <section class="py-8 px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl mb-6 text-pink-900 font-semibold flex items-center gap-2 justify-center">
                    <svg class="w-7 h-7 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Pengalaman Kerja
                </h2>

                <div class="space-y-6">
                    <div class="bg-white/80 backdrop-blur-sm border border-pink-200 shadow-lg rounded-xl p-6">
                        <div class="flex justify-between items-start mb-3 flex-wrap gap-2">
                            <div>
                                <h3 class="text-xl text-pink-900 font-semibold">CV. SUWARLANDONO ART | Elly Gallery</h3>
                                <p class="text-pink-700">Host Live, Content Creator & Admin Social Media</p>
                            </div>
                            <span class="bg-pink-200 text-pink-900 px-3 py-1 rounded-full text-sm">Mei 2024 – Jan 2026</span>
                        </div>
                        <ul class="list-disc list-inside space-y-1 text-pink-800">
                            <li>Membawakan live streaming penjualan produk secara interaktif dengan multiplatform</li>
                            <li>Membuat konten promosi yang mencapai 10.000+ likes dan 300.000+ viewers</li>
                            <li>Meningkatkan engagement serta berkontribusi terhadap peningkatan penjualan</li>
                            <li>Mengelola akun media sosial dan interaksi dengan audiens</li>
                        </ul>
                    </div>

                    <div class="bg-white/80 backdrop-blur-sm border border-pink-200 shadow-lg rounded-xl p-6">
                        <div class="flex justify-between items-start mb-3 flex-wrap gap-2">
                            <div>
                                <h3 class="text-xl text-pink-900 font-semibold">PT. Sumber Nusantara Aditya Pratama</h3>
                                <p class="text-pink-700">Digital Marketing Intern & Staff</p>
                            </div>
                            <span class="bg-pink-200 text-pink-900 px-3 py-1 rounded-full text-sm">Juli 2023 – April 2024</span>
                        </div>
                        <ul class="list-disc list-inside space-y-1 text-pink-800">
                            <li>Membuat konten digital sebagai content creator dan talent video</li>
                            <li>Menjadi host dan voice over untuk kebutuhan promosi</li>
                            <li>Menulis script konten marketing</li>
                            <li>Mengelola media sosial dan telemarketing</li>
                            <li>Menggunakan tools editing seperti CapCut dan Adobe Premiere</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education -->
        <section class="py-8 px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl mb-6 text-pink-900 font-semibold flex items-center gap-2 justify-center">
                    <svg class="w-7 h-7 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                    Pendidikan
                </h2>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white/80 backdrop-blur-sm border border-pink-200 shadow-lg rounded-xl p-6 h-full">
                        <h3 class="text-xl text-pink-900 font-semibold mb-2">Politeknik Elektronika Negeri Surabaya</h3>
                        <p class="text-pink-700 mb-2">D3 Teknologi Multimedia Broadcasting</p>
                        <span class="bg-pink-500 text-white px-3 py-1 rounded-full text-sm inline-block mb-2">2024 – Sekarang</span>
                        <p class="text-pink-800 font-medium">IPK: 3,66 (Semester 3)</p>
                        <p class="text-pink-800 font-medium">Peringkat 1 Semester 3</p>
                    </div>

                    <div class="bg-white/80 backdrop-blur-sm border border-pink-200 shadow-lg rounded-xl p-6 h-full">
                        <h3 class="text-xl text-pink-900 font-semibold mb-2">SMK Muhammadiyah 1 Taman</h3>
                        <p class="text-pink-700 mb-2">Desain Interior & Teknik Furnitur</p>
                        <span class="bg-pink-500 text-white px-3 py-1 rounded-full text-sm inline-block">2021 – 2024</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Event Experience -->
        <section class="py-8 px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl mb-6 text-pink-900 font-semibold flex items-center gap-2 justify-center">
                    <svg class="w-7 h-7 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                    Pengalaman Event & Public Speaking
                </h2>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white/80 backdrop-blur-sm border border-pink-200 shadow-lg rounded-xl p-6 h-full">
                        <h3 class="text-lg text-pink-900 font-semibold mb-3">Master of Ceremony (MC)</h3>
                        <ul class="space-y-1 text-sm text-pink-800">
                            <li>• MC Sidoarjo Moslem Week (2023)</li>
                            <li>• MC Gen Connection DTMK PENS (2025)</li>
                            <li>• MC MMB Fest PENS (2025)</li>
                            <li>• MC Workshop Fujifilm Photography PENS (2025)</li>
                            <li>• MC berbagai acara sekolah & kampus</li>
                        </ul>
                    </div>

                    <div class="bg-white/80 backdrop-blur-sm border border-pink-200 shadow-lg rounded-xl p-6 h-full">
                        <h3 class="text-lg text-pink-900 font-semibold mb-3">Moderator & Host</h3>
                        <ul class="space-y-1 text-sm text-pink-800">
                            <li>• Moderator Talkshow DTMK Expo PENS (2025 & 2026)</li>
                            <li>• Host Podcast Siniar PENS (Episode 44 & 46) (2025)</li>
                            <li>• Host Live Streaming Elly Gallery (2024–2026)</li>
                        </ul>
                    </div>

                    <div class="bg-white/80 backdrop-blur-sm border border-pink-200 shadow-lg rounded-xl p-6 h-full">
                        <h3 class="text-lg text-pink-900 font-semibold mb-3">Narasumber / Speaker</h3>
                        <ul class="space-y-1 text-sm text-pink-800">
                            <li>• Narasumber Public Speaking NextGen Creators MMB PENS (2024)</li>
                            <li>• Narasumber Personal Branding Fortasi SMKM1TA (2023)</li>
                            <li>• Narasumber KaderTalk Public Speaking PR IPM (2023)</li>
                            <li>• Narasumber Program "Ruang Karir" JTV (2025)</li>
                        </ul>
                    </div>

                    <div class="bg-white/80 backdrop-blur-sm border border-pink-200 shadow-lg rounded-xl p-6 h-full">
                        <h3 class="text-lg text-pink-900 font-semibold mb-3">Voice Over Talent</h3>
                        <ul class="space-y-1 text-sm text-pink-800">
                            <li>• VO Talent Teaching Factory PENS (2026)</li>
                            <li>• VO Talent Project "Sistem Notulensi Otomatis" PENS (2026)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Organization Experience -->
        <section class="py-8 px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl mb-6 text-pink-900 font-semibold flex items-center gap-2 justify-center">
                    <svg class="w-7 h-7 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    Pengalaman Organisasi
                </h2>

                <div class="space-y-4">
                    @php
                    $organizations = [
                        ['role' => 'Anggota Divisi Publikasi & Host Siniar PENS', 'period' => '2025 – 2026', 'desc' => 'Mengelola publikasi podcast dan menjadi host'],
                        ['role' => 'Koordinator Divisi Litbang Yuk Muslimah Sidoarjo', 'period' => '2022 - 2023', 'desc' => 'Mengembangkan dan merealisasikan program kerja organisasi'],
                        ['role' => 'Sekretaris Bidang Perkaderan IPM SMKM1TA', 'period' => '2021 - 2023', 'desc' => 'Mengelola administrasi dan rekrutmen anggota'],
                        ['role' => 'Komandan Satuan Paskibra SMKM1TA', 'period' => '2021 - 2022', 'desc' => 'Memimpin dan melatih kedisiplinan anggota'],
                        ['role' => 'Wakil Ketua Paguyuban Duta SMK Sidoarjo', 'period' => '2021 - 2022', 'desc' => 'Mendukung program kerja dan menjadi public speaker'],
                    ];
                    @endphp

                    @foreach($organizations as $org)
                    <div class="bg-white/80 backdrop-blur-sm border border-pink-200 shadow-lg rounded-xl p-4">
                        <div class="flex justify-between items-start flex-wrap gap-2">
                            <div>
                                <h3 class="text-pink-900 font-medium">{{ $org['role'] }}</h3>
                                <p class="text-sm text-pink-700">{{ $org['desc'] }}</p>
                            </div>
                            <span class="border border-pink-300 text-pink-800 px-3 py-1 rounded-full text-sm shrink-0">{{ $org['period'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Achievements -->
        <section class="py-8 px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl mb-6 text-pink-900 font-semibold flex items-center gap-2 justify-center">
                    <svg class="w-7 h-7 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                    Pencapaian
                </h2>

                <div class="bg-white/80 backdrop-blur-sm border border-pink-200 shadow-lg rounded-xl p-6">
                    <div class="grid md:grid-cols-2 gap-3 text-sm text-pink-800">
                        @php
                        $achievements = [
                            'Winner Putra Putri SMKM1TA 2021',
                            'Winner Duta SMK Sidoarjo 2021',
                            'Bronze Award English Speech – MEA Jatim 2021',
                            'Top 10 English Speech – MEA Jatim 2022',
                            'Finalis Top 10 Yuk Muslimah Sidoarjo 2022',
                            'Finalis Tahap 3 Miss Hijab Jawa Timur 2023',
                            'Juara Lomba Video Kreatif – Workshop Fujifilm PENS (2025)',
                            'Berbagai Juara Lomba Modeling, Catwalk, dan Tari',
                        ];
                        @endphp

                        @foreach($achievements as $achievement)
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-pink-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span>{{ $achievement }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills -->
        <section class="py-8 px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl mb-6 text-pink-900 font-semibold text-center">Keahlian</h2>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white/80 backdrop-blur-sm border border-pink-200 shadow-lg rounded-xl p-6 h-full">
                        <h3 class="text-lg text-pink-900 font-semibold mb-3">Hard Skills</h3>
                        <div class="flex flex-wrap gap-2">
                            @php
                            $hardSkills = ['Public Speaking', 'Live Hosting', 'Content Creation', 'Voice Over', 'Script Writing', 'Social Media Management', 'Video Editing', 'Adobe Premiere', 'CapCut', 'Adobe Illustrator', 'Blender'];
                            @endphp
                            @foreach($hardSkills as $skill)
                            <span class="bg-pink-200 text-pink-900 px-3 py-1 rounded-full text-sm">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="bg-white/80 backdrop-blur-sm border border-pink-200 shadow-lg rounded-xl p-6 h-full">
                        <h3 class="text-lg text-pink-900 font-semibold mb-3">Soft Skills</h3>
                        <div class="flex flex-wrap gap-2">
                            @php
                            $softSkills = ['Communication', 'Confidence', 'Leadership', 'Teamwork', 'Problem Solving'];
                            @endphp
                            @foreach($softSkills as $skill)
                            <span class="bg-pink-200 text-pink-900 px-3 py-1 rounded-full text-sm">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio -->
        <section class="py-8 px-4 pb-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl mb-6 text-pink-900 font-semibold text-center">Portofolio Pilihan</h2>

                <div class="bg-white/80 backdrop-blur-sm border border-pink-200 shadow-lg rounded-xl p-6">
                    <ul class="space-y-2 text-pink-800">
                        <li>• Koordinator Pelaksana Video NE3 Angkatan 33 SMKM1TA</li>
                        <li>• Script Writer "Iya Lagi" Video Project</li>
                        <li>• Producer Short Movie "Pambali"</li>
                        <li>• Producer "Serasa FM" (Studio Radio)</li>
                        <li>• Program Director "Chilltalk News" (Studio TV)</li>
                        <li>• Reporter Event Parade Surabaya Juang</li>
                        <li>• Pembaca Nama Wisudawan PENS ke-25</li>
                    </ul>
                </div>
            </div>
        </section>

    </div>

    <script>
        // Generate bubbles
        const bubblesContainer = document.getElementById('bubbles-container');
        const bubbleCount = 10;

        for (let i = 0; i < bubbleCount; i++) {
            const bubble = document.createElement('div');
            bubble.className = 'bubble';

            const size = Math.random() * 60 + 20;
            const delay = Math.random() * 5;
            const duration = Math.random() * 10 + 15;
            const xPos = Math.random() * 100;
            const xMovement = Math.sin(i) * 50;

            bubble.style.width = `${size}px`;
            bubble.style.height = `${size}px`;
            bubble.style.left = `${xPos}%`;
            bubble.style.animationDelay = `${delay}s`;
            bubble.style.animationDuration = `${duration}s`;
            bubble.style.setProperty('--float-x', `${xMovement}px`);

            bubblesContainer.appendChild(bubble);
        }

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in-up');
                }
            });
        }, observerOptions);

        // Observe all sections
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    </script>

</body>
</html>
