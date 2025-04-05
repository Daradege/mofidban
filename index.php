<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مفیدبان - ماهم</title>
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            font-family: 'Vazirmatn', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <img src="mohem.png" alt="مفیدبان" class="h-12 w-auto" style="border-radius: 25px;">
                </div>
                <div class="hidden md:flex items-center space-x-4 space-x-reverse">
                    <a href="/weekly" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md">برنامه هفتگی</a>
                    <a href="/channels" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md">کانال های مدرسه</a>
                    <a href="/resources" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md">منابع درسی</a>
                    <a href="/calculator" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md">ماشین حساب</a>
                    <a href="/prayer-times" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md">اوقات شرعی</a>
                    <a href="/image" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md">ساخت عکس</a>
                    <a href="/about" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md">درباره ما</a>
                </div>
                <div class="md:hidden">
                    <button class="mobile-menu-button p-2">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="mobile-menu hidden md:hidden">
            <a href="/weekly" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">برنامه هفتگی</a>
            <a href="/channels" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">کانال های مدرسه</a>
            <a href="/resources" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">منابع درسی</a>
            <a href="/calculator" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">ماشین حساب</a>
            <a href="/prayer-times" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">اوقات شرعی</a>
            <a href="/image" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">ساخت عکس</a>
            <a href="/about" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">درباره ما</a>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
                <svg class="h-12 w-12 text-blue-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <h3 class="text-xl font-bold mb-2">برنامه هفتگی</h3>
                <p class="text-gray-600">برنامه کلاسی و زمان‌بندی دروس</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
                <svg class="h-12 w-12 text-blue-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <h3 class="text-xl font-bold mb-2">کانال های مدرسه</h3>
                <p class="text-gray-600">دسترسی به کانال‌های ارتباطی مدرسه</p>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
                <svg class="h-12 w-12 text-blue-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                <h3 class="text-xl font-bold mb-2">منابع درسی</h3>
                <p class="text-gray-600">دسترسی به منابع و محتوای آموزشی</p>
            </div>
        </div>
    </main>

    <script>
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>