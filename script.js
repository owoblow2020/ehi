
const form = document.getElementById('donation-form');

form.addEventListener('submit', (e) => {
    // ... (the rest of the JavaScript code)

form.addEventListener('submit', (e) => {
    e.preventDefault();

    const formData = new FormData(form);
    const data = {};

    for (const [key, value] of formData.entries()) {
        data[key] = value;
    }

    fetch('send_email.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if (response.ok) {
            alert('Email sent successfully!');
            form.reset();
        } else {
            alert('Failed to send email. Please try again later.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again later.');
    });
});
