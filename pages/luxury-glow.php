<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luxury Green Glow</title>
  <style>
    :root {
      --luxury-green-900: #1b1c0f;
      --luxury-green-800: #2c2d18;
      --luxury-green-700: #3c3e21;
      --luxury-green-600: #565932;
      --glow-color: #ce5516;
      --text-soft: #e4f0e7;
    }

    * {
      box-sizing: border-box;
    }

    html, body {
      margin: 0;
      min-height: 100%;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      color: var(--text-soft);
      background: radial-gradient(circle at 20% 20%, #52552f 0%, transparent 35%),
                  radial-gradient(circle at 80% 0%, #454827 0%, transparent 40%),
                  linear-gradient(145deg, var(--luxury-green-900), var(--luxury-green-800) 45%, var(--luxury-green-700) 100%);
      overflow: hidden;
    }

    .noise {
      position: fixed;
      inset: 0;
      background: repeating-radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.02) 0 2px, transparent 2px 4px);
      opacity: 0.18;
      pointer-events: none;
      mix-blend-mode: soft-light;
    }

    .scene {
      min-height: 100vh;
      display: grid;
      place-items: center;
      padding: 24px;
      position: relative;
      isolation: isolate;
    }

    .bg-halos {
      position: fixed;
      inset: 0;
      overflow: hidden;
      pointer-events: none;
      z-index: 0;
    }

    .bg-halo {
      position: absolute;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(255, 214, 188, 0.2) 0%, rgba(206, 85, 22, 0.2) 30%, rgba(206, 85, 22, 0.08) 56%, rgba(206, 85, 22, 0) 78%);
      filter: blur(var(--blur, 24px));
      opacity: var(--opacity, 0.5);
      transform: translate(-50%, -50%);
      animation: drift var(--dur, 9s) ease-in-out infinite;
      animation-delay: var(--delay, 0s);
    }

    .bulb-wrap {
      position: relative;
      width: min(320px, 70vw);
      aspect-ratio: 1 / 1.25;
      display: grid;
      place-items: center;
      filter: drop-shadow(0 0 30px rgba(206, 85, 22, 0.6));
      z-index: 1;
    }

    .halo {
      position: absolute;
      width: 86%;
      aspect-ratio: 1;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(255, 214, 188, 0.34) 0%, rgba(206, 85, 22, 0.34) 28%, rgba(206, 85, 22, 0.16) 54%, rgba(206, 85, 22, 0) 78%);
      filter: blur(20px);
      animation: pulse 4.2s ease-in-out infinite;
    }

    .halo.h2 {
      position: absolute;
      width: 62%;
      filter: blur(26px);
      opacity: 0.95;
      animation-delay: -1.2s;
    }

    .halo.h3 {
      position: absolute;
      width: 106%;
      filter: blur(34px);
      opacity: 0.82;
      animation-duration: 5.6s;
      animation-delay: -2.2s;
    }

    .caption {
      position: fixed;
      bottom: 24px;
      left: 50%;
      transform: translateX(-50%);
      text-transform: uppercase;
      letter-spacing: 0.18em;
      font-size: 0.8rem;
      opacity: 0.84;
      text-align: center;
      padding: 0 12px;
    }

    .caption b {
      color: #ffc9ad;
      text-shadow: 0 0 8px rgba(206, 85, 22, 0.6);
    }

    @keyframes pulse {
      0%, 100% {
        transform: scale(0.94);
        opacity: 0.72;
      }
      50% {
        transform: scale(1.1);
        opacity: 1;
      }
    }

    @keyframes drift {
      0%, 100% { transform: translate(-50%, -50%) scale(0.92); }
      50% { transform: translate(-50%, -50%) scale(1.08); }
    }
  </style>
</head>
<body>
  <div id="bgHalos" class="bg-halos" aria-hidden="true"></div>
  <div class="noise" aria-hidden="true"></div>

  <main class="scene">
    <div class="bulb-wrap" aria-label="Glow halo color #ce5516">
      <div class="halo"></div>
      <div class="halo h2"></div>
      <div class="halo h3"></div>
    </div>
  </main>

  <p class="caption">
    Luxury Green Atmosphere + Glow Halo <b>#ce5516</b>
  </p>

  <script>
    (function () {
      var HALO_COUNT = 10;
      var count = Math.min(40, Math.max(1, HALO_COUNT));

      var root = document.getElementById("bgHalos");
      for (var i = 0; i < count; i += 1) {
        var halo = document.createElement("div");
        halo.className = "bg-halo";

        var size = 140 + Math.random() * 320;
        var left = Math.random() * 100;
        var top = Math.random() * 100;
        var opacity = 0.22 + Math.random() * 0.34;
        var blur = 16 + Math.random() * 28;
        var duration = 7 + Math.random() * 7;
        var delay = -Math.random() * 6;

        halo.style.width = size + "px";
        halo.style.height = size + "px";
        halo.style.left = left + "%";
        halo.style.top = top + "%";
        halo.style.setProperty("--opacity", opacity.toFixed(2));
        halo.style.setProperty("--blur", blur.toFixed(0) + "px");
        halo.style.setProperty("--dur", duration.toFixed(2) + "s");
        halo.style.setProperty("--delay", delay.toFixed(2) + "s");

        root.appendChild(halo);
      }
    })();
  </script>
</body>
</html>
