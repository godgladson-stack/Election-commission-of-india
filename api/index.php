<!DOCTYPE html>
<html lang="ta">
<head>
    <meta charset="UTF-8">
    <title>Volunteer Dashboard</title>
    <style>
        .volunteer-card {
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 8px;
            max-width: 300px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .photo-gallery {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        .photo-gallery img {
            width: 100px;
            height: 100px;
            border-radius: 4px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <header>
        <h1>Volunteer Dashboard</h1>
    </header>
    <main>
        <div class="volunteer-card">
            <h3>Volunteer Name</h3>
            <p>Details: Role and activities.</p>
            <div class="photo-gallery">
                <img src="volunteer_photo.jpg" alt="Volunteer Photo">
                <img src="certificate.jpg" alt="Certificate">
            </div>
        </div>
    </main>
</body>
</html>
