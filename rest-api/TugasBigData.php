<?php
function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

$result = get_CURL ('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCGde4QCmpaVl3I2vDQI6xPg&key=AIzaSyDwr1bLMpTOi7_AnbYoF1TG7vpOWmMGSoQ');

$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

$result2 = get_CURL ('https://www.googleapis.com/youtube/v3/search?key=AIzaSyDwr1bLMpTOi7_AnbYoF1TG7vpOWmMGSoQ&channelId=UCGde4QCmpaVl3I2vDQI6xPg&maxResults=1&order=date&part=snippet');
$latestVideoId = $result2['items'][0]['id']['videoId'];

//curl ig
$resultig = get_CURL('https://graph.facebook.com/v19.0/17841412280454857?fields=business_discovery.username(greyphotography__){followers_count,media_count,biography,profile_picture_url,media{id,caption,comments_count,like_count,%20timestamp,username,media_type,media_url}}&access_token=EAAZARpdB5WfABO8CYzokrFP7UmpKz5s1b94gVM4aMcZAihB6t7AXXTygi28JxPvnsafHCUyfVQxSrhiy81gxYFP28gCy9yQguTNGgtFZC06G74PPpSbbUpdn1AVjZAoJjS7xZCHfTTolrQyZAnGjfdmuJb59HzrscPrkZBsySPKcqO4CzFXRJzfXZAOtAUH0x3tRGdkQxJMDzPaQEZC6ViQZDZD');
$profil_ig = $resultig['business_discovery']['profile_picture_url'];
$follower_ig = $resultig['business_discovery']['followers_count'];
$username_ig = $resultig['business_discovery']['media']['data'][0]['username'];
$post1_ig = $resultig['business_discovery']['media']['data'][2]['media_url'];
$post2_ig = $resultig['business_discovery']['media']['data'][3]['media_url'];
$post3_ig = $resultig['business_discovery']['media']['data'][4]['media_url'];
$capt_ig = $resultig['business_discovery']['media']['data'][0]['caption'];
$like_ig = $resultig['business_discovery']['media']['data'][0]['like_count'];
$comment_ig = $resultig['business_discovery']['media']['data'][0]['comments_count'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>TUGAS BIG DATA ABU SUFIYAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      /* CSS untuk mempercantik halaman */
      body {
        font-family: Arial, sans-serif;
        background-color: #698295;
      }
      h1 {
        text-align: center;
        color: #698295;
      }
      .row{
        width: 700px;
        height: 150px;
      }
      .profil-img{
        width: 125px;
        height: 100px;
        border-radius: 50%;
      }
      .title {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-bottom: 30px;
      }
      .box {
        width: 500px;
        height: 25px;
        background-color: #698295;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        margin-top: 0px;
      }
      .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-image: url(bgweb.jpg);
        background-size: cover;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      .logo {
        text-align: center;
        margin-top: 30px;
      }
      .logo img {
        height: 30px;
        margin-bottom: 10px;
      }
      .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 30px;
      }
      .gallery img {
        width: 300px;
        height: 200px;
        object-fit: cover;
        margin: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      .intro {
        margin-top: 20px;
        text-align: justify;
        text-justify: inter-word;
        font-family: "Times New Roman", Times, serif;
      }
      .intro p {
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 20px;
      }
      .contact-box {
			background-color: #698295;
			color: #fff;
			padding: 20px;
			text-align: center;
			margin-top: 50px;
		}
      .title h1 {
        margin-bottom: 0px;
      }
      .title p {
        margin-top: 18px;
        font-family: Arial, sans-serif;
        letter-spacing: 5px;
        font-size: 18px;
        color: #ffffff;
        text-align: center;
      }
      .album{
        left : 20%;
        position: relative;
      }
      .container-ig{
        height: 400px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="logo">
        <img src="grey hitam.png" alt="Grey Photography Logo">
      </div>
      <div class="title">
        <h1>GALERI GREY PHOTOGRAPHY</h1>
        <div class="box">
          <p>make a story with a light</p>
        </div>
      </div> <div class="gallery">
        <img src="GRY_2110.JPG" alt="Foto Wedding 1">
        <img src="GRY_0042.JPG" alt="Foto Wedding 2">
        <img src="GRY_3403.JPG" alt="Foto Wedding 3">
        <img src="GRY_8698.JPG" alt="Foto Wedding 4">
        <img src="GRY_3815.JPG" alt="Foto Wedding 5">
        <img src="GRY_9198.jpg" alt="Foto Wedding 6">
    </div>
    <div class="intro">
      <p align="center">Grey Photography adalah sebuah vendor foto wedding muslim yang berbasis di Jembrana-Bali.Kami telah melayani banyak pasangan<br/>yang ingin mengabadikan momen pernikahan mereka dengan gaya fotografi yang khas dan berbeda. Memiliki tim yang terdiri dari fotografer yang berpengalaman dan profesional, sehingga dapat memberikan hasil foto yang memukau dan mengesankan.</p>
      <p align="center">Selain itu, kami juga menggunakan peralatan fotografi yang professional agar mendapatkan hasil yang maksimal. Dalam setiap sesi foto, kami juga berusaha untuk menciptakan suasana yang nyaman dan menyenangkan bagi pasangan, sehingga pasangan dapat merasa santai dan natural saat diambil fotonya.</p>
      <p align="center">Kami khusus melayani fotografi pernikahan muslim, di mana kami dapat menangkap keindahan dan nilai-nilai dalam sebuah pernikahan muslim. Dengan pengalaman dan kreativitas, kami dapat menghasilkan foto-foto yang tidak hanya indah, tetapi juga bermakna dan menggugah hati. Jika Anda mencari vendor foto pernikahan muslim yang handal dan kreatif di Jembrana-Bali, Grey Photography bisa menjadi pilihan yang tepat untuk Anda.</p>
    </div>
	</div>
    <div class="container">
      <div class="row col-12">
        <img class="profil-img col-6" src= "<?=$youtubeProfilePic?>" alt="">
        <div class="col-6"> 
      <p><?=$channelName?></p>
      <p><?=$subscriber?> Subscriber</p>
      <div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="default" data-count="default"></div>
      </div>


      </div>
      <div class="ratio ratio-16x9">
        <iframe src="https://www.youtube.com/embed/<?=$latestVideoId?>?rel=0" title="YouTube video" allowfullscreen></iframe>
      </div>
  </div>


  <!-- ig -->
  <div class="container container-ig">
    <div class="row col-12 py-3">
      <img class="profil-img col-6" src="<?=$profil_ig?>" alt="">
      <div class="col-6"><?=$username_ig?><br>
      <?=$follower_ig?> Follower<br></div>
    </div>
      <div class="row album col-12 justify-content-center">
        <img class="col-4" src="<?=$post1_ig?>" alt="">
        <img class="col-4" src="<?=$post2_ig?>" alt="">
        <img class="col-4" src="<?=$post3_ig?>" alt="">
      </div>


</div>
<script src="https://apis.google.com/js/platform.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
