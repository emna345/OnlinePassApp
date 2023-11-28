const form = document.querySelector('#form');
const Nom = document.querySelector('#nom');
const prenom = document.querySelector('#prenom');
const cin = document.querySelector('#cin');
const age = document.querySelector('#age');
const num = document.querySelector('#num');
const email = document.querySelector('#email');
//event
form.addEventListener('click',e=>{
e.preventDefault();

})
//Fonctions
function form_verify()
{
    //obtenir toutes les valeurs des inputs
    const Nomvalue= Nom.value.trim();
    const emailvalue= email.value.trim();
    const cinvalue= cin.value.trim();
    const agevalue= age.value.trim();
    const numvalue= num.value.trim();
    const pernomvalue= Prenom.value.trim();
    //username verify
    if (Nomvalue === ""){
        let message="nom ne peut pas etre vide";
        setError(Nom,message)
    }
}
function setError(elem,message){
    const formcontrol = elem.parentElemnt;
}