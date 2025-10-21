<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityTeamsMessageDeliveryAction resources
 *
 * Available select fields:
 */
class SecurityTeamsMessageDeliveryActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityTeamsMessageDeliveryAction
     */

    /**
     * Select specific SecurityTeamsMessageDeliveryAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
