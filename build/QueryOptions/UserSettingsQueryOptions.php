<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserSettings resources
 *
 * Available select fields:
 */
class UserSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserSettings
     */

    /**
     * Select specific UserSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
