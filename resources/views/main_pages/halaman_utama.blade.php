<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB ARDIAN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
        
        * {
            font-family: 'Montserrat', sans-serif;
        }
        
        /* .hero-section {
            background: linear-gradient(to bottom, rgba(139, 69, 50, 0.3), rgba(139, 69, 50, 0.5));
        } */
    </style>
</head>
<body>
    @include('main_pages.navbar')

    @include('main_pages.hero_section')

    @include('main_pages.preview')

    @include('main_pages.footer')

    @include('components.cascading-menu')
    
    <script src="{{ asset('js/CascadingMenu.js') }}"></script>
</body>
</html>