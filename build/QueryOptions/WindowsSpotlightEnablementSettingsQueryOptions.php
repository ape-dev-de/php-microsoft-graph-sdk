<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsSpotlightEnablementSettings resources
 *
 * Available select fields:
 */
class WindowsSpotlightEnablementSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsSpotlightEnablementSettings
     */

    /**
     * Select specific WindowsSpotlightEnablementSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
