<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalActivityType resources
 *
 * Available select fields:
 */
class ExternalConnectorsExternalActivityTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsExternalActivityType
     */

    /**
     * Select specific ExternalConnectorsExternalActivityType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
