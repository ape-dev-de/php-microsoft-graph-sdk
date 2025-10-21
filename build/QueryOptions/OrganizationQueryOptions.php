<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Organization resources
 *
 * Available select fields:
 */
class OrganizationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Organization
     */

    /**
     * Select specific Organization properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
