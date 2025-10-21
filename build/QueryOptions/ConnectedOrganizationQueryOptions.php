<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConnectedOrganization resources
 *
 * Available select fields:
 */
class ConnectedOrganizationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConnectedOrganization
     */

    /**
     * Select specific ConnectedOrganization properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
