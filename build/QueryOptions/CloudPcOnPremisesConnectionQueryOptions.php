<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcOnPremisesConnection resources
 *
 * Available select fields:
 */
class CloudPcOnPremisesConnectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcOnPremisesConnection
     */

    /**
     * Select specific CloudPcOnPremisesConnection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
