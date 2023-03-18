<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Unicure india ltd</title>
</head>
<body>
    <?php require "partials/navbar.php"; ?>

    <img src="https://unicureindia.com/public/images/ss/machine.png" alt="" class="background-img">

    <div class="product" id="product">
        <button class="close-btn" onclick="hideBox()" >Close</button>
        <table>
            <tr>
                <th>Product Name</th>
                <th>Salt</th>
                <th>Type</th>
            </tr>
            <tr>
                <td>Paracetamol Tablet 500MG</td>
                <td>Paracetamol Tables IP</td>
                <td>Tablet</td>
            </tr>
        </table>
    </div>

    <main>
        <section class="main-section1">
            <div class="black-screen">
                <div class="heading">
                    <h1>Pursuing Excellence</h1>
                    <h3>In Healthcare</h3>

                </div>
                <img class="second-img" src="https://unicureindia.com/public/images/ss/mfg-machine.png" alt="">
            </div>
        </section>

        <section class="main-section2">

        </section>

        <section class="main-section3">
            <div class="content">
                <img src="https://media.gq-magazine.co.uk/photos/5d139ad99a22c24bd994831c/4:3/w_1704,h_1278,c_limit/job-interview-hp-gq-01mar19_getty_b.jpg" alt="">
                <div class="content-para">
                    <h1>Mr Manav Singhaniya</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium error esse aspernatur et, quam cum, odio veritatis ex similique obcaecati voluptate expedita pariatur quas fugit fugiat magnam vero nesciunt eligendi? Cupiditate molestiae aspernatur exercitationem voluptas in, sequi enim voluptatibus fugit.</p>
                </div>
            </div>


            <div class="content2">
                <div class="content-para2">
                    <h1>Mr Sanjay Singhaniya</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic minima repellendus quaerat. Quasi repellat, tempore harum quam natus animi dolorem rerum dolores ullam ad voluptatum earum repudiandae cumque omnis. Necessitatibus officiis iusto doloremque omnis quam, eum nostrum odit. Veniam, accusantium!</p>
                </div>
                <div class="content2-img">
                    <img src="https://media.gq-magazine.co.uk/photos/5d139ad99a22c24bd994831c/4:3/w_1704,h_1278,c_limit/job-interview-hp-gq-01mar19_getty_b.jpg" alt="">
                </div>
            </div>
        </section>

        <section class="main-section4">
            <div class="welcome-back">
                <div class="inner">
                    <h3>Unicure India Ltd</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nam delectus eveniet repellendus similique, debitis expedita reiciendis quas consequatur fuga deserunt commodi et veniam ratione deleniti eligendi, eius magni dolore molestiae id amet necessitatibus? Fugit corporis adipisci nam deleniti vitae doloribus cum necessitatibus nihil quibusdam vel voluptate error delectus soluta beatae consequatur, perspiciatis repellat architecto pariatur animi officiis recusandae vero! Incidunt fuga vel vitae nisi a alias officia ducimus esse rem facilis mollitia sit iusto exercitationem veniam, quae maiores error!</p>
                </div>
            </div>
        </section>
    </main>


    <?php require "partials/footer.php"; ?>

    <script>
        function showBox(){
            document.getElementById('product').classList.add('list');
        }
        function hideBox(){
            document.getElementById('product').classList.remove('list');
        }
    </script>    
    
</body>
</html>