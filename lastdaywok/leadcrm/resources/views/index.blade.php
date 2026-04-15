<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Website Hacked</title>

<style>
    body {
        margin: 0;
        padding: 0;
        background: black;
        font-family: 'Courier New', monospace;
        color: #00ff00;
        overflow: hidden;
    }

    .glitch {
        font-size: 60px;
        font-weight: bold;
        text-align: center;
        margin-top: 20%;
        animation: glitch 1s infinite;
    }

    @keyframes glitch {
        0% { text-shadow: 2px 2px red, -2px -2px blue; }
        20% { text-shadow: -2px 0 red, 2px 0 blue; }
        40% { text-shadow: 0 2px red, 0 -2px blue; }
        60% { text-shadow: -2px -2px red, 2px 2px blue; }
        80% { text-shadow: 2px -2px red, -2px 2px blue; }
        100% { text-shadow: 0 0 red, 0 0 blue; }
    }

    .blink {
        text-align: center;
        margin-top: 20px;
        font-size: 20px;
        animation: blink 1s infinite;
    }

    @keyframes blink {
        50% { opacity: 0; }
    }

    /* Matrix effect */
    canvas {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
    }

</style>
</head>

<body>

<canvas id="matrix"></canvas>

<div class="glitch">⚠ WEBSITE HACKED ⚠</div>
<div class="blink">System Breached... Access Denied...</div>

<script>
// MATRIX BACKGROUND
const canvas = document.getElementById('matrix');
const ctx = canvas.getContext('2d');

canvas.height = window.innerHeight;
canvas.width = window.innerWidth;

const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789@#$%^&*()*&^%";
const matrix = letters.split("");

const fontSize = 16;
const columns = canvas.width / fontSize;

let drops = [];
for (let x = 0; x < columns; x++) drops[x] = 1;

function draw() {
    ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    ctx.fillStyle = "#0F0";
    ctx.font = fontSize + "px arial";

    for (let i = 0; i < drops.length; i++) {
        let text = matrix[Math.floor(Math.random() * matrix.length)];

        ctx.fillText(text, i * fontSize, drops[i] * fontSize);

        if (drops[i] * fontSize > canvas.height && Math.random() > 0.975)
            drops[i] = 0;

        drops[i]++;
    }
}

setInterval(draw, 35);
</script>

</body>
</html>
