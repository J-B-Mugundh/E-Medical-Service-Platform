var valcode = document.querySelector("#discount");
var namecode = document.querySelector("#code");
namecode.textContent = valcode.value;

var closeBtn = document.querySelector(".close");
var couponCode = document.querySelector(".couponCode");
closeBtn.addEventListener("click", function () {
  close();
});
valcode.addEventListener("change", function () {
  checkDiscountCoupon();
});

function checkDiscountCoupon() {
  if (valcode.value.length === 0) {
    // namecode.style.display = "none"
    close();
  } else {
    couponCode.classList.remove("d-none");
    namecode.style.display = "inline";
    namecode.textContent = valcode.value;
  }
}

function close() {
  couponCode.classList.add("d-none");
  valcode.value = "";
}
