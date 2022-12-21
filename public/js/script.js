// $("#test").css({ backgroundColor: "red", opacity: 0.2 });

//faq slide down effect
var items = $(".slidedown");

items.on("click", function () {
    $(this)
        .next()
        .slideToggle(500, function () {
            $(this).prev().attr("id", "newID");
            var key = $("#newID").find("i")[0].classList[1];
            console.log(key);
            if (key === "fa-caret-down") {
                $(this)
                    .prev()
                    .find("i")
                    .removeClass("fa-caret-down")
                    .addClass("fa-caret-up");
            } else {
                $(this)
                    .prev()
                    .find("i")
                    .removeClass("fa-caret-up")
                    .addClass("fa-caret-down");
            }
            $(this).prev().removeAttr("id");
        });
});

//booking
state = {
    service: "service_block",
    schedule: "schedule_block",
    contact: "contact_block",
    payment: "payment_block",
    select: "select_block",
    booking: "booking_block",
};

function changeBlock(event) {
    event.preventDefault();
    $("#overlay2").removeClass("overlay");
    $("#overlay3").removeClass("overlay");
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".bgkkk").find("span").removeClass("bg-secondary").addClass("bg-fifth");
    $(".bgkkk").removeClass("text-secondary").removeClass("bgkkk");
    $(idClickedBlockname)
        .addClass("text-secondary")
        .addClass("bgkkk")
        .find("span")
        .removeClass("bg-fifth")
        .addClass("bg-secondary");
    let blockName = state[clickedBlock];
    $(".bgkk").addClass("hidden").removeClass("bgkk");
    idBlockname = `#${blockName}`;
    console.log(idBlockname);
    $(idBlockname).removeClass("hidden").addClass("bgkk");
}

//Proceed

bulletKeys = {
    service_block: "service",
    schedule_block: "schedule",
    contact_block: "contact",
    payment_block: "payment",
    select_block: "select",
    booking: "booking",
};
bulletArray = [
    "service_block",
    "schedule_block",
    "contact_block",
    "payment_block",
    "select_block",
    "booking_block",
];
proceedState = 0;

$("#proceed").on("click", function () {
    $(".bgkkk").find("span").removeClass("bg-secondary").addClass("bg-fifth");
    $(".bgkkk").removeClass("text-secondary").removeClass("bgkkk");
    let nextBlock = bulletArray;
    idClickedBlockname = `#${clickedBlock}`;
});

//choose service
serviceState = {
    standard: "Standard home cleaning",
    special: "Care for people with special need",
    baby: "Baby sitting/home nanny",
    deep: "Deep cleaning",
    post: "Post Construction cleaning",
    salon: "Salon",
    spa: "Spa",
    office: "Office cleaning",
    logistics: "Logistics",
};

//show services modal
$("#showmodal").on("click", function () {
    $("#overlay").addClass("overlay");
    $("#modal").fadeIn(500);
    $("#showmodal").prop("disabled", true);
});

$("#overlaytest").on("click", function (event) {
    event.preventDefault();
    $("#overlay2").addClass("overlay");
    $("#overlay3").addClass("overlay");
});
// function myFunction() {
//     document.body.style.backgroundColor = "red";
// }

// $("#select2").on("click", function () {
//     //    $("#showmodal").val("preshyjones");
//     $("#showmodal").prop("disabled", false);
// });

function selectService(event) {
    let clickedBlock = $(event.target).attr("id");
    console.log(clickedBlock);
    service = serviceState[clickedBlock];
    $("#showmodal").val(service);
    $("#overlay").removeClass("overlay");
    $("#modal").fadeOut(500);
    $("#showmodal").prop("disabled", false);
}

//  Show frequency modal
$("#show_st_frequency_modal").on("click", function () {
    $("#overlay").addClass("overlay");
    $("#st_frequency_modal").fadeIn(500);
    $("#show_st_frequency_modal").prop("disabled", true);
});

//Select frequency
let frequencyState = {
    one_time: "One-time Service",
    week: "Twice weekly",
    month: "Twice monthly",
};

let frequency = "";

function selectFrequency(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".freq").removeClass("serviceoption");
    $(idClickedBlockname).addClass("serviceoption").addClass("freq");
    frequency = frequencyState[clickedBlock];
    console.log(frequency);
}

$("#doneFrequency").on("click", function () {
    $("#show_st_frequency_modal").val(frequency);
    $("#overlay").removeClass("overlay");
    $("#st_frequency_modal").fadeOut(500);
    $("#show_st_frequency_modal").prop("disabled", false);
    updateStFrequency(frequency);
});

//ROOM
//  Show room modal
$("#show_st_room_modal").on("click", function () {
    $("#overlay").addClass("overlay");
    $("#st_room_modal").fadeIn(500);
    $("#show_st_room_modal").prop("disabled", true);
});

//Select no_of_rooms
let roomState = {
    one_rm: 1,
    two_rm: 2,
    three_rm: 3,
    four_rm: 4,
    five_rm: 5,
};

let no_of_rooms = "";

function selectRoom(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".freq").removeClass("serviceoption");
    $(idClickedBlockname).addClass("serviceoption").addClass("freq");
    no_of_rooms = roomState[clickedBlock];
    console.log(frequency);
}

$("#doneRoom").on("click", function () {
    if (st_frequency === "none") {
        $("#show_st_frequency_modal").val("One-time Service");
        updateStFrequency("One-time Service");
    }
    $("#show_st_room_modal").val(no_of_rooms);
    $("#overlay").removeClass("overlay");
    $("#st_room_modal").fadeOut(500);
    $("#show_st_room_modal").prop("disabled", false);
    updateStBedroom(no_of_rooms);
});

//BATHROOM
//  Show bathroom modal
$("#show_st_bathroom_modal").on("click", function () {
    $("#overlay").addClass("overlay");
    $("#st_bathroom_modal").fadeIn(500);
    $("#show_st_bathroom_modal").prop("disabled", true);
});

//Select no_of_bathrooms
let bathroomState = {
    zero_bt: 0,
    one_bt: 1,
    two_bt: 2,
    three_bt: 3,
    four_bt: 4,
    five_bt: 5,
};

let no_of_bathrooms = "";

function selectBathroom(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".freq").removeClass("serviceoption");
    $(idClickedBlockname).addClass("serviceoption").addClass("freq");
    no_of_bathrooms = bathroomState[clickedBlock];
    //console.log(frequency);
}

$("#doneBathroom").on("click", function () {
    $("#show_st_bathroom_modal").val(no_of_bathrooms);
    if (st_frequency === "none") {
        $("#show_st_frequency_modal").val("One-time Service");
        updateStFrequency("One-time Service");
    }
    if (number_of_rooms === 0) {
        $("#show_st_room_modal").val(1);
        updateStBedroom(1);
    }
    $("#overlay").removeClass("overlay");
    $("#st_bathroom_modal").fadeOut(500);
    $("#show_st_bathroom_modal").prop("disabled", false);
    updateStBathroom(no_of_bathrooms);
});

// let navState = false;
// $("#navbartoggle").on("click", function () {
//     if (!navState) {
//         $("#nav").fadeIn(700);
//         $("#burger").removeClass("fa-bars").addClass("fa-times");
//         navState = true;
//     } else {
//         $("#nav").fadeOut(700);
//         $("#burger").removeClass("fa-times").addClass("fa-bars");
//         navState = false;
//     }
// });
//review bar
$(".skillbar").each(function () {
    $(this)
        .find(".skillbar-bar")
        .animate(
            {
                width: $(this).attr("data-percent"),
            },
            3000
        );
});

//show xxol star info
// $(".showstarinfo").on("click", function () {
//     $("#overlay2").addClass("overlay");
//     $("#overlay3").addClass("overlay");
//     $("#modal3").fadeIn(500);
// });

//selectagain
// $("#confirmxxolstar").on("click", function () {
//     $("#overlay2").removeClass("overlay");
//     $("#overlay3").removeClass("overlay");
//     $("#modal3").fadeOut(500);
// });

$(".sliderrules").slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ],
});

//DROP DOWN
$("#servicesnav").off("click");

$("#servicesnav").hover(
    function () {
        $("#dropdown").fadeIn(200);
    },
    function () {
        $("#dropdown").fadeOut(200);
        $("#dropdownsub").fadeOut(200);
    }
);

// serviceDropDownState = {
//     homeclean: "homecleaningdp",
//     caregivers: "caregiversdp",
//     salonclick: "salondp",
// };

// function changeDropDownSub(event) {
//     event.preventDefault();
//     let clickedBlock = $(event.target).attr("id");
//     console.log(clickedBlock);
//     idClickedBlockname = `#${clickedBlock}`;
//     let blockName = serviceDropDownState[clickedBlock];
//     $(".dropdownKey").fadeOut(2000).removeClass("dropwdownKey");
//     idBlockname = `#${blockName}`;
//     console.log(idBlockname);
//     $(idBlockname).fadeIn(2000).addClass("dropdownKey");
// }

// $("#homeclean").on("click", function () {
//     $("#homecleaningdp").fadeIn(2000);
// });

//ADMIN PAGES

// changepages
adminState = {
    dashboard: "dashboard_block",
    xxolstarz: "xxolstars_block",
    clientz: "clients_block",
    financez: "finances_block",
    jobz: "jobs_block",
    userz: "users_block",
    documentz: "documents_block",
};

function changeAdminBlock(event) {
    event.preventDefault();
    let clickedBlock = $(event.target).attr("id");
    console.log(clickedBlock);
    idClickedBlockname = `#${clickedBlock}`;
    // $(".bgkkk").find("span").removeClass("bg-secondary").addClass("bg-fifth");
    // $(".bgkkk").removeClass("text-secondary").removeClass("bgkkk");
    // $(idClickedBlockname)
    //     .addClass("text-secondary")
    //     .addClass("bgkkk")
    //     .find("span")
    //     .removeClass("bg-fifth")
    //     .addClass("bg-secondary");
    let blockName = adminState[clickedBlock];
    $(".adminKey").addClass("hidden").removeClass("adminKey");
    idBlockname = `#${blockName}`;
    console.log(idBlockname);
    $(idBlockname).removeClass("hidden").addClass("adminKey");
}

