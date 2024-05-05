document.getElementById('donation-form').addEventListener('submit', async function(event) {
    event.preventDefault(); // Prevent default form submission

    const formData = new FormData(this);

    try {
        const response = await fetch('/donate', {
            method: 'POST',
            body: formData
        });

        if (response.ok) {
            const data = await response.json();
            document.getElementById('message').innerHTML = '<p>Donation submitted successfully!</p>';
            console.log('Donation submitted successfully:', data);
        } else {
            const errorMessage = await response.text();
            document.getElementById('message').innerHTML = '<p>Error: ' + errorMessage + '</p>';
            console.error('Failed to submit donation:', errorMessage);
        }
    } catch (error) {
        document.getElementById('message').innerHTML = '<p>Network error. Please try again later.</p>';
        console.error('Network error:', error.message);
    }
});