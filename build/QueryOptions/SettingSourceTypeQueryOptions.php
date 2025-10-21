<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SettingSourceType resources
 *
 * Available select fields:
 */
class SettingSourceTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SettingSourceType
     */

    /**
     * Select specific SettingSourceType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
