window.onload = function () {


    if (/chrome/.test(navigator.userAgent.toLowerCase())){


    } else {

        let backgroundImg = ["\"./metadata/background/about-us/first.jpg\"",
            "\"./metadata/background/about-us/second.jpg\"",
            "\"./metadata/background/about-us/third.jpg\""];


        setInterval(changeImage, 5000);
        function changeImage() {
            let i = Math.floor((Math.random() * 3));

            console.log(backgroundImg[i]);
            document.getElementsByClassName("greeting-message-and-search-box").
            item(0).setAttribute("style", "background-image: url(" + backgroundImg[i] +");");
        }
    }
}
