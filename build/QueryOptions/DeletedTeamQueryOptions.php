<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeletedTeam resources
 *
 * Available select fields:
 * - channels
 */
class DeletedTeamQueryOptions extends QueryOptions
{
    public const FIELD_CHANNELS = 'channels';

    /**
     * Select specific DeletedTeam properties
     * 
     * @param array<string> $select Use DeletedTeamQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
