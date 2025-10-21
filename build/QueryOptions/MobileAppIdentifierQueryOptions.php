<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppIdentifier resources
 *
 * Available select fields:
 */
class MobileAppIdentifierQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileAppIdentifier
     */

    /**
     * Select specific MobileAppIdentifier properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
