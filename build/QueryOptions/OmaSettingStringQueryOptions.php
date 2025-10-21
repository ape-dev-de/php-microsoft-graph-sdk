<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OmaSettingString resources
 *
 * Available select fields:
 */
class OmaSettingStringQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OmaSettingString
     */

    /**
     * Select specific OmaSettingString properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
