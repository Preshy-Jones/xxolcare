// // /* Set rates */
// // var taxRate = 0.097;
// // var fadeTime = 300;
// // var subTotal;
// // var bedroomTotal = 0;
// // var toiletTotal = 0;

// // var standard_dataTree = {
// //     victoria_island: {
// //         1: 13000,
// //         2: 17000,
// //         3: 22000,
// //         4: 28000,
// //         5: 34000,
// //     },
// //     lekki: {
// //         1: 11000,
// //         2: 15000,
// //         3: 19000,
// //         4: 25000,
// //         5: 30000,
// //     },
// //     ogudu: {
// //         1: 11000,
// //         2: 15000,
// //         3: 17500,
// //         4: 25000,
// //         5: 28000,
// //     },
// //     maryland: {
// //         1: 10000,
// //         2: 13000,
// //         3: 16000,
// //         4: 22000,
// //         5: 26500,
// //     },
// //     magodo: {
// //         1: 11000,
// //         2: 17000,
// //         3: 20500,
// //         4: 24500,
// //         5: 28000,
// //     },
// //     gbagada: {
// //         1: 8000,
// //         2: 11000,
// //         3: 14000,
// //         4: 18000,
// //         5: 23500,
// //     },
// // };
// // var st_location = "";
// // var number_of_rooms = 1;
// // var number_of_bathrooms = 0;

// // /* Assign actions */

// // var locationKey = {
// //     "Victoria Island/ Ikoyi": victoria_island,
// //     "Lekki/Ajah": lekki,
// //     "Ogudu/Ikeja GRA": ogudu,
// //     "Maryland/Opebi": maryland,
// //     Magodo: magodo,
// //     "GBAGADA/OGBA/OBA AKRAN": gbagada,
// // };

// // /* Update quantity */
// // let updateLocation = (locationInput) => {
// //     /* Calculate line price */
// //     var location = locationKey[$(locationInput).val()];
// //     subTotal = standard_dataTree[location][number_of_rooms];
// //     console.log(subTotal);
// //     // var productRow = $(quantityInput).parent().parent();
// //     // var price = parseFloat(productRow.children(".product-price").text());
// //     // var quantity = $(quantityInput).val();
// //     // var linePrice = price * quantity;

// //     // /* Update line price display and recalc cart totals */
// //     // productRow.children(".product-line-price").each(function () {
// //     //     $(this).fadeOut(fadeTime, function () {
// //     //         $(this).text(linePrice.toFixed(2));
// //     //         recalculateCart();
// //     //         $(this).fadeIn(fadeTime);
// //     //     });
// //     // });
// // };

// // let updateToilets = (toiletInput) => {};

// // let updateBedroom = (bedroomInput) => {};
// // /* Recalculate cart */
// // let recalculateCart = () => {
// //     var subtotal = 0;

// //     /* Sum up row totals */
// //     $(".item").each(function () {
// //         subtotal += parseFloat($(this).children(".product-line-price").text());
// //     });

// //     /* Calculate totals */
// //     var tax = subtotal * taxRate;
// //     var total = subtotal + tax;

// //     /* Update totals display */
// //     $(".totals-value").fadeOut(fadeTime, function () {
// //         $("#cart-subtotal").html(subtotal.toFixed(2));
// //         $("#cart-tax").html(tax.toFixed(2));
// //         $(".cart-total").html(total.toFixed(2));
// //         if (total == 0) {
// //             $(".checkout").fadeOut(fadeTime);
// //         } else {
// //             $(".checkout").fadeIn(fadeTime);
// //         }
// //         $(".totals-value").fadeIn(fadeTime);
// //     });
// // };

// // $(".stlocation input").change(function () {
// //     updateLocation(this);
// // });

// // $(".bedroom input").change(function () {
// //     updateRooms(this);
// // });

// // $(".bathroom input").change(function () {
// //     updateToilets(this);
// // });

// // $(".remove-item button").click(function () {
// //     removeItem(this);
// // });

// var _2hsjm;

// let servicesKey = {
//     'Standard Home cleaning' : 'standard_home_cleaning',
//     'Care Givers' : 'care_givers',
//     'Spa' : 'spa_service',
//     'Salon' : 'salon_service'
// };
// let arraykey = {
//     "one" : ['bola', 'tola', 'bolu'],
//     "two" : ['jim', 'pam', 'dwight', 'michael'],
//     "three" : ['sheldon', 'howard', 'raj', 'penny', 'amy', 'leonard', 'bernadette'],
//     "four" : ['joey', 'chandler', 'ross', 'monica', 'phoebe', 'rachel'],
// };

//     // $array1 = ['bola', 'tola', 'bolu'];
//     // $array2 = ['jim', 'pam', 'dwight', 'michael'];
//     // $array3 = ['sheldon', 'howard', 'raj', 'penny', 'amy', 'leonard', 'bernadette'];
//     // $array4 = ['joey', 'chandler', 'ross', 'monica', 'phoebe', 'rachel'];

//     // function mergeArrays($a, $b)
//     // {

//     // }

//     let values = ['one', 'two', 'three', 'four'];
// //    return $key[$values[1]];

//     let result = array_reduce($values, function ($a, $b) {
//         return $a . " and " . $b;
//         // return array_merge($this->arraykey[$a], $this->arraykey[$b]);
//     });
