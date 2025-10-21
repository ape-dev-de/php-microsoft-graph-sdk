<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScreenSharingRole resources
 *
 * Available select fields:
 */
class ScreenSharingRoleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ScreenSharingRole
     */

    /**
     * Select specific ScreenSharingRole properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
