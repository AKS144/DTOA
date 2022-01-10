<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class Pending extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Pending';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pending status deleted';

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
        $test = DB::table('books')->select('time_slot','book_date','qty')
                            ->where('payment','=',NUll)
                            ->where('created_at','<=',Carbon::now()->subSecond(10))
                            ->get()->each(function ($slot){
                                DB::table('timeslots')->where('book_date','=',$slot->book_date)
                                                      ->where('time_slot','=',$slot->time_slot)
                                                     ->update([
                                                         'seats' => DB::raw('seats+' .$slot->qty),
                                                         'updated_at' => Carbon::now(),
                                                        ]);

                            });

        $this->info('Pending payment deleted Successfully!');
    }
}
