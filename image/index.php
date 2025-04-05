<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مفیدبان - ماهم</title>
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ZenhBwPWqAZlEglhhRORUEfNBPVMgTevz3q7IqHgJvyeXGqixdBpIsdsh2zMkxNBBZPK" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            font-family: 'Vazirmatn', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-sky-500 to-indigo-500">
<?php include '../nav.php'; ?>

    <main class="max-w-6xl mx-auto px-4 py-8 flex flex-col items-center justify-center min-h-screen">
        <div class="w-full md:w-1/2 p-4 bg-white rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-4 text-center">ساخت عکس</h1>
            <input type="text" id="s" placeholder="توضیحات عکس مورد نظر را وارد کنید" class="w-full p-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <button onclick="send()" class="mt-4 px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">ساخت عکس</button>
            <img id="loading" src="/image/loading.png" width="100%" height="100%" style="display: none;" class="mt-8 mx-auto max-w-full rounded-lg shadow-md">
            <img id="image" width="100%" height="100%" style="display: none;" class="mt-8 mx-auto max-w-full rounded-lg shadow-md">
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERHp6SiEMe66Yf8fC7STtTpjhVlQjsuRMvRXLgXqmEmEsjyZA2xBQ41PZHToNiHCG" crossorigin="anonymous"></script>
    <script>
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    <script>
        function send() {
            var prompt = encodeURIComponent(document.getElementById('s').value);
            var img = document.getElementById('image');
            var loading = document.getElementById('loading');
            img.style='display:none;'
            img.src=''
            loading.style='display:block;'
            var timestamp = Date.now();
            img.src = `https://api.daradege.ir/image?text=${prompt}×tamp=${timestamp}`;
            img.onload = function() {
                loading.style='display:none;'
                img.style = "display:block;";
            }
        }
    </script>
</body>
</html>