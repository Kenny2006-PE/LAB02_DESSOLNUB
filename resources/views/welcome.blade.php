<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viva Alianza</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: radial-gradient(circle, #000428, #004e92);
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            overflow: hidden;
        }
        h1 {
            font-size: 4rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 20px;
            text-shadow: 3px 3px 15px rgba(255, 255, 255, 0.7);
            animation: pulse 2s infinite;
        }
        .image-container {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(255, 255, 255, 0.5);
            max-width: 60%;
            animation: bounceIn 2s;
        }
        img {
            width: 100%;
            height: auto;
            display: block;
        }
        .fireworks {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }
        .firework {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: white;
            border-radius: 50%;
            opacity: 0;
            animation: explode 1.5s linear infinite;
        }
        @keyframes explode {
            0% {
                opacity: 1;
                transform: translate(0, 0) scale(1);
            }
            100% {
                opacity: 0;
                transform: translate(var(--x), var(--y)) scale(3);
            }
        }
    </style>
</head>
<body>
    <h1 class="animate__animated animate__zoomIn">¡Viva Alianza!</h1>
    <div class="image-container animate__animated animate__fadeIn">
        <img src="https://estaticos.elcolombiano.com/binrepository/848x565/27c1/780d565/none/11101/SATL/alianza-lima_47272350_20250226065156.jpg" alt="Alianza Lima">
    </div>
    <div class="fireworks"></div>
    <script>
        function createFirework() {
            const firework = document.createElement('div');
            firework.classList.add('firework');
            const x = (Math.random() * 400 - 200) + 'px';
            const y = (Math.random() * 400 - 200) + 'px';
            firework.style.setProperty('--x', x);
            firework.style.setProperty('--y', y);
            firework.style.left = Math.random() * window.innerWidth + 'px';
            firework.style.top = Math.random() * window.innerHeight + 'px';
            document.querySelector('.fireworks').appendChild(firework);
            setTimeout(() => firework.remove(), 1500);
        }
        setInterval(createFirework, 100);
    </script>
</body>
</html>
