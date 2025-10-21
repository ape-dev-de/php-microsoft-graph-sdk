<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ParticipantJoiningResponse resources
 *
 * Available select fields:
 */
class ParticipantJoiningResponseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ParticipantJoiningResponse
     */

    /**
     * Select specific ParticipantJoiningResponse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