//personal/job history
personHistoryState = {
    personal: "personal_block",
    jobhistory: "jobhistory_block",
};

function changePJ(event) {
    event.preventDefault();
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    console.log(idClickedBlockname);
    $(".PJ").removeClass("pjactive").addClass("pjdisable").removeClass("PJ");
    $(idClickedBlockname)
        .addClass("pjactive")
        .addClass("PJ")
        .removeClass("pjdisable");
    let blockName = personHistoryState[clickedBlock];
    $(".PJb").addClass("hidden").removeClass("PJb");
    idBlockname = `#${blockName}`;
    console.log(idBlockname);
    $(idBlockname).removeClass("hidden").addClass("PJb");
}

$("#options").on("click", function () {
    $("#editmodal").show();
});

$("#showedit").on("click", function () {
    $("#xxolstars").addClass("hidden");
    $("#editform").show();
});

$("#closeedit").on("click", function (event) {
    event.preventDefault();
    $("#editform").hide();
    $("#xxolstars").removeClass("hidden");
});

//show users form
$("#addusers").on("click", function () {
    $("#userslist").addClass("hidden");
    $("#addusersform").show();
});

$("#closeusersform").on("click", function (event) {
    event.preventDefault();
    $("#addusersform").hide();
    $("#userslist").removeClass("hidden");
});

$("#opencontracts").on("click", function () {
    $("#documents").hide();
    $("#contracts_block").removeClass("hidden");
});

//XXOL STARS PROFILE

//show booking status
$(".showbookingstatus").on("click", function () {
    $("#bookingz").addClass("hidden");
    $("#inprogress").show();
});

//show booking summary
$(".showbookingsummary").on("click", function () {
    $("#offerz").addClass("hidden");
    $("#bookingsummaryz").show();
});

//show status modal
// $("#showstatusmodal").on("click", function () {
//     $("#overlay3").addClass("overlay");
//     $("#overlay4").addClass("overlay");
//     $("#statusmodal").fadeIn(500);
//     $("#showstatusmodal").prop("disabled", true);
// });

// xxolStatusState = {
//     yet: "Yet to move",
//     arrived: "Arrived",
//     work: "Working",
//     done: "Done",
//     depart: "Departed",
//     on: "On the way",
// };

// let statuz = "";

// function selectXXOLStatus(event) {
//     let clickedBlock = $(event.target).attr("id");
//     idClickedBlockname = `#${clickedBlock}`;
//     $(".statuz").removeClass("serviceoption");
//     $(idClickedBlockname).addClass("serviceoption").addClass("statuz");
//     statuz = xxolStatusState[clickedBlock];
//     console.log(statuz);
// }

// $("#doneStatus").on("click", function () {
//     $("#showstatusmodal").val(statuz);
//     $("#overlay3").removeClass("overlay");
//     $("#overlay4").removeClass("overlay");
//     $("#statusmodal").fadeOut(500);
//     $("#showstatusmodal").prop("disabled", false);
// });

//change profile block

profileBlockstate = {
    bookingprofile: "booking_block_profile",
    offers: "offers_block",
    profile: "myprofile_block",
};

function changeProfileBlock(event) {
    event.preventDefault();
    $("#overlay4").removeClass("overlay");
    $("#overlay3").removeClass("overlay");
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".prof").find("span").removeClass("bg-secondary").addClass("bg-fifth");
    $(".prof").removeClass("text-secondary").removeClass("prof");
    $(idClickedBlockname)
        .addClass("text-secondary")
        .addClass("prof")
        .find("span")
        .removeClass("bg-fifth")
        .addClass("bg-secondary");
    let blockName = profileBlockstate[clickedBlock];
    $(".profk").addClass("hidden").removeClass("profk");
    idBlockname = `#${blockName}`;
    console.log(idBlockname);
    $(idBlockname).removeClass("hidden").addClass("profk");
}

//DATE AND TIME PICKER
$(function () {
    $("#datepicker").datepicker({ minDate: 0 });
});

$("#timepicker").timepicker({
    timeFormat: "h:mm p",
    interval: 60,
    // minTime: "10",
    // maxTime: "6:00pm",
    defaultTime: "11",
    startTime: "10:00",
    dynamic: false,
    dropdown: true,
    scrollbar: true,
});

//GOOGLE MAPS API

// var map;

// function initMap() {
//     var options = {
//         center: { lat: -34.397, lng: 150.644 },
//         zoom: 8,
//     };

//     map = new google.maps.Map(document.getElementById("map"), options);
// }

//Booking services
// let serviceKey = $("#servicesKey").html();
// let serviceKeyId = `#${serviceKey}`;

// $(serviceKeyId).removeClass("hidden");
// console.log(serviceKey);

//CAREGIVERS LOCATION MODAL
$("#showcgLocationmodal").on("click", function () {
    $("#cgoverlay").addClass("overlay");
    $("#cgLocationmodal").fadeIn(500);
    $("#showcgLocationmodal").prop("disabled", true);
});

//Select Location Services
cgLocationState = {
    vic_cg: "Victoria Island",
    ikoyi_cg: "Ikoyi",
    lekki_cg: "Lekki",
    ajah_cg: "Ajah",
    ogudu_cg: "Ogudu",
    ikeja_cg: "Ikeja GRA",
    maryland_cg: "Maryland",
    opebi_cg: "Opebi",
    yaba_cg: "Yaba",
    magodo_cg: "Magodo",
    gbagada_cg: "Gbagada",
    ogba_cg: "Ogba",
    akran_cg: "Oba Akran",
    ill_cg: "Illupeju",
    fest_cg: "Festac",
    suru_cg: "Surulere",
    ojod_cg: "Ojodu",
    ore_cg: "Oregun",
    ala_cg: "Alausa",
};

let cgLocation = "";

function selectcgLocation(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    cgLocation = cgLocationState[clickedBlock];
    // console.log(cgLocation);
}

$("#donecgLocation").on("click", function () {
    $("#showcgLocationmodal").val(cgLocation);
    $("#cgoverlay").removeClass("overlay");
    $("#cgLocationmodal").fadeOut(500);
    $("#showcgLocationmodal").prop("disabled", false);
    updateCgLocation(cgLocation);
});

//CARE GIVERS SERVICES MODAL
$("#showcgservicesmodal").on("click", function () {
    $("#cgoverlay").addClass("overlay");
    $("#cgservicesmodal").fadeIn(500);
    $("#showcgservicesmodal").prop("disabled", true);
});

//Select frequency
cgServicesState = {
    sitter: "Home nanny/Baby sitter",
    aged: "Care for the aged.",
    special_needs: "Care for people with special needs.",
};

let cgServices = "";

function selectcgServices(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    cgServices = cgServicesState[clickedBlock];
    // console.log(cgServices);
}

$("#donecgServices").on("click", function () {
    $("#showcgservicesmodal").val(cgServices);
    $("#cgoverlay").removeClass("overlay");
    $("#cgservicesmodal").fadeOut(500);
    $("#showcgservicesmodal").prop("disabled", false);
    updateCgService(cgServices);
});

//CARE GIVERS FREQUENCY MODAL
$("#showcgfrequencymodal").on("click", function () {
    $("#cgoverlay").addClass("overlay");
    $("#cgfrequencymodal").fadeIn(500);
    $("#showcgfrequencymodal").prop("disabled", true);
});

//Select frequency
cgFrequencyState = {
    one_off: "One-off",
    in: "Live in",
    out: "Live out",
};

let cgFrequency = "";

function selectCGFrequency(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    cgFrequency = cgFrequencyState[clickedBlock];
    // console.log(cgFrequency);
}

$("#doneCgFrequency").on("click", function () {
    $("#showcgfrequencymodal").val(cgFrequency);
    $("#cgoverlay").removeClass("overlay");
    $("#cgfrequencymodal").fadeOut(500);
    $("#showcgfrequencymodal").prop("disabled", false);
    updateCgFrequency(cgFrequency);
});

//CARE GIVERS PEOPLE MODAL
$("#show_cg_people_modal").on("click", function () {
    $("#cgoverlay").addClass("overlay");
    $("#cg_people_modal").fadeIn(500);
    $("#show_cg_people_modal").prop("disabled", true);
});

//Select people
cgPeopleState = {
    one_cgp: "1",
    two_cgp: "2",
    three_cgp: "3",
    four_cgp: "4",
    five_cgp: "5",
};

let cgPeople = "";

function selectPeople(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    cgPeople = cgPeopleState[clickedBlock];
    // console.log(cgFrequency);
}

$("#donePeople").on("click", function () {
    $("#show_cg_people_modal").val(cgPeople);
    $("#cgoverlay").removeClass("overlay");
    $("#cg_people_modal").fadeOut(500);
    $("#show_cg_people_modal").prop("disabled", false);
    updateCgPeople(cgPeople);
});

//CARE GIVERS LANGUAGE MODAL
$("#show_cg_language_modal").on("click", function () {
    $("#cgoverlay").addClass("overlay");
    $("#cg_language_modal").fadeIn(500);
    $("#show_cg_language_modal").prop("disabled", true);
});

//Select language
cgLanguageState = {
    english: "English",
    french: "French",
    local_dialect: "Local Dialect",
};

let cgLanguage = "";

function selectLanguage(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    cgLanguage = cgLanguageState[clickedBlock];
    // console.log(cgFrequency);
}

$("#doneLanguage").on("click", function () {
    $("#show_cg_language_modal").val(cgLanguage);
    $("#cgoverlay").removeClass("overlay");
    $("#cg_language_modal").fadeOut(500);
    $("#show_cg_language_modal").prop("disabled", false);
    updateCgLanguage(cgLanguage);
});

//CARE GIVERS AGE MODAL
$("#show_cg_age_modal").on("click", function () {
    $("#cgoverlay").addClass("overlay");
    $("#cg_age_modal").fadeIn(500);
    $("#show_cg_age_modal").prop("disabled", true);
});

