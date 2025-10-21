<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Participant resources
 *
 * Available select fields:
 */
class ParticipantQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Participant
     */

    /**
     * Select specific Participant properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
