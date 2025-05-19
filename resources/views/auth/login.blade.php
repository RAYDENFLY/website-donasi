<html lang="en">
 <head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Admin Panel Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter&amp;display=swap" rel="stylesheet" />
  <style>
   body {
    font-family: "Inter", sans-serif;
   }
  </style>
 </head>
 <body class="bg-gray-300 flex items-center justify-center min-h-screen p-6">
  <div class="flex flex-col md:flex-row w-full max-w-5xl bg-white shadow-lg" style="min-height: 520px;">
   <div class="md:w-1/2 bg-[#0787FF] flex flex-col justify-center items-center p-16 space-y-16" style="min-height: 520px;">
    <h1 class="text-white font-extrabold text-4xl leading-tight text-center">Admin Panel</h1>
    <div class="w-40 h-40 rounded-full border-8 border-white border-dashed flex items-center justify-center">
     <svg
      aria-hidden="true"
      class="w-20 h-20 text-white"
      fill="none"
      stroke="currentColor"
      stroke-width="2"
      viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg"
     >
      <path d="M12 3v12m0 0l-3-3m3 3l3-3m-3 3v6" stroke-linecap="round" stroke-linejoin="round"></path>
     </svg>
    </div>
    <p class="text-white text-sm text-center">donasi.baitulmaalku.com</p>
   </div>
   <div class="md:w-1/2 p-12 flex flex-col justify-center" style="min-height: 520px;">
    <h2 class="text-black font-bold text-xl mb-6">Sign In</h2>
    <form method="POST" action="{{ route('login') }}" class="space-y-6">
     @csrf
     <div>
      <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
      <input
       id="email"
       name="email"
       type="email"
       required
       autofocus
       autocomplete="username"
       value="{{ old('email') }}"
       class="mt-1 block w-full rounded-md border border-black px-4 py-2 placeholder-black focus:outline-none focus:ring-2 focus:ring-[#0787FF]"
      />
      <p class="mt-2 text-sm text-red-600">
       @error('email') {{ $message }} @enderror
      </p>
     </div>
     <div>
      <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
      <input
       id="password"
       name="password"
       type="password"
       required
       autocomplete="current-password"
       class="mt-1 block w-full rounded-md border border-black px-4 py-2 placeholder-black focus:outline-none focus:ring-2 focus:ring-[#0787FF]"
      />
      <p class="mt-2 text-sm text-red-600">
       @error('password') {{ $message }} @enderror
      </p>
     </div>
     <div class="flex items-center justify-between">
      <label for="remember_me" class="inline-flex items-center">
       <input
        id="remember_me"
        name="remember"
        type="checkbox"
        class="rounded border-gray-300 text-[#0787FF] shadow-sm focus:ring-[#0787FF]"
       />
       <span class="ml-2 text-sm text-gray-600">Remember me</span>
      </label>
      <button
       type="submit"
       class="bg-[#0787FF] text-white px-5 py-2 rounded-md text-base font-normal hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#0787FF]"
      >
       Log in
      </button>
     </div>
    </form>
    <div class="mt-10 bg-[#D7E9FF] rounded-md py-3 px-6 text-center text-black text-base">
     Note: Jika lupa akun silahkan untuk menghubungi developer.
    </div>
   </div>
  </div>
 </body>
</html>