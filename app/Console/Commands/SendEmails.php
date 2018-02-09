<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SendEmails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //la function send accepte 3 parametres le nom d'une vue qui contient le message. Deuxièmement, un tableau de données pour le transmetre à la vue,troisièmementune function anonyme

            Mail::send('email',['user' => 'mouad'],function($message) {
            $message->to('nom@gmail.com','Nom du destinataire')->subject('Sujet d\'email');
            $message->replyTo('mouadzdf@gmail.com','Mouad');
            $message->from('mouadzdf@gmail.com','Mouad');
        });
    }
}
