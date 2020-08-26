var tag = document.createElement("script");
var player;

tag.src = "https://www.youtube.com/iframe_api";
let count = "https://www.youtube.com/watch?v=";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

const button = document.getElementById("button");

button.addEventListener("click", () => {
  let video = document.getElementById("input").value;

  const result = video.slice(count.length, video.length);
  if (document.getElementById("player")) {
    document.getElementById("player").remove();
  }

  let header = document.getElementById("movie-frame");
  var div = document.createElement("div");
  div.setAttribute("id", "player");
  header.appendChild(div);

  onYouTubeIframeAPIReady(result);
});
// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
let onYouTubeIframeAPIReady = function (url) {
  let urlresult = url;
  console.log(urlresult);
  player = new YT.Player("player", {
    height: "640",
    width: "1080",
    videoId: urlresult,
    // playerVars: {
    // },
  });
};

const Setting = document.getElementById("setting");
Setting.addEventListener("click", () => {
  let before = document.getElementById("before").value;
  let after = document.getElementById("after").value;
  let count = (after - before) * 1000;
  console.log(count);
  console.log(before);
  player.seekTo(0 + before);
  player.playVideo();
  setInterval(function () {
    player.pauseVideo();
  }, count + 1000);
});

// -----------------------------------------------------------------------------------------------------------
