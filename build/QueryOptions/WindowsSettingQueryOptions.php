<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsSetting resources
 *
 * Available select fields:
 */
class WindowsSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsSetting
     */

    /**
     * Select specific WindowsSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
