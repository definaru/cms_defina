<?php 
    //use app\defina\services\Layout;
?>
<section class="w-full">
    <div class="mx-auto max-w-6xl py-20">
        <div class="">
            <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
                <div class="max-w-md w-full space-y-8">
                    <div>
                        <img class="mx-auto h-12 w-auto" src="https://cdn.devdojo.com/images/april2021/wave-light-logo.png" alt="Work">
                        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-100">
                            Регистрация
                        </h2>
                        <p class="mt-2 text-center text-sm text-gray-400">
                            Или
                            <a href="/login" class="font-medium text-indigo-600 hover:text-indigo-500">
                                войти в свой аккаунт
                            </a>
                        </p>
                    </div>
                    <form class="mt-8 space-y-6" action="#" method="POST">
                        <input type="hidden" name="remember" value="true">
                        <div class="rounded-md shadow-sm -space-y-px">
                            <div>
                                <label class="sr-only">Email address</label>
                                <input name="name" type="text" required autocomplete="off" class="bg-transparent appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-800 placeholder-gray-500 text-gray-50 rounded-t-md focus:outline-none focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Ваше имя">
                            </div>
                            <div>
                                <label class="sr-only">Email address</label>
                                <input name="email" type="email" required autocomplete="off" class="bg-transparent appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-800 placeholder-gray-500 text-gray-50 rounded-none focus:outline-none focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Ваш E-mail">
                            </div>
                            <div>
                                <label class="sr-only">Password</label>
                                <input name="password" type="password" required class="bg-transparent appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-800 placeholder-gray-500 text-gray-50 rounded-b-md focus:outline-none focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Пароль">
                            </div>
                        </div>
                
                        <div>
                            <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Зарегистрироваться
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>