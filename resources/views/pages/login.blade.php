@include('components.head')


<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
    <div
        class="
          flex flex-col
          bg-white
          shadow-md
          px-4
          sm:px-6
          md:px-8
          lg:px-10
          py-8
          rounded-3xl
          w-50
          max-w-md
        ">
        <div class="font-medium self-center text-xl sm:text-3xl text-gray-800">
            Join us Now
        </div>
        <div class="mt-4 self-center text-xl text-gray-800">
            Enter your credentials to get access account
        </div>
        <div class="h-10">
            <p>
                @if ($errors->any())
                    <div class="text-red-600">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </p>
        </div>
        <div class="mt-10">
            <form action={{ route('postLogin') }} method="POST">
                @csrf <!-- {{ csrf_field() }} -->
                <div class="flex flex-col mb-5">
                    <label for="email" class="mb-1 tracking-wide text-gray-600">Name:</label>
                    <div class="relative">
                        <input id="email" type="email" name="email"
                            class="
                    text-sm
                    placeholder-gray-500
                    pl-4
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400
                  "
                            placeholder="Enter your name" />
                    </div>
                </div>
                <div class="flex flex-col mb-6">
                    <label for="password" class="mb-1 tracking-wide text-gray-600">Password:</label>
                    <div class="relative">
                        <input id="password" type="password" name="password"
                            class="
                    text-sm
                    placeholder-gray-500
                    pl-4
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400
                  "
                            placeholder="Enter your password" />
                    </div>
                </div>

                <div class="flex w-full">
                    <button type="submit"
                        class="
                  flex
                  mt-2
                  items-center
                  justify-center
                  focus:outline-none
                  text-white text-sm
                  sm:text-base
                  bg-blue-500
                  hover:bg-blue-600
                  rounded-2xl
                  py-2
                  w-full
                  transition
                  duration-150
                  ease-in
                ">
                        <span class="mr-2 uppercase">Sign Up</span>
                        <span>
                            <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="flex justify-center items-center mt-6">
        <a href="#" target="_blank"
            class="
            inline-flex
            items-center
            text-gray-700
            font-medium
         text-center
          ">
        </a>
    </div>
</div>
</body>

</html>
