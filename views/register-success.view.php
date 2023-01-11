<?php require 'partials/header.php'; ?>

<?php require 'partials/nav.php'; ?>

<div class="py-4 px-6 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
Your account has been created successfully! <a class="underline font-medium" href="/" >return to home</a>
</div>

<h1 class="px-6 text-xl md:text-3xl text-green-900 font-medium">Thanks for creating account here.</h1>



<?php require 'partials/footer.php'; ?>

<!-- Code for redirecting to home page after registration -->
<script>

    setTimeout(pageRedirect, 5000);

    function pageRedirect(){
        window.location = "/";
    }
</script>