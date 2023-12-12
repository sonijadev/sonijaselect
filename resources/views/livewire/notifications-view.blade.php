<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Zawiadomienia') }}
    </h2>
</x-slot>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
        <div class="lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700 shadow-md" style="border-top: 4px solid #4F46E5;">
    

    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
        Witaj w panelu zarządzania zawiadomieniami!
    </h1>

    <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
       Zakładka, w której aktualnie się znajdujesz, umożliwi Ci przegląd, zarządzanie i monitorowanie wystawianych zawiadomień w Twojej strefie płatnego parkowania.
       Znajdź zawiadomienie, wykonaj wymagane operacje lub wygeneruj raport.
    </p>

    <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
        <button class="bg-white hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
        <span> Dodaj zawiadomienie ręcznie</span>
        </button>
        <button class="bg-white hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM80 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm16 96H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm0 32v64H288V256H96zM240 416h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
        <span> Wygeneruj raport</span>
        </button>
    </p>
</div>

<div class="bg-white lg:p-8  shadow-md" style="border-radius: 0px 0px 10px 10px!important;">
    <div>
    <div class="w-full">
    <table class="table-fixed cell-border hover py-10" id="notificationsTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Numer rejestracyjny</th>
                        <th>Marka</th>
                        <th>Data dodania</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($notifications as $notification)
                        <tr>
                            <td>{{ $notification->id }}</td>
                            <td>{{ $notification->registration_number }}</td>
                            <td>{{ $notification->vehicle_brand }}</td>
                            <td>{{ $notification->added_date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
</div>
        </div>
    </div>

