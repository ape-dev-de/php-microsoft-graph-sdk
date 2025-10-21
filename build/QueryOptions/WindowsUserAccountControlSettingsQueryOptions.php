<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUserAccountControlSettings resources
 *
 * Available select fields:
 */
class WindowsUserAccountControlSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsUserAccountControlSettings
     */

    /**
     * Select specific WindowsUserAccountControlSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
