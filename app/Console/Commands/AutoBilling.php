<?php

namespace App\Console\Commands;

use App\billing;
use App\customers;
use App\Mail\TagihanInet;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class AutoBilling extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:billing';

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
     * @return int
     */
    public function handle()
    {
        $billing = billing::whereMonth('end_at', date('m'))
                          ->whereDay('end_at', date('d'))
                          ->get();

        if($billing->count() > 0 ){
            foreach($billing as $bill){
                $email = customers::where('cid',$bill['client'])->value('email');
                Mail::to($email)->send(new TagihanInet($bill));
            }
        }


        return 0;
    }
}
