"use strict";

const section3 = document.getElementById("section--1");
const win = document.getElementById("windows");
const linux = document.getElementById("linux");
const os_text = document.getElementById("os_text");

let licensce = document.querySelector(".licensce");
let active_av = document.querySelector(".active_av");
let firewall = document.querySelector(".firewall");
let firewall_av = document.querySelector(".firewall_av");
let clean_dsk = document.querySelector(".clean");
let def_sharing = document.querySelector(".def_sharing");
let bios = document.querySelector(".bios");
let rdp = document.querySelector(".rdp");
let cd_dvd = document.querySelector(".cd_dvd");
let auto_play = document.querySelector(".auto_play");
let admin_lock = document.querySelector(".admin_lock");
let system = document.querySelector(".system");
let complex_pass = document.querySelector(".complex_pass");
let pass_policy = document.querySelector(".pass_policy");
let txtbUSB = document.querySelector(".txtbUSB");
let fold_share = document.querySelector(".fold_share");
let usb = document.querySelector(".usb");
let screensaver = document.querySelector(".screensaver");

let tst = document.getElementById("text");
let score = document.getElementById("score-btn");
let fill="";
let valLicensce = 0,
  valActive = 0,
  valFirewall = 0,
  valFirewall_av = 0,
  valClean_dsk = 0,
  valDef_sharing = 0,
  valBIOS = 0,
  valRDP = 0,
  valCD_DVD = 0,
  valAuto_play = 0,
  valAdmin_lock = 0,
  valSystem = 0,
  valComplex_pass = 0,
  valPass_policy = 0,
  valbUSB = 0,
  valFold_share = 0,
  valUSB = 0,
  valScreensaver = 0;

const setValue = function (sel, val) {
  switch (sel) {
    case "licensce":
      valLicensce = val;
      licensce.setAttribute("value", val);
      break;
    case "active":
      valActive = val;
      active_av.setAttribute("value", val);
      break;
    case "firewall":
      valFirewall = val;
      firewall.setAttribute("value", val);
      break;
    case "firewall_av":
      valFirewall_av = val;
      firewall_av.setAttribute("value", val);
      break;
    case "clean":
      valClean_dsk = val;
      clean_dsk.setAttribute("value", val);
      break;
    case "def_share":
      valDef_sharing = val;
      def_sharing.setAttribute("value", val);
      break;
    case "bios":
      valBIOS = val;
      bios.setAttribute("value", val);
      break;
    case "rdp":
      valRDP = val;
      rdp.setAttribute("value", val);
      break;
    case "cd_dvd":
      valCD_DVD = val;
      cd_dvd.setAttribute("value", val);
      break;
    case "play":
      valAuto_play = val;
      auto_play.setAttribute("value", val);
      break;
    case "admin":
      valAdmin_lock = val;
      admin_lock.setAttribute("value", val);
      break;
    case "system":
      valSystem = val;
      system.setAttribute("value", val);
      break;
    case "complex":
      valComplex_pass = val;
      complex_pass.setAttribute("value", val);
      break;
    case "pass":
      valPass_policy = val;
      pass_policy.setAttribute("value", val);
      break;
    case "busb":
      valbUSB = val;
      txtbUSB.setAttribute("value", val);
      break;
    case "fold_share":
      valFold_share = val;
      fold_share.setAttribute("value", val);
      break;
    case "usb":
      valUSB = val;
      usb.setAttribute("value", val);
      break;
    case "ss":
      valScreensaver = val;
      screensaver.setAttribute("value", val);
      break;
  }
  getscore();

};

let os = 0;
const radiobtn1 = function (val) {
  section3.style.display = "block";
  tst.setAttribute("value", val);
};

const radiobtn2 = function (val) {
  section3.style.display = "none";
  tst.setAttribute("value", val);
};
const text1 = function () {
  return false;
};

const windowsbtn = function () {
  win.style.display = "block";
  linux.style.display = "none";
  return false;
};
const text2 = function (val) {
  os = 0;
  os_text.setAttribute("value", "0");
};
if (text1() == false && windowsbtn() == false) {
  os_text.setAttribute("value", "5");
} else {
  os_text.setAttribute("value", "0");
}

const linuxbtn = function () {
  win.style.display = "none";
  linux.style.display = "block";
  os_text.setAttribute("value", "5");
};
let marks;
let p = document.getElementById("showscore");
let card = document.getElementById("card-body");
card.style.display = "none";

// score.addEventListener("click", () => {
//   getscore();
// });

let getscore = function () {
  marks =
    os +
    valLicensce +
    valActive +
    valFirewall +
    valFirewall_av +
    valClean_dsk +
    valDef_sharing +
    valBIOS +
    valRDP +
    valCD_DVD +
    valAuto_play +
    valAdmin_lock +
    valSystem +
    valComplex_pass +
    valPass_policy +
    valbUSB +
    valFold_share +
    valUSB +
    valScreensaver;

  card.style.display = "block";

  if(marks>65){
    fill="99D683";
  }
  else if (marks>33){
    fill="FFCA4A";
  }
  else{
    fill="F96262";
  }
  p.innerHTML =
    `Your Score is: ${marks}` +
    '<p class="data-attributes"><span id="pie" name="pie" data-peity="{&quot;fill&quot;: [&quot;#'+`${fill}` +'&quot;,&quot;#eeeeee&quot;],&quot;innerRadius&quot;: 22,&quot;radius&quot;: 35 }" style="display: none;">' +
    `${marks}` +
    "/90</span></p><input type='text' id='score' name='score' value='"+`${marks}` +"' style='display: none;'>";
  $(".data-attributes span").peity("donut");

};


