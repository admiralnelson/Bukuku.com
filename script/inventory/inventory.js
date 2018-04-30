// JavaScript source code
var
    g_AvailableStocks = new Array(),
    g_Inventory = new Array(),
    g_SelectedCell = 0;

function SearchAvailable(id)
{
    function SearchFunction(element)
    {
        return element = id;
    }

    return g_Inventory.findIndex(SearchFunction);
}

function Add2Inventory(id)
{
    g_Inventory.push(g_AvailableStocks[SearchAvailable(id)]);
}

function RemoveFromInventory(index)
{
    if (g_SelectedCell < 0) return;
    g_Inventory.splice(index, 1);
    jQuery(".elem").css("background", "white");
    g_SelectedCell -= 1
    jQuery(".elem:nth-child(" + g_SelectedCell + ")").css("background", "lightyellow");
    FillTable();
}

function CalculateTotal()
{

}

function RemoveAll()
{
    g_Inventory = new Array();
    FillTable();
}

//JQUERy handler
function FillTable()
{
    var
        row = "",
        i = 0;
    function TableClickHandler()
    {
        jQuery(".elem").css("background", "white");
        jQuery(this).css("background", "lightyellow");
        g_SelectedCell = jQuery(this).attr("cell");
        console.log(g_SelectedCell)
    }
    jQuery(".modal-dialog").find("tbody").html("");
    for(inv of g_Inventory)
    {
        console.log(inv);
        row += "<tr class='elem' cell="+i+">" +
                    "<td>" + inv.name + "</td>" +
                    "<td>" + inv.price + "</td>" +
                "</tr>";
        i++;
    }
    console.log(row);
    jQuery(".modal-dialog").find("tbody").html(row);
    jQuery(".table").find(".elem").click(TableClickHandler);
    jQuery(".table").find(".elem:first").css("background", "lightyellow");
}


function OpenJSON()
{
    function BuyHandler()
    {
        var
            barang = new Object();

        barang =
            {
                id: jQuery(this).find(".info").attr("codeBarang"),
                name: jQuery(this).find(".info").attr("namaBarang"),
                qty: 1,
                price: jQuery(this).find(".info").attr("price")
            }
        ShowSnackbar("Item "  + barang.name + " ditambahkan, klik keranjang untuk melihat daftar pembelian");
        console.log(barang);
        g_Inventory.push(barang);
    }
    function ProcessJson(data)
    {
        try
        {
            g_AvailableStocks = data;
            console.log("json loaded " + data + "/eof");
            LoadItemList(g_AvailableStocks);
            jQuery(".buy").click(BuyHandler);
            Main();
            ShowSnackbar("ProcessJson() Berhasil!");
        }
        catch (Exception)
        {
            ShowSnackbar(`Gagal Memuat data/data.json.<br/> 
                        Jika anda pengguna chrome jalankan dengan perintah chrome.exe --allow-file-access-from-files atau menggunakan mozzila fireshit<br/>`
                         +"<code>"+ Exception.toString() + "</code>");
        }
       

    }
    var query = window.location.search.substring(1);
    var vars = query.split('&')[0];
    var mode = vars.split('=')[0];
    var value = vars.split('=')[1];
    $.post("search/getBukuJson", {mode: mode, value: value}  ,  function(jo){
        var jp = $.parseJSON(jo);

        ProcessJson(jp);
        $("#result-txt").text('Hasil pencarian untuk: "'+value+'"');
        //jQuery.getJSON(jo, ProcessJson);

        console.log("json procedure completed!");
    });
    

}



function IntialiseTable()
{
    function KeyHandler(event)
    {
        console.log(event.keyCode);
    }
    function KeranjangClickHandler()
    {
        ShowSnackbar("Pilih terlebih dahulu item sebelum melakukan aksi.");
        FillTable();
    }
    function DropItemClickHandler()
    {
        RemoveFromInventory(g_SelectedCell);
    }
    function ClearItemClickHandler()
    {
        RemoveAll();
    }


    jQuery(".modal-dialog").keypress(KeyHandler);
    jQuery(".modal-dialog").focus();
    jQuery("#Keranjang").click(KeranjangClickHandler);
    jQuery("#DropItem").click(DropItemClickHandler);
    jQuery("#ClearItem").click(ClearItemClickHandler);
    ShowSnackbar("Geser ke item dan Klik tombol keranjang untuk menambahkan item");
    OpenJSON();
    console.log("active!")
}