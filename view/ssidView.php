<link rel="stylesheet" type="text/css" href="/portalApp/view/style.css">

<div class="login-page">
    <div class="form">
        <button id="accept-Button">Επιβεβαιώνω πως είμαι επαγγελματίας υγείας</button>
        <button id="reject-Button">Δεν είμαι επαγγελματίας υγείας</button>

<script type="text/javascript">
    //console.log(window.location.href+ "&fetchdoc=true");
    document.getElementById("accept-Button").onclick = function () {
        
        location.href = window.location.href+'&fetchdoc=true';
    };
    document.getElementById("reject-Button").onclick = function () {
        location.href = "https://www.com2go.co/msd/zostavax/zostravax";
    };

</script>
    </div>
</div>