<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OmaSettingDateTime resources
 *
 * Available select fields:
 */
class OmaSettingDateTimeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OmaSettingDateTime
     */

    /**
     * Select specific OmaSettingDateTime properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
