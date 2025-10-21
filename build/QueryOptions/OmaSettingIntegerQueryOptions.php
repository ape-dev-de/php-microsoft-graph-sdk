<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OmaSettingInteger resources
 *
 * Available select fields:
 */
class OmaSettingIntegerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OmaSettingInteger
     */

    /**
     * Select specific OmaSettingInteger properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