//Select language
cgAgeState = {
    "0_10": "0-10",
    "10_20": "10-20",
    "20_30": "20-30",
    "30_40": "30-40",
    "40_50": "40-50",
    "50_60": "50-60",
    "60_70": "60-70",
    "70_80": "70-80",
    "80_90": "80-90",
    "90_100": "90-100",
    "100_plus": "100+",
};

let cgAge = "";

function selectAge(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    cgAge = cgAgeState[clickedBlock];
    // console.log(cgFrequency);
}

$("#doneAge").on("click", function () {
    $("#show_cg_age_modal").val(cgAge);
    $("#cgoverlay").removeClass("overlay");
    $("#cg_age_modal").fadeOut(500);
    $("#show_cg_age_modal").prop("disabled", false);
    updateCgAge(cgAge);
});

//SPA

//SPA  SERVICES MODAL
$("#showspServicesmodal").on("click", function () {
    //    console.log("hello");
    $("#spoverlay").addClass("overlay");
    $("#spServicesmodal").fadeIn(500);
    $("#showspServicesmodal").prop("disabled", true);
});

//Select frequency
spServicesState = {
    normal: "Normal/Swedish massage",
    deep: "Deep massage",
    pre: "Pre-natal massage",
    trigger: "Trigger and Reflexology",
};

let spServices = "";

function selectspServices(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    spServices = spServicesState[clickedBlock];
    // console.log(spServices);
}

$("#donespServices").on("click", function () {
    $("#showspServicesmodal").val(spServices);
    $("#spoverlay").removeClass("overlay");
    $("#spServicesmodal").fadeOut(500);
    $("#showspServicesmodal").prop("disabled", false);
    updateSpServices(spServices);
});

//SPA  FREQUENCY MODAL
$("#showspfrequencymodal").on("click", function () {
    $("#spoverlay").addClass("overlay");
    $("#spfrequencymodal").fadeIn(500);
    $("#showspfrequencymodal").prop("disabled", true);
});

//Select Spa frequency
spFrequencyState = {
    one_off_sp: "One-off",
    in_sp: "Live in",
    out_sp: "Live out",
};

let spFrequency = "";

function selectSPFrequency(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    spFrequency = spFrequencyState[clickedBlock];
    // console.log(cgFrequency);
}

$("#doneSpFrequency").on("click", function () {
    $("#showspfrequencymodal").val(spFrequency);
    $("#spoverlay").removeClass("overlay");
    $("#spfrequencymodal").fadeOut(500);
    $("#showspfrequencymodal").prop("disabled", false);
    updateSpFrequency(spFrequency);
});

//SPA LOCATION MODAL
$("#showspLocationmodal").on("click", function () {
    $("#spoverlay").addClass("overlay");
    $("#spLocationmodal").fadeIn(500);
    $("#showspLocationmodal").prop("disabled", true);
});

//Select Spa Location
let spLocationState = {
    vic_spa: "Victoria Island",
    ikoyi_spa: "Ikoyi",
    lekki_spa: "Lekki",
    ajah_spa: "Ajah",
    ogudu_spa: "Ogudu",
    ikeja_spa: "Ikeja GRA",
    maryland_spa: "Maryland",
    opebi_spa: "Opebi",
    yaba_spa: "Yaba",
    magodo_spa: "Magodo",
    gbagada_spa: "Gbagada",
    ogba_spa: "Ogba",
    akran_spa: "Oba Akran",
    ill_spa: "Illupeju",
    fest_spa: "Festac",
    suru_spa: "Surulere",
    ojod_spa: "Ojodu",
    ore_spa: "Oregun",
    ala_spa: "Alausa",
};

let spLocation = "";

function selectspLocation(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    spLocation = spLocationState[clickedBlock];
    // console.log(cgFrequency);
}

$("#donespLocation").on("click", function () {
    $("#showspLocationmodal").val(spLocation);
    $("#spoverlay").removeClass("overlay");
    $("#spLocationmodal").fadeOut(500);
    $("#showspLocationmodal").prop("disabled", false);
    updateSpLocation(spLocation);
});

//SPA  GENDER MODAL
$("#showspGendermodal").on("click", function () {
    $("#spoverlay").addClass("overlay");
    $("#spGendermodal").fadeIn(500);
    $("#showspGendermodal").prop("disabled", true);
});

//Select Spa
spGenderState = {
    male: "Male",
    female: "Female",
};

let spGender = "";

function selectspGender(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    spGender = spGenderState[clickedBlock];
    // console.log(cgFrequency);
}

$("#donespGender").on("click", function () {
    $("#showspGendermodal").val(spGender);
    $("#spoverlay").removeClass("overlay");
    $("#spGendermodal").fadeOut(500);
    $("#showspGendermodal").prop("disabled", false);
    updateSpGender(spGender);
});

//SALON SERVICES MODAL
$("#showslServicesmodal").on("click", function () {
    $("#sloverlay").addClass("overlay");
    $("#slServicesmodal").fadeIn(500);
    $("#showslServicesmodal").prop("disabled", true);
});

//Select Salon Services
slServicesState = {
    pedi_madi: "Pedicure and Manicure",
    makeup: "Make-up",
    male_hair_grooming: "Male Hair Grooming",
    female_hair_grooming: "Female Hair Grooming",
};

let slServices = "";

function selectslServices(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    slServices = slServicesState[clickedBlock];
    // console.log(cgFrequency);
}

$("#doneslServices").on("click", function () {
    $("#showslServicesmodal").val(slServices);
    $("#sloverlay").removeClass("overlay");
    $("#slServicesmodal").fadeOut(500);
    $("#showslServicesmodal").prop("disabled", false);
    updateSlServices(slServices);
});

// $("#showslServicesmodal").change(function () {
//     console.log("preshyjones");
//     let inputValue = $(this).val();
//     console.log(inputValue);

//     if (
//         inputValue == "Male Hair Grooming" ||
//         inputValue == "Female Hair Grooming"
//     ) {
//         $("#hair_grooming_prompt").fadeIn(900);
//     }
// });

//SALON LOCATION MODAL
$("#showslLocationmodal").on("click", function () {
    $("#sloverlay").addClass("overlay");
    $("#slLocationmodal").fadeIn(500);
    $("#showslLocationmodal").prop("disabled", true);
});

//Select Location Services
slLocationState = {
    vic_sl: "Victoria Island",
    ikoyi_sl: "Ikoyi",
    lekki_sl: "Lekki",
    ajah_sl: "Ajah",
    ogudu_sl: "Ogudu",
    ikeja_sl: "Ikeja GRA",
    maryland_sl: "Maryland",
    opebi_sl: "Opebi",
    yaba_sl: "Yaba",
    magodo_sl: "Magodo",
    gbagada_sl: "Gbagada",
    ogba_sl: "Ogba",
    akran_sl: "Oba Akran",
    ill_sl: "Illupeju",
    fest_sl: "Festac",
    suru_sl: "Surulere",
    ojod_sl: "Ojodu",
    ore_sl: "Oregun",
    ala_sl: "Alausa",
};

let slLocation = "";

function selectslLocation(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    slLocation = slLocationState[clickedBlock];
    // console.log(cgFrequency);
}

$("#doneslLocation").on("click", function () {
    $("#showslLocationmodal").val(slLocation);
    $("#sloverlay").removeClass("overlay");
    $("#slLocationmodal").fadeOut(500);
    $("#showslLocationmodal").prop("disabled", false);
    updateSlLocation(slLocation);
});

//SALON PERSONS MODAL
$("#show_sl_persons_modal").on("click", function () {
    $("#sloverlay").addClass("overlay");
    $("#sl_persons_modal").fadeIn(500);
    $("#show_sl_persons_modal").prop("disabled", true);
});

//Select Spa persons
let slPersonsState = {
    one_slp: "1",
    two_slp: "2",
    three_slp: "3",
    four_slp: "4",
    five_slp: "5",
};

let slPersons = "";

function selectslPersons(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    slPersons = slPersonsState[clickedBlock];
    // console.log(cgFrequency);
}

$("#doneslPersons").on("click", function () {
    $("#show_sl_persons_modal").val(slPersons);
    $("#sloverlay").removeClass("overlay");
    $("#sl_persons_modal").fadeOut(500);
    $("#show_sl_persons_modal").prop("disabled", false);
    updateSlPersons(slPersons);
});

//LOCATION
//STANDARD HOME CLEANING
//  Show location modal
$("#show_st_location_modal").on("click", function () {
    $("#overlay").addClass("overlay");
    $("#st_location_modal").fadeIn(500);
    $("#show_st_location_modal").prop("disabled", true);
});

//Select location
let stLocationState = {
    vic: "Victoria Island",
    ikoyi: "Ikoyi",
    lekki: "Lekki",
    ajah: "Ajah",
    ogudu: "Ogudu",
    ikeja: "Ikeja GRA",
    maryland: "Maryland",
    opebi: "Opebi",
    yaba: "Yaba",
    magodo: "Magodo",
    gbagada: "Gbagada",
    ogba: "Ogba",
    akran: "Oba Akran",
    ill: "Illupeju",
    fest: "Festac",
    suru: "Surulere",
    ojod: "Ojodu",
    ore: "Oregun",
    ala: "Alausa",
};

let stLocation = "";

function selectstLocation(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".freq").removeClass("serviceoption");
    $(idClickedBlockname).addClass("serviceoption").addClass("freq");
    stLocation = stLocationState[clickedBlock];
    // console.log(stLocation);
}

$("#donestLocation").on("click", function () {
    $("#show_st_location_modal").val(stLocation);
    $("#overlay").removeClass("overlay");
    $("#st_location_modal").fadeOut(500);
    $("#show_st_location_modal").prop("disabled", false);
    updateStLocation(stLocation);
});

//OFFICE CLEANING FLOORS MODAL
$("#show_off_floors_modal").on("click", function () {
    $("#of_overlay").addClass("overlay");
    $("#off_floors_modal").fadeIn(500);
    $("#show_off_floors_modal").prop("disabled", true);
});

