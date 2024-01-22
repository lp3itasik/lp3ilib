<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('img/lp3iwarna.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>


<body>
    @include('components.navbar')
    <main>
        {{ $slot }}
    </main>
    @include('components.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
    <script>
        const dropdownDigital = () => {
            let content = document.getElementById('digitalNavbar');
            let nonactive = content.classList.contains('hidden');
            if (nonactive) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
        }

        const dropdownMaster = () => {
            let content = document.getElementById('masterNavbar');
            let nonactive = content.classList.contains('hidden');
            if (nonactive) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
        }

        const dropdownRepository = () => {
            let content = document.getElementById('repositoryNavbar');
            let nonactive = content.classList.contains('hidden');
            if (nonactive) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
        }

        const dropdownTentang = () => {
            let content = document.getElementById('tentangNavbar');
            let nonactive = content.classList.contains('hidden');
            if (nonactive) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
        }

        const hamburgerMenu = () => {
            let content = document.getElementById('navbarHamburger');
            let nonactive = content.classList.contains('hidden');
            if (nonactive) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
        }


        const konfirmasiLogout = () => {
            let konfirmasi = confirm("Apakah Anda yakin ingin logout?");
            if (konfirmasi) {
                alert("Logout berhasil!");
            } else {
                alert("Logout dibatalkan.");
                return true;
            }
        }
    </script>
</body>

</html>
