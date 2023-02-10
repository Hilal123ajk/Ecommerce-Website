<!-- Header  -->
<?php require base_path('/views/partials/header.php'); ?>
  
 
<!-- Navbar  -->
<?php require base_path('/views/partials/nav.php'); ?>

<!-- Search Bar -->
<?php require base_path('/views/partials/search.php'); ?>

<!-- Profile Info  -->




<div id="alert-additional-content-4" class="p-4 mx-4 mb-4 text-black border border-yellow-300 rounded-lg bg-yellow-200 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800 sm:w-4/5 sm:mx-auto alert hidden" role="alert">
  <div class="flex items-center">
    <h3 class="text-lg font-medium">Logout message</h3>
  </div>
  <div class="mt-2 mb-4 text-sm">
    Are you sure to logout? once you click on logout button you will be logged-out of the site.
  </div>
  <div class="flex items-center">
    
    <button type="button" class="text-yellow-800 bg-transparent border border-yellow-800 hover:bg-yellow-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-yellow-300 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-gray-800 dark:focus:ring-yellow-800" data-dismiss-target="#alert-additional-content-4" aria-label="Close" id="close-button">
      Dismiss
    </button>
    <form action="" method="POST">
        <button type="submit" class="mt-4 mx-3 text-yellow-800 bg-transparent border border-red-800 hover:bg-red-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-yellow-300 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-gray-800 dark:focus:ring-yellow-800" data-dismiss-target="#alert-additional-content-4" aria-label="Close">
            Logout
        </button>
    </form>
  </div>
</div>




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
            <div class="edit-logout flex justify-between">
                <p class="mt-10"><a class="text-base font-medium text-blue-600 underline" href="/edit-profile?id=<?php echo $_SESSION['loggedin']['id']; ?>">Edit Profile</a></p>
                <p class="mt-10 text-base font-medium text-red-600 underline cursor-pointer" id="logout">Log out</p>
            </div>
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

  
<script>
    let btn = document.querySelector("#close-button");
    let alert = document.querySelector(".alert");
    let logout = document.querySelector("#logout");

    logout.addEventListener("click", () => {
        alert.classList.remove('hidden');
    });
    

    btn.addEventListener("click", () => {
        alert.classList.add('hidden');
    });
</script>    