<script type="text/javascript" src="jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/percentage.js"></script>
<script type="text/javascript" src="percircle.js"></script>
<script type="text/javascript">
    function getMiniNav(){
        document.getElementById("miniNav").className = "mini-nav";
        document.getElementById("maxNav").className = "max-nav hide-anim";
        $(".user-dashboard-area").css({marginLeft:'70px'});
    }
    function getMaxNav(){
        document.getElementById("miniNav").className = "mini-nav hide-anim";
        document.getElementById("maxNav").className = "max-nav";
        $(".user-dashboard-area").css({
            marginLeft:'235px'
        });
    }

    $(document).ready(function(){
        $("#custom").percircle({
            progressBarColor: "#1abc9c",
            percent: 0.000001
        });

        function myFunction(a) {
            $("#custom").percircle({
                progressBarColor: "#1abc9c",
                text:a,
                percent: a
            });

            document.getElementById("text-percent").innerHTML = Math.floor(a)+' %';
            document.getElementById("progressBar").style.width=a + "%";
        }

        $(".loadGuide").on("click", function(e) {
            e.preventDefault();
            $("#loadHere").load("usaGuide");
            $(".navbar").removeClass("active");
            $(this).find(".navbar").addClass('active');
        });

        $("#loadAusGuide").on("click", function(e) {
            e.preventDefault();
            $("#loadHere").load("ausGuide");
            $(".navbar").removeClass("active");
            $(this).find(".navbar").addClass('active');
        });

        $("#loadDelivery,#loadDeliveryMax").on("click", function () {
            $("#loadHere").load("delivery");
            $(".navbar").removeClass("active");
            $(this).find(".navbar").addClass('active');
        })

        function countrySaveToCookieUSA() {
            var country = document.getElementById("usa-country").innerHTML;
            var a = document.cookie = "country=" + country + ";" + "expires=Fri, 25 Dec 2020 23:59:59 GMT;";
        }

        function countrySaveToCookieAus() {
            var country2 = document.getElementById("aus-country").innerHTML;
            var a = document.cookie = "country=" + country2 + ";" + "expires=Fri, 25 Dec 2020 23:59:59 GMT;";
        }

        $("#loadUpload,#loadUploadMax").on("click", function () {
            $(".navbar").removeClass("active");
            $(this).find(".navbar").addClass('active');
            $("#loadHere").html("<center><image src='images/Loading_icon.gif'></center>");
            $("#loadHere").load("getDocuments", function (response, status, xhr) {
                if (status == "error") {
                    var msg = "Sorry but there was an error: ";
                    $("#loadHere").html(msg + xhr.status + " " + xhr.statusText);
                }
            });
        });

        $("#loadClass,#loadClassMax").on("click", function () {
            $("#loadHere").load("getObjects");
            $(".navbar").removeClass("active");
            $(this).find(".navbar").addClass('active');
        });

        $("#loadRewards").add('#loadRewardsMax').on("click", function (e) {
            e.preventDefault();
            $("#loadHere").load("getOffers");
            $(".navbar").removeClass("active");
            $(this).find(".navbar").addClass('active');
        });

        $("#loadUniversity,#loadMyUniversity").on("click", function () {
            $("#loadHere").load("getUniversity");
            $(".navbar").removeClass("active");
            $(this).find(".navbar").addClass('active');
        });

        $("#loadGuide").on("click", function () {
            $("#loadHere").load("usaGuide");
        });

        function goTo3() {
            $("#loadHere").load("getLists");
            document.getElementById("progressBar").style.width = "50%";
        }

        $("[id$='circle']").percircle();

        $("#clock").percircle({
            perclock: true
        });

        $("#countdown").percircle({
            perdown: true,
            secs: 14,
            timeUpText: 'finally!',
            reset: true
        });

        $("#custom").percircle({
            percent: 50
        });

        $("#custom-color").percircle({
            progressBarColor: "#CC3366",
            percent: 64.5
        });
    });
</script>