//Select Spa persons
let offFloorsState = {
    one_offi: "1",
    two_offi: "2",
    three_offi: "3",
    four_offi: "4",
    five_offi: "5",
};

let offFloors = "";

function selectoffFloors(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    offFloors = offFloorsState[clickedBlock];
    // console.log(cgFrequency);
}

$("#doneoffFloors").on("click", function () {
    $("#show_off_floors_modal").val(offFloors);
    $("#of_overlay").removeClass("overlay");
    $("#off_floors_modal").fadeOut(500);
    $("#show_off_floors_modal").prop("disabled", false);
    $("#off_floors_sum").html(offFloors);
});

//OFFICE CLEANING ROOMS MODAL
$("#show_off_rooms_modal").on("click", function () {
    $("#of_overlay").addClass("overlay");
    $("#off_rooms_modal").fadeIn(500);
    $("#show_off_rooms_modal").prop("disabled", true);
});

let offRoomsState = {
    one_offi_rm: "1",
    two_offi_rm: "2",
    three_offi_rm: "3",
    four_offi_rm: "4",
    five_offi_rm: "5",
};

let offRooms = "";

function selectoffRooms(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    offRooms = offRoomsState[clickedBlock];
    // console.log(cgFrequency);
}

$("#doneoffRooms").on("click", function () {
    $("#show_off_rooms_modal").val(offRooms);
    $("#of_overlay").removeClass("overlay");
    $("#off_rooms_modal").fadeOut(500);
    $("#show_off_rooms_modal").prop("disabled", false);
    $("#off_rooms_sum").html(offRooms);
});

//OFFICE CLEANING BATHROOMS MODAL
$("#show_off_bathrooms_modal").on("click", function () {
    $("#of_overlay").addClass("overlay");
    $("#off_bathrooms_modal").fadeIn(500);
    $("#show_off_bathrooms_modal").prop("disabled", true);
});

let offBathroomsState = {
    one_offi_bm: "1",
    two_offi_bm: "2",
    three_offi_bm: "3",
    four_offi_bm: "4",
    five_offi_bm: "5",
};

let offBathrooms = "";

function selectoffBathrooms(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    offBathrooms = offBathroomsState[clickedBlock];
    // console.log(cgFrequency);
}

$("#doneoffBathrooms").on("click", function () {
    $("#show_off_bathrooms_modal").val(offBathrooms);
    $("#of_overlay").removeClass("overlay");
    $("#off_bathrooms_modal").fadeOut(500);
    $("#show_off_bathrooms_modal").prop("disabled", false);
    $("#off_bathrooms_sum").html(offBathrooms);
});

//OFFICE FREQUENCY MODAL
//  Show frequency modal
$("#show_off_frequency_modal").on("click", function () {
    $("#of_overlay").addClass("overlay");
    $("#off_frequency_modal").fadeIn(500);
    $("#show_off_frequency_modal").prop("disabled", true);
});

//Select frequency
let offFrequencyState = {
    one_time_off: "One-time Service",
    week_off: "Twice weekly",
    month_off: "Twice monthly",
};

let offFrequency = "";

function selectoffFrequency(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".freq").removeClass("serviceoption");
    $(idClickedBlockname).addClass("serviceoption").addClass("freq");
    offFrequency = offFrequencyState[clickedBlock];
    console.log(offFrequency);
}

$("#doneoffFrequency").on("click", function () {
    $("#show_off_frequency_modal").val(offFrequency);
    $("#of_overlay").removeClass("overlay");
    $("#off_frequency_modal").fadeOut(500);
    $("#show_off_frequency_modal").prop("disabled", false);
    $("#off_frequency_sum").html(offFrequency);
});

//OFFICE LOCATION MODAL
$("#showoffLocationmodal").on("click", function () {
    $("#of_overlay").addClass("overlay");
    $("#offLocationmodal").fadeIn(500);
    $("#showoffLocationmodal").prop("disabled", true);
});

//Select Location Services
offLocationState = {
    vic_off: "Victoria Island",
    ikoyi_off: "Ikoyi",
    lekki_off: "Lekki",
    ajah_off: "Ajah",
    ogudu_off: "Ogudu",
    ikeja_off: "Ikeja GRA",
    maryland_off: "Maryland",
    opebi_off: "Opebi",
    yaba_off: "Yaba",
    magodo_off: "Magodo",
    gbagada_off: "Gbagada",
    ogba_off: "Ogba",
    akran_off: "Oba Akran",
    ill_off: "Illupeju",
    fest_off: "Festac",
    suru_off: "Surulere",
    ojod_off: "Ojodu",
    ore_off: "Oregun",
    ala_off: "Alausa",
};

let offLocation = "";

function selectoffLocation(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".offfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("offfreq");
    offLocation = offLocationState[clickedBlock];
    console.log(offLocation);
}

$("#doneoffLocation").on("click", function () {
    $("#showoffLocationmodal").val(offLocation);
    $("#of_overlay").removeClass("overlay");
    $("#offLocationmodal").fadeOut(500);
    $("#showoffLocationmodal").prop("disabled", false);
    $("#off_location_sum").html(offLocation);
});

//Deep cleaning SERVICES MODAL
$("#show_dp_services_modal").on("click", function () {
    $("#dp_overlay").addClass("overlay");
    $("#dpServicesmodal").fadeIn(500);
    $("#show_dp_services_modal").prop("disabled", true);
});

//Select Salon Services
dpServicesState = {
    deep_dp: "Deep cleaning",
    post_dp: "Post construction cleaning",
};

let dpServices = "";

function selectdpServices(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    dpServices = dpServicesState[clickedBlock];
    // console.log(cgFrequency);
}

$("#donedpServices").on("click", function () {
    $("#show_dp_services_modal").val(dpServices);
    $("#dp_overlay").removeClass("overlay");
    $("#dpServicesmodal").fadeOut(500);
    $("#show_dp_services_modal").prop("disabled", false);
    $("#deep_service_sum").html(dpServices);
});

//OFFICE CLEANING FLOORS MODAL
$("#show_dp_floors_modal").on("click", function () {
    $("#dp_overlay").addClass("overlay");
    $("#dp_floors_modal").fadeIn(500);
    $("#show_dp_floors_modal").prop("disabled", true);
});

//Select Spa persons
let dpFloorsState = {
    one_dp: "1",
    two_dp: "2",
    three_dp: "3",
    four_dp: "4",
    five_dp: "5",
};

let dpFloors = "";

function selectdpFloors(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    dpFloors = dpFloorsState[clickedBlock];
    // console.log(cgFrequency);
}

$("#donedpFloors").on("click", function () {
    $("#show_dp_floors_modal").val(dpFloors);
    $("#dp_overlay").removeClass("overlay");
    $("#dp_floors_modal").fadeOut(500);
    $("#show_dp_floors_modal").prop("disabled", false);
    $("#deep_floors_sum").html(dpFloors);
});

//deep CLEANING ROOMS MODAL
$("#show_dp_rooms_modal").on("click", function () {
    $("#dp_overlay").addClass("overlay");
    $("#dp_rooms_modal").fadeIn(500);
    $("#show_dp_rooms_modal").prop("disabled", true);
});

let dpRoomsState = {
    one_dp_rm: "1",
    two_dp_rm: "2",
    three_dp_rm: "3",
    four_dp_rm: "4",
    five_dp_rm: "5",
};

let dpRooms = "";

function selectdpRooms(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    dpRooms = dpRoomsState[clickedBlock];
    // console.log(cgFrequency);
}

$("#donedpRooms").on("click", function () {
    $("#show_dp_rooms_modal").val(dpRooms);
    $("#dp_overlay").removeClass("overlay");
    $("#dp_rooms_modal").fadeOut(500);
    $("#show_dp_rooms_modal").prop("disabled", false);
    $("#deep_rooms_sum").html(dpRooms);
});

//DEEP CLEANING CLEANING BATHROOMS MODAL
$("#show_dp_bathrooms_modal").on("click", function () {
    $("#dp_overlay").addClass("overlay");
    $("#dp_bathrooms_modal").fadeIn(500);
    $("#show_dp_bathrooms_modal").prop("disabled", true);
});

let dpBathroomsState = {
    one_dp_bm: "1",
    two_dp_bm: "2",
    three_dp_bm: "3",
    four_dp_bm: "4",
    five_dp_bm: "5",
};

let dpBathrooms = "";

function selectdpBathrooms(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    dpBathrooms = dpBathroomsState[clickedBlock];
    // console.log(cgFrequency);
}

$("#donedpBathrooms").on("click", function () {
    $("#show_dp_bathrooms_modal").val(dpBathrooms);
    $("#dp_overlay").removeClass("overlay");
    $("#dp_bathrooms_modal").fadeOut(500);
    $("#show_dp_bathrooms_modal").prop("disabled", false);
    $("#deep_bathrooms_sum").html(dpBathrooms);
});

//DEEP CLEANING LOCATION MODAL
$("#showdpLocationmodal").on("click", function () {
    $("#dp_overlay").addClass("overlay");
    $("#dpLocationmodal").fadeIn(500);
    $("#showdpLocationmodal").prop("disabled", true);
});

//Select Location Services
dpLocationState = {
    vic_dp: "Victoria Island",
    ikoyi_dp: "Ikoyi",
    lekki_dp: "Lekki",
    ajah_dp: "Ajah",
    ogudu_dp: "Ogudu",
    ikeja_dp: "Ikeja GRA",
    maryland_dp: "Maryland",
    opebi_dp: "Opebi",
    yaba_dp: "Yaba",
    magodo_dp: "Magodo",
    gbagada_dp: "Gbagada",
    ogba_dp: "Ogba",
    akran_dp: "Oba Akran",
    ill_dp: "Illupeju",
    fest_dp: "Festac",
    suru_dp: "Surulere",
    ojod_dp: "Ojodu",
    ore_dp: "Oregun",
    ala_dp: "Alausa",
};

let dpLocation = "";

