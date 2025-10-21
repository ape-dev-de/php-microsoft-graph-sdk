<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosMobileAppIdentifier resources
 *
 * Available select fields:
 */
class IosMobileAppIdentifierQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosMobileAppIdentifier
     */

    /**
     * Select specific IosMobileAppIdentifier properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
