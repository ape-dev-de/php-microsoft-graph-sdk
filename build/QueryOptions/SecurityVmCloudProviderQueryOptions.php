<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityVmCloudProvider resources
 *
 * Available select fields:
 */
class SecurityVmCloudProviderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityVmCloudProvider
     */

    /**
     * Select specific SecurityVmCloudProvider properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