function selectdpLocation(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".dpfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("dpfreq");
    dpLocation = dpLocationState[clickedBlock];
    // console.log(dpLocation);
}

$("#donedpLocation").on("click", function () {
    $("#showdpLocationmodal").val(dpLocation);
    $("#dp_overlay").removeClass("overlay");
    $("#dpLocationmodal").fadeOut(500);
    $("#showdpLocationmodal").prop("disabled", false);
    $("#deep_location_sum").html(dpLocation);
});

//RELOCATION MODAL
$("#show_type_of_property_modal").on("click", function () {
    $("#relocation_overlay").addClass("overlay");
    $("#relocation_modal").fadeIn(500);
    $("#show_type_of_property_modal").prop("disabled", true);
});

let relocationState = {
    office_rel: "Office",
    residential_rel: "Residential",
};

let relocation = "";

function selectrelocation(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    relocation = relocationState[clickedBlock];
    // console.log(cgFrequency);
}

$("#donerelocation").on("click", function () {
    $("#show_type_of_property_modal").val(relocation);
    $("#relocation_overlay").removeClass("overlay");
    $("#relocation_modal").fadeOut(500);
    $("#show_type_of_property_modal").prop("disabled", false);
    updaterelocation(relocation);
});

//RELOCATION ROOMS MODAL
$("#show_rel_rooms_modal").on("click", function () {
    $("#relocation_overlay").addClass("overlay");
    $("#rel_rooms_modal").fadeIn(500);
    $("#show_rel_rooms_modal").prop("disabled", true);
});

let relocationRoomsState = {
    one_rel: "1",
    two_rel: "2",
    three_rel: "3",
    four_rel: "4",
    five_rel: "5",
};

let relocationRooms = "";

function selectrelocationRooms(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    relocationRooms = relocationRoomsState[clickedBlock];
    // console.log(cgFrequency);
}

$("#donerelocationRooms").on("click", function () {
    $("#show_rel_rooms_modal").val(relocationRooms);
    $("#relocation_overlay").removeClass("overlay");
    $("#rel_rooms_modal").fadeOut(500);
    $("#show_rel_rooms_modal").prop("disabled", false);
    updaterelocationRooms(relocationRooms);
});

//RELOCATION INTERSTATE OR INTRASTATE MODAL
$("#show_interstate_intrastate_modal").on("click", function () {
    $("#relocation_overlay").addClass("overlay");
    $("#rel_interstate_intrastate_modal").fadeIn(500);
    $("#show_interstate_intrastate_modal").prop("disabled", true);
});

let relocationInterIntraState = {
    rel_interstate: "Interstate",
    rel_intrastate: "Intrastate",
};

let relocationInterIntra = "";

function selectrelocationInterIntra(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    $(".cgfreq").removeClass("serviceoption");
    // console.log(idClickedBlockname);
    $(idClickedBlockname).addClass("serviceoption").addClass("cgfreq");
    relocationInterIntra = relocationInterIntraState[clickedBlock];
    // console.log(cgFrequency);
}

$("#donerelocationInterIntra").on("click", function () {
    $("#show_interstate_intrastate_modal").val(relocationInterIntra);
    $("#relocation_overlay").removeClass("overlay");
    $("#rel_interstate_intrastate_modal").fadeOut(500);
    $("#show_interstate_intrastate_modal").prop("disabled", false);
    updaterelocationInterIntra(relocationInterIntra);
});

//EXTRA SERVICES

let extraServicesArray = [];

function selectExtraService(event) {
    let clickedBlock = $(event.target).attr("id");
    idClickedBlockname = `#${clickedBlock}`;
    console.log(clickedBlock);
    console.log(extraServicesArray);
    console.log(extraServicesArray.indexOf(clickedBlock) !== -1);
    if (extraServicesArray.indexOf(clickedBlock) !== -1) {
        $(idClickedBlockname)
            .removeClass("text-active")
            .parent()
            .removeClass("checkborder");
        console.log(clickedBlock);
        extraServicesArray.splice(extraServicesArray.indexOf(clickedBlock), 1);
    } else {
        $(idClickedBlockname)
            .addClass("text-active")
            .parent()
            .addClass("checkborder");
        extraServicesArray.push(clickedBlock);
    }
    console.log(extraServicesArray);
    updateExtraServices(extraServicesArray);
}

//LOG IN AS USER AND XXOLSTAR
// $("#loginButton").off("click");

// $("#loginButton").hover(
//     function () {
//         $("#loginKeys").fadeIn(200);
//     },
//     function () {
//         $("#loginKeys").fadeOut(200);
//     }
// );

// var loginState = false;

// $("#loginButton").on("click", function () {
//     if (loginState === false) {
//         // console.log("hello");
//         $("#loginKeys").removeClass("hidden");
//         loginState = true;
//     } else if (loginState === true) {
//         // console.log("hi");
//         $("#loginKeys").addClass("hidden");
//         loginState = false;
//     }
// });

