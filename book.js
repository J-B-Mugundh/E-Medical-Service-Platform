document.addEventListener("DOMContentLoaded", () =>
  requestAnimationFrame(updateTime)
);

var inc = 1000;
clock();

function clock() {
  const date = new Date();

  const hours = ((date.getHours() + 11) % 12) + 1;
  const minutes = date.getMinutes();
  const seconds = date.getSeconds();

  const hour = hours * 30;
  const minute = minutes * 6;
  const second = seconds * 6;

  document.querySelector(".hour").style.transform = `rotate(${hour}deg)`;
  document.querySelector(".minute").style.transform = `rotate(${minute}deg)`;
  document.querySelector(".second").style.transform = `rotate(${second}deg)`;
}

setInterval(changeQuote, 2800);

$quoteCarousel = $(".quote-carousel");
$firstQuote = $(".quote-carousel blockquote").first();

var $biggest = 0;
var $biggestEl;

$(".quote-carousel blockquote").each(function () {
  var $height = $(this).height();
  if ($height > $biggest) {
    $biggest = $height;
    $biggestEl = $(this);
  }
});

$biggestEl.addClass("biggest");

function changeQuote() {
  $activeClass = "current";
  $activeQuote = $(".quote-carousel .current");
  $nextQuote = $(".quote-carousel .current").next();

  $activeQuote.removeClass($activeClass);

  if ($nextQuote.length) {
    setQuotePosition($nextQuote);
    $nextQuote.addClass($activeClass);
  } else {
    setQuotePosition($firstQuote);
    $firstQuote.addClass($activeClass);
  }
}

function setQuotePosition($element) {
  if (!$element.hasClass("biggest")) {
    var $currentHeight = $element.height();
    var $difference = $(".biggest").height() - $currentHeight;
    var $halfHeight = $currentHeight / 2;
    var $move = $difference / 2;
    $element.css("top", $move + "px");
  }
}

setInterval(clock, inc);

function updateTime() {
  document.documentElement.style.setProperty(
    "--timer-day",
    "'" + moment().format("dd") + "'"
  );
  document.documentElement.style.setProperty(
    "--timer-hours",
    "'" + moment().format("k") + "'"
  );
  document.documentElement.style.setProperty(
    "--timer-minutes",
    "'" + moment().format("mm") + "'"
  );
  document.documentElement.style.setProperty(
    "--timer-seconds",
    "'" + moment().format("ss") + "'"
  );
  requestAnimationFrame(updateTime);
}
