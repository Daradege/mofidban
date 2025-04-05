  <!DOCTYPE html>
  <html lang="en" dir="rtl">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>برنامه هفتگی - مفیدبان</title>
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
          <div class="bg-white rounded-lg shadow-md p-6">
              <h2 class="text-2xl font-bold mb-6 text-center">برنامه هفتگی</h2>
            
              <div class="flex justify-center mb-8">
                  <select onchange="showSchedule(this.value)" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-300 cursor-pointer">
                      <option value="0">شنبه</option>
                      <option value="1">یکشنبه</option>
                      <option value="2">دوشنبه</option>
                      <option value="3">سه‌شنبه</option>
                      <option value="4">چهارشنبه</option>
                  </select>
              </div>

              <div id="scheduleImage" class="flex justify-center">
                  <img src="0.png" alt="برنامه روز" class="max-w-full h-auto rounded-lg shadow-md">
              </div>
          </div>
      </main>

      <script>
          function showSchedule(day) {
              const scheduleImage = document.getElementById('scheduleImage').querySelector('img');
              scheduleImage.src = 'weekly/' + day + '.png';
              scheduleImage.alt = 'برنامه روز ' + day;
          }
      </script>
      <script>
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
  </body>
  </html>
