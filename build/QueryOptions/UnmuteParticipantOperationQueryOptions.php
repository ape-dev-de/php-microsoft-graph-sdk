<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnmuteParticipantOperation resources
 *
 * Available select fields:
 */
class UnmuteParticipantOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnmuteParticipantOperation
     */

    /**
     * Select specific UnmuteParticipantOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
