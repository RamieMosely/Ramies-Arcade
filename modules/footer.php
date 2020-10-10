<footer id="sticky-footer">
    <hr class="footerTop">
    <div class="comName">
        <h3>Ramies Arcade</h3>
    </div>
</footer>

<script>
    function dropdownMenu() {
        var x = document.getElementById("dropdownClick");
        if (x.className === "topnav") {
            x.className += " responsive";
        }

        else {
            x.className = "topnav";
        }
    }
</script>