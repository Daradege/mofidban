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
        .calculator {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }
        .calc-button {
            transition: all 0.2s;
        }
        .calc-button:hover {
            transform: translateY(-2px);
        }
        .calc-button:active {
            transform: translateY(1px);
        }
        .display {
            background: rgba(0, 0, 0, 0.05);
            border-radius: 12px;
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
        <div class="calculator max-w-md mx-auto p-6">
            <div class="display p-4 mb-4">
                <div id="history" class="text-right text-gray-500 text-sm mb-1"></div>
                <div id="display" class="text-right text-3xl font-bold">0</div>
            </div>
            <div class="grid grid-cols-4 gap-3">
                <button class="calc-button col-span-2 bg-red-500 text-white p-4 rounded-xl hover:bg-red-600" onclick="clearAll()">پاک کردن</button>
                <button class="calc-button bg-gray-200 p-4 rounded-xl hover:bg-gray-300" onclick="addToDisplay('/')">/</button>
                <button class="calc-button bg-gray-200 p-4 rounded-xl hover:bg-gray-300" onclick="addToDisplay('*')">×</button>
                
                <button class="calc-button bg-white p-4 rounded-xl hover:bg-gray-100" onclick="addToDisplay('7')">7</button>
                <button class="calc-button bg-white p-4 rounded-xl hover:bg-gray-100" onclick="addToDisplay('8')">8</button>
                <button class="calc-button bg-white p-4 rounded-xl hover:bg-gray-100" onclick="addToDisplay('9')">9</button>
                <button class="calc-button bg-gray-200 p-4 rounded-xl hover:bg-gray-300" onclick="addToDisplay('-')">-</button>
                
                <button class="calc-button bg-white p-4 rounded-xl hover:bg-gray-100" onclick="addToDisplay('4')">4</button>
                <button class="calc-button bg-white p-4 rounded-xl hover:bg-gray-100" onclick="addToDisplay('5')">5</button>
                <button class="calc-button bg-white p-4 rounded-xl hover:bg-gray-100" onclick="addToDisplay('6')">6</button>
                <button class="calc-button bg-gray-200 p-4 rounded-xl hover:bg-gray-300" onclick="addToDisplay('+')">+</button>
                
                <button class="calc-button bg-white p-4 rounded-xl hover:bg-gray-100" onclick="addToDisplay('1')">1</button>
                <button class="calc-button bg-white p-4 rounded-xl hover:bg-gray-100" onclick="addToDisplay('2')">2</button>
                <button class="calc-button bg-white p-4 rounded-xl hover:bg-gray-100" onclick="addToDisplay('3')">3</button>
                <button class="calc-button bg-blue-500 text-white p-4 rounded-xl hover:bg-blue-600" onclick="calculate()">=</button>
                
                <button class="calc-button bg-white col-span-2 p-4 rounded-xl hover:bg-gray-100" onclick="addToDisplay('0')">0</button>
                <button class="calc-button bg-white p-4 rounded-xl hover:bg-gray-100" onclick="addToDisplay('.')">.</button>
                <button class="calc-button bg-gray-200 p-4 rounded-xl hover:bg-gray-300" onclick="backspace()">←</button>
            </div>
        </div>
    </main>

    <script>
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        let displayValue = '0';
        let history = '';

        function updateDisplay() {
            document.getElementById('display').textContent = displayValue;
            document.getElementById('history').textContent = history;
        }

        function addToDisplay(value) {
            if (displayValue === '0' && value !== '.') {
                displayValue = value;
            } else {
                displayValue += value;
            }
            updateDisplay();
        }

        function clearAll() {
            displayValue = '0';
            history = '';
            updateDisplay();
        }

        function calculate() {
            try {
                history = displayValue + ' =';
                displayValue = eval(displayValue).toString();
                updateDisplay();
            } catch (error) {
                displayValue = 'خطا';
                updateDisplay();
                setTimeout(clearAll, 1500);
            }
        }

        function backspace() {
            if (displayValue.length > 1) {
                displayValue = displayValue.slice(0, -1);
            } else {
                displayValue = '0';
            }
            updateDisplay();
        }

        // Keyboard support
        document.addEventListener('keydown', (event) => {
            const key = event.key;
            if (/[0-9.]/.test(key)) {
                addToDisplay(key);
            } else if (['+', '-', '*', '/'].includes(key)) {
                addToDisplay(key);
            } else if (key === 'Enter') {
                calculate();
            } else if (key === 'Backspace') {
                backspace();
            } else if (key === 'Escape') {
                clearAll();
            }
        });
    </script>
</body>
</html>