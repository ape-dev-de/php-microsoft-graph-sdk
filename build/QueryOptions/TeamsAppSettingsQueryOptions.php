<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppSettings resources
 *
 * Available select fields:
 */
class TeamsAppSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsAppSettings
     */

    /**
     * Select specific TeamsAppSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
