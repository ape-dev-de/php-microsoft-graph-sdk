<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityTag resources
 *
 * Available select fields:
 */
class SecurityTagQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityTag
     */

    /**
     * Select specific SecurityTag properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
