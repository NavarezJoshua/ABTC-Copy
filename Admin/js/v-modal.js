const n_modal = document.querySelector(".n-modal")
const openn_modal = document.querySelector("#btn-nr")
const closen_modal = document.querySelector("#n-close-button")

openn_modal.addEventListener('click', () =>{
n_modal.showModal();
});

closen_modal.addEventListener('click', () =>{
n_modal.close();
});



