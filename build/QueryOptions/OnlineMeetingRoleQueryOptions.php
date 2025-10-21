<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnlineMeetingRole resources
 *
 * Available select fields:
 */
class OnlineMeetingRoleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnlineMeetingRole
     */

    /**
     * Select specific OnlineMeetingRole properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
