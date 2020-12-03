// SNSボタンを追加するエリア
var snsArea = document.getElementById('sns-area');
 
// シェア時に使用する値
var shareUrl = 'http://cly7796.net/wp/'; // 現在のページURLを使用する場合 location.href;
var shareText = 'cly7796.netのトップページです。'; // 現在のページタイトルを使用する場合 document.title;
 
generate_share_button(snsArea, shareUrl, shareText);
 
// シェアボタンを生成する関数
function generate_share_button(area, url, text) {
    // シェアボタンの作成
    var twBtn = document.createElement('span');
    twBtn.className = 'twitter-btn';
    var fbBtn = document.createElement('span');
    fbBtn.className = 'facebook-btn';
 
    // 各シェアボタンのリンク先
    var twHref = 'https://twitter.com/share?text='+encodeURIComponent(text)+'&url='+encodeURIComponent(url);
    var fbHref = 'http://www.facebook.com/share.php?u='+encodeURIComponent(url);
    
    // シェアボタンにリンクを追加
    var clickEv = 'onclick="popupWindow(this.href); return false;"';
    var twLink = '<a href="' + twHref + '" ' + clickEv + '><img src="/images/Twitter_Social_Icon_Circle_Color.png" class="img-fluid" alt="ツイッターロゴ"></a>';
    var fbLink = '<a href="' + fbHref + '" ' + clickEv + '><img src="/images/f_logo_RGB-Blue_1024.png" class="img-fluid" alt="ファイスブックロゴ"></a>';
    
    twBtn.innerHTML = twLink;
    fbBtn.innerHTML = fbLink;
    
    // シェアボタンを表示
    area.appendChild(twBtn);
    area.appendChild(fbBtn);
    
}
 
// クリック時にポップアップで表示させる関数
function popupWindow(url) {
    window.open(url, '', 'width=580,height=400,menubar=no,toolbar=no,scrollbars=yes');
}