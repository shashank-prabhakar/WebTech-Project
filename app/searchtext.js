function searching() {
    var x = document.getElementById("key").value;
    var text=x.toLowerCase();
    switch (text) {

        case 'restaurants':
        case 'hotel':
        case 'hot':
        case 'rest':
        case 'food':
        case '':
            window.open("restaurants.html");
            break;


        case 'little italy':
            window.open("littleitaly.html");
            break;

        case 'trick or treat':
        case 'tot':
        case 'trick':
        case 'treat':
            window.open("trickortreat.html");
            break;

        case 'toscano':
        case 'tosc':
        case 'cafe toscano':
        case 'cafe':
            window.open("toscano.html");
            break;

        case 'indian':
        case 'india':
        case 'north indian':
        case 'punjabi':
        case 'punjab':
        case 'kulcha':
        case 'roti':
        case 'subzi':
        case 'subji':
        case 'naan':
        case 'paratha':
        case 'north':
            window.open("northindian.html");
            break;

        case 'dosa':
        case 'idly':
        case 'south indian':
        case 'south':
        case 'khara bath':
        case 'kesari bath':
        case 'vada':
        case 'dose':
        case 'vade':
        case 'coffee':
        case 'filter coffee':
        case 'bib bele bath':
        case 'chutney':
        case 'sambhar':
        case 'idli':
            window.open("southindian.html");
            break;

        case 'pizza':
        case 'italian':
        case 'pasta':
        case 'spaghetti':
        case 'pzza':
        case 'garlic bread':
        case 'italy':
        case 'lasagna':
        case 'psta':
            window.open("italian.html")
            break;
    
        case 'thai':
        case 'tim':
        case 'tao':
        case 'thailand':
            window.open("Thai.html");
            break;

        case 'chinese':
        case 'china':
        case 'chn':
        case 'noodles':
        case 'manchurian':
        case 'snake':
        case 'insects':
            window.open("Chinese.html");
            break;
        
        case 'burger':
        case 'fries':
        case 'continental':
        case 'american':
        case 'america':
        case 'fried':
            window.open("Continental.html");
            break;

        case 'medi':
        case 'mediterranian':
        case 'mediterranean':
            window.open("mediterranean.html");
            break;


        default:
            window.open("noresult.html");
            break;
    }
}