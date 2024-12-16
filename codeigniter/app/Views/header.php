<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="<?= base_url() ?>css/styles.css?v=1.0">
     <script src="https://cdn.tailwindcss.com"></script>
     <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css" />
     <title>Auction Page</title>
</head>

<body class="bg-gray-100">
<nav class="flex justify-between text-center bg-blue-500">
     <div class="flex flex-wrap">
          <h1 class="font-bold p-3 text-white text-2xl" >Autions</h1>
          </div>
          <div class="flex flex-wrap">
          <span class="px-3 py-2 bg-red-200 font-bold rounded-lg text-center m-2">Welcome <?php print_r(ucfirst(session()->get('user')->name)) ?></span>
          <a class="px-3 py-2 bg-red-200 font-bold rounded-lg text-center m-2" href="">Home</a> 
          <a class="px-3 py-2 bg-red-200 font-bold rounded-lg text-center m-2" href="">About</a>
          <a class="px-3 py-2 bg-red-200 font-bold rounded-lg text-center m-2" href="">Contact</a>
          <a class="px-3 py-2 bg-red-600 font-bold rounded-lg text-white text-center m-2" href="/logout">Logout</a>
     </div>
</nav>