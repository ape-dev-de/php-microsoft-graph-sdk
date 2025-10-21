<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConnectedOrganizationState resources
 *
 * Available select fields:
 */
class ConnectedOrganizationStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConnectedOrganizationState
     */

    /**
     * Select specific ConnectedOrganizationState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
