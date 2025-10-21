<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Contact resources
 *
 * Available select fields:
 */
class ContactQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Contact
     */

    /**
     * Select specific Contact properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
