<x-app-layout class="bg-gray-100">
    <!-- component -->
    <div class="flex min-h-screen items-center justify-center bg-white">
        <div class="container mx-auto px-4 py-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="mx-auto w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
                    <h1 class="text-5xl font-bold text-gray-800 mb-6">Contact Us</h1>
                    <p class="text-lg text-gray-600 mb-10">Feel free to reach us at help@domain.com or through this form:</p>

                    <form action="https://api.web3forms.com/submit" class="space-y-6">
                        <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" />

                        <div class="relative z-0">
                            <input type="text" name="name"
                                class="peer block w-full appearance-none border-0 border-b border-gray-400 bg-transparent py-2.5 px-0 text-base text-gray-800 focus:border-blue-500 focus:outline-none focus:ring-0"
                                placeholder=" " />
                            <label
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-base text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-500">Your
                                name</label>
                        </div>

                        <div class="relative z-0">
                            <input type="email" name="email"
                                class="peer block w-full appearance-none border-0 border-b border-gray-400 bg-transparent py-2.5 px-0 text-base text-gray-800 focus:border-blue-500 focus:outline-none focus:ring-0"
                                placeholder=" " />
                            <label
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-base text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-500">Your
                                email</label>
                        </div>

                        <div class="relative z-0">
                            <textarea name="message" rows="5"
                                class="peer block w-full appearance-none border-0 border-b border-gray-400 bg-transparent py-2.5 px-0 text-base text-gray-800 focus:border-blue-500 focus:outline-none focus:ring-0"
                                placeholder=" "></textarea>
                            <label
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-base text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-500">Your
                                message</label>
                        </div>

                        <button type="submit"
                            class="w-full rounded-md bg-blue-600 hover:bg-blue-700 transition-colors duration-300 px-10 py-3 text-white text-lg font-semibold shadow-lg">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Google Maps -->
                <div class="w-full h-96 bg-white rounded-lg shadow-lg overflow-hidden">
                    <iframe class="w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13812.117156688247!2d-54.5864917!3d-25.6095825!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x0000000000000000!2zMjXCsDM2JzM0LjkiUyA1NMKwMzUnMTMuMiJX!5e0!3m2!1ses!2sar!4v1696691817728!5m2!1ses!2sar"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- Social Media Icons -->
                <div class="mt-8 text-center">
                    <p class="text-lg text-gray-600 mb-4">Follow us on social media:</p>
                    <div class="flex justify-center space-x-6">
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/yourprofile" target="_blank" class="text-gray-500 hover:text-blue-600 transition duration-300">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/yourprofile" target="_blank" class="text-gray-500 hover:text-pink-600 transition duration-300">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                        <!-- WhatsApp -->
                        <a href="https://wa.me/yourwhatsappnumber" target="_blank" class="text-gray-500 hover:text-green-500 transition duration-300">
                            <i class="fab fa-whatsapp fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
