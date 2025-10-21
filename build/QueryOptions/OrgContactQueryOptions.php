<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OrgContact resources
 *
 * Available select fields:
 */
class OrgContactQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OrgContact
     */

    /**
     * Select specific OrgContact properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
