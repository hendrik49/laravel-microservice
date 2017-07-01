<?php
namespace App\Features;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use App\Domains\User\Jobs\GetUsersJob;
use App\Domains\Http\Jobs\RespondWithJsonJob;

class ListUsersFeature extends Feature
{
    public function handle(Request $request)
    {
        $users = $this->run(GetUsersJob::class);
        return $this->run(new RespondWithJsonJob($users));
    }
}
