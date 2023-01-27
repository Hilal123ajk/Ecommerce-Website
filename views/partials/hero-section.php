<div id="myDiv" class="flex items-center bg-blue-500 p-2 rounded-md text-white w-1/5 mx-7">
  <svg class="h-4 w-4 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
  <p>You are logged in successfully</p>
</div>

<div class="container flex flex-col-reverse md:flex-row overflow-x-hidden text-center md:text-start">

      <div class="child w-full md:w-3/5 lg:w-2/5 md:my-auto md:mx-12 px-8">
      
         <h1 class="text-3xl md:text-5xl md:w-full md:font-medium">Sell And Buy Laptops</h1>
         <p class="my-3 text-gray-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, quae tenetur quia laboriosam iure molestiae maxime et fugiat quam exercitationem?</p>
         <button class="my-2 bg-white hover:bg-blue-600 hover:text-white text-gray-800 font-semibold py-2 px-4 border border-gray-500 rounded shadow">Buy Now</button>
         <button class="my-2 bg-white hover:bg-slate-800 hover:text-white text-gray-800 font-semibold py-2 px-6 border border-gray-500 rounded shadow">Sell</button>
      </div>
      <img class="w-full md:w-2/5 lg:w-3/5" src="public/images/main-laptop-image.png" alt="laptop-image">
</div>



<script>

      setTimeout(function(){ 
            document.getElementById("myDiv").classList.add("hidden"); 
      }, 2300);

</script>