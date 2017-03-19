<?php get_header(); ?>
    <div class="w3-display-container w3-content with-background " style="max-width:1500px">
        <img class="w3-image background" src="<?php echo get_bloginfo('template_url') ?>/assets/images/background.png" alt="" width="100%">
        <div class="  banner w3-mobile ">
            <a class="w3-mobile1 w3-bar-item " style="float: left;">
                <img href="#"  src="<?php echo get_bloginfo('template_url') ?>/assets/images/Logo.png"/>
                <span style="font-size: large;font-weight: bold;color: white;">Jet</span>
            </a>
            <div class="banner-item " style="min-width: 78px">
            <a href="#GrabLimo" class="  grabMenu  w3-mobile w3-bar-item w3-button1 ">GrabLimo</a>
            <a href="#GrabCruise" class=" grabMenu w3-mobile w3-bar-item w3-button1">GrabCruise</a>
            <a href="#GrabCopter" class=" grabMenu w3-mobile w3-bar-item w3-button1">GrabCopter</a>
            </div>
            <div class="w3-clear"></div>

        </div>
        <div class="w3-display-middle1 w3-mobile " style="width:65% ">

            <!-- Tabs -->
            <div id="Flight" class="w3-container w3-white w3-padding-16 ">
                <h3>Travel the world with us</h3>
                <div class="w3-row-padding" style="margin:0 -16px;">
                    <div class="w3-half">
                        <label>From</label>
                        <input class="w3-input w3-border" type="text" placeholder="Departing from">
                    </div>
                    <div class="w3-half">
                        <label>To</label>
                        <input class="w3-input w3-border" type="text" placeholder="Arriving at">
                    </div>

                </div>
                <div class="choose-tab">
                    <button class=" beforeChoose " id="attendant" onclick="openLink(event, 'attendant');"><i class="fa fa-plane w3-margin-right"></i>flight attendant (+ $300)</button>
                    <button class=" beforeChoose" id="massage" onclick="openLink(event, 'massage');"><i class="fa fa-car w3-margin-right"></i>massage (+ $50) </button>
                    <button class=" beforeChoose" id="kitchen" onclick="openLink(event, 'kitchen');"><i class="fa fa-bed w3-margin-right"></i>full kitchen (+ $100)</button>
                    <button class=" beforeChoose" id="jacuzzi" onclick="openLink(event, 'jacuzzi');"><i class="fa fa-car w3-margin-right"></i>jacuzzi (+ $180) </button>
                </div>

            </div>

                <p><button id="money" class="w3-button w3-dark-grey">Request a Jet $199</button></p>
            </div>


        </div>
    </div>

    <!-- About Section -->
    <div class="w3-container about-section w3-mobile" id="about">
        <div class="w3-row-padding w3-center" style="margin-top:64px">
            <div class="w3-third section">
                <div class="logo">
                <img id="about-image" src="<?php echo get_bloginfo('template_url') ?>/assets/images/money.png"/ >
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
            <div class="w3-third section">
                <div class="logo">
                <img id="about-image" src="<?php echo get_bloginfo('template_url') ?>/assets/images/flight.png"/ >
            </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
            <div class="w3-third section">
                <div class="logo ">
                    <img class="w3-jumbo" id="about-image" src="<?php echo get_bloginfo('template_url') ?>/assets/images/agree.png"/ >
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>

        </div>
    </div>
<script>
    // Tabs
    var total=199;
    function openLink(evt, linkName) {

        var i, x, tablinks;
        var moneyArr=[300,100,50,180];
        var money;

        var ele=document.getElementById(linkName);
        var t=document.getElementById("money");
        if (linkName=='attendant'){
            money=moneyArr[0];
        }
        if (linkName=='kitchen'){
            money=moneyArr[1];
        }
        if (linkName=='massage'){
            money=moneyArr[2];
        }
        if (linkName=='jacuzzi'){
            money=moneyArr[3];
        }

        if (ele['choose']||ele['choose']==true){
            //evt.currentTarget.className -= " w3-red";
            //evt.currentTarget.className +='w3-white';
            //evt.currentTarget.className -='afterChoose';
            evt.currentTarget.className ='beforeChoose';
            //ele.style.background='lightgray';
            //ele.style.color=' #fff!important';
            //background-color: transparent !important;
            total-=money;
            ele['choose']=false;
        }else{
            //evt.currentTarget.className += " w3-red";
            //evt.currentTarget.className -='beforeChoose';
            evt.currentTarget.className ='afterChoose';

            //ele.style.color='#fff!important';
            //ele.style.backgroundColor='#f44336!important';
            //ele.style.background='red';
            total+=money;
            ele['choose']=true;
        }
        t.innerText="Request a Jet $"+total;

    }
    // Click on the first tablink on load
    //document.getElementsByClassName("tablink")[0].click();
</script>

<?php get_footer(); ?>
