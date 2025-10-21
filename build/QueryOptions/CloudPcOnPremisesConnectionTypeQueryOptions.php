<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcOnPremisesConnectionType resources
 *
 * Available select fields:
 */
class CloudPcOnPremisesConnectionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcOnPremisesConnectionType
     */

    /**
     * Select specific CloudPcOnPremisesConnectionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
