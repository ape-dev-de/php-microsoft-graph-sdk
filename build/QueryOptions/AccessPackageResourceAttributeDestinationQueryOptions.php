<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResourceAttributeDestination resources
 *
 * Available select fields:
 */
class AccessPackageResourceAttributeDestinationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageResourceAttributeDestination
     */

    /**
     * Select specific AccessPackageResourceAttributeDestination properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
