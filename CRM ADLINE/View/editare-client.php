<?php 
include 'header.php';
include 'navbar.php';
include 'sidebar.php';
include 'stats.php';
?>

<script>

// Declare data structure for save

var dateDeTrimis = { 
                    "user" : { 
                                "ID" : 22, 
                                "token": "hY3j"
                             }, 
                    "data" : {
                                "id" : null, 
nume 
                                cod_fiscal
                             }
                   };  // An ID = -1 will force an insert, otherwise it is update

// Perform save data
                   
function SaveData(entityName, entityId)
{
    // Prepare data for save
    dateDeTrimis.data.id = $('#id').val();
    dateDeTrimis.data.username = $('#username').val();
    dateDeTrimis.data.nume = $('#nume').val();
    dateDeTrimis.data.telefon = $('#nume').val();
    dateDeTrimis.data.email = $('#nume').val();
    dateDeTrimis.data.password = $('#nume').val();
    dateDeTrimis.data.tip = $('#tip').val();

    // Make POST request
        $.ajax({
        data: dateDeTrimis,
        type: "POST",
        url: "../Controller/Controller.php?save="+entityId+"&entity="+entityName,
        dataType: "json"
        })
        .done(function(rezultat) { 
           window.alert("Saved "+ agentId);
       }).fail(function(rezultat) { 
           window.alert("Error for entity: "+ entityName + ", id:" + agentId);
       });
}
</script>

        <div class="container-fluid">
            <div class="row-fluid">
                    
<div class="btn-toolbar">
    <button class="btn btn-primary"><i class="icon-save"></i> Salveaza</button>
  <div class="btn-group">
  </div>
</div>
<div class="well">
<table border=0>
    <form>
	<tr>
        <td><label class="stanga" for="nume">Nume firma</label></td>
        <td colspan=3><input type="text" value="MCA PRESS SRL"  id="nume" class="input-xxlarge uppercase myRequired"></td>
	</tr>
	<tr>
        <td><label class="stanga" for="cod_fiscal">Cod fiscal</label></td>
        <td style="width: 260px;"><input type="text" value="RO0336675"  id="cod_fiscal" class="input-xlarge uppercase"></td>

        <td><label class="stanga" for="nr_reg_comert">Nr. Reg. Comert</label></td>
        <td><input type="text" value="J16/354/2012"  id="nr_reg_comert" class="input-xlarge uppercase"></td>
	</tr>
    		<tr>
        <td><label class="stanga" for="judet">Judet</label></td>
        <td><select name="judet" id="judet">
	<option bakvalue="Alba">Alba</option>
	<option bakvalue="AG">Arges</option>
	<option bakvalue="AR">Arad</option>
	<option bakvalue="B" >Bucuresti</option>
	<option bakvalue="BC">Bacau</option>
	<option bakvalue="BH">Bihor</option>
	<option bakvalue="BN">Bistrita</option>
	<option bakvalue="BR">Braila</option>
	<option bakvalue="BT">Botosani</option>
	<option bakvalue="BV">Brasov</option>
	<option bakvalue="BZ">Buzau</option>
	<option bakvalue="CJ">Cluj</option>
	<option bakvalue="CL">Calarasi</option>
	<option bakvalue="CS">Caras-Severin</option>
	<option bakvalue="CT">Constanta</option>
	<option bakvalue="CV">Covasna</option>
	<option bakvalue="DB">Dambovita</option>
	<option bakvalue="DJ">Dolj</option>
	<option bakvalue="GJ">Gorj</option>
	<option bakvalue="GL">Galati</option>
	<option bakvalue="GR">Giurgiu</option>
	<option bakvalue="HD">Hunedoara</option>
	<option bakvalue="HG">Harghita</option>
	<option bakvalue="IF">Ilfov</option>
	<option bakvalue="IL">Ialomita</option>
	<option bakvalue="IS">Iasi</option>
	<option bakvalue="MH">Mehedinti</option>
	<option bakvalue="MM">Maramures</option>
	<option bakvalue="MS">Mures</option>
	<option bakvalue="NT">Neamt</option>
	<option bakvalue="OT">Olt</option>
	<option bakvalue="PH">Prahova</option>
	<option bakvalue="SB">Sibiu</option>
	<option bakvalue="SJ">Salaj</option>
	<option bakvalue="SM">Satu-Mare</option>
	<option bakvalue="SV">Suceava</option>
	<option bakvalue="TL">Tulcea</option>
	<option bakvalue="TM">Timis</option>
	<option bakvalue="TR">Teleorman</option>
	<option bakvalue="VL">Valcea</option>
	<option bakvalue="VN">Vrancea</option>
	<option bakvalue="VS">Vaslui</option>
