<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcDomainJoinType resources
 *
 * Available select fields:
 */
class CloudPcDomainJoinTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcDomainJoinType
     */

    /**
     * Select specific CloudPcDomainJoinType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
