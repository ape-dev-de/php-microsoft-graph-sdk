<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityReportsRoot resources
 *
 * Available select fields:
 */
class SecurityReportsRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityReportsRoot
     */

    /**
     * Select specific SecurityReportsRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
