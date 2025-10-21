<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosMobileAppConfiguration resources
 *
 * Available select fields:
 */
class IosMobileAppConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosMobileAppConfiguration
     */

    /**
     * Select specific IosMobileAppConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
