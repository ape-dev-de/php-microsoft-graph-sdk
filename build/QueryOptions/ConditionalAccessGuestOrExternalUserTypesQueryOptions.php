<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessGuestOrExternalUserTypes resources
 *
 * Available select fields:
 */
class ConditionalAccessGuestOrExternalUserTypesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessGuestOrExternalUserTypes
     */

    /**
     * Select specific ConditionalAccessGuestOrExternalUserTypes properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
