<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Mail;

class MailController extends Controller
{
    public function send()
    {
	          Artisan::queue('SendEmails');
	          return redirect()->back()->with('message', 'votre message a été envoyé avec succès');


	    /*
	      pour envoyer des mails automatiquement sur des fréquences,il faut créer un Crone Job ou exécuter cette CLI commande :
	        php /var/www/artisan schedule:run 1>> /dev/null 2>&1
	      **Hébergement sur machine Linux**
	   */

	        
    }
}
