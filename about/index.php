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
<?php include '../nav.php'; ?>
    
    <main class="max-w-6xl mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold text-center mb-8">درباره ما</h1>
            <p class="text-gray-700 text-lg mb-8">پلتفرم مفیدبان با حمایت کانال <b>ماهم</b>، بستری برای خدمت‌رسانی به دانش آموزان پایه هشتم مفید می‌باشد. این پلتفرم، در نسخه آلفا بوده، و قابلیت های زیر به زودی اضافه خواهند شد:</p>
            <ul class="list-disc list-inside mb-8">
                <li class="mb-2">مشاوره درسی</li>
                <li class="mb-2">تست های آنلاین</li>
                <li class="mb-2">ورود دانش آموزی</li>
                <li class="mb-2">مشاهده تکالیف</li>
            </ul>
            <p class="text-gray-700 text-lg mb-8">درصورت تمایل به همکاری، در بخش ایده پردازی و ارسال تکالیف، به آیدی <a href="https://ble.ir/daradege" class="text-blue-600 hover:text-blue-800">daradege</a> در بله، پیامی ارسال کنید.</p>
            <br>
            <p class="text-gray-700 text-lg mb-8">این برنامه به صورت منبع باز نوشته شده و شامل لایسنس معتبر از MIT می‌باشد. <a class="text-blue-600 hover:text-blue-800" href="https://github.com/daradege/mofidban">[منبع کد]</a> </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="text-center">
                    <img src="https://daradege.ir/logo.png" alt="علی صفامنش" class="w-32 h-32 mx-auto rounded-full mb-4">
                    <h2 class="text-xl font-semibold mb-2">علی صفامنش (daradege)</h2>
                    <p class="text-gray-600">توسعه دهنده اصلی</p>
                    <a href="https://daradege.ir" class="text-blue-600 hover:text-blue-800" target="_blank">daradege.ir</a>
                </div>
                <div class="text-center">
                    <img src="https://www.behradinfo.ir/profile.jpeg" alt="بهراد امیدی" class="w-32 h-32 mx-auto rounded-full mb-4">
                    <h2 class="text-xl font-semibold mb-2">بهراد امیدی</h2>
                    <p class="text-gray-600">جمع آوری ایده و محتوا</p>
                    <a href="https://behradinfo.ir" class="text-blue-600 hover:text-blue-800" target="_blank">behradinfo.ir</a>
                </div>
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