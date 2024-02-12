require('./bootstrap');

var button = document.querySelector('.start-work-button');

button.addEventListener('click', function () {
    fetch('/work/start', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    }).then(response => response.json())
        .then(data => {
            console.log(data);

            
            button.disabled = true;
            button.style.color = 'white';

            
            button.classList.add('disabled');
        });
});
