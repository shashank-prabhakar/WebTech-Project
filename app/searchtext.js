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
        case 'italy':
        case 'little':
            window.open("littleitaly.html");
            break;


        case 'stoner':
        case 'stobed':
        case 'stone':
            window.open("stoner.html");
            break;


        case 'toscano':
        case 'cafe toscano':
        case 'cafe':
            window.open("toscano.html");
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
        case 'curry':
            window.open("northindian.html");
            break;

        case 'dosa':
        case 'masala dosa':
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
        case 'bisi bele bath':
        case 'chutney':
        case 'sambhar':
        case 'idli':
        case 'sambar':
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


        case 'location':
        case 'locations':
        case 'loc':
        case 'place':
        case 'places':
        case 'area':
        case 'areas':
        case 'bangalore':
        case 'bengaluru':
        case 'india':
            window.open("locations.html");
            break;


        case 'jayanagar':
        case 'basavanagudi':
        case 'basvangudi':
        case 'jayanagar 4th block':
        case 'banashankari':
        case 'bsk':
        case 'south bangalore':
        case 'south bengaluru':
        case 'banshankari':
            window.open("southbangalore.html");
            break;

        
        case 'kora':
        case 'koramangala':
        case 'kormangla':
        case 'koramangla':
        case 'koro':
            window.open("koramangala.html");
            break;


        case 'chicken':
        case 'type':
        case 'veg':
        case 'nonveg':
        case 'non veg':
        case 'cuisine':
            window.open("cuisines.html");
            break;


        case 'indira':
        case '100 feet road':
        case '100ft':
        case '100ft road':
        case 'indra':
        case 'indiranagar':
        case 'cmh road':
        case 'cmh':
            window.open("indiranagar.html");
            break;

        case '1947':
            window.open("1947.html");
            break;

        case 'punjab':
        case 'punjab grill':
        case 'grill':
            window.open("punjabgrill.html");
            break;

        case 'byblos':
            window.open("byblos.html");
            break;
        
        case 'socials':
        case 'koramangala socials':
        case 'koro socials':
            window.open("socials.html");
            break;

        case 'bricklane':
        case 'brick lane':
        case 'brick':
        case 'lane':
            window.open("bricklane.html");
            break;

        case 'vidyarthi':
        case 'vidyarti':
        case 'bhavan':
        case 'vidyarthi bhavan':
        case 'vidyarti bhavan':
            window.open("vidarthi.html");
            break;
        
        case 'slv':
            window.open("socials.html");
            break;

        case 'bbq':
        case 'bbqn':
        case 'barbeque nation':
        case 'barbeque':
            window.open("bbqn.html");
            break;

        case 'tao teracces':
        case 'tao terrace':
        case 'tao':
            window.open("tao.html");
            break;

        case 'yauacha':
        case 'yauatcha':
            window.open("bbqn.html");
            break;


        default:
            window.open("noresult.html");
            break;
    }
}