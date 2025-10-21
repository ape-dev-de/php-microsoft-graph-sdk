<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ActivityDomain resources
 *
 * Available select fields:
 */
class ActivityDomainQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ActivityDomain
     */

    /**
     * Select specific ActivityDomain properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
