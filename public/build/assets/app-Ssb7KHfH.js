document.addEventListener("DOMContentLoaded",function(){const l=document.querySelectorAll(".enlace"),c=document.querySelectorAll(".services");function i(s){const o=s.target.id;c.forEach(t=>{const e=t.classList.contains(o);t.classList.toggle("hidden",!e)}),l.forEach(t=>{const e=t.id===o;t.classList.toggle("text-colorSubtitleLittle",e),t.classList.toggle("text-littleTitle",e),t.classList.toggle("font-semibold",e),t.classList.toggle("text-regularSize",!e),t.classList.toggle("font-regular",!e)})}l.forEach(s=>{s.addEventListener("click",i)})});
