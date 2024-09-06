<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Eleazar Porfolio</title>
    @vite('resources/css/app.css', 'resources/js/app.js')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body
    style="
    background-color: rgb(47, 6, 113);
    background-image: radial-gradient(at 85.88% 43.10%, rgb(86, 10, 93) 0, transparent 68%), radial-gradient(at 68.52% 27.77%, rgb(30, 40, 53) 0, transparent 6%), radial-gradient(at 93.41% 23.10%, rgb(25, 101, 53) 0, transparent 31%), radial-gradient(at 47.17% 80.60%, rgb(8, 64, 80) 0, transparent 65%), radial-gradient(at 79% 81%, rgb(116, 80, 80) 0, transparent 2%), radial-gradient(at 8.01% 78.43%, rgb(7, 69, 85) 0, transparent 21%);
  ">
    <header class="h-screen w-full bg-cover  flex justify-center place-content-center items-center"
        {{-- style="background-image: url('{{ asset('img/bg.jpg') }}'") --}}>
        <div class="text-center text-white font-nunito lg:grid grid-cols-2 lg:text-left lg:w-7xl mx-auto lg:space-x-10">
            <div class="sm:w-[600px] lg:w-[400px]">
                <p class="text-4xl lg:text-3xl xl:text-5xl font-bold smooth">ELEAZAR NZEREM</p>
                <p class="font-semibold text-4xl">I AM A <span class="text-[#ae58f9]">WEB DEVELOPER </span>
                    {{-- <span>VIDEO EDITOR</span> <span>GRAPHICS DESIGNER</span> --}}
                </p>
                <p class="font-medium text-[20px] mt-5 leading-6">With hands-on experience in video editing, I craft
                    compelling
                    stories
                    that
                    captivate
                    audiences and drive
                    results. Let's bring your vision to life and take your business to new heights.</p>

                <div class="mt-10 space-x-6 font-semibold">
                    <a href="#"
                        class=" relative bg-gradient-to-r from-fuchsia-500 to-cyan-500 py-3 px-7 rounded-full hover:shadow-xl top-0 hover:-top-1 transition-all duration-700">Contact
                        Me</a>
                    <a href="#"
                        class="text-[#282aad] relative bg-gradient-to-r from-violet-200 to-pink-200 py-3 px-7 rounded-full hover:shadow-xl top-0 hover:-top-1 transition-all duration-700">View
                        Works</a>
                </div>
            </div>
            <div class="w-[200px] h-[200px] xl:w-[400px] hidden lg:block xl:h-[400px] bg-teal-600 border-r smooth">

            </div>
        </div>

    </header>
    <main class="max-w-7xl mx-auto"></main>
</body>

</html>