</select></td>
	</tr>
		<tr>
        <td><label class="stanga" for="adresa">Adresa</label></td>
        <td colspan=3><input type="text" value="Calea Victoriei, nr 48, bl P3, sc 4, apt 34, etaj"  id="adresa" class="input-xxlarge capitalize"></td>
	</tr>
		<tr>
        <td><label class="stanga" for="adresa_livrare">Adresa livrare</label></td>
        <td colspan=3><input type="text" value="Focsani, Dorobani, nr 48, bl P3, sc 4, apt 34, etaj"  id="adresa_livrare" class="input-xxlarge capitalize"></td>
	</tr>
		<tr>
        <td><label class="stanga" for="banca">Banca</label></td>
        <td colspan=3><input type="text" value="RAIFEISEN, SUCURSALA CALEA PLEVNEI, NR 234"  id="banca" class="input-xxlarge uppercase"></td>
	</tr>
		<tr>
        <td><label class="stanga" for="cont_bancar">Cont bancar</label></td>
        <td><input type="text" value="RO25INGB0000999901435479"  id="cont_bancar" class="input-xlarge uppercase"></td>
	</tr>
		<tr>
        <td><label class="stanga" for="telefon">Telefon</label></td>
        <td><input type="text" value="0745 344556"  id="telefon" class="input-xlarge myRequired"></td>

        <td><label class="dreapta" for="fax">Fax</label></td>
        <td><input type="text" value="021/345 67544"  id="fax" class="input-xlarge uppercase"></td>
	</tr>
		<tr>
        <td><label class="stanga" for="email">Email</label></td>
        <td><input type="text" value="office@mca-advertising.ro"  id="email" class="input-xlarge lowercase"></td>

        <td><label class="dreapta" for="website">Website</label></td>
        <td><input type="text" value="www.mca-advertising.ro"  id="website" class="input-xlarge lowercase"></td>
	</tr>
		<tr>
        <td><label class="stanga" for="modalitate_plata">Modalitate de plata</label></td>
        <td><input type="text" value="BO la 30 de zile"  id="modalitate_plata" class="input-xlarge uppercase"></td>
	</tr>
		<tr>
        <td><label class="stanga" for="curier">Curier</label></td>
        <td><input type="text" value="Fan Courier si Urgent"  id="curier" class="input-xlarge uppercase"></td>
	</tr>
		<tr>
        <td><label class="stanga" for="seriozitate">Seriozitate</label></td>
        <td colspan=3><input type="text" value="FFF Serios"  id="seriozitate" class="input-xxlarge lowercase"></td>
	</tr>
			<tr>
        <td><label class="stanga" for="seriozitate">Agent</label></td>
        <td>
		<select name="DropDownPermisiuni" id="DropDownPermisiuni" class="input-xlarge" style="width: 244px;">
          <option value="agent">Alina Dup</option>
		  <option value="inginer_service">Roxana Mirescu</option>
          <option value="admin">Ionut Hancu</option>
		</select>
		</td>
	</tr>
    </form>
</table>
</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Delete Confirmation</h3>
  </div>
  <div class="modal-body">
    
    <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
    <button class="btn btn-danger" data-dismiss="modal">Delete</button>
  </div>
</div>


                    
<?php 
include 'footer.php';
?>