//STANDARD HOME CLEANING PRICING
/* Set rates */
var dataTree = {
    standard_home_cleaning: {
        none: {
            victoria_island: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            ikoyi: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            lekki: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            ajah: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            ogudu: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            ikeja: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            ill: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            maryland: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            ore: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            ala: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            opebi: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            yaba: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            magodo: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            gbagada: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            ogba: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            fest: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            suru: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            ojod: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
            akran: {
                0: 0,
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0,
            },
        },
        one_time: {
            victoria_island: {
                0: 0,
                1: 13000,
                2: 17000,
                3: 22000,
                4: 28000,
                5: 34000,
            },
            ikoyi: {
                0: 0,
                1: 13000,
                2: 17000,
                3: 22000,
                4: 28000,
                5: 34000,
            },
            lekki: {
                0: 0,
                1: 11000,
                2: 15000,
                3: 19000,
                4: 25000,
                5: 30000,
            },
            ajah: {
                0: 0,
                1: 11000,
                2: 15000,
                3: 19000,
                4: 25000,
                5: 30000,
            },
            ogudu: {
                0: 0,
                1: 11000,
                2: 15000,
                3: 17500,
                4: 25000,
                5: 28000,
            },
            ikeja: {
                0: 0,
                1: 11000,
                2: 15000,
                3: 17500,
                4: 25000,
                5: 28000,
            },
            ill: {
                0: 0,
                1: 11000,
                2: 15000,
                3: 17500,
                4: 25000,
                5: 28000,
            },
            maryland: {
                0: 0,
                1: 10000,
                2: 13000,
                3: 16000,
                4: 22000,
                5: 26500,
            },
            ore: {
                0: 0,
                1: 10000,
                2: 13000,
                3: 16000,
                4: 22000,
                5: 26500,
            },
            ala: {
                0: 0,
                1: 10000,
                2: 13000,
                3: 16000,
                4: 22000,
                5: 26500,
            },
            opebi: {
                0: 0,
                1: 10000,
                2: 13000,
                3: 16000,
                4: 22000,
                5: 26500,
            },
            yaba: {
                0: 0,
                1: 10000,
                2: 13000,
                3: 16000,
                4: 22000,
                5: 26500,
            },
            magodo: {
                0: 0,
                1: 11000,
                2: 17000,
                3: 20500,
                4: 24500,
                5: 28000,
            },
            gbagada: {
                0: 0,
                1: 8000,
                2: 11000,
                3: 14000,
                4: 18000,
                5: 23500,
            },
            ogba: {
                0: 0,
                1: 8000,
                2: 11000,
                3: 14000,
                4: 18000,
                5: 23500,
            },
            fest: {
                0: 0,
                1: 8000,
                2: 11000,
                3: 14000,
                4: 18000,
                5: 23500,
            },
            suru: {
                0: 0,
                1: 8000,
                2: 11000,
                3: 14000,
                4: 18000,
                5: 23500,
            },
            ojod: {
                0: 0,
                1: 8000,
                2: 11000,
                3: 14000,
                4: 18000,
                5: 23500,
            },
            akran: {
                0: 0,
                1: 8000,
                2: 11000,
                3: 14000,
                4: 18000,
                5: 23500,
            },
        },
        week: {
            victoria_island: {
                0: 0,
                1: 18200,
                2: 23800,
                3: 30800,
                4: 39200,
                5: 47600,
            },
            ikoyi: {
                0: 0,
                1: 18200,
                2: 23800,
                3: 30800,
                4: 39200,
                5: 47600,
            },
            lekki: {
                0: 0,
                1: 15400,
                2: 21000,
                3: 26600,
                4: 42000,
                5: 42000,
            },
            ajah: {
                0: 0,
                1: 15400,
                2: 21000,
                3: 26600,
                4: 42000,
                5: 42000,
            },
            ogudu: {
                0: 0,
                1: 15400,
                2: 21000,
                3: 24500,
                4: 35000,
                5: 39200,
            },
            ikeja: {
                0: 0,
                1: 15400,
                2: 21000,
                3: 24500,
                4: 35000,
                5: 39200,
            },
            ill: {
                0: 0,
                1: 15400,
                2: 21000,
                3: 24500,
                4: 35000,
                5: 39200,
            },
            maryland: {
                0: 0,
                1: 14000,
                2: 18200,
                3: 22400,
                4: 30800,
                5: 37100,
            },
            ore: {
                0: 0,
                1: 14000,
                2: 18200,
                3: 22400,
                4: 30800,
                5: 37100,
            },
            ala: {
                0: 0,
                1: 14000,
                2: 18200,
                3: 22400,
                4: 30800,
                5: 37100,
            },
            opebi: {
                0: 0,
                1: 14000,
                2: 18200,
                3: 22400,
                4: 30800,
                5: 37100,
            },
            yaba: {
                0: 0,
                1: 14000,
                2: 18200,
                3: 22400,
                4: 30800,
                5: 37100,
            },
            magodo: {
                0: 0,
                1: 15400,
                2: 23800,
                3: 28700,
                4: 34300,
                5: 39200,
            },
            gbagada: {
                0: 0,
                1: 11200,
                2: 15400,
                3: 19600,
                4: 25200,
                5: 32900,
            },
            ogba: {
                0: 0,
                1: 11200,
                2: 15400,
                3: 19600,
                4: 25200,
                5: 32900,
            },
            fest: {
                0: 0,
                1: 11200,
                2: 15400,
                3: 19600,
                4: 25200,
                5: 32900,
            },
            suru: {
                0: 0,
                1: 11200,
                2: 15400,
                3: 19600,
                4: 25200,
                5: 32900,
            },
            ojod: {
                0: 0,
                1: 11200,
                2: 15400,
                3: 19600,
                4: 25200,
                5: 32900,
            },
            akran: {
                0: 0,
                1: 11200,
                2: 15400,
                3: 19600,
                4: 25200,
                5: 32900,
            },
        },
        month: {
            victoria_island: {
                0: 0,
                1: 19500,
                2: 25500,
                3: 33000,
                4: 42000,
                5: 51000,
            },
            ikoyi: {
                0: 0,
                1: 19500,
                2: 25500,
                3: 33000,
                4: 42000,
                5: 51000,
            },
            lekki: {
                0: 0,
                1: 16500,
                2: 22500,
                3: 28500,
                4: 37500,
                5: 45000,
            },
            ajah: {
                0: 0,
                1: 16500,
                2: 22500,
                3: 28500,
                4: 37500,
                5: 45000,
            },
            ogudu: {
                0: 0,
                1: 16500,
                2: 22500,
                3: 26250,
                4: 37500,
                5: 42000,
            },
            ikeja: {
                0: 0,
                1: 16500,
                2: 22500,
                3: 26250,
                4: 37500,
                5: 42000,
            },
            ill: {
                0: 0,
                1: 16500,
                2: 22500,
                3: 26250,
                4: 37500,
                5: 42000,
            },
            maryland: {
                0: 0,
                1: 15000,
                2: 19500,
                3: 24000,
                4: 33000,
                5: 39750,
            },
            ore: {
                0: 0,
                1: 15000,
                2: 19500,
                3: 24000,
                4: 33000,
                5: 39750,
            },
            ala: {
                0: 0,
                1: 15000,
                2: 19500,
                3: 24000,
                4: 33000,
                5: 39750,
            },
            opebi: {
                0: 0,
                1: 15000,
                2: 19500,
                3: 24000,
                4: 33000,
                5: 39750,
            },
            yaba: {
                0: 0,
                1: 15000,
                2: 19500,
                3: 24000,
                4: 33000,
                5: 39750,
            },
            magodo: {
                0: 0,
                1: 16500,
                2: 25500,
                3: 30750,
                4: 36750,
                5: 42000,
            },
            gbagada: {
                0: 0,
                1: 12000,
                2: 16500,
                3: 21000,
                4: 27000,
                5: 35250,
            },
            ogba: {
                0: 0,
                1: 12000,
                2: 16500,
                3: 21000,
                4: 27000,
                5: 35250,
            },
            fest: {
                0: 0,
                1: 12000,
                2: 16500,
                3: 21000,
                4: 27000,
                5: 35250,
            },
            suru: {
                0: 0,
                1: 12000,
                2: 16500,
                3: 21000,
                4: 27000,
                5: 35250,
            },
            ojod: {
                0: 0,
                1: 12000,
                2: 16500,
                3: 21000,
                4: 27000,
                5: 35250,
            },
            akran: {
                0: 0,
                1: 12000,
                2: 16500,
                3: 21000,
                4: 27000,
                5: 35250,
            },
        },
    },
    spa_service: {
        victoria_island: {
            none: 0,
            normal: 20000,
            deep: 25000,
            pre: 35000,
            trigger: 45000,
        },
        ikoyi: {
            none: 0,
            normal: 20000,
            deep: 25000,
            pre: 35000,
            trigger: 45000,
        },
        lekki: {
            none: 0,
            normal: 15000,
            deep: 20000,
            pre: 25000,
            trigger: 45000,
        },
        ajah: {
            none: 0,
            normal: 15000,
            deep: 20000,
            pre: 25000,
            trigger: 45000,
        },
        ogudu: {
            none: 0,
            normal: 15000,
            deep: 20000,
            pre: 25000,
            trigger: 37000,
        },
        ikeja: {
            none: 0,
            normal: 15000,
            deep: 20000,
            pre: 25000,
            trigger: 37000,
        },
        ill: {
            none: 0,
            normal: 15000,
            deep: 20000,
            pre: 25000,
            trigger: 37000,
        },
        maryland: {
            none: 0,
            normal: 15000,
            deep: 20000,
            pre: 25000,
            trigger: 37000,
        },
        ore: {
            none: 0,
            normal: 15000,
            deep: 20000,
            pre: 25000,
            trigger: 37000,
        },
        ala: {
            none: 0,
            normal: 15000,
            deep: 20000,
            pre: 25000,
            trigger: 37000,
        },
        opebi: {
            none: 0,
            normal: 15000,
            deep: 20000,
            pre: 25000,
            trigger: 37000,
        },
        yaba: {
            none: 0,
            normal: 15000,
            deep: 20000,
            pre: 25000,
            trigger: 37000,
        },
        magodo: {
            none: 0,
            normal: 15000,
            deep: 20000,
            pre: 25000,
            trigger: 45000,
        },
        gbagada: {
            none: 0,
            normal: 15000,
            deep: 18000,
            pre: 25000,
            trigger: 35000,
        },
        ogba: {
            none: 0,
            normal: 15000,
            deep: 18000,
            pre: 25000,
            trigger: 35000,
        },
        fest: {
            none: 0,
            normal: 15000,
            deep: 18000,
            pre: 25000,
            trigger: 35000,
        },
        suru: {
            none: 0,
            normal: 15000,
            deep: 18000,
            pre: 25000,
            trigger: 35000,
        },
        ojod: {
            none: 0,
            normal: 15000,
            deep: 18000,
            pre: 25000,
            trigger: 35000,
        },
    },
    salon_service: {
        victoria_island: {
            none: 0,
            pedi_madi: 15000,
            makeup: 43000,
        },
        ikoyi: {
            none: 0,
            pedi_madi: 15000,
            makeup: 43000,
        },
        lekki: {
            none: 0,
            pedi_madi: 15000,
            makeup: 38500,
        },
        ajah: {
            none: 0,
            pedi_madi: 15000,
            makeup: 38500,
        },
        ogudu: {
            none: 0,
            pedi_madi: 13000,
            makeup: 35000,
        },
        ikeja: {
            none: 0,
            pedi_madi: 13000,
            makeup: 35000,
        },
        ill: {
            none: 0,
            pedi_madi: 13000,
            makeup: 35000,
        },
        maryland: {
            none: 0,
            pedi_madi: 10000,
            makeup: 35000,
        },
        ore: {
            none: 0,
            pedi_madi: 10000,
            makeup: 35000,
        },
        ala: {
            none: 0,
            pedi_madi: 10000,
            makeup: 35000,
        },
        opebi: {
            none: 0,
            pedi_madi: 10000,
            makeup: 35000,
        },
        yaba: {
            none: 0,
            pedi_madi: 10000,
            makeup: 35000,
        },
        magodo: {
            none: 0,
            pedi_madi: 15000,
            makeup: 40000,
        },
        gbagada: {
            none: 0,
            pedi_madi: 8000,
            makeup: 30000,
        },
        ogba: {
            none: 0,
            pedi_madi: 8000,
            makeup: 30000,
        },
        fest: {
            none: 0,
            pedi_madi: 8000,
            makeup: 30000,
        },
        suru: {
            none: 0,
            pedi_madi: 8000,
            makeup: 30000,
        },
        ojod: {
            none: 0,
            pedi_madi: 8000,
            makeup: 30000,
        },
        akran: {
            none: 0,
            pedi_madi: 8000,
            makeup: 30000,
        },
    },
    care_givers: {
        victoria_island: {
            none: 0,
            one_off: 6300,
            in: 37000,
            out: 37000,
        },
        ikoyi: {
            none: 0,
            one_off: 6300,
            in: 37000,
            out: 37000,
        },
        lekki: {
            none: 0,
            one_off: 6300,
            in: 34000,
            out: 34000,
        },
        ajah: {
            none: 0,
            one_off: 6300,
            in: 34000,
            out: 34000,
        },
        ogudu: {
            none: 0,
            one_off: 6300,
            in: 34000,
            out: 34000,
        },
        ikeja: {
            none: 0,
            one_off: 6300,
            in: 34000,
            out: 34000,
        },
        ill: {
            none: 0,
            one_off: 6300,
            in: 34000,
            out: 34000,
        },
        maryland: {
            none: 0,
            one_off: 5600,
            in: 34000,
            out: 34000,
        },
        ore: {
            none: 0,
            one_off: 5600,
            in: 34000,
            out: 34000,
        },
        ala: {
            none: 0,
            one_off: 5600,
            in: 34000,
            out: 34000,
        },
        opebi: {
            none: 0,
            one_off: 5600,
            in: 34000,
            out: 34000,
        },
        yaba: {
            none: 0,
            one_off: 5600,
            in: 34000,
            out: 34000,
        },
        magodo: {
            none: 0,
            one_off: 6300,
            in: 34000,
            out: 34000,
        },
        gbagada: {
            none: 0,
            one_off: 5300,
            in: 32000,
            out: 32000,
        },
        ogba: {
            none: 0,
            one_off: 5300,
            in: 32000,
            out: 32000,
        },
        fest: {
            none: 0,
            one_off: 5300,
            in: 32000,
            out: 32000,
        },
        suru: {
            none: 0,
            one_off: 5300,
            in: 32000,
            out: 32000,
        },
        ojod: {
            none: 0,
            one_off: 5300,
            in: 32000,
            out: 32000,
        },
        akran: {
            none: 0,
            one_off: 5300,
            in: 32000,
            out: 32000,
        },
    },
};

