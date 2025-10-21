<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Payload resources
 *
 * Available select fields:
 */
class PayloadQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Payload
     */

    /**
     * Select specific Payload properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
