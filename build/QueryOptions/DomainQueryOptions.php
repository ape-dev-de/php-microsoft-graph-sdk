<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Domain resources
 *
 * Available select fields:
 */
class DomainQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Domain
     */

    /**
     * Select specific Domain properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
