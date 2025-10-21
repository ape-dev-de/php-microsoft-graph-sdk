<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsAclType resources
 *
 * Available select fields:
 */
class ExternalConnectorsAclTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsAclType
     */

    /**
     * Select specific ExternalConnectorsAclType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
