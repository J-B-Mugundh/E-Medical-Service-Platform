<html>

<head>
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.5/css/unicons.css" />
    <script type="tailwind-config">
        {
        theme: {
          extend: {
            colors: {
              gray: colors.blueGray,
              pink: colors.fuchsia,
            }
          }
        }
      }
    </script>
    <link rel="stylesheet" href="codpay.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</head>

<body>
    <section class="flex flex-col justify-center antialiased bg-gray-200 text-gray-600 min-h-screen p-4">
        <div class="h-full">
            <!-- Card -->
            <div class="max-w-[360px] mx-auto">
                <div class="bg-white shadow-lg rounded-lg mt-9">
                    <header class="text-center px-5 pb-5">
                        <img src="newlogo.png" />
                        <h2 class="text-xl font-bold text-gray-900 mb-1" style="font-family: 'Dancing Script'">
                            E-Medical Services
                        </h2>
                        <div class="text-sm font-medium text-gray-500" id="refid">
                            Transaction ID :
                        </div>
                    </header>
                    <!-- Card body -->
                    <div class="bg-gray-100 text-center px-5 py-6">
                        <div class="text-sm mb-6">
                            <select name="country" id="country" class="form-control">
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="London">London</option>
                                <option value="Australia">Australia</option>
                                <option value="Canada">Canada</option>
                            </select>
                        </div>
                        <form class="space-y-3">
                            <div class="flex shadow-sm rounded">
                                <div class="flex-grow">
                                    <input name="card-nr"
                                        class="text-sm text-gray-800 bg-white rounded-l leading-5 py-2 px-3 placeholder-gray-400 w-full border border-transparent focus:border-indigo-300 focus:ring-0"
                                        type="text" required placeholder="Street Address" aria-label="Street Address" />
                                </div>
                            </div>
                            <div class="flex shadow-sm rounded">
                                <div class="flex-grow">
                                    <select name="state" id="state" class="form-control">
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Andaman and Nicobar Islands">
                                            Andaman and Nicobar Islands
                                        </option>
                                        <option value="Arunachal Pradesh">
                                            Arunachal Pradesh
                                        </option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli">
                                            Dadar and Nagar Haveli
                                        </option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">
                                            Jammu and Kashmir
                                        </option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                                <div class="flex-grow">
                                    <input name="card-cvc"
                                        class="text-sm text-gray-800 bg-white rounded-r leading-5 py-2 px-3 placeholder-gray-400 w-full border border-transparent focus:border-indigo-300 focus:ring-0"
                                        type="text" placeholder="ZIP code" required />
                                </div>
                            </div>
                            <button type="submit" onclick="window.location.href='http://127.0.0.1:5500/order.html'"
                                class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border
                                border-transparent rounded leading-5 shadow transition duration-150 ease-in-out w-full
                                bg-indigo-500 hover:bg-indigo-600 text-white focus:outline-none focus-visible:ring-2">
                                Pay Now
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
let id = Math.random().toString(36).slice(2);
document.getElementById("refid").innerHTML += id;
</script>

</html>