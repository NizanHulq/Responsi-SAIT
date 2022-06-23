document.getElementById('button').addEventListener('click',function() {
    document.querySelector('.modal-bg').style.display = 'flex';
});



document.querySelector('.close').addEventListener('click', function() {
    document.querySelector('.modal-bg').style.display = 'none';
});

var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})