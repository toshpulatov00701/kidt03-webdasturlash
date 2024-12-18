<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aloqa</title>
    <link rel="stylesheet" href="css/customstyle.css">
</head>
<body>
    <div class="container">
        <div class="advertisement">
            Reklama uchun
        </div>
    </div>
    
    <div class="navbar">
        <a href="index.php"><img src="images/logo-light.svg" alt=""></a>
        <ul class="nav-list">
            <li><a class="nav-link" href="index.php">Asosiy</a></li>
            <li><a class="nav-link" href="about.php">Biz haqimizda</a></li>
            <li><a class="nav-link" href="world-news.php">Dunyo yangiliklari</a></li>
            <li><a class="nav-link" href="local-news.php">Mahalliy yangiliklar</a></li>
            <li><a class="nav-link nav-active" href="contact.php">Aloqa</a></li>
            <li><a class="nav-link" href="login.php">Admin</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="m-section">
            <h1 class="section-title">Aloqa</h1>
            <div class="section-container">
               <div class="c-box">
                <div class="c-detail">
                    <img src="images/location.png" alt="">
                    <p>Manzil</p>
                </div>
                <p class="c-text">Toshkent shahar, Amir Temur ko'chasi 123-uy</p>
                
                <div class="c-detail">
                    <img src="images/phone-call.png" alt="">
                    <p>Telefon</p>
                </div>
                <p class="c-text">+99897 741 41 41</p>
                <p class="c-text">+99897 741 41 41</p>
                <p class="c-text">+99897 741 41 41</p>
                <div class="c-detail">
                    <img src="images/email.png" alt="">
                    <p>Email</p>
                </div>
                <p class="c-text">mytest@gmail.com</p>
                <div class="c-detail">
                    <img src="images/global.png" alt="">
                    <p>Sayt</p>
                </div>
                <p class="c-text">mytest.uz</p>
               </div>
               <div class="c-box">
                <h3>Bizga xabar yuboring...</h3>
                <form action="#">
                    <label class="label-title" for="">Ism</label><br>
                    <input type="text" class="form-control" placeholder="Ism kiriting...">
                    <label class="label-title" for="">Familiya</label><br>
                    <input type="text" class="form-control">
                    <label class="label-title" for="">Kategoriya</label><br>
                    <select name="" id="" class="form-control">
                        <option value="">Kategoriya 1</option>
                        <option value="" selected>Kategoriya 2</option>
                        <option value="">Kategoriya 3</option>
                        <option value="" disabled>Kategoriya 4</option>
                        <option value="">Kategoriya 5</option>
                    </select>
                    <label class="label-title" for="">Shaxs turi</label><br>
                    <input type="radio" name="shaxs" id="jismoniy"><label for="jismoniy">Jismoniy</label><br>
                    <input type="radio" name="shaxs" id="yuridik"><label for="yuridik">Yuridik</label>
                    <br>
                    <label class="label-title" for="">Yangilik turi</label><br>
                    <input type="checkbox" id="sport"><label for="sport">Sport</label><br>
                    <input type="checkbox" id="dunyo"><label for="dunyo">Dunyo</label><br>
                    <label class="label-title" for="">Sana</label><br>
                    <input type="date" class="form-control">
                    <label class="label-title" for="">Xabar matni</label><br>
                    <textarea name="" id="" class="form-control" rows="5"></textarea>
                    <button class="form-control" style="background-color: #FF9538; color: #FFF;">Yuborish</button>
                </form>
               </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.090988118707!2d69.20314711101044!3d41.350375998171366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8c3d5af08d2f%3A0x4f6c8b4d4847f94d!2sNational%20University%20of%20Uzbekistan!5e0!3m2!1sen!2s!4v1728400501151!5m2!1sen!2s" style="border:1px solid #FF9538; width: 100%; height: 80vh; margin-top: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</body>
</html>