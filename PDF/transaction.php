<?php session_start();
include("../B_config/transaction_caiss.php");
require("fpdf/fpdf.php");
// Création de la class PDF
class PDF extends FPDF {
	// Header
	function Header() {
		// Logo : 8 >position à gauche du document (en mm), 2 >position en haut du document, 80 >largeur de l'image en mm). La hauteur est calculée automatiquement.
		$this->Image('logo.png',10,2);
		// Saut de ligne 20 mm
		$this->Ln(0);

		// Titre gras (B) police Helbetica de 11
		$this->SetFont('Helvetica','B',11);
		// fond de couleur gris (valeurs en RGB)
		$this->setFillColor(230,230,230);
 		$this->SetX(70);
		$this->Cell(60,8,'NURU BANQUE RAPPORT',0,1,'C',1);
		$this->Ln(15);
		$this->SetFont('Helvetica','I',11);
        $code = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTVWXYZ123456789"), 0, 6);
        $code = substr(str_shuffle("0123456789"), 0, 6).'.'.$code;
		$code = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTVWXYZ123456789"), 0, 6).'.'.$code;
		$code = substr(str_shuffle("0123456789"), 0, 6).'.'.$code;
		$code = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTVWXYZ123456789"), 0, 6).'.'.$code;
		$this->Cell(105,8,'ID-RAPPORT: '.$code,0,1,'L',1);
		$this->Ln(1);
		$this->Cell(60,8,'Caissier-ID: '.$_SESSION['matricule'],0,1,'L',1);
		// Saut de ligne 10 mm
		$this->Ln(1);		
	}
	// Footer
	function Footer() {
		// Positionnement à 1,5 cm du bas
		$this->SetY(-15);
		// Police Arial italique 8
		$this->SetFont('Helvetica','I',9);
		// Numéro de page, centré (C)
		$this->Line(200,283,10,283);
		$this->Cell(0,10,'Nuru_banque@2022 sur www.nurubanque.cd ',0,0,'C');
		$this->Ln(5);
		$this->Cell(0,10, 'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}


// On active la classe une fois pour toutes les pages suivantes
// Format portrait (>P) ou paysage (>L), en mm (ou en points > pts), A4 (ou A5, etc.)
$pdf = new PDF('P','mm','A4');

// Nouvelle page A4 (incluant ici logo, titre et pied de page)
$pdf->AddPage();
// Polices par défaut : Helvetica taille 9
$pdf->SetFont('Helvetica','',9);
// Couleur par défaut : noir
$pdf->SetTextColor(0);
// Compteur de pages {nb}
$pdf->AliasNbPages();


// Sous-titre calées à gauche, texte gras (Bold), police de caractère 11
$pdf->SetFont('Helvetica','B',11);
// couleur de fond de la cellule : gris clair
$pdf->setFillColor(230,230,230);
// Cellule avec les données du sous-titre sur 2 lignes, pas de bordure mais couleur de fond grise			
$pdf->Ln(1); // saut de ligne 10mm	
// Fonction en-tête des tableaux en 3 colonnes de largeurs variables
function entete_table($position_entete) {
	global $pdf;
	$pdf->SetDrawColor(183); // Couleur du fond RVB
	$pdf->SetFillColor(221); // Couleur des filets RVB
	$pdf->SetTextColor(0); // Couleur du texte noir
	$pdf->SetY($position_entete);
	// position de colonne 1 (10mm à gauche)	
	$pdf->SetX(10);
	$pdf->Cell(11,8,'N*',1,0,'C',1);
	$pdf->SetX(20);
	$pdf->Cell(40,8,'Date',1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne
	// position de la colonne 2 (70 = 10+60)
	$pdf->SetX(60); 
	$pdf->Cell(61,8,'Transaction ID',1,0,'C',1);
	// position de la colonne 3 (130 = 70+60)
	$pdf->SetX(121); 
	$pdf->Cell(35,8,'Matricule client',1,0,'C',1);
	$pdf->SetX(155); 
	$pdf->Cell(13,8,'Solde',1,0,'C',1);
	$pdf->SetX(168); 
	$pdf->Cell(15,8,'Motif',1,0,'C',1);
    $pdf->SetX(183); 
	$pdf->Cell(18,8,'Montant',1,0,'C',1);

	$pdf->Ln(); // Retour à la ligne
}
// AFFICHAGE EN-TÊTE DU TABLEAU
// Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (60 mm)
$position_entete = 70;
// police des caractères
$pdf->SetFont('Helvetica','',9);
$pdf->SetTextColor(0);
// on affiche les en-têtes du tableau
entete_table($position_entete);
    $x=0;
    while($trad=$tra->fetch()){
        $x++;
    if($x%2!=0) $pdf->setFillColor(255,255,255);
    else $pdf->setFillColor(230,230,230);
	// position de colonne 1 (10mm à gauche)	
	$pdf->SetX(10);
	$pdf->Cell(11,8,$x,1,0,'C',1);
	$pdf->SetX(20);
	$pdf->Cell(40,8,$trad['date_trans'],1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne
	// position de la colonne 2 (70 = 10+60)
	$pdf->SetX(60); 
	$pdf->Cell(61,8,$trad['trans_mat'],1,0,'C',1);
	// position de la colonne 3 (130 = 70+60)
	$pdf->SetX(121); 
	$pdf->Cell(35,8,$trad['client_mat'],1,0,'C',1);
	$pdf->SetX(155); 
	$pdf->Cell(13,8,$trad['solde'],1,0,'C',1);
	$pdf->SetX(168); 
	$pdf->Cell(15,8,$trad['motif'],1,0,'C',1);
    $pdf->SetX(183); 
	$pdf->Cell(18,8,$trad['montant_ret'],1,0,'C',1);

	$pdf->Ln(); // Retour à la ligne
    }


$pdf->Output('cool.pdf','I'); // affichage à l'écran
// Ou export sur le serveur
// $pdf->Output('F', '../test.pdf');
?>