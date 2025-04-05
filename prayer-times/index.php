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
        .prayer-time-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            margin: 10px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }
        .prayer-time-card:hover {
            transform: translateY(-2px);
        }
        .time-label {
            color: #4B5563;
            font-weight: 600;
            margin-left: 8px;
        }
        .time-value {
            color: #1F2937;
            font-weight: 500;
        }
        .loading {
            opacity: 0;
            transition: opacity 0.3s ease-in;
        }
        .loaded {
            opacity: 1;
        }
    </style>
</head>
<body class="bg-gray-100">
<?php include '../nav.php'; ?>

    <main class="max-w-6xl mx-auto px-4 py-8">
        <div class="loading" id="prayer-times-container">
        <?php 
            $api = "https://api.daradege.ir/owghat?city=";
            $city = "تهران";
            $api_url = $api . urlencode($city);
            $response = file_get_contents($api_url);
            $data = json_decode($response, true);
            
            if ($data && isset($data['owghat']) && is_array($data['owghat'])) {
                $azan_maghreb = $data['owghat']['azan_maghreb'] ?? '';
                $azan_sobh = $data['owghat']['azan_sobh'] ?? '';
                $azan_zohr = $data['owghat']['azan_zohr'] ?? '';
                $ghorub_aftab = $data['owghat']['ghorub_aftab'] ?? '';
                $nimeshab = $data['owghat']['nimeshab'] ?? '';
                $tolu_aftab = $data['owghat']['tolu_aftab'] ?? '';
                $month = $data['owghat']['month'] ?? '';
                $day = $data['owghat']['day'] ?? '';
                $date = $month . '/' . $day;
                
                echo '<h1 class="text-3xl font-bold mb-6 text-gray-800 text-center">اوقات شرعی در تهران</h1>';
                echo '<p class="text-xl text-gray-600 mb-6 text-center">تاریخ: ' . $date . '</p>';
                echo '<div class="grid md:grid-cols-2 gap-4">';
                echo '<div class="prayer-time-card"><span class="time-label">اذان صبح:</span><span class="time-value">' . $azan_sobh . '</span></div>';
                echo '<div class="prayer-time-card"><span class="time-label">طلوع آفتاب:</span><span class="time-value">' . $tolu_aftab . '</span></div>';
                echo '<div class="prayer-time-card"><span class="time-label">اذان ظهر:</span><span class="time-value">' . $azan_zohr . '</span></div>';
                echo '<div class="prayer-time-card"><span class="time-label">غروب آفتاب:</span><span class="time-value">' . $ghorub_aftab . '</span></div>';
                echo '<div class="prayer-time-card"><span class="time-label">اذان مغرب:</span><span class="time-value">' . $azan_maghreb . '</span></div>';
                echo '<div class="prayer-time-card"><span class="time-label">نیمه شب:</span><span class="time-value">' . $nimeshab . '</span></div>';
                echo '</div>';
            } else {
                echo '<p class="text-red-600 text-center text-xl">خطا در دریافت اطلاعات</p>';
            }
        ?>
        </div>
    </main>

    <script>
        // Mobile menu functionality
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Lazy loading functionality
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('prayer-times-container');
            setTimeout(() => {
                container.classList.add('loaded');
            }, 300);
        });
    </script>
</body>
</html>