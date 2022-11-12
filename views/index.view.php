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
      <?php require 'partials/card.php'; ?>
      <?php require 'partials/card.php'; ?>
      <?php require 'partials/card.php'; ?>
      <?php require 'partials/card.php'; ?>
      <?php require 'partials/card.php'; ?>
      <?php require 'partials/card.php'; ?>
  </section>
  

  <!-- Footer  -->
  <?php require 'partials/footer.php'; ?>