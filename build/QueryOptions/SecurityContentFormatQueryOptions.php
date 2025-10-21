<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityContentFormat resources
 *
 * Available select fields:
 */
class SecurityContentFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityContentFormat
     */

    /**
     * Select specific SecurityContentFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
