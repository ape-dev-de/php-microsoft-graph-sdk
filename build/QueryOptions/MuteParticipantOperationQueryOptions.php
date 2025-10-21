<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MuteParticipantOperation resources
 *
 * Available select fields:
 */
class MuteParticipantOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MuteParticipantOperation
     */

    /**
     * Select specific MuteParticipantOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
