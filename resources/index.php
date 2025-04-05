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
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-xl font-bold mb-4">سایت‌های کمک درسی</h2>
                        <ul class="space-y-4">
                            <li>
                                <a href="https://gajino.com" target="_blank" class="text-blue-600 hover:text-blue-800 font-semibold">گاجینو</a>
                                <p class="text-gray-600">ویدیو، آزمون آنلاین، بانک سوالات و درسنامه‌ها – تحت نظر انتشارات گاج</p>
                            </li>
                            <li>
                                <a href="https://khoshkhanshop.ir" target="_blank" class="text-blue-600 hover:text-blue-800 font-semibold">خوشخوان</a>
                                <p class="text-gray-600">محصولات کمک درسی، آزمون‌ها و مشاوره تحصیلی – ناشر خوشخوان</p>
                            </li>
                            <li>
                                <a href="https://alaatv.com" target="_blank" class="text-blue-600 hover:text-blue-800 font-semibold">آلا (آموزش رایگان آنلاین)</a>
                                <p class="text-gray-600">آموزش‌های تصویری رایگان، ویژه کنکور و دبیرستان</p>
                            </li>
                            <li>
                                <a href="https://mehrmoham.ir" target="_blank" class="text-blue-600 hover:text-blue-800 font-semibold">لقمه مهر و ماه</a>
                                <p class="text-gray-600">کتاب‌های کمک درسی، جزوه و اپلیکیشن آموزش</p>
                            </li>
                            <li>
                                <a href="https://faradars.org" target="_blank" class="text-blue-600 hover:text-blue-800 font-semibold">فرادرس</a>
                                <p class="text-gray-600">آموزش‌های دانشگاهی و نرم‌افزاری، با محتوای مفید برای دبیرستانی‌ها</p>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-xl font-bold mb-4">سایت‌های دانلود نمونه سوال و منابع آموزشی</h2>
                        <ul class="space-y-4">
                            <li>
                                <a href="https://bishtarazyek.com" target="_blank" class="text-blue-600 hover:text-blue-800 font-semibold">بیشتر از یک نفر</a>
                                <p class="text-gray-600">مطالب آموزشی انگیزشی، مدیریت زمان و یادگیری مؤثر</p>
                            </li>
                            <li>
                                <a href="https://hamkelasi.ir" target="_blank" class="text-blue-600 hover:text-blue-800 font-semibold">همکلاسی</a>
                                <p class="text-gray-600">نمونه سوالات امتحانی، پاورپوینت‌ها و آزمون‌های آنلاین</p>
                            </li>
                            <li>
                                <a href="https://kanoon.ir" target="_blank" class="text-blue-600 hover:text-blue-800 font-semibold">قلم‌چی</a>
                                <p class="text-gray-600">آزمون‌های کانون فرهنگی آموزش، کارنامه و تحلیل درسی</p>
                            </li>
                            <li>
                                <a href="https://filenab.com" target="_blank" class="text-blue-600 hover:text-blue-800 font-semibold">فایل ناب</a>
                                <p class="text-gray-600">فروش فایل‌های درسی، نمونه سوالات و خلاصه درس‌ها</p>
                            </li>
                            <li>
                                <a href="https://digikonkur.com" target="_blank" class="text-blue-600 hover:text-blue-800 font-semibold">دیجی کنکور</a>
                                <p class="text-gray-600">جزوه، نمونه سوال، برنامه‌ریزی و راهنمایی برای کنکوری‌ها</p>
                            </li>
                        </ul>
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