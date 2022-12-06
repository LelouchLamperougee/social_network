const statistic_btn = document.querySelector('#statistic-btn')
const profile_statistic = document.querySelector('.profile-statistic')

statistic_btn.addEventListener('click', function (){
    profile_statistic.style.display = "block"
    statistic_btn.style.opacity = '0'
})
