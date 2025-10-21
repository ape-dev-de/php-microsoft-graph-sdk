<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Security resources
 *
 * Available select fields:
 */
class SecurityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Security
     */

    /**
     * Select specific Security properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
