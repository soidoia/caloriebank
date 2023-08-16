<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>CalorieBank</title>
    <!-- 他のメタ情報やスタイルなどの設定をここに記述 -->
    
    <!--<style>-->
       
    <!--    body {-->
    <!--        display: flex;-->
    <!--        justify-content: center;-->
    <!--        align-items: center;-->
    <!--        height: 100vh;-->
    <!--        margin: 0;-->
    <!--        flex-direction: column;-->
    <!--        background-color: #FFA500;-->
    <!--        background-image: url("sparkles.png");-->
    <!--        background-repeat: repeat;-->
    <!--    }-->

    <!--    h1 {-->
    <!--        font-size: 72px;-->
    <!--        color: #FF1493;-->
    <!--        margin-bottom: 40px;-->
    <!--    }-->

    <!--    .link {-->
    <!--        margin-top: 20px;-->
    <!--    }-->
    <!--</style>-->
</head>
<body>
    <x-app-layout>
        <x-slot name='header'>
            <!-- ここにヘッダーの内容を記述 -->
        </x-slot>
        
        <h1>カロリー貯金</h1>
        <div class='user'>
            <!-- Breezeの認証ビューを表示 -->
            
        </div>
    </x-app-layout>
</body>
</html>
