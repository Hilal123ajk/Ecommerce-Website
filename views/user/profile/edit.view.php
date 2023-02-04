  <!-- Header  -->
  <?php require base_path('/views/partials/header.php'); ?>
  

  <!-- Navbar  -->
  <?php require base_path('/views/partials/nav.php'); ?>

  <!-- Search Bar -->
  <?php require base_path('/views/partials/search.php'); ?>
  

<div class="my-5 mx-3 sm:mt-0 bg-gray-100 p-6 rounded-xl">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-2xl font-bold leading-6 text-gray-900">Personal Information</h3>
        <p class="my-4 text-sm text-gray-600">Please note that any personal information provided will be shared with the buyer or seller for the purpose of contact.</p>
      </div>
    </div>
    <div class="mt-5 md:col-span-2 md:mt-0">
      <form action="#" method="POST">
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="bg-white px-4 py-5 sm:p-6">
            <div class="grid grid-cols-8 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Your Name</label>
                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="<?= $user['user_name'] ?>">
              </div>

              

              

              <div class="col-span-6 sm:col-span-4">
                <label for="email-address" class="block text-sm font-medium text-gray-700">Email ( we won't share your email )</label>
                <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="<?= $user['user_email'] ?>">
              </div>

              
            
              <div class="col-span-6">
                <label for="street-address" class="block text-sm font-medium text-gray-700">Complete address</label>
                <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>


              <div class="col-span-6 sm:col-span-3">
                <label for="phone-number" class="block text-sm font-medium text-gray-700">Phone number</label>
                <input type="number" name="phone-number" id="phone-number" autocomplete="family-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>

            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>



  <!-- Footer  -->
  <?php require base_path('/views/partials/footer.php'); ?>