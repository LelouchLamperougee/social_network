const account = document.querySelector('#account')
const profile = document.querySelector('#profile')
const accountSettings = document.querySelector('.account-settings')
const profileSettings = document.querySelector('.profile-settings')

account.addEventListener('click', function (){
    accountSettings.style.display = "block";
    profileSettings.style.display = "none";

})

profile.addEventListener('click', function (){
    accountSettings.style.display = "none";
    profileSettings.style.display = "block";
})
