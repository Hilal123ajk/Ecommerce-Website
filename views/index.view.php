  <!-- Header  -->
  <?php require 'partials/header.php'; ?>
  
  <!-- Navbar -->
  <?php require 'partials/nav.php'; ?>

  <!-- Search Bar -->
  <?php require 'partials/search.php'; ?>

  <header class="bg-white shadow">
    
  </header>

  <!-- Hero Section Main Page  -->
  <?php require 'partials/hero-section.php'; ?>

  <h1 class="text-2xl text-center sm:text-3xl lg:text-4xl xl:text-5xl font-medium text-zinc-900">Fresh Items</h1>
  <br><br><br><br>

  <!-- Cards -->
  <section class="grid grid-cols-1 mx-auto gap-3 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 max-w-7xl sm:mx-5">
      
      <?php foreach ($posts as $post): ?>

        <div class="max-w-sm mx-auto rounded overflow-hidden shadow-md cursor-pointer border border-gray-300">
          <img class="w-full h-60 object-cover" src="/src/posts/<?= $post['laptop_photo'] ?>" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2"><?= $post['laptop_name'] ?></div>
            <p class="text-gray-700 text-base">
              <?php

                $detail = limitDetails($post['laptop_detail']);
                
                echo $detail;  
              ?>
            </p>
            <h3 class="text-base font-bold text-gray-600 mt-2 -mb-3">RS <?= $post['laptop_price'] ?></h3>
          </div>
          <div class="px-6 pt-4 pb-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><?= $post['formatted_time'] ?></span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><?= $post['laptop_condition'] ?></span>
          </div>
        </div>

      <?php endforeach; ?>

  </section>
  

  <!-- Footer  -->
  <?php require 'partials/footer.php'; ?>