var TxtRotate = function (el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = "";
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function () {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) {
    delta /= 2;
  }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === "") {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function () {
    that.tick();
  }, delta);
};

window.onload = function () {
  var elements = document.getElementsByClassName("txt-rotate");
  for (var i = 0; i < elements.length; i++) {
    var toRotate = elements[i].getAttribute("data-rotate");
    var period = elements[i].getAttribute("data-period");
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};

// COUNT ANIMATION
const counters = document.querySelectorAll(".counter");
const counts = document.querySelectorAll(".count");
const countes = document.querySelectorAll(".counte");

function numberCount(count, timeOut, inc) {
  count.forEach((counts) => {
    const updateCounts = () => {
      const target = +counts.getAttribute("data-target");
      const countInnerText = +counts.innerText;

      if (countInnerText < target) {
        counts.innerText = Math.ceil(countInnerText + inc);
        setTimeout(updateCounts, timeOut);
      } else {
        counts.innerText = target;
      }
    };
    updateCounts();
  });
}

// MAP
var coord = [47.9011, -3.44145];
var mymap = L.map("mapid", { zoomControl: false }).setView(coord, 13);
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
  minZoom: 13,
  maxZoom: 18,
  id: "mapbox/streets-v11",
  tileSize: 512,
  zoomOffset: -1,
  accessToken: "your.mapbox.access.token",
}).addTo(mymap);

var marker = L.marker(coord).addTo(mymap);

//animation card
const ratio = 0.5;
const options = {
  root: null,
  rootMargin: "0px",
  threshold: ratio,
};

const handleIntersect = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
      entry.target.classList.add("reveal-visible");
      numberCount(counts, 40, 1);
      numberCount(countes, 80, 55);
      numberCount(counters, 100, 1);
      observer.unobserve(entry.target);
    }
  });
};

const observer = new IntersectionObserver(handleIntersect, options);
observer.observe(
  document.querySelectorAll(".reveal").forEach(function (r) {
    observer.observe(r);
  })
);
