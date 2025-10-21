<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityTeamsDeliveryLocation resources
 *
 * Available select fields:
 */
class SecurityTeamsDeliveryLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityTeamsDeliveryLocation
     */

    /**
     * Select specific SecurityTeamsDeliveryLocation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
