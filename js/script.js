var btn1 = document.querySelector(".individual_counseling .enroll_button");
var btn2 = document.querySelector(".lesson_with_children .enroll_button");
var btn3 = document.querySelector(".diagnostics .enroll_button");
var btn4 = document.querySelector(".online_counseling .enroll_button");
var hidden_form = document.querySelector(".enroll_form");
var close = hidden_form.querySelector(".close_form");
var over_lay = document.querySelector(".over_lay");
var form = document.querySelector("form");

btn1.addEventListener("click", function(e) {
  hidden_form.classList.toggle("not_hidden");
  form[2].value = "Individual counseling";
  over_lay.classList.toggle("not_hidden");
});

btn2.addEventListener("click", function(e) {
  hidden_form.classList.toggle("not_hidden");
  form[2].value = "Lesson with children";
  over_lay.classList.toggle("not_hidden");
});

btn3.addEventListener("click", function(e) {
   hidden_form.classList.toggle("not_hidden");
   form[2].value = "Diagnostics";
   over_lay.classList.toggle("not_hidden");
});

btn4.addEventListener("click", function(e) {
   hidden_form.classList.toggle("not_hidden");
   form[2].value = "Online counseling";
   over_lay.classList.toggle("not_hidden");
});

over_lay.addEventListener("click", function(e){
   hidden_form.classList.toggle("not_hidden");
   over_lay.classList.toggle("not_hidden");
});

close.addEventListener("click", function(e) {
   hidden_form.classList.toggle("not_hidden");
   over_lay.classList.toggle("not_hidden");
});
