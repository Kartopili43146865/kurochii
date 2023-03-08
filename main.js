console.log()

for(let i = 1; i <= document.querySelectorAll('.div-2 a').length; i++) {
    document.querySelector(`.page-${i}`).addEventListener('click', function(){
      parseInt(localStorage.setItem('n', i))
    })
}
document.querySelector('.next').addEventListener('click',function(){
  if(parseInt(localStorage.getItem('n')) <= document.querySelectorAll(`.div-2 a`).length -1) {
   parseInt(localStorage.setItem('n', parseInt(localStorage.getItem('n')) + 1))
   document.location.href = `anime-${parseInt(localStorage.getItem('n'))}.html`;
  }
}) 
document.querySelector('.back').addEventListener('click',function(){
  if(parseInt(localStorage.getItem('n')) > 1) {
   parseInt(localStorage.setItem('n', parseInt(localStorage.getItem('n')) - 1))
   document.location.href = `anime-${parseInt(localStorage.getItem('n'))}.html`;
  }
}) 