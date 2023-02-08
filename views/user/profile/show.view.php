<!-- Header  -->
<?php require base_path('/views/partials/header.php'); ?>
  
 
<!-- Navbar  -->
<?php require base_path('/views/partials/nav.php'); ?>

<!-- Search Bar -->
<?php require base_path('/views/partials/search.php'); ?>

<!-- Profile Info  -->

<div class="profile-info md:flex md:items-center m-3">

    <div class="left-side  m-2 md:w-2/4 ml-10">
        <img src="/src/images/profile-avatar<?php if($user_info['user_gender'] === 'Male') { echo '-male'; } else { echo '-female'; } ?>.png" class="w-2/5 md:m-auto" alt="avatar">
    </div>
    <div class="right-sie m-2 md:-ml-10">
        <h3 class="text-3xl text-gray-900 my-5 font-bold">Personal Info</h3>
        <div class="personal-info">
            <h3 class="font-medium text-gray-600"><span class="font-medium text-sky-600">Name</span> <?= $user_info['user_name'] ?> </h3>
            <p class="my-1 font-medium text-gray-600"><span class="font-medium text-sky-600">Gender</span> <?= $user_info['user_gender'] ?> </p>
            <p class="my-1 font-medium text-gray-600"><span class="font-medium text-sky-600">Email</span> <?= $user_info['user_email'] ?> </p>
            <p class="my-1 font-medium text-gray-600"><span class="font-medium text-sky-600">Phone No</span> <?= $user_info['user_phone'] ?> </p>
            <p class="my-1 font-medium text-gray-600"><span class="font-medium text-sky-600">Complete Address</span> <?= $user_info['user_address'] ?> </p>
            <p class="my-1 font-medium text-gray-600"><span class="font-medium text-sky-600">City</span> <?= $user_info['user_city'] ?> </p>
            <p class="mt-10"><a class="text-base font-medium text-blue-600 underline" href="/edit-profile?id=<?php echo $_SESSION['loggedin']['id']; ?>">Edit Profile</a></p>
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