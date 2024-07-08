<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Form</title>
</head>
<body>
    <form id="commentForm" class="comment_form">
        <div class="comment_form_author">
            <input type="text" id="name" placeholder="Name*" required>
        </div>
        <div class="comment_form_email">
            <input type="email" id="email" placeholder="E-mail*" required>
        </div>
        <div class="comment_form_url">
            <input type="url" id="website" placeholder="Website">
        </div>
        <div class="comment_form_comment">
            <textarea id="comment" rows="5" placeholder="Write here...*" required></textarea>
        </div>
        <div class="form_submit">
            <button type="submit" class="cs_btn cs_bg_accent cs_dark_hover">Send Message</button>
        </div>
    </form>

    <script>
        document.getElementById('commentForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form dari submit secara default

            // Ambil nilai dari input field
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const website = document.getElementById('website').value;
            const comment = document.getElementById('comment').value;

            // Susun pesan
            const message = `Halo, salam kenal. \n\nName: ${name} \nEmail: ${email} \nWebsite: ${website} \nComment: ${comment}`;

            // Encode pesan agar sesuai dengan URL
            const encodedMessage = encodeURIComponent(message);

            // Buat URL WhatsApp
            const waUrl = `https://wa.me/6285158524200?text=${encodedMessage}`;

            // Redirect ke URL WhatsApp
            window.location.href = waUrl;
        });
    </script>
</body>
</html>
