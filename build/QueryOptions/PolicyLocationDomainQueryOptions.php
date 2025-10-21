<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyLocationDomain resources
 *
 * Available select fields:
 */
class PolicyLocationDomainQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PolicyLocationDomain
     */

    /**
     * Select specific PolicyLocationDomain properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
