<!-- Header -->
<?php require base_path('/views/partials/header.php') ?>
  
<!-- Navbar -->
<?php require base_path('/views/partials/nav.php') ?>

<!-- Register User Form  -->


<section class="bg-gray-50 dark:bg-gray-900">

  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">

          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Log into your account
              </h1>
              <form class="space-y-4 md:space-y-6" action="" method="post">
                  
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                      <input type="text" name="userEmail" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" value="<?= isset($_POST['userEmail']) ? $_POST['userEmail'] : "" ?>">
                      
                      
                  </div>

                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                      <input type="password" name="userPassword" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••••">
                      <p class="my-2 text-red-500 text-sm font-medium"><?= isset($error['emailOrPassword']) ? $error['emailOrPassword'] : "" ?></p>
                      
                  </div>

                  
                  
                  <button type="submit" class="w-full bg-blue-600 text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login</button>
                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                      If you'r not registered? <a href="/user-register" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Register here</a>
                  </p>
              </form>
          </div>
          
      </div>

  </div>

</section>

<!-- •••••••• -->


<!-- Footer -->
<?php require base_path('/views/partials/footer.php') ?>