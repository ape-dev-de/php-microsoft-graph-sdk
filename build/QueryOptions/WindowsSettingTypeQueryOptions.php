<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsSettingType resources
 *
 * Available select fields:
 */
class WindowsSettingTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsSettingType
     */

    /**
     * Select specific WindowsSettingType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
