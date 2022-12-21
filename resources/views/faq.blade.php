@extends('layouts.app')

@section('content')
    <div>
        <section class="flex justify-center items-center relative h-120 w-full"
            style="background: url(images/pexels-anton-uniqueton-40212561.png); background-size: cover;">
            <div class="z-1 text-center">
                <h1 class='font-bold  text-white text-7xl'>What would you like to know</h1>
                <h3 class=' font-medium text-white text-2xl'>We love you and we care </h3>
            </div>
            <div class='bg-secondary2 bg-opacity-70 absolute  h-full w-full'>

            </div>
        </section>
        <section class="py-12 flex flex-col items-around">
            <h2 class="text-secondary mb-16 font-bold text-4xl text-center">Frequently ask questions</h2>
            <div class="flex justify-around">
                <div class="w-4/5">
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">What is XxolCare.com?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden">XxolCare.com is a domestic care
                            service provider that connects professional and top-rated Homecare service providers with people
                            looking for such services and it is the first of its kind in Nigeria. We are currently operating
                            in Lagos Nigeria and with time, provide our services in all major cities in West Africa. In
                            other words, we are a leisure time improver by giving you all your free time back while our
                            professionals take care of your need. We believe that everyone has the right to find a trusted
                            professional in less than 1 minute, hassle-free! And all it takes is the followings:<br><br>

                            - Specify your service details<br>
                            - Select the preferred date and time<br>
                            - Enter your contact and address details.<br>
                            - Pay online<br>
                            - Enjoy your free time</p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">How to book a home cleaning appointment?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden">Booking an appointment online
                            is easy. Just simply follow the steps below. <br> <br>
                            1.Visit www.xxolcare.com<br>
                            2.Select Home cleaning service and any other service options you need then click BOOK NOW.<br>
                            3.Select the frequency then click NEXT.<br>
                            -One-time<br>
                            -Bi-weekly<br>
                            -Weekly<br>
                            4.Input address where services will be needed and phone number<br>
                            5.Specify your cleaning details then click NEXT.<br>
                            -Cleaning materials (if needed)<br>
                            -Add specific instructions if needed<br>
                            6.Select the preferred date and time then click NEXT.<br>
                            7.Make payment then click SELECT XXOLSTAR.<br>
                            8.Go through the profile of Xxolstars available for you and select.<br>
                            9.Monitor every other thing via your phone from when the Xxolstar is enroute to when the
                            Xxolstar arrives and up till when the Xxolstar departs.<br></p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">What are the different cleaning options
                                available?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden">XxolCare offers a platform
                            connecting clients to cleaners - we offer a range of products to suit your cleaning
                            needs.<br><br>
                            <span class='underline'>One-time</span> <br>
                            If you're looking for an ad-hoc, once-off home clean without any commitment then this one's for
                            you. Simply pop onto the site or app, add in your cleaning requirements together with the date
                            and time you require someone and we'll send you a XxolStar to assist with your home clean. No
                            strings attached here! <br><br>
                            <span class="underline">Recurring</span><br>
                            Looking for a more regular commitment, we can assist you in finding a XxolStar to visit your
                            home once a week, every 2 weeks, every 3 weeks or once a month. Look forward to seeing the same
                            XxolStar for each appointment and allow her to get to know your home and cleaning needs. Should
                            your XxolStar cancel for unforeseen reasons, we’ll send another highly qualified XxolStar to
                            step in.<br>

                            If you're looking for someone to come to your home a bit more regularly we can absolutely assist
                            with this. Discounted rates are offered when scheduling 3 or more bookings per a week, greater
                            than for the same address on a recurring basis.<br>
                            Should you have any questions please submit a query to our support team.
                        </p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">What if I want extra tasks completed when I
                                book for cleaning?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden">There are opportunity to
                            select additional task during your booking which will be charged at a discounted rate. Aditional
                            task includes laundry and ironing, Car wash
                            XxolStars are also able to perform other general cleaning tasks which may be specific to your
                            home, such as sweeping staircase, etc. <br>
                            We kindly ask that you specify any special requirements when you contact your XxolStar.
                            Alternatively you can leave a note via the website when creating your booking. <br>
                            <span class='font-bold'>
                                Please ensure all requests and notes are in-line with general domestic cleaning. This
                                information is only seen by your XxolStar and not monitored by the office.
                            </span>
                        </p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">Do you supply your own materials?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden">It depends on the service(s)
                            required. <br>
                            Xxolstars go independently to their booking locations via public transport and as such, we
                            expect the client to have basic cleaning materials like bucket, mop and a broom available for
                            the at the place service is required. If such materials are not available, you will be charged
                            extra for the Xxolstar to provide the items. <br>
                            For other services like make-up hair grooming, etc, our Xxolstars will come with equipment to
                            provide the services.</p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">Can I book the same Xxolstar professional more
                                than once?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden">-Yes, you can. some of our
                            clients may desire to request a weekly service with the same Xxolstar. <br>
                            -It is easier for us to provide you with the same Xxolstar if you have a recurring appointment
                            (usually weekly or bi-weekly).</p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">Is it possible to have the cleaning done even
                                if I am not at home?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden">Busy and can’t be home during
                            the cleaning session? Worry no more, as our trusted verified Xxolstars can get the job done even
                            if you are not around.
                            Note: <br><br>
                            -For a recurring service (weekly or bi-weekly), we recommend that you be present on the first
                            appointment. This way, you can meet the Xxolstar, show her your home and explain what you expect
                            from her.<br>
                            -For one-time cleaning service, kindly let the Xxolstar know how he/she can access your home
                            (e.g. leave the key under the mat, give the key to security, leave the door open, etc). You can
                            also include special instructions while booking the appointment.</p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">What are the basic cleaning materials I need to
                                provide?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden">we recommend you to have these
                            in your house: <br>
                            -Sweeping material/Vacuum cleaner <br>
                            -Mop <br>
                            -Toilet cleaning gel<br>
                            -Bleach</p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">What are my payment options?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden">Payments are strictly online.
                            Only female hair grooming is done via cash for now and clients have opportunity to negotiate
                            with any Xxolstar that meets their budget. </p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">Do your cleaning professionals bring card
                                machines for payments?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden">No. We recommend you to please
                            provide the exact amount of cash payment online. You can also opt to pay via bank transfer
                            through provided bank details on the website. <br>
                            Note: You need to notify when transfer is done.</p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">Can I get an invoice?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden">Yes, you can. Invoices are
                            automatically created as bookings are made and completed. Your booking is completed once payment
                            is made.</p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">
                                How do I verify that the person at my place is from Xxolcare?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden"> Your security is our utmost
                            priority. There is always a unique code that will be generated after you have completed your
                            bookings that is only known to you and your selected Xxolstar. Before you or your security allow
                            anyone from Xxolcare in, they need to confirm the PASSCODE.</p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">I'm not happy with the quality of the service
                                provided. What should i do?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden">We apologize for the
                            inconvenience. Xxolcare aims to provide the best quality experience to our clients. We made sure
                            that all our Xxolstars were well-trained. However, in the unlikely event of not meeting your
                            expectations, please immediately notify us within 24 hours. You can reach us at
                            feedback@xxolcare.com or via our live chat support line.

                            Note: Kindly send photos of the areas that were not cleaned properly.</p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">What is included in every clean?
                            </h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden"> XxolStars are able to assist
                            with general domestic cleaning. We've detailed what you can
                            expect below. <br><br>
                            <span class='font-bold'>Living room</span> <br>
                            General clean of living room and other living areas includes:<br>
                            -Dusting of furniture and surfaces<br>
                            -Mopping and vacuuming of floors<br>
                            -Dusting and wiping of skirtings<br>
                            -Dusting and wiping of electronics, pictures frames etc.<br>
                            -Dusting and wiping of light switches and other fixtures<br><br>
                            <span class='font-bold'>Kitchen</span><br>
                            General clean of kitchen includes:<br>
                            -Wiping of surfaces, sinks and appliances<br>
                            -Washing of dishes<br>
                            -Wiping outside of cupboards and fridge<br>
                            -Wiping of walls<br>
                            -Emptying bins and cleaning bin area<br>
                            -Mopping floors<br><br>
                            <span class='font-bold'>bedrooms</span><br>
                            General clean of bedrooms includes:<br>
                            -Dusting of furniture and surfaces<br>
                            -Making bed<br>
                            -Vacuuming and/or mopping floors<br>
                            -Dusting and wiping of skirtings<br>
                            -Folding or hanging of clothes in bedroom<br><br>
                            <span class="font-bold">Bathrooms</span><br>
                            General clean of bathroom includes:<br>
                            -Cleaning of shower, bath and sinks<br>
                            -Toilet clean<br>
                            -Wiping of counters and taps<br>
                            -Wiping of walls and mirrors<br>
                            -Wiping outside of cupboards and cabinets<br>
                            -Folding or hanging of clean towels<br>
                            -Emptying bins and cleaning bin area<br>
                            -Mopping floors<br>
                        </p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">Do you offer office cleaning services?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden"> Xxolcare offers the best
                            cleaning service in 9ja. Not only for your home, but for the office
                            too. <br><br>
                            If your office is in need of a good one-time clean after a function or regular cleans look
                            no further. We will banish dust, grime, grit and any kind of dirt from your workplace,
                            allowing you to focus on your own work rather than cleaning out the office fridge. <br><br>
                            Xxolcare have the best trained professional XxolStars who will leave your office
                            spick-and-span. Give us a call to schedule a visit.</p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">Do you offer post-Construction/occupation
                                cleaning?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden"> Yes we do. We not only do the
                            cleaning, we also provide relocation services which includes: <br><br>
                            - Providing trucks to haul your items/furnitures<br>
                            -Loading of items/furnitures in trucks<br>
                            -Unpacking of items from trucks and arranging orderly as instructed to your new
                            accomodation<br><br>
                            All you need do is give us a call.</p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">How long is a massage session service?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden"> Averagely, each session is 60
                            minutes.</p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">
                                How do you charge for massage?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden"> We charge per 60 minutes
                            sessions. So it depends on the number of session you book. All charges are available as bookings
                            are made.</p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">Where is the massage service carried out?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden"> All our services are done at
                            places of your convinience. Services are carried out at addresses provided.</p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">How are your caregivers screened and what are
                                their qualifications?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden"> We offer a wide range of
                            non-medical care services, including companionship and emotional support, hospital overnights,
                            bathing, hygiene, dressing and mobility assistance, medication reminders, meal planning,
                            preparation and feeding, housekeeping, laundry and other chores, Alzheimer’s and dementia care.
                        </p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">Are your XxolCarers allowed to carryout medical
                                task?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden">
                            The law prohibits our carers from carrying out the following:<br><br>
                            -Chiropractic treatment<br>
                            -Tampering with urine catheters<br>
                            -Bowel evacuations<br>
                            -Ear syringing<br>
                            -Bladder washouts<br>
                            -Administering injections<br>
                            -Lifting service user from the floor during a fall<br>
                            -Toe and nail cutting<br>
                            -Filling of oxygen cylinders<br>
                            -Diabetics tests involving skin pricking<br>
                            -Tracheotomy tube changes</p>
                    </div>
                    <div>
                        <div class="slidedown flex justify-between py-3 px-2  border border-seventh rounded-third">
                            <h6 class="text-secondary text-base font-medium">Are Your XxolCarers Trained?</h6>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="mt-1 py-3 px-2  border border-seventh rounded-third hidden"> <span class='font-bold'>We
                                train our Xxolcarers on the following:</span> <br><br>
                            -Client Uniqueness<br>
                            -Principles of Care<br>
                            -Moving and Handling<br>
                            -Health and Safety<br>
                            -Safe Handling of Medication<br>
                            -The Role of the Carer<br>
                            -Incontinence Care<br>
                            -Basic Infection Control<br>
                            -Emergency First Aid<br>
                            -Food Hygiene<br>
                            -Abuse Awareness of Vulnerable People</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
