<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsIdentityType resources
 *
 * Available select fields:
 */
class ExternalConnectorsIdentityTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsIdentityType
     */

    /**
     * Select specific ExternalConnectorsIdentityType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
