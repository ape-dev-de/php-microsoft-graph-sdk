<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StateManagementSetting resources
 *
 * Available select fields:
 */
class StateManagementSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for StateManagementSetting
     */

    /**
     * Select specific StateManagementSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
