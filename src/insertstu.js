// insertStudent
const btnNew = document.getElementById("btnNew");
const btnOld = document.getElementById("btnOld");
const newForm = document.getElementById("newForm");
const OldForm = document.getElementById("OldForm");
btnNew.addEventListener("click",()=>{
    newForm.classList.remove("hidden");
    newForm.classList.add("grid");
     OldForm.classList.add("hidden");
});
btnOld.addEventListener("click",()=>{
    OldForm.classList.remove("hidden");
    OldForm.classList.add("grid");
    newForm.classList.add("hidden");
});