<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'Admin';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "Admin" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['accueil'] = 'Admin/accueil';
$route['ajouter_clien'] = 'Admin/ajouter_clien';
$route['table_credit'] = 'Admin/table_credit';
$route['GCC'] = 'Admin/GCC';
$route['update_image'] = 'Admin/update_image';
$route['update_clien'] = 'Admin/update_clien';
$route['ajouter_fournisseur'] = 'Admin/ajouter_fournisseur';
$route['delete_clien'] = 'Admin/delete_clien';
$route['delete_four'] = 'Admin/delete_four';
$route['fournisseur_detail'] = 'Admin/fournisseur_detail';
$route['update_image1'] = 'Admin/update_image1';
$route['update_four'] = 'Admin/update_four';
$route['Categories'] = 'Admin/Categories';
$route['add_cat'] = 'Admin/add_cat';
$route['update_cat'] = 'Admin/update_cat';
$route['Marque'] = 'Admin/Marque';
$route['delete_cat'] = 'Admin/delete_cat';
$route['add_marque'] = 'Admin/add_marque';
$route['update_marque'] = 'Admin/update_marque';
$route['delete_marque'] = 'Admin/delete_marque';
$route['fournisseur'] = 'Admin/fournisseur';
$route['marques'] = 'Admin/marques';
$route['ajouter_produit'] = 'Admin/ajouter_produit';
$route['add_product'] = 'Admin/add_product';
$route['produit'] = 'Admin/produit';
$route['ajax_search_produit'] = 'Admin/ajax_search_produit';
$route['ajax_search_marque'] = 'Admin/ajax_search_marque';
$route['ajax_search_marque1'] = 'Admin/ajax_search_marque1';
$route['ajax_get'] = 'Admin/ajax_get';
$route['ajax_search_cat1'] = 'Admin/ajax_search_cat1';
$route['compte'] = 'Admin/compte';
$route['add_compte'] = 'Admin/add_compte';
$route['update_compte'] = 'Admin/update_compte';
$route['delete_compte'] = 'Admin/delete_compte';
$route['delete_pro'] = 'Admin/delete_pro';
$route['ajax_search_produit1'] = 'Admin/ajax_search_produit1';
$route['update_pro'] = 'Admin/update_pro';
$route['Entrer'] = 'Admin/Entrer';
$route['caisse'] = 'Admin/caisse';
$route['ajax_searsh1'] = 'Admin/ajax_searsh1';
$route['ajax_searsh2'] = 'Admin/ajax_searsh2';
$route['ajax_bon'] = 'Admin/ajax_bon';
$route['ajax_total'] = 'Admin/ajax_total';
$route['ajax_total1'] = 'Admin/ajax_total1';
$route['delete_bon'] = 'Admin/delete_bon';
$route['ajax_clien'] = 'Admin/ajax_clien';
$route['add_bons'] = 'Admin/add_bons';
$route['invoice'] = 'Admin/invoice';
$route['Sortir'] = 'Admin/Sortir';
$route['commande'] = 'Admin/commande';
$route['SAV'] = 'Admin/SAV';
$route['comptabilite'] = 'Admin/comptabilite';
$route['ajax_kaki'] = 'Admin/ajax_kaki';
$route['date11'] = 'Admin/date11';
$route['date3'] = 'Admin/date3';
$route['date1'] = 'Admin/date1';
$route['add_SAV'] = 'Admin/add_SAV';
$route['POUVOIRS'] = 'Admin/POUVOIRS';
$route['ajax_check'] = 'Admin/ajax_check';
$route['ajax_block'] = 'Admin/ajax_block';
$route['gestion_fournisseur'] = 'Admin/gestion_fournisseur';
$route['add_four'] = 'Admin/add_four';
$route['add_clien'] = 'Admin/add_clien';
$route['notifications'] = 'Admin/notifications';
$route['tracabilite_client'] = 'Admin/tracabilite_client';
$route['tracabilite_produit'] = 'Admin/tracabilite_produit';
$route['ajax_search_produit10'] = 'Admin/ajax_search_produit10';
$route['ajax_search_marque11'] = 'Admin/ajax_search_marque11';
$route['ajax_search_marque10'] = 'Admin/ajax_search_marque10';
$route['ajax_search_cat10'] = 'Admin/ajax_search_cat10';
$route['date101'] = 'Admin/date101';
$route['ajax_search_produit_voir'] = 'Admin/ajax_search_produit_voir';
$route['ajax_search_marque_voir'] = 'Admin/ajax_search_marque_voir';
$route['ajax_search_marque1_voir'] = 'Admin/ajax_search_marque1_voir';
$route['ajax_get_voir'] = 'Admin/ajax_get_voir';
$route['ajax_search_cat1_voir'] = 'Admin/ajax_search_cat1_voir';
$route['ajax_search_produit10_voir'] = 'Admin/ajax_search_produit10_voir';
$route['ajax_search_marque10_voir'] = 'Admin/ajax_search_marque10_voir';
$route['ajax_search_marque11_voir'] = 'Admin/ajax_search_marque11_voir';
$route['ajax_get1_voir'] = 'Admin/ajax_get1_voir';
$route['ajax_search_cat10_voir'] = 'Admin/ajax_search_cat10_voir';
$route['profil'] = 'Admin/profil';
$route['Settings'] = 'Admin/Settings';
$route['update_pass'] = 'Admin/update_pass';
$route['update_pass1'] = 'Admin/update_pass1';
$route['update_login'] = 'Admin/update_login';
$route['add_credit'] = 'Admin/add_credit';
$route['ajax_credit'] = 'Admin/ajax_credit';
$route['block'] = 'Admin/block';
$route['Encien_product'] = 'Admin/Encien_product';
$route['product_add'] = 'Admin/product_add';
$route['searsh1'] = 'Admin/searsh1';
$route['detail'] = 'Admin/detail';
$route['upload_pro'] = 'Admin/upload_pro';
$route['out'] = 'Admin/out';
$route['dis'] = 'Admin/dis';
$route['salam'] = 'Admin/salam';
$route['add_bon'] = 'Admin/add_bon';
$route['delete_bon'] = 'Admin/delete_bon';
$route['Add_bons'] = 'Admin/Add_bons';
$route['imprime'] = 'Admin/imprime';
$route['entrer'] = 'Admin/entrer';
$route['sortir'] = 'Admin/sortir';
$route['facture'] = 'Admin/facture';
$route['logout'] = 'Admin/logout';
$route['users'] = 'Admin/users';
$route['add_user'] = 'Admin/add_user';
$route['delete_user'] = 'Admin/delete_user';
$route['imprime1'] = 'Admin/imprime1';
$route['delete_product'] = 'Admin/delete_product';
$route['searsh2'] = 'Admin/searsh2';
$route['delete_entrer'] = 'Admin/delete_entrer';
$route['profits'] = 'Admin/profits';
$route['date'] = 'Admin/date';
$route['date1'] = 'Admin/date1';
$route['date3'] = 'Admin/date3';
$route['kaki'] = 'Admin/kaki';
$route['profil'] = 'Admin/profil';
$route['registre'] = 'Admin/registre';
$route['add_registre'] = 'Admin/add_registre';
$route['kaki1'] = 'Admin/kaki1';
$route['edit_clien'] = 'Admin/edit_clien';
$route['clien1'] = 'Admin/clien1';
$route['edit_four'] = 'Admin/edit_four';
$route['upload_prof'] = 'Admin/upload_prof';
$route['backup'] = 'Admin/backup';
$route['comptabilite2'] = 'Admin/comptabilite2';
$route['add_charge'] = 'Admin/add_charge';
$route['ajax_charge'] = 'Admin/ajax_charge';
$route['modifier_charge'] = 'Admin/modifier_charge';
$route['delete_charge'] = 'Admin/delete_charge';
$route['lock_screen'] = 'Admin/lock_screen';
$route['login1'] = 'Admin/login1';
$route['Salaires'] = 'Admin/Salaires';
$route['Cheques'] = 'Admin/Cheques';
$route['ajax_cheque'] = 'Admin/ajax_cheque';
$route['ajax_salaire'] = 'Admin/ajax_salaire';
$route['Ticket'] = 'Admin/Ticket';
$route['ajax_session'] = 'Admin/ajax_session';
$route['info'] = 'Admin/info';
$route['add_mouafak'] = 'Admin/add_mouafak';
$route['parametre'] = 'Admin/parametre';
$route['update_info'] = 'Admin/update_info';
$route['modifier_pass'] = 'Admin/modifier_pass';
$route['ajax_search_produit1111'] = 'Admin/ajax_search_produit1111';
$route['delete_bonat'] = 'Admin/delete_bonat';
$route['Archive'] = 'Admin/Archive';
$route['delete_clien1'] = 'Admin/delete_clien1';
$route['delete_four1'] = 'Admin/delete_four1';
$route['delete_cat1'] = 'Admin/delete_cat1';
$route['delete_compte1'] = 'Admin/delete_compte1';
$route['delete_charge1'] = 'Admin/delete_charge1';
$route['delete_pro1'] = 'Admin/delete_pro1';
$route['delete_marque1'] = 'Admin/delete_marque1';
$route['Restaurer'] = 'Admin/Restaurer';
$route[''] = 'Admin/';
$route[''] = 'Admin/';
$route[''] = 'Admin/';
$route[''] = 'Admin/';
$route[''] = 'Admin/';











$route['index'] = 'Admin/index';
$route['registre'] = 'Admin/registre';
$route['add_registre'] = 'Admin/add_registre';
$route['admin'] = 'Admin/admin';
$route['dipot'] = 'Admin/dipot';
$route[''] = 'Admin1/';
$route[''] = 'Admin1/';
$route[''] = 'Admin1/';
$route[''] = 'Admin1/';
$route[''] = 'Admin1/';
$route[''] = 'Admin1/';
$route[''] = 'Admin1/';
$route[''] = 'Admin1/';
$route[''] = 'Admin1/';
$route[''] = 'Admin1/';
$route[''] = 'Admin1/';
$route[''] = 'Admin1/';
$route[''] = 'Admin1/';

