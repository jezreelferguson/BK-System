<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loader.css">
    <title>Nomone</title>
</head>
<body>
    <div class="content">
        <div class="container">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
          
          <style>
            .container {
              --uib-size: 35px;
              --uib-color: black;
              --uib-speed: 1s;
              --uib-stroke: 3.5px;
              display: flex;
              align-items: center;
              justify-content: space-between;
              width: var(--uib-size);
              height: calc(var(--uib-size) * 0.9);
            }
          
            .bar {
              width: var(--uib-stroke);
              height: 100%;
              background-color: var(--uib-color);
              transition: background-color 0.3s ease;
            }
          
            .bar:nth-child(1) {
              animation: grow var(--uib-speed) ease-in-out calc(var(--uib-speed) * -0.45)
                infinite;
            }
          
            .bar:nth-child(2) {
              animation: grow var(--uib-speed) ease-in-out calc(var(--uib-speed) * -0.3)
                infinite;
            }
          
            .bar:nth-child(3) {
              animation: grow var(--uib-speed) ease-in-out calc(var(--uib-speed) * -0.15)
                infinite;
            }
          
            .bar:nth-child(4) {
              animation: grow var(--uib-speed) ease-in-out infinite;
            }
          
            @keyframes grow {
              0%,
              100% {
                transform: scaleY(0.3);
              }
          
              50% {
                transform: scaleY(1);
              }
            }
          </style>
          
    </div>
    <script src="loader.js"></script>
    
</body>
</html>