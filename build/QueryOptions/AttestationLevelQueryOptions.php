<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttestationLevel resources
 *
 * Available select fields:
 */
class AttestationLevelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttestationLevel
     */

    /**
     * Select specific AttestationLevel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
