<!-- Header  -->
<?php require base_path('/views/partials/header.php'); ?>
  
 
<!-- Navbar  -->
<?php require base_path('/views/partials/nav.php'); ?>

<!-- Search Bar -->
<?php require base_path('/views/partials/search.php'); ?>

<!-- Profile Info  -->

<div class="profile-info md:flex md:items-center m-3">

    <div class="left-side  m-2 md:w-2/4 ml-10">
        <img src="/src/images/profile-avatar-male.png" class="w-2/5 md:m-auto" alt="avatar">
    </div>
    <div class="right-sie m-2 md:-ml-10">
        <h3 class="text-3xl text-gray-900 my-5 font-bold">Personal Info</h3>
        <div class="personal-info">
            <h3 class="font-medium text-gray-600"><span class="font-medium text-sky-600">Name</span>  Hilal Ahmad</h3>
            <p class="my-1 font-medium text-gray-600"><span class="font-medium text-sky-600">Gender</span>  Male</p>
            <p class="my-1 font-medium text-gray-600"><span class="font-medium text-sky-600">Email</span>  hilaldev123@gmail.com</p>
            <p class="my-1 font-medium text-gray-600"><span class="font-medium text-sky-600">Phone No</span>  03096773855</p>
            <p class="my-1 font-medium text-gray-600"><span class="font-medium text-sky-600">Complete Address</span>  kaloshah fazal abad takth bhai mardan</p>
            <p class="my-1 font-medium text-gray-600"><span class="font-medium text-sky-600">City</span>  Mardan</p>
        </div>
    </div>
</div>

<h2 class="text-3xl sm:text-4xl font-bold m-8">Your Posts</h2>

<section class="grid grid-cols-1 mx-auto gap-3 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 max-w-7xl sm:mx-5">
      <?php require base_path('/views/partials/card.php'); ?>
      <?php require base_path('/views/partials/card.php'); ?>
  </section>

<!-- Footer  -->
<?php require base_path('/views/partials/footer.php'); ?>