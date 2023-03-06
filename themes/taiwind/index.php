<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document test</title>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.7.4/css/uikit.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.7.4/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.7.4/js/uikit-icons.min.js"></script>
 
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/tailwindcss" href="./css/custom.css">
    
    <script src="./js/taiwind.js"></script>
    <script src="./js/custom.js"></script>
</head>

<body class="bg-gray-100 h-screen" data-mode="dark">


  <nav class="uk-navbar-container">
    <div class="uk-container">
        <div uk-navbar>

            <div class="uk-navbar-left">

                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#">Active</a></li>
                    <li>
                        <a href="#">Parent</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Item</a></li>
                </ul>

            </div>

            <div class="uk-navbar-right">

                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#">Active</a></li>
                    <li>
                        <a href="#">Parent</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Item</a></li>
                </ul>

            </div>

        </div>
    </div>
</nav>



  <!-- Container -->
  <section class="container mx-auto p-10">


    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 my-4 text-white">
      
      <div class="bg-cyan-500 bg-gradient-to-r from-indigo-600 to-pink-500 p-5 rounded-md shadow-lg">
        <h2 class="text-xl mb-4">Empresa de Tecnologia</h2>
        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed numquam molestiae laborum nam rem, aperiam facilis ut, quia nostrum molestias fugiat asperiores commodi, rerum error velit consequuntur illo! Amet, repellat.</p>
        <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-md mt-4">Saiba mais</button>
      </div>
      
      <div class="bg-blue-500 bg-gradient-to-r from-indigo-600 to-pink-500 p-5 rounded-md shadow-lg md:hidden">1</div>
      
      <div class="bg-green-500 bg-gradient-to-r from-indigo-600 to-pink-500 p-5 rounded-md shadow-lg">1</div>


    </div>
  </section>



</body>
</html>