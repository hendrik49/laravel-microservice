<?php
namespace App\Domains\User\Jobs;

use Lucid\Foundation\Job;
use App\Data\Models\User;

class GetUsersJob extends Job
{
     private $limit;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($limit = 25)
    {
         $this->limit = $limit;
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(User $user)
    {
        /*
         return [
            ['name' => 'John Doe'],
            ['name' => 'Jane Doe'],
            ['name' => 'Tommy Atkins'],
        ];
        */
         return $user->take($this->limit)->get();
    }
}
