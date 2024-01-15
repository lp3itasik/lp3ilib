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
    
    <div class="container mx-auto mt-20 mb-20">
        <div>
            

            <div class=" w-60 h-60 mt-16 border-2 border-[#ECAE30] rounded-full shadow-lg mx-auto transition-all duration-300 cursor-pointer hover:rotate-6 hover:scale-105 hover:border-white">
                <img src="{{asset('img/nindi.jpg')}}" alt="" class="rounded-full w-60 h-60">
            </div>

            <div class="px-4 pt-2 text-center items-center">
                <p class="font-bold text-black text-xl md:text-2xl mb-2">Nindicka Nurul Fadilah, S.IP</p>
                <p class="mb-2 text-black ">Pustakawan Politeknik LP3I Kampus Tasikmalaya</p>
            </div>
            
            
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

        const dropdownMaster = () => {
            let content = document.getElementById('masterNavbar');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }

        const dropdownRepository = () => {
            let content = document.getElementById('repositoryNavbar');
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