var extraDataTree = {
    victoria_island: {
        laundry: 1500,
        ironing: 1500,
        car_wash: 800,
    },
    ikoyi: {
        laundry: 1500,
        ironing: 1500,
        car_wash: 800,
    },
    lekki: {
        laundry: 1200,
        ironing: 1200,
        car_wash: 700,
    },
    ajah: {
        laundry: 1200,
        ironing: 1200,
        car_wash: 700,
    },
    ogudu: {
        laundry: 1200,
        ironing: 1200,
        car_wash: 700,
    },
    ikeja: {
        laundry: 1200,
        ironing: 1200,
        car_wash: 700,
    },
    maryland: {
        laundry: 1000,
        ironing: 800,
        car_wash: 700,
    },
    opebi: {
        laundry: 1000,
        ironing: 800,
        car_wash: 700,
    },
    yaba: {
        laundry: 1000,
        ironing: 800,
        car_wash: 700,
    },
    magodo: {
        laundry: 1200,
        ironing: 900,
        car_wash: 700,
    },
    gbagada: {
        laundry: 900,
        ironing: 500,
        car_wash: 500,
    },
    ogba: {
        laundry: 900,
        ironing: 500,
        car_wash: 500,
    },
    akran: {
        laundry: 900,
        ironing: 500,
        car_wash: 500,
    },
};
var extraServiceKey = {
    laundry: "Laundry",
    ironing: "Ironing",
    car_wash: "Car wash",
};

var taxRate = 0.097;
var fadeTime = 300;
var subTotal = 0;
var location_room_subTotal = 0;
var bathroom_subTotal = 0;
var need_cleaning_services_subTotal = 0;
var extraServices_subTotal = 0;
var location_services_subTotal = 0;
var cg_location_frequency_subTotal = 0;
var cg_persons_subTotal = 0;
var sl_location_services_room_subTotal = 0;
var sl_persons_subTotal = 0;

var st_location = "victoria_island";
var sp_location = "victoria_island";
var sl_location = "victoria_island";
var cg_location = "victoria_island";
var number_of_rooms = 0;
var extraServiceArrayFunc = [];
var extraServiceArrayOriginal = [];
var sl_number_of_persons = 1;
var cg_number_of_people = 1;
var number_of_bathrooms = 0;
var sp_services = "none";
var sl_services = "none";
var cg_frequency = "none";
var st_frequency = "none";

var locationKey = {
    "Victoria Island": "victoria_island",
    Ikoyi: "ikoyi",
    Lekki: "lekki",
    Ajah: "ajah",
    Ogudu: "ogudu",
    "Ikeja GRA": "ikeja",
    Maryland: "maryland",
    Opebi: "opebi",
    Yaba: "yaba",
    Magodo: "magodo",
    Gbagada: "gbagada",
    Ogba: "ogba",
    "Oba Akran": "akran",
    Illupeju: "ill",
    Festac: "fest",
    Surulere: "suru",
    Ojodu: "ojod",
    Oregun: "ore",
    Alausa: "ala",
};

var st_frequencyKey = {
    "One-time Service": "one_time",
    "Twice weekly": "week",
    "Twice monthly": "month",
};

var sp_ServicesKey = {
    none: "none",
    "Normal/Swedish massage": "normal",
    "Deep massage": "deep",
    "Pre-natal massage": "pre",
    "Trigger and Reflexology": "trigger",
};
var sl_ServicesKey = {
    none: "none",
    "Pedicure and Manicure": "pedi_madi",
    "Make-up": "makeup",
};
var cg_frequencyKey = {
    none: "none",
    "One-off": "one_off",
    "Live in": "in",
    "Live out": "out",
};

//SummaryKeys
var summaryKeys = {
    standard_home_cleaning: {
        frequency: "#st_frequency_sum",
        bedroom: "#st_bedroom_sum",
        bathroom: "#st_bathroom_sum",
        cleaning_materials: "#st_cleaning_materials_sum",
        location: "#st_location_sum",
        extraServices: "#st_extra_services_sum",
    },
    care_givers: {
        service: "#cg_service_sum",
        frequency: "#cg_frequency_sum",
        people: "#cg_people_sum",
        age: "#cg_age_sum",
        location: "#cg_location_sum",
        language: "#cg_language_sum",
    },
    salon_service: {
        service: "#sl_service_sum",
        location: "#sl_location_sum",
        persons: "#sl_persons_sum",
    },
    spa_service: {
        service: "#spa_service_sum",
        frequency: "#spa_frequency_sum",
        location: "#spa_location_sum",
        gender: "#spa_gender_sum",
    },
    office_cleaning: "",
    relocation_assistance: "",
    deep_cleaning: "",
};

/* Recalculate standard home cleaning cart */
function recalculateStCart(input, data) {
    console.log([input, data]);
    console.log("hello");
    // var subtotal = 0;
    let subtotal = 0;

    subtotal =
        location_room_subTotal +
        bathroom_subTotal +
        extraServices_subTotal +
        need_cleaning_services_subTotal;
    /* Sum up row totals */
    // $(".item").each(function () {
    //     subtotal += parseFloat($(this).children(".product-line-price").text());
    // });

    /* Calculate totals */
    let tax = subtotal * taxRate;
    let total = subtotal + tax;

    console.log([
        subtotal.toFixed(2),
        tax.toFixed(2),
        total.toFixed(2),
        fadeTime,
    ]);
    inputId = summaryKeys.standard_home_cleaning[input];
    $(inputId).fadeOut(fadeTime).html(data).fadeIn(fadeTime);
    $(".st_totals-value").fadeOut(fadeTime, function () {
        $("#st_sub_total").html(subtotal.toFixed(2));
        $("#st_tax_total").html(tax.toFixed(2));
        $("#st_order_total").html(total.toFixed(2));
        $(".st_totals-value").fadeIn(fadeTime);
        $("#st_total_price").val(parseFloat(Math.round(total).toFixed(2)));
        $("#st_subs_total").val(parseFloat(Math.round(subtotal).toFixed(2)));
        $("#st_estimated_tax").val(parseFloat(Math.round(tax).toFixed(2)));
    });
}

$("#yes").on("click", function () {
    need_cleaning_services_subTotal = 570;
    recalculateStCart("cleaning_materials", "Yes");
});
$("#no").on("click", function () {
    need_cleaning_services_subTotal = 0;
    recalculateStCart("cleaning_materials", "No");
});

/* Recalculate spa cart */
function recalculateSpCart(input, data) {
    console.log("hello");
    // var subtotal = 0;
    let subtotal = 0;

    subtotal = location_services_subTotal;
    /* Sum up row totals */
    // $(".item").each(function () {
    //     subtotal += parseFloat($(this).children(".product-line-price").text());
    // });

    /* Calculate totals */
    let tax = subtotal * taxRate;
    let total = subtotal + tax;

    console.log([
        subtotal.toFixed(2),
        tax.toFixed(2),
        total.toFixed(2),
        fadeTime,
    ]);
    inputId = summaryKeys.spa_service[input];
    $(inputId).fadeOut(fadeTime).html(data).fadeIn(fadeTime);
    $(".spa_totals-value").fadeOut(fadeTime, function () {
        $("#spa_sub_total").html(subtotal.toFixed(2));
        $("#spa_tax_total").html(tax.toFixed(2));
        $("#spa_order_total").html(total.toFixed(2));
        $(".spa_totals-value").fadeIn(fadeTime);
        $("#spa_total_price").val(parseFloat(Math.round(total).toFixed(2)));
        $("#spa_subs_total").val(parseFloat(Math.round(subtotal).toFixed(2)));
        $("#spa_estimated_tax").val(parseFloat(Math.round(tax).toFixed(2)));
    });
}

/* Recalculate spa cart */
function recalculateSlCart(input, data) {
    console.log("hello");
    // var subtotal = 0;
    let subtotal = 0;

    subtotal = sl_location_services_room_subTotal * sl_number_of_persons;
    /* Sum up row totals */
    // $(".item").each(function () {
    //     subtotal += parseFloat($(this).children(".product-line-price").text());
    // });

    /* Calculate totals */
    let tax = subtotal * taxRate;
    let total = subtotal + tax;

    console.log([
        subtotal.toFixed(2),
        tax.toFixed(2),
        total.toFixed(2),
        fadeTime,
    ]);
    inputId = summaryKeys.salon_service[input];
    $(inputId).fadeOut(fadeTime).html(data).fadeIn(fadeTime);

    $(".sl_totals-value").fadeOut(fadeTime, function () {
        $("#sl_sub_total").html(subtotal.toFixed(2));
        $("#sl_tax_total").html(tax.toFixed(2));
        $("#sl_order_total").html(total.toFixed(2));
        $(".sl_totals-value").fadeIn(fadeTime);
        $("#sl_total_price").val(parseFloat(Math.round(total).toFixed(2)));
        $("#sl_subs_total").val(parseFloat(Math.round(subtotal).toFixed(2)));
        $("#sl_estimated_tax").val(parseFloat(Math.round(tax).toFixed(2)));
    });
}
function recalculateCgCart(cg_input_frequency, input, data) {
    inputId = summaryKeys.care_givers[input];
    console.log(summaryKeys.care_givers);
    console.log(input);
    console.log(inputId);
    console.log(data);
    $(inputId).fadeOut(fadeTime).html(data).fadeIn(fadeTime);
    console.log(input != "service" && input != "language" && input != "age");
    // if ((input != "service" || input != "language" || input != "age") == true) {
    console.log("hello");
    // var subtotal = 0;
    let subtotal = 0;

    subtotal = cg_location_frequency_subTotal * cg_number_of_people;

    /* Calculate totals */
    let tax = subtotal * taxRate;
    if (cg_input_frequency == "Live in" || cg_input_frequency == "Live out") {
        tax = 10000;
    }

    let total = subtotal + tax;

    console.log([
        subtotal.toFixed(2),
        tax.toFixed(2),
        total.toFixed(2),
        fadeTime,
    ]);
    $(".cg_totals-value").fadeOut(fadeTime, function () {
        $("#cg_sub_total").html(subtotal.toFixed(2));
        $("#cg_tax_total").html(tax.toFixed(2));
        $("#cg_order_total").html(total.toFixed(2));
        $(".cg_totals-value").fadeIn(fadeTime);
        $("#cg_total_price").val(parseFloat(Math.round(total).toFixed(2)));
        $("#cg_subs_total").val(parseFloat(Math.round(subtotal).toFixed(2)));
        $("#cg_estimated_tax").val(parseFloat(Math.round(tax).toFixed(2)));
    });
    // } else {
    //     return;
    // }
}

