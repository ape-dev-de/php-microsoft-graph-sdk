<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalActivity resources
 *
 * Available select fields:
 */
class ExternalConnectorsExternalActivityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsExternalActivity
     */

    /**
     * Select specific ExternalConnectorsExternalActivity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
