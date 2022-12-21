@extends('layouts.app')

@section('content')
    <div>
        <section class="flex justify-center items-center relative h-120 w-full"
            style="background: url(images/pexels-anton-uniqueton-40212561.png); background-size: cover;">
            <div class="z-1 text-center">
                <h1 class='font-bold  text-white text-7xl'>We would love to hear from you</h1>
                <h3 class=' font-medium text-white text-2xl'>We love you and we care </h3>
            </div>
            <div class='bg-secondary2 bg-opacity-70 absolute  h-full w-full'>

            </div>
        </section>

        <section class='flex flex-col items-center py-12'>
            <h2 class="text-secondary mb-16 font-bold text-4xl text-center">Contact Us</h2>
            <div class='flex flex-col-reverse sm:flex-row w-4/5 '>
                <div class='bg-secondary text-white flex flex-col flex-1 items-center justify-center py-20'>
                    <div class='flex flex-col items-center  justify-center w-4/5 '>
                        <h2 class='mb-16 text-2xl font-bold'>Contact Information</h2>
                        <div class='w-4/5'>
                            <div class='flex items-center mb-8 text-lg'>
                                <i class="mr-4 fab fa-whatsapp text-fourth"></i>
                                <p class='text-lg'>+234912 879 4021</p>
                            </div>
                            <div class='flex items-center mb-8 text-lg'>
                                <i class="mr-4 fas fa-phone-alt text-fourth"></i>
                                <p class='text-lg'>+234813 531 6198</p>
                            </div>
                            <div class='flex items-center mb-20 text-lg'>
                                <i class="mr-4 fas fa-envelope text-fourth"></i>
                                <p class='text-lg'>xxolcare@gmail.com</p>
                            </div>
                        </div>
                        <div class='flex w-full justify-evenly'>
                            <i class="text-fourth fab fa-facebook-f"></i>
                            <i class="text-fourth fab fa-twitter"></i>
                            <i class="text-fourth fab fa-instagram-square"></i>
                            <i class="text-fourth fab fa-linkedin"></i>
                        </div>
                    </div>
                </div>
                <form action="" class='flex flex-col flex-1 w-full shadow-bigCard py-8 px-10 rounded-primary'>
                    <h1 class='text-center text-secondary text-2xl font-bold mb-9'>Get in Touch</h1>
                    <div class='flex flex-col mb-3'> <label class='text-fifth text-sm mb-2' for="">Name</label>
                        <input type="text" class="rounded-md border  py-3 border-fourth">
                    </div>
                    <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-2' for="">Phone Number</label>
                        <input type="text" class="rounded-md border  py-3 border-fourth">
                    </div>
                    <div class='flex flex-col mb-3'> <label class='text-fifth  text-sm mb-2' for="">Email</label>
                        <input type="email" class="rounded-md border  py-3 border-fourth">
                    </div>
                    <div class='flex flex-col mb-3'>
                        <label class='text-fifth  text-sm mb-2' for="">Your Message</label>
                        <textarea class="border border-fourth rounded-md" cols="30" rows="7"></textarea>
                    </div>
                    <a class="bg-primary self-center rounded-md text-fifth text-sm font-bold mt-20 py-2 px-6 submit" 
                    href="mailto:mailto:info@xxolcare.com">Send Message</a>
                    {{-- <input
                        class="bg-primary self-center rounded-md font-semibold text-fifth text-sm  mt-10 py-2 px-12 submit"
                        type="submit" value="Send Message"> --}}
                </form>
            </div>


        </section>
    </div>
@endsection
