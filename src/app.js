const click = document.getElementById("click");
const div = document.getElementById("div");

click.addEventListener("click",()=>{
    if(div.classList.contains("hidden")){
        div.classList.remove("hidden");
        div.classList.add("flex");
    }
    else{
        div.classList.add("hidden");
        div.classList.remove("flex")
    }
})
// div 1 endedd
const click2 = document.getElementById("click2");
const div2 = document.getElementById("div2");

click2.addEventListener("click",()=>{
    if(div2.classList.contains("hidden")){
        div2.classList.remove("hidden");
        div2.classList.add("flex");
    }
    else{
        div2.classList.add("hidden");
        div2.classList.remove("flex")
    }
})
// div 2 endded
const click3 = document.getElementById("click3");
const div3 = document.getElementById("div3");

click3.addEventListener("click",()=>{
    if(div3.classList.contains("hidden")){
        div3.classList.remove("hidden");
        div3.classList.add("flex");
    }
    else{
        div3.classList.add("hidden");
        div3.classList.remove("flex");
    }
})
// dev 3 endded
const click4 = document.getElementById("click4");
const div4 = document.getElementById("div4");

click4.addEventListener("click",()=>{
    if(div4.classList.contains("hidden")){
        div4.classList.remove("hidden");
        div4.classList.add("flex");
    }
    else{
        div4.classList.add("hidden");
        div4.classList.remove("flex");
    }
});
// div 4 endded
const click5 = document.getElementById("click5");
const div5= document.getElementById("div5");

click5.addEventListener("click",()=>{
    if(div5.classList.contains("hidden")){
        div5.classList.remove("hidden");
        div5.classList.add("flex");
    }
    else{
        div5.classList.add("hidden");
        div5.classList.remove("flex");
    }
})
// div 4 endded
const click6 = document.getElementById("click6");
const div6= document.getElementById("div6");

click6.addEventListener("click",()=>{
    if(div6.classList.contains("hidden")){
        div6.classList.remove("hidden");
        div6.classList.add("flex");
    }
    else{
        div6.classList.add("hidden");
        div6.classList.remove("flex");
    }
})
// div 5 ended
//  icons.forEach((icon) => {
//     icon.classList.remove("ml-auto");
//     icon.classList.add("mr-auto");
//   });
const contener = document.getElementById("contener");
const times = document.getElementById("times");
const bars = document.getElementById("bars");
const dir = document.getElementById("dir");
const icon = document.querySelectorAll(".icone");
bars.addEventListener("click" , ()=>{
    contener.classList.remove("ml-0");
    contener.classList.add("-ml-[20%]");
    bars.classList.add("hidden");
    bars.classList.remove("block");
    times.classList.remove("hidden");
    times.classList.add("block");
     icon.forEach((icone) => {
    icone.classList.remove("hidden");
    icone.classList.add("block");
  });
})
times.addEventListener("click" , ()=>{
    contener.classList.add("ml-0");
    contener.classList.remove("-ml-[20%]");
    bars.classList.remove("hidden");
    bars.classList.add("block");
    times.classList.add("hidden");
    times.classList.remove("block");
     icon.forEach((icone) => {
    icone.classList.remove("block");
    icone.classList.add("hidden");
  });
})