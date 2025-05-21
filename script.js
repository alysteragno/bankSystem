 function depositPrompt(event) {
        event.preventDefault(); // Stop the form from submitting
        document.getElementById('depositText').style.display = 'block';
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('btnD').addEventListener('click', depositPrompt);
    });