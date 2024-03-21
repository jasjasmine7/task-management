<div>
    <div class="flex items-center justify-center min-h-screen p-4 fle-col lg:p-6">
      <div class="grid items-center w-full max-w-6xl gap-10 md:grid-cols-2">
        <div class="max-md:text-center">

          <h2 class="font-bold text-[50px] text-white ">
            Manage personal information conveniently</h2>
          <p class="mt-6 text-[18px] text-white">Philippian Marketing Corporation is an e-commerce and Filipino-owned company
            by the Siega family. It was established last June 2021 in the midst of a pandemic
            crisis and the start of the e-commerce phenomenon.
</p>
        </div>
        <form class="w-full max-w-md px-6 py-8 space-y-6 bg-gray-900 bg-opacity-25 rounded-xl md:ml-auto max-md:mx-auto">
          <h3 class="mb-12 font-bold text-[35px] text-white max-md:text-center">
            PMC ADMIN
          </h3>
          <div>
            <input name="email" type="email" autocomplete="email" required class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-[#333]" placeholder="Email address" />
          </div>
          <div>
            <input name="password" type="password" autocomplete="current-password" required class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-[#333]" placeholder="Password" />
          </div>
          <div class="text-sm text-right">
            <a href="#" class="text-white hover:underline">
              Forgot your password?
            </a>
          </div>
          <div class="!mt-10">
            <button type="button" class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded text-white bg-[#333] hover:bg-[#222] focus:outline-none">
                <a href="{{route('index')}}"  id="forgot-pass">Sign In</a>
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
