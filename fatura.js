function tutarHesapla(islem_sayisi)
{
	var i = 1;
	var genel_toplam = 0;
	var miktar, fiyat;
	var satir_tutari;
	for (i = 1; i <= islem_sayisi; i++) 
	{
		miktar = parseFloat($('#miktar'+i).val());
		fiyat = parseFloat($('#fiyat'+i).val());
		satir_tutari = miktar * fiyat;
		$('#tutar'+i).val(satir_tutari);
		genel_toplam += parseFloat(miktar * fiyat);
	}
	$('#toplam_tutar').text(genel_toplam);
/*

	var miktar = parseInt($("#test1").val());
    var fiyat = parseInt($("#test2").val());
    $("#test3").val(miktar+fiyat);*/
}