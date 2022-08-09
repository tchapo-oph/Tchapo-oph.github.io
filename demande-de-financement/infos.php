<?php 

/*nex_forms_Id=2 

$_POST[""]page=%2Fdemande-de-financement%2F 

$_POST[""]ip= 

$_POST[""]nf_page_id=4318 

$_POST[""]nf_page_title=Demande+de+financement 

$_POST[""]company_url= 

$_POST[""]ms_current_step=1  */

if(isset($_POST["submit"])){

    $client= array( 

$civilite=$_POST["civilité"],

$_POST["real_val__civilité"],

$_POST["nom"],

$_POST["prénoms"],

$_POST["email"], 

$_POST["n°_téléphone"],

$_POST["date_de_naissance"],

$_POST["lieu_de_naissance"],

$_POST["adresse_rue"],

$_POST["code_postal"],

$_POST["ville_de_residence"],

$_POST["pays_de_residence"],

$_POST["real_val__pays_de_residence"],

$_POST["situation_matrimoniale"],

$_POST["real_val__situation_matrimoniale"],

$_POST["n°_carte_didentité__passeport"], 

$_POST["n°_whatsapp"],

$_POST["motif_de_la_demande"],

$_POST["real_val__motif_de_la_demande"],

$_POST["montant_en_euro"]=12101 ) ;


require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Compteur.php';
                        $compteur= new Compteur(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data');
                        $n=$compteur->recuperer();
$s=date('d m y H-i-s');
$data=dirname(__DIR__) . DIRECTORY_SEPARATOR . 'clients' . DIRECTORY_SEPARATOR . 'client'.$n.' '. $s;
file_put_contents($data, $client);

header("location:./index.php?r=1");

}else{header("location:./index.php?p=4");}