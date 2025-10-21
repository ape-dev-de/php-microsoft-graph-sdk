<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GroupSetting resources
 *
 * Available select fields:
 */
class GroupSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for GroupSetting
     */

    /**
     * Select specific GroupSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
