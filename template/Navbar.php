<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/e0d52d3d3c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/" type="image/x-icon">
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!--Scripts -->
    <script src="/Js/nav.js"></script>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        @media (max-width: 1500px) {
            .hide-search {
                display: none;
            }
        }
    </style>
</head>

<body class="bg-gray-900 text-white font-sans">
    <script src="<?= $base ?>/js/nav.js"></script>
    <nav class="fixed top-0 left-0 right-0 z-10 px-4 py-4 flex justify-between items-center bg-gray-800 border-b border-b-slate-500">
        <a class="text-3xl font-bold leading-none flex items-center" href="../pages/feed.php">
            <img src="../images/logo.svg" alt="logo" class="h-12">
        </a>
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-blue-600 p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
            <li><a class="<?php if ($page == 'projects') {
                                echo 'text-blue-400 font-bold text-lg';
                            } else {
                                echo 'text-lg text-white font-medium hover:text-gray-200';
                            } ?>" href="../pages/feed.php">Feed</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="<?php if ($page == 'aboutMe') {
                                echo 'text-blue-400 font-bold text-lg';
                            } else {
                                echo 'text-lg text-white font-medium hover:text-gray-200';
                            } ?>" href="../pages/profile.php?id=<?= $_SESSION["userID"] ?>">Profile</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="<?php if ($page == 'contact') {
                                echo 'text-blue-400 font-bold text-lg';
                            } else {
                                echo 'text-lg text-white font-medium hover:text-gray-200';
                            } ?>" href="../pages/friends.php">Friends</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
        </ul>
    </nav>
    <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-gray-900 border-r border-r-slate-500 overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-3xl font-bold leading-none" href="../pages/feed.php">
                    <img src="../images/logo.svg" alt="logo" class="h-12">
                </a>
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-slate-700/20 hover:text-blue-600 rounded" href="../pages/feed.php">Feed</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-slate-700/20 hover:text-blue-600 rounded" href="../pages/profile.php?id=<?= $_SESSION["userID"] ?>">Profile</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-slate-700/20 hover:text-blue-600 rounded" href="../pages/friends.php">Friends</a>
                    </li>
                </ul>
            </div>
            <div class="mt-auto">
                <p class="my-4 text-xs text-center text-gray-400">
                    <span>Copyright © 2024</span>
                </p>
            </div>
        </nav>
    </div>
</body>

</html>