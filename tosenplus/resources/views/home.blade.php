<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/btn.css') }}">
    <link rel="icon" href="{{ asset('css/favicon.ico') }}">
    <title>東仙PLUS</title>
</head>
<body>

<div class="top-op"></div>
<div class="top-op2"></div>
<div class="img"></div> 
<style>
     
.top-op,.top-op2{
  position: fixed;
  top: 0;
  left: 0;
  margin: 0 auto;
  width: 100%;
  height: 100vh;
}
.top-op{
  z-index: 99;
  background: #f2f2f2;
  animation-duration: 1.2s;
  animation-delay:1.4s;
  animation-fill-mode: forwards;
  animation-name: top-op;
}
.top-op2{
  z-index: 100;
  background: #e2e2e2;
  animation-duration: 0.7s;
  animation-delay: 0.6s;
  animation-fill-mode: forwards;
  animation-name: top-op2;
}
 
@keyframes top-op{
0% {
  width: 100%;
  left:0;
}
50% {
  width: 100%;
}
100% {
  width: 0%;
  left: 100%;
}
}
@keyframes top-op2{
0% {
  width: 100%;
  left:0;
}
50% {
  width: 100%;
}
100% {
  width: 0%;
  left: 100%;
}
}
 
</style>

<div id="home" class="big-bg">
    <header class="page-header wrapper">
        <h1><a href="home.html"><img class="logo" src="../image/logo.png" alt="東仙PLUS"></a></h1>
        <nav>
            <ul class="main-nav">
                <li><a href="news.html">会社概要</a></li>
                <li><a href="menu.html">Menu</a></li>
                <a href="#" class="btn btn-gradient"><span>CONTACT</span></a>
            </ul>
        </nav>
    </header>

  <div class="home-content wrapper">
    <h2 class="page-title">ここにキャッチフレーズを入れる</h2>
    <p>何かここに入れましょう</p>
    <a class="button" href="menu.html" >メニューを見る</a>
  </div>
</div>
<main class="main-contents wrapper">
    <div class="tosen-info content" >
        <h2>東仙PLUSのミッション</h2>
            <p>商品やサービスの購入を検討してホームページを訪れた見込み客に対して、提供する商品やサービスの詳細をプレゼンするのが、この事業紹介ページです。ユーザーがわざわざホームページを訪れるということはつまり、購買意欲や興味を持って積極的に行動していることを意味します。掲載された事業紹介の内容を閲覧したユーザーは、競合他社の商品やサービスと見比べて検討するでしょう。事業紹介ページに、単に消費やサービスを列挙するのはあまりにもったいない。営業マンが顧客に対応する時のように、商品のメリットやサービスの導入事例などを掲載しましょう。</p>
    </div>
    <div class="ceo-greet content">
        <h2>代表挨拶</h2>
        <div class="ceo-greet-image">
           <img src="../image/CEO.png" alt="CEO">
           <h3>代表取締役　日笠　雅人</h3>
           <p>日頃より当社グループの活動にご支援、ご愛顧を賜りありがとうございます。当社グループは1885年の創業以来、「モノ運び」を通じて、世界経済の発展や、人々の生活の向上に貢献してまいりました。人々の暮らしを支えることを誇りに思うと同時に、安全や環境といった時代のニーズを的確に捉え、常に新たな価値を創造しながら、社会的責任を果たしてまいりたいと考えています。この事業活動をさらに推進するため、グループ企業理念における基本理念を“Bringing value to life.” と再定義しました。さまざまな活動を通じて幅広く社会に貢献し、ステークホルダーの皆さまをはじめ世の中から信頼され続ける存在でありたいと考えています。2018年4月に発表した中期経営計画 “Staying Ahead 2022 with Digitalization and Green”で策定した事業戦略をさらに推し進め、創意工夫による差別化を図ることを目指してまいります。皆さまには、引き続き、ご支援、ご鞭撻を賜りますようお願い申し上げます。</p>
        </div>
    </div>
</main>
<footer>
    <p><small>面積約款</small></p>
</footer>   
</body>
</html>