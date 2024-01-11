<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="{{asset('img/lp3iwarna.png')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

</head>

<body class="mx-auto max-w-screen bg-center bg-no-repeat bg-[url('/img/pattern.svg')] bg-cover">
    <section class="">
    {{ view('components.navbar') }}

    {{-- Section Top Start --}}
    
    <div class="container mx-auto mt-12 mb-20">
        <div>
            <div class="my-8 mx-auto">
                <h3 class="text-4xl text-center font-bold text-slate-800 sm:text-5xl md:text-4xl">Visi Misi</h3>
            </div>
            <div class="container px-6 max-w-md mx-auto sm:max-w-xl md:max-w-5xl flex lg:max-w-full lg:p-0 justify-center items-center">
                <div class="lg:p-12 lg:flex-1">
                    <img src="{{asset('img/gedung2.jpg')}}" alt="Gedung LP3I" class="mt-4 rounded-2xl border-white border-4 shadow-lg sm:mt-6 sm:h-64 sm:w-full sm:object-cover sm:object-center lg:hidden">
                    <h2 class="mt-4 text-slate-800 text-2xl font-semibold sm:mt-8 sm:text-4xl">Visi</h2>
                    <p class="mt-2 text-slate-600 sm:mt-4 sm:text-md">Pada tahun 2031 ditingkat Asia menjadi institusi pendidikan tinggi vokasional yang mampu menjawab tantangan di era globalisasi dalam menghasilkan sumber daya manusia yang unggul dan berkompeten pada bidang keahlian.
                    </p>
                </div>
                <div class="hidden lg:flex basis-1/3">
                    <img src="{{asset('img/gedung2.jpg')}}" alt="Gedung LP3I" class="object-cover w-[500px] h-72 rounded-2xl border-white border-4 shadow-lg">
                </div>
            </div>

            <div class="container px-6 max-w-md mx-auto sm:max-w-xl md:max-w-5xl flex lg:max-w-full lg:p-0 justify-center items-center">
                <div class="hidden lg:flex basis-1/3">
                    <img src="{{asset('img/gedung2.jpg')}}" alt="Gedung LP3I" class="object-cover w-[500px] h-72 rounded-2xl border-white border-4 shadow-lg">
                </div>
                <div class="lg:p-12 lg:flex-1">
                    <img src="{{asset('img/gedung2.jpg')}}" alt="Gedung LP3I" class="mt-4 rounded-2xl border-white border-4 shadow-lg sm:mt-6 sm:h-64 sm:w-full sm:object-cover sm:object-center lg:hidden">
                    <h2 class="mt-4 text-slate-800 text-2xl font-semibold sm:mt-8 sm:text-4xl">Misi</h2>
                    <ol class="ml-5 list-outside list-decimal mt-4 text-sm md:text-base text-gray-700 space-y-2">
                        <li>Menyelenggarakan pendidikan yang berpusat pada peserta didik, menggunakan pendekatan link and match serta mengoptimalkan pemanfaatan teknologi.</li>
                        <li>Menyelenggarakan penelitian yang bermanfaat bagi pengembangan IPTEK dan kesejatraan masyarakat.</li>
                        <li>Meningkatkan kualitas sistem penjamin mutu untuk menopang pencapaian institusi.</li>
                        <li>Menyebarluaskan artikel hasil penelitian baik melalui forum ilmia maupun jurnal nasional dan internasional.</li>
                        <li>Menyelenggarakan kegiatan pengabdian kepada masyarakat dalam rangka mengembangkan hasil penelitian yang berorientasi pada proses pemberdayaan masyarakat.</li>
                        <li>Menyelenggarakan tata pamong yang mandiri, akuntabel dan transparan yang menjamin peningkatan kualitas berkelanjutan.</li>
                        <li>Menyelenggarakan kerjasama dengan dunia usaha dan industri serta pengembangan jiwa kemandirian yang profesional dan berkarakter.</li>
                    </ol>
                    </p>
                </div>
            </div>
{{-- 
            <div class="px-4 text-center items-center">
                <p class="font-bold text-black text-xl md:text-2xl mb-5">VISI</p>
                <p class="mb-2 text-black ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ex repellendus quas officiis voluptate veritatis deserunt velit explicabo totam molestias, nostrum est culpa deleniti natus veniam consequuntur saepe, libero magni? Quia soluta voluptatum laboriosam voluptas eveniet beatae debitis alias repellat eligendi velit omnis tempore deserunt quam recusandae earum provident quidem, assumenda, repudiandae sint sapiente perferendis facilis! Aspernatur at nam quas ratione voluptates, a aut sunt ab amet id, quia culpa dicta exercitationem explicabo, odio nostrum repellendus nulla molestiae? Deleniti, nisi.</p>
            </div>

            <div class="px-4 pt-16 text-center items-center">
                <p class="font-bold text-black text-xl md:text-2xl mb-5">MISI</p>
                <p class="mb-2 text-black ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, vel voluptatem laudantium ut dolores quaerat, voluptatibus totam accusantium ratione iusto molestiae dolor obcaecati. Laudantium totam, fugit est iusto vitae impedit. Necessitatibus deleniti iusto, maiores molestiae corporis illum, obcaecati omnis eius eaque pariatur, aliquam consectetur? Dolorem iusto ex dolore, quod voluptatibus delectus! Doloribus corrupti explicabo, sit sed quasi obcaecati fugiat ducimus voluptatum consequuntur a eum praesentium expedita eveniet impedit quidem repellat soluta voluptates. At sunt eveniet nihil quos quaerat tempora omnis nemo, quod voluptatum praesentium nostrum nulla deserunt voluptatibus repudiandae dolorum obcaecati fuga voluptates. Nisi nam quod harum optio, tempore minus!</p>
            </div> --}}
            </div>
        </div>
    </div>
    {{-- Section Top End --}}

    
    {{ view('components.footer') }}

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const dropdownDigital = () => {
            let content = document.getElementById('digitalNavbar');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }

        const dropdownTentang = () => {
            let content = document.getElementById('tentangNavbar');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }

        const hamburgerMenu = () => {
            let content = document.getElementById('navbarHamburger');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }
    </script>
    </section>
</body>

</html>
