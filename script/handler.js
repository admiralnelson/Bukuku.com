const
    DEFAULTWIDTH = 1800;
var
    g_LastWitdh = window.innerWidth;

function ThumbVerticalMouseEnterHandler()
{
    jQuery(this).find(".tilesVerticalIcons").show();
    //jQuery(this).find(".tilesVerticalIcons").css("background","black");
    jQuery(this).find(".wrapCenter").css("margin-bottom", "0px");
    //jQuery(this).find(".tilesVerticalThumbNail").css("min-width", "240px");


}

function ThumbVerticalMouseLeaveHandler()
{
    jQuery(this).find(".tilesVerticalIcons").hide();
    //jQuery(this).find(".tilesVerticalIcons").css("background", "white");
    //jQuery(this).find(".tilesVerticalThumbNail").css("min-width", "240px");
    jQuery(this).find(".wrapCenter").css("margin-bottom", "15px");

}

function OnResize()
{
    var
        width = window.innerWidth,
        deltaW = 0;

    //if (width < g_LastWitdh) console.log("getting smaller"); else console.log("getting bigger");
    deltaW = Math.abs(Math.floor((DEFAULTWIDTH - width) / 100));
   //console.log("jQuery('.list-group-item:nth-child(" + ( deltaW)+ ")').hide()");
   if (width < g_LastWitdh)
   {
       jQuery(".menuKategori:nth-last-child(" + (deltaW) + ")").hide();
    }
    else
    {
        jQuery(".list-group-item:nth-last-child(" + (deltaW) + ")").show();
    }
    if (width >= DEFAULTWIDTH) jQuery(".menuKategori").show();
    g_LastWitdh = width;
}

function SliderInit()
{
    function OnSlide(evt)
    {
        jQuery("#LabelPrice").text(
            "Rp: " +
            (evt.value * 5000) +
            "- " +
            ((evt.value >= 100) ? ("tidak ada batas") : ("Rp" + evt.value * 10000)));
        console.log(evt.value);
    }
    jQuery("#PriceSlider").slider();
    jQuery("#PriceSlider").on("slide", OnSlide);
}

function ShowSnackbar(text) {
    var x = document.getElementById("snackbar");
    x.innerHTML = text;
    x.className = "show";
    setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
}