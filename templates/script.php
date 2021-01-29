<link rel="shortcut icon" href="files/img/general/favicon.ico" />

<script>
    $(document).ready(function(){
        $("#Navigation").sticky({topSpacing:10});
    });
</script>

<script>
    if(window.location.hash !== '') {
        setTimeout(function(){
            let hash = window.location.hash;
            document.querySelector(hash).children[0].click();
        }, 10);
    }
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>
<script>
    window.addEventListener("load", function(){
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#ffc6db",
                    "text": "#000"
                },
                "button": {
                    "background": "#e50090",
                    "text": "#fff"
                }
            },
            "content": {
                "message": "Diese Website verwendet Cookies, um die Nutzerfreundlichkeit zu erhöhen.",
                "dismiss": "Verstanden",
                "link": "Mehr erfahren",
                "href": "{{link_url::9}}"
            }
        })});
    if(window.location.hash) {
        setTimeout(function(){
            let accordion = document.querySelector(window.location.hash).firstElementChild;
            accordion.click();
        }, 500);
    }
</script>