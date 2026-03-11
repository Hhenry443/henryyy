<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title></title>

  <link rel="stylesheet" href="/css/output.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/01e87deab9.js" crossorigin="anonymous"></script>

</head>

<div id="navbar" class="absolute w-full h-16 grid grid-cols-3">
  <div id="left-logo" class="w-full h-full flex items-center justify-start">
    <p class="font-eb-garamond text-3xl text-white font-semibold ml-12 hover:cursor-[url(/images/cursor.cur),_pointer]">henry barnes</p>
  </div>

  <div id="middle-links" class="w-full h-full flex items-center justify-center space-x-16 group">
    <p class="text-xl text-white font-nunito group-transition duration-200 ease-in-out hover:cursor-pointer hover:text-gray-300 hover:scale-110 hover:px-2">about</p>
    <p class="text-xl text-white font-nunito group-transition duration-200 ease-in-out hover:cursor-pointer hover:text-gray-300 hover:scale-110 hover:px-2">projects</p>
    <p class="text-xl text-white font-nunito group-transition duration-200 ease-in-out hover:cursor-pointer hover:text-gray-300 hover:scale-110 hover:px-2">fun & games</p>
  </div>

  <div id="right-link" class="w-full h-full flex items-center justify-end">
    <a class="bg-[url(/images/fire.gif)] bg-contain mr-12 text-xl p-3 text-white font-bold rounded hover:cursor-[url(/images/cursor.cur),_pointer]" href="ihatehenry.php">Complaints</a>
  </div>
</div>

<body class="bg-[url(/images/tongue.webp)] bg-size-[auto_400px] h-screen">
  <div id="fish-track-container" class="h-full w-full flex items-center">
    <div id="aquarium">
      <div class="fish-track">
        <div class="relative flex flex-col items-center">
          <div class="bubble">Please don't touch me.</div>
          <img src="/images/fish.png" alt="fishy" class="hover:cursor-[url(/images/cursor.cur),_pointer]">
        </div>
      </div>
    </div>
  </div>
</body>

<script>
  function showBubble() {
    document.getElementById('bubble').removeAttribute('hidden')
  }

  function hideBubble() {
    document.getElementById('bubble').setAttribute('hidden', '')
  }
</script>
<style>
  #aquarium {
    width: 100%;
    height: 50%;
  }

  .fish-track {
    display: flex;
    width: 100%;
    align-items: center;
    animation: swimBob 10s linear infinite;
  }

  .fish-track img {
    height: 100px;
    width: auto;
    margin-right: 10rem;
    flex-shrink: 0;
    object-fit: contain;
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
  }

  .fish-track:has(img:hover) {
    animation-play-state: paused;
  }

  @keyframes swimBob {

    0% {
      transform: translateX(-200px) translateY(0);
    }

    25% {
      transform: translateX(25%) translateY(25%);
    }

    50% {
      transform: translateX(50%) translateY(5%);
    }

    75% {
      transform: translateX(75%) translateY(25%);
    }

    100% {
      transform: translateX(100%) translateY(0);
    }
  }

  @keyframes swim {
    from {
      transform: translateX(-200px);
    }

    to {
      transform: translateX(100vw);
    }
  }

  .relative:hover .bubble {
    display: block;
  }

  .bubble {
    position: absolute;
    bottom: 110px;
    left: 50%;
    transform: translateX(-50%);
    background: #ffffff;
    color: #000;
    font-family: Arial;
    font-size: 20px;
    text-align: center;
    width: 250px;
    height: 120px;
    border-radius: 10px;
    display: none;
    pointer-events: none;
    transition: opacity 0.3s ease;
  }

  .bubble:after {
    content: '';
    position: absolute;
    border-style: solid;
    border-color: #ffffff transparent;
    border-width: 20px 20px 0;
    bottom: -20px;
    left: 50%;
    transform: translateX(-50%);
  }
</style>

</html>