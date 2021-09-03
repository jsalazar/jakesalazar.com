var localBGPhotos = [
    'bg-cover-1.jpg',
    'bg-cover-2.jpg',
    'bg-cover-3.jpg',
    'bg-cover-4.jpg'
    ];

var randomBGPhoto = localBGPhotos[Math.floor(Math.random() * localBGPhotos.length)];
// var localPath = $_SERVER["DOCUMENT_ROOT"].$HTML->siteDirectory.'img/bg/';
var localPath = '/staging/research/img/bg/';
var randomBGURL = localPath + randomBGPhoto;


// $('.main-intro-photo').css('background-image', 'url(' + randomBGURL + ')');
// not using Jquery
document.getElementById('main-intro-photo').style.backgroundImage = 'url('+ randomBGURL +')';

// deBugg
console.log('rand photo: ' + randomBGPhoto);
console.log('local path: ' + localPath);
console.log('randomBGURL: ' + randomBGURL);

/*

 to rotate randomly

    $(function() {

        var body = $(‘body’);
        var backgrounds = new Array(
            ‘url(image1.jpg)’,
            ‘url(image2.jpg)’
        );

        var current = 0;

        function nextBackground() {
            body.css(‘background’, backgrounds[current = ++current % backgrounds.length]);
            setTimeout(nextBackground, 10000);
        }

        setTimeout(nextBackground, 10000);

        body.css(‘background’, backgrounds[0]);

});





 */