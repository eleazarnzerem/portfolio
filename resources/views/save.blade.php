<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eleazar Porfolio</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>?
</head>

<body class="bg-black">
    <header class="h-screen w-full bg-cover" style="background-image: url('{{ asset('img/bg.jpg') }}')">
        <div class="h-full w-full bg-[#000000e0] flex justify-center place-items-center gap-9">
            <div class="w-[1100px] grid grid-cols-2 mx-auto">
                <div class="w-4/4 p-3">
                    <div class="w-4/4 h-[500px] bg-[#000000c0]"></div>
                </div>
                <div class="py-16 lg:space-y-10">
                    <div>
                        <p class="w-[700px] text-5xl text-[#c8c8c8] font-bold">I'M <span class="text-[#e9bc5b]">ELEAZAR
                                NZEREM</span></p>
                        <p class="text-center inline-block text-[16px] font-bold bg-[#e9bc5b] px-4 rounded-full mt-4">
                            Video Editor/Web developer</p>
                    </div>
                    <div>
                        <p class="text-[20px] text-[#c8c8c8] font-semibold">A <span class="text-[#f1be4f]">seasoned
                                video editor</span> with 3 years of
                            hands-on experience. Proficient in transforming raw footage into compelling stories that
                            captivate audiences</p>
                    </div>
                    <div class="">
                        <a href="#"
                            class="relative bg-[#e9bc5b] rounded-xl px-3 py-3 font-bold hover:translate-x-10 hover:bg-[#cda245] transition-all duration-500">MORE
                            ABOUT ME</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="max-w-7xl mx-auto" x-data="{ playing: false, showModal: false, src: null }">
        <section class="mx-auto py-10 px-11 space-y-7">
            <div>
                <p class="text-center text-5xl text-[#c8c8c8] font-bold">PORTFOLIO</p>
                <p class="text-center text-2xl text-[#c8c8c8] font-bold py-3">MY WORK</p>
            </div>

            {{-- Short-form editing --}}
            <div class="w-full bg-[#161616] rounded-lg px-2 pb-9">
                <p class="text-[#e9bc5b] font-bold text-2xl">SHORT FORM</p>
                <div class="grid grid-cols-3 mt-10 px-16 gap-4 gap-y-9 w-4/5 mx-auto">
                    <div class="w-[250px] h-[350px] bg-red-200 rounded-lg relative overflow-hidden group"
                        @mouseenter="playHoverVideo($refs.video)" @mouseleave="stopHoverVideo($refs.video)"
                        @click="showModal = true; src = $refs.video.src">

                        <!-- Video Element -->
                        <video x-ref="video" class="w-full h-full object-cover" src="{{ asset('video/short2.mp4') }}"
                            muted loop></video>

                        <!-- Hover Overlay -->
                        <div
                            class="bg-[#0000009b] w-full h-full rounded-lg text-center text-white text-[19px] flex items-center justify-center absolute bottom-0 translate-y-full transition-transform duration-500 ease-in-out group-hover:translate-y-0">
                            Play
                        </div>
                    </div>
                    <div class="w-[250px] h-[350px] bg-red-200 rounded-lg relative overflow-hidden group"
                        @mouseenter="playHoverVideo($refs.video)" @mouseleave="stopHoverVideo($refs.video)"
                        @click="showModal = true; src = $refs.video.src">

                        <!-- Video Element -->
                        <video x-ref="video" class="w-full h-full object-cover" src="{{ asset('video/short1.mp4') }}"
                            muted loop></video>

                        <!-- Hover Overlay -->
                        <div
                            class="bg-[#0000009b] w-full h-full rounded-lg text-center text-white text-[19px] flex items-center justify-center absolute bottom-0 translate-y-full transition-transform duration-500 ease-in-out group-hover:translate-y-0">
                            Play
                        </div>
                    </div>
                </div>
            </div>

            {{-- Long Form Video Editing --}}
            <div class="w-full bg-[#161616] rounded-lg px-2 pb-9">
                <p class="text-[#e9bc5b] font-bold text-2xl">LONG FORM</p>
                <div class="grid grid-cols-2 mt-10 px-16 gap-4 gap-y-9 w-4/5 mx-auto">
                    <div class="w-[350px] h-[250px] bg-red-200 rounded-lg relative overflow-hidden group">
                        <div
                            class="bg-[#0000009b] w-full h-full rounded-lg text-center text-white text-[19px] flex items-center justify-center absolute bottom-0 translate-y-full transition-transform duration-500 ease-in-out group-hover:translate-y-0">
                            Play
                        </div>
                    </div>
                    <div class="w-[350px] h-[250px] bg-red-200 rounded-lg relative overflow-hidden group">
                        <div
                            class="bg-[#0000009b] w-full h-full rounded-lg text-center text-white text-[19px] flex items-center justify-center absolute bottom-0 translate-y-full transition-transform duration-500 ease-in-out group-hover:translate-y-0">
                            Play
                        </div>
                    </div>
                    <div class="w-[350px] h-[250px] bg-red-200 rounded-lg relative overflow-hidden group">
                        <div
                            class="bg-[#0000009b] w-full h-full rounded-lg text-center text-white text-[19px] flex items-center justify-center absolute bottom-0 translate-y-full transition-transform duration-500 ease-in-out group-hover:translate-y-0">
                            Play
                        </div>
                    </div>
                    <div class="w-[350px] h-[250px] bg-red-200 rounded-lg relative overflow-hidden group">
                        <div
                            class="bg-[#0000009b] w-full h-full rounded-lg text-center text-white text-[19px] flex items-center justify-center absolute bottom-0 translate-y-full transition-transform duration-500 ease-in-out group-hover:translate-y-0">
                            Play
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Modal -->
        <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50"
            style="display: none;">
            <div class="bg-white p-4 rounded-lg w-[600px] h-[400px] relative" @click.outside="showModal=false">
                <button @click="showModal = false" class="absolute top-2 right-2 text-black">X</button>
                <video x-ref="modalVideo" class="w-full h-full" controls x-bind:src="src"></video>
            </div>
        </div>

        {{-- <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50"
            style="display: none;">
            <div class="bg-white p-4 rounded-lg w-[600px] h-[400px] relative" @click.outside="showModal=false">
                <button @click="showModal = false" class="absolute top-2 right-2 text-black">X</button>
                <video x-ref="modalVideo" class="w-full h-full" controls x-bind:src="src"></video>
            </div>
        </div> --}}
    </main>
    {{-- <script>
        function playVideo(videoElement) {
            videoElement.currentTime = 0; // Reset to start
            videoElement.play();
            setTimeout(() => {
                videoElement.pause();
                videoElement.currentTime = 0; // Reset after 10 seconds
            }, 10000); // Play for 10 seconds
        }

        function stopVideo(videoElement) {
            videoElement.pause(); // Stop video on mouse leave
            videoElement.currentTime = 0; // Reset to start
        }

        function openModal(modalVideoElement, mainVideoElement) {
            // Stop the main video when modal opens
            mainVideoElement.pause();
            mainVideoElement.currentTime = 0; // Reset the main video

            // Show modal
            Alpine.store('showModal', true);

            // Start modal video from the beginning
            modalVideoElement.currentTime = 0;
            modalVideoElement.play();
        }

        function closeModal(modalVideoElement) {
            // Pause the modal video
            modalVideoElement.pause();

            // Close modal
            // Alpine.store('showModal', false);
        }
    </script> --}}
    <script>
        function playHoverVideo(videoElement) {
            videoElement.currentTime = 0; // Reset to start
            videoElement.play();

            // Play for 7 seconds then repeat
            setTimeout(() => {
                videoElement.pause();
                videoElement.currentTime = 0; // Reset after 7 seconds
                playHoverVideo(videoElement); // Repeat by calling the function again
            }, 7000); // 7 seconds
        }

        function stopHoverVideo(videoElement) {
            videoElement.pause(); // Stop video on mouse leave
            videoElement.currentTime = 0; // Reset to start
        }

        function openModal(videoElement) {
            videoElement.pause(); // Stop the main video when opening the modal
            videoElement.currentTime = 0; // Reset to start
            this.src = videoElement.src; // Set the modal video source to be the same
            this.showModal = true; // Open modal
            this.$nextTick(() => {
                this.$refs.modalVideo.currentTime = 0; // Reset modal video to start
                this.$refs.modalVideo.play(); // Play modal video when opened
            });
        }

        function closeModal(videoElement) {
            this.showModal = false;
            this.$refs.modalVideo.pause(); // Pause modal video when closed
            stopHoverVideo(videoElement); // Ensure the main video is stopped
        }
    </script>



</body>

</html>




{{-- victor    --}}

<div class="w-[250px] h-[350px] bg-red-200 rounded-lg relative overflow-hidden group"
    @mouseenter="playVideo($refs.video)" @mouseleave="stopVideo($refs.video)"
    @click="showModal = true, src = `{{ asset('video/short1.mp4') }} `">

    <!-- Video Element -->
    <video x-ref="video" class="w-full h-full object-cover" src="{{ asset('video/short1.mp4') }}" muted loop></video>

    <!-- Hover Overlay -->
    <div
        class="bg-[#0000009b] w-full h-full rounded-lg text-center text-white text-[19px] flex items-center justify-center absolute bottom-0 translate-y-full transition-transform duration-500 ease-in-out group-hover:translate-y-0">
        Play
    </div>

    <!-- Click to Open Modal -->
    <div @click="openModal($refs.modalVideo, $refs.video)" class="absolute inset-0 cursor-pointer">
    </div>
</div>
