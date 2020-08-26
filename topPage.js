let userArray = "";

let onYouTubeIframeAPIReady = function (url, id, top, bottom) {
  let urlresult = url;
  let player;
  let path = id;
  player = new YT.Player(path, {
    height: "560",
    width: "100%",
    videoId: urlresult,
    playerVars: {
      loop: 1,
      controls: 0,
      iv_load_policy: 3,
      start: top,
      end: bottom,
    },
  });
};
fetch("http://localhost/hac-b/hackson/toppage.php")
  .then((response) => response.text())
  .then((text) => {
    userArray = JSON.parse(text);

    const article = document.getElementById("content");
    let count = "https://www.youtube.com/watch?v=";

    for (let val in userArray) {
      const result = userArray[val]["url"].slice(
        count.length,
        userArray[val]["url"].length
      );
      console.log(result);

      let text =
        "<section class='movieContent'>" +
        "<h3>" +
        userArray[val]["title"] +
        "</h3>" +
        "<div class='movieMaxWidth'>" +
        "<div id=" +
        userArray[val]["id"] +
        " class='cutMovie'>" +
        "</div>" +
        "</div>" +
        "<table>" +
        "<tr>" +
        "<td class='tdTitle'>" +
        "作成者：" +
        "</td>" +
        "<td class='tdCon'>" +
        userArray[val]["name"] +
        "</td>" +
        "</tr>" +
        "<tr>" +
        "<td class='tdTitle'>" +
        "タグ：" +
        "</td>" +
        "<td class='tdCon'>" +
        userArray[val]["tag"] +
        "</td>" +
        "</tr>" +
        "<tr>" +
        "<td class='tdTitle'>Start：" +
        "</td>" +
        "<td class='tdCon'>" +
        userArray[val]["start"] +
        "秒</td>" +
        "</tr>" +
        "<tr>" +
        "<td class='tdTitle'>End：" +
        "</td>" +
        "<td class='tdCon'>" +
        userArray[val]["end"] +
        "秒</td>" +
        "</tr>" +
        "</table>" +
        "</section>";
      article.insertAdjacentHTML("beforeend", text);
      onYouTubeIframeAPIReady(
        result,
        userArray[val]["id"],
        userArray[val]["start"],
        userArray[val]["end"]
      );
    }
  });
