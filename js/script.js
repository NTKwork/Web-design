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
  var p = document.querySelector(".description p");
  p.innerText=" Psychological counseling will help you better understand yourself and the other person. Individual counselling is aimed at finding harmony in your soul, and with the surrounding world." ;
});

btn2.addEventListener("click", function(e) {
  hidden_form.classList.toggle("not_hidden");
  form[2].value = "Lesson with children";
  over_lay.classList.toggle("not_hidden");
  var p = document.querySelector(".de3ription p");
  p.innerText=" 1" ;
});

btn3.addEventListener("click", function(e) {
   hidden_form.classList.toggle("not_hidden");
   form[2].value = "Diagnostics";
   over_lay.classList.toggle("not_hidden");
   var p = document.querySelector(".description p");
   p.innerText=" Psychological diagnostics aimed at the study of human individuality, the disclosure of resources and abilities,            helps to study thinking, memory, attention and emotions, peculiarities of self-regulation and ways of reacting in extreme situations,                 and also to see communication skills, professional interests, etc. Understanding individual characteristics helps a person to be                 successful and positive in this world!" ;
});

btn4.addEventListener("click", function(e) {
   hidden_form.classList.toggle("not_hidden");
   form[2].value = "Online counseling";
   over_lay.classList.toggle("not_hidden");
   var p = document.querySelector(".description p");
   p.innerText=" In the modern period one of the most common forms of obtaining psychological help is an online business. The advantage of such consultations is to save time, the opportunity to receive assistance regardless of the place of residence of the person. To speak  out, to tell the professional about your situation helps to the effect of \"confessional dialogue\", you're not with him, it helps to                  see yourself and find positive solutions to their situations." ;
});

over_lay.addEventListener("click", function(e){
   hidden_form.classList.toggle("not_hidden");
   over_lay.classList.toggle("not_hidden");
});

close.addEventListener("click", function(e) {
   hidden_form.classList.toggle("not_hidden");
   over_lay.classList.toggle("not_hidden");
});