// recalculateStCart(subTotal);

//Update extraServices
function updateExtraServices(inputExtraServicesArray) {
    for (let i = 0; i < inputExtraServicesArray.length; i++) {
        extraServiceArrayFunc.push(
            extraDataTree[st_location][inputExtraServicesArray[i]]
        );
        extraServiceArrayOriginal.push(
            extraServiceKey[inputExtraServicesArray[i]]
        );
    }
    console.log(extraServiceArrayOriginal.join(","));
    console.log(extraServiceArrayFunc);
    extraServices_subTotal = extraServiceArrayFunc.reduce(function (a, b) {
        return a + b;
    }, 0);
    console.log(extraServices_subTotal);
    recalculateStCart("extraServices", extraServiceArrayOriginal.join(","));
    $("#st_extra_services").val(extraServiceArrayOriginal.join(","));
    extraServiceArrayFunc = [];
    extraServiceArrayOriginal = [];
}

//Update bedroom
function updateStBathroom(bathroomInput) {
    number_of_bathrooms = bathroomInput;
    bathroom_subTotal = number_of_bathrooms * 1340;
    // subTotal = location_room_subTotal + bathroom_subTotal;
    //console.log(subTotal);
    recalculateStCart("bathroom", bathroomInput);
}

//Update bedroom
function updateStBedroom(bedroomInput) {
    number_of_rooms = bedroomInput;
    location_room_subTotal =
        dataTree.standard_home_cleaning[st_frequency][st_location][
            number_of_rooms
        ];
    //subTotal = location_room_subTotal + bathroom_subTotal;
    console.log(subTotal);
    recalculateStCart("bedroom", bedroomInput);
}

/* Update location */
function updateStLocation(locationInput) {
    console.log(locationInput);
    console.log(locationKey);
    st_location = locationKey[locationInput];
    console.log(st_location);
    console.log(dataTree.standard_home_cleaning);
    console.log(st_frequencyKey);
    console.log(st_frequency);
    console.log(st_frequencyKey[st_frequency]);
    location_room_subTotal =
        dataTree.standard_home_cleaning[st_frequency][st_location][
            number_of_rooms
        ];
    console.log(subTotal);
    recalculateStCart("location", locationInput);
}

function updateStFrequency(frequencyInput) {
    console.log(frequencyInput);
    st_frequency = st_frequencyKey[frequencyInput];
    console.log(st_location);
    location_room_subTotal =
        dataTree.standard_home_cleaning[st_frequency][st_location][
            number_of_rooms
        ];
    console.log(location_room_subTotal);
    recalculateStCart("frequency", frequencyInput);
    console.log(location_room_subTotal);
}

function updateSpLocation(locationInput) {
    console.log(locationInput);
    sp_location = locationKey[locationInput];
    location_services_subTotal =
        dataTree.spa_service[sp_location][sp_ServicesKey[sp_services]];
    console.log(location_services_subTotal);
    recalculateSpCart("location", locationInput);
}

function updateSpGender(genderInput) {
    recalculateSpCart("gender", genderInput);
}

function updateSpFrequency(frequencyInput) {
    recalculateSpCart("frequency", frequencyInput);
}

function updateSpServices(serviceInput) {
    console.log(serviceInput);
    sp_services = serviceInput;
    console.log(sp_location);
    location_services_subTotal =
        dataTree.spa_service[sp_location][sp_ServicesKey[sp_services]];
    console.log(location_services_subTotal);
    recalculateSpCart("service", serviceInput);
    console.log(location_services_subTotal);
}

function updateSlLocation(locationInput) {
    sl_location = locationKey[locationInput];
    console.log(sl_location);
    console.log(sl_services);
    console.log(dataTree.salon_service[sl_location]);
    console.log(sl_ServicesKey[sl_services]);
    sl_location_services_room_subTotal =
        dataTree.salon_service[sl_location][sl_ServicesKey[sl_services]];
    console.log(sl_location_services_room_subTotal);
    recalculateSlCart("location", locationInput);
}

function updateSlServices(serviceInput) {
    console.log(serviceInput);
    sl_services = serviceInput;
    if (
        sl_services == "Male Hair Grooming" ||
        sl_services == "Female Hair Grooming"
    ) {
        sl_services = "none";
        $("#sloverlay").addClass("overlay");
        $("#hair_grooming_prompt").fadeIn(900);
    }

    console.log(sl_location);
    console.log(sl_services);
    console.log(dataTree.salon_service[sl_location]);
    console.log(sl_ServicesKey[sl_services]);
    sl_location_services_room_subTotal =
        dataTree.salon_service[sl_location][sl_ServicesKey[sl_services]];
    //    dataTree.salon_service[sl_location][sl_services];
    console.log(sl_location_services_room_subTotal);
    recalculateSlCart("service", serviceInput);
    console.log(sl_location_services_room_subTotal);
}

$("#done_hair_grooming_prompt").on("click", function () {
    $("#sloverlay").removeClass("overlay");
    $("#hair_grooming_prompt").fadeOut(100);
});
function updateSlPersons(personsInput) {
    sl_number_of_persons = personsInput;
    // sl_persons_subTotal =
    //     sl_number_of_persons * sl_location_services_room_subTotal;
    // subTotal = location_room_subTotal + bathroom_subTotal;
    // console.log(sl_persons_subTotal);
    recalculateSlCart("persons", personsInput);
}
//Update Care givers location
function updateCgLocation(locationInput) {
    console.log(locationInput);
    console.log(locationKey);
    cg_location = locationKey[locationInput];
    console.log(cg_location);
    console.log(dataTree.care_givers);
    cg_location_frequency_subTotal =
        dataTree.care_givers[cg_location][cg_frequencyKey[cg_frequency]];
    console.log(dataTree.care_givers[cg_location]);
    console.log(cg_frequencyKey);
    console.log(cg_frequencyKey[cg_frequency]);
    console.log(cg_frequency);
    console.log(cg_location_frequency_subTotal);
    recalculateCgCart(cg_frequency, "location", locationInput);
}
function updateCgFrequency(frequencyInput) {
    console.log(frequencyInput);
    cg_frequency = frequencyInput;
    console.log(cg_location);
    cg_location_frequency_subTotal =
        dataTree.care_givers[cg_location][cg_frequencyKey[cg_frequency]];
    console.log(cg_location_frequency_subTotal);
    recalculateCgCart(cg_frequency, "frequency", frequencyInput);
    console.log(cg_location_frequency_subTotal);
}
function updateCgPeople(peopleInput) {
    cg_number_of_people = peopleInput;
    recalculateCgCart(cg_frequency, "people", peopleInput);
}
function updateCgService(serviceInput) {
    recalculateCgCart(cg_frequency, "service", serviceInput);
}
function updateCgLanguage(languageInput) {
    recalculateCgCart(cg_frequency, "language", languageInput);
}
function updateCgAge(ageInput) {
    recalculateCgCart(cg_frequency, "age", ageInput);
}

// let resp = fetch("http://127.0.0.1:4000/testing")
//     .then((response) => {
//         console.log(response);
//         // handle the response
//     })
//     .catch((error) => {
//         // handle the error
//     });

let monthlyIncomeData = [];
let monthlyExpenseData = [];

async function chartIt(year) {
    await getData(year);
    console.log(monthlyIncomeData);
    console.log(monthlyExpenseData);
    const ctx = document.getElementById("myChart").getContext("2d");

    const labels = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];
    const data = {
        labels: labels,
        datasets: [
            {
                label: "Income",
                data: monthlyIncomeData,
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)",
                    "rgba(255, 159, 64, 0.2)",
                    "rgba(255, 205, 86, 0.2)",
                    "rgba(75, 192, 192, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(153, 102, 255, 0.2)",
                    "rgba(201, 203, 207, 0.2)",
                ],
                borderColor: [
                    "rgb(255, 99, 132)",
                    "rgb(255, 159, 64)",
                    "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)",
                    "rgb(54, 162, 235)",
                    "rgb(153, 102, 255)",
                    "rgb(201, 203, 207)",
                ],
                borderWidth: 1,
            },
            {
                label: "Expense",
                data: monthlyExpenseData,
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)",
                    "rgba(255, 159, 64, 0.2)",
                    "rgba(255, 205, 86, 0.2)",
                    "rgba(75, 192, 192, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(153, 102, 255, 0.2)",
                    "rgba(201, 203, 207, 0.2)",
                ],
                borderColor: [
                    "rgb(255, 99, 132)",
                    "rgb(255, 159, 64)",
                    "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)",
                    "rgb(54, 162, 235)",
                    "rgb(153, 102, 255)",
                    "rgb(201, 203, 207)",
                ],
                borderWidth: 1,
            },
        ],
    };

    const config = {
        type: "bar",
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    };

    let chartInteractionModeNearest = new Chart(ctx, config);
}

async function getData(year) {
    let resp = await axios({
        method: "GET",
        url: `/admin/finance/${year}`,
    })
        .then(function (response) {
            // handle success
            //            console.log(response["data"]);
            monthlyIncomeData = response["data"]["incomeData"];
            monthlyExpenseData = response["data"]["expenseData"];
            // console.log(monthlyData);
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        });

    //    console.log(resp);
}

const d = new Date();
let year = d.getFullYear();
chartIt(year);

function changeYear(arg) {
    if (arg === "next") {
        year++;
    }
    if (arg === "prev") {
        year--;
    }

    $("#myChart").remove();
    $("#chartDiv").append('<canvas id="myChart"></canvas>');
    $("#currentYear").fadeOut().html(year).fadeIn();
    chartIt(year);
}
