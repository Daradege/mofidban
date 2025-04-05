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
  <?php include '../nav.php'; ?>

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
