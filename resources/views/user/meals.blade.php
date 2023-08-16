<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>CalorieBank-rogin</title>
    <!-- 他のメタ情報やスタイルなどの設定をここに記述 -->
    
    <style>
        /* 追加したCSS */
        body {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            height: 100vh;
            margin: 0;
            flex-direction: column;
            background-color: #FFA500;
            color: #333;
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 72px;
            color: #FF1493;
            margin-bottom: 40px;
        }

        .link {
            margin-top: 20px;
        }

        .bank-icon {
            position: relative;
            display: inline-block;
        }

        .bank-icon img {
            max-width: 100px;
            max-height: 100px;
        }

        .overlay-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.8);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
        }

        .bank-icon:hover .overlay-content {
            opacity: 1;
            visibility: visible;
        }

        .calorie-container {
            font-size: 36px;
            font-weight: bold;
            color: #FF1493;
        }

        .user {
            margin-top: 20px;
        }

        .meal-entry {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"],
        input[type="text"]::placeholder,
        input[type="number"]::placeholder {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            flex: 1;
            margin-right: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .add-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            font-size: 24px;
            cursor: pointer;
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
    <x-app-layout>
        <x-slot name='header'>
            <!-- ここにヘッダーの内容を記述 -->
        </x-slot>
        
        <h1>カロリー貯金</h1>
        <div class='bank-icon'>
            <img src=''>
            <div class='overlay-content'>
                <div class='calorie-container'>
                    ここに数字が表示されます
                </div>    
            </div>
        </div>    
        <div class='user'>
            <div class="meal-entry">
                <input type="text" placeholder="食品名">
                <input type="number" placeholder="カロリー" onchange="updateTotalCalories()">
                <button class="remove-button" onclick="removeMealEntry(this)">⊖</button>
                <input type="number" placeholder="目標値" id="goal-calories-entry">
            </div>
            <button class="add-button" onclick="addMealEntry()">⊕</button>
        </div>
    </x-app-layout>

    <script>
        let totalCalories = 0;

        function updateTotalCalories() {
            const caloriesInputs = document.querySelectorAll('.meal-entry input[type="number"]');
            totalCalories = Array.from(caloriesInputs).reduce((sum, input) => sum + parseInt(input.value || 0), 0);
            document.querySelector('.calorie-container').textContent = totalCalories;

            const goalCaloriesEntry = document.getElementById('goal-calories-entry');
            const goalCalories = parseInt(goalCaloriesEntry.value || 0);

            if (totalCalories > goalCalories) {
                document.querySelector('.calorie-container').style.color = 'red';
            } else {
                document.querySelector('.calorie-container').style.color = '#FF1493';
            }
        }

        function addMealEntry() {
            const mealEntry = document.createElement('div');
            mealEntry.className = 'meal-entry';
            mealEntry.innerHTML = `
                <input type="text" placeholder="食品名">
                <input type="number" placeholder="カロリー" onchange="updateTotalCalories()">
                <button class="remove-button" onclick="removeMealEntry(this)">⊖</button>
                <input type="number" placeholder="目標値" id="goal-calories-entry">
            `;
            document.querySelector('.user').appendChild(mealEntry);
        }

        function removeMealEntry(button) {
            button.parentElement.remove();
            updateTotalCalories();
        }
    </script>
</body>
</html>
