<?php

declare(strict_types=1);

namespace App\Actions\Jetstream;

use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Laravel\Jetstream\Contracts\DeletesTeams;

final class DeleteTeam implements DeletesTeams
{
    /**
     * Delete the given team.
     *
     * @param  Team  $team
     */
    public function delete(Model $team): void
    {
        $team->purge();
    }
}
