<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OmaSettingBoolean resources
 *
 * Available select fields:
 */
class OmaSettingBooleanQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OmaSettingBoolean
     */

    /**
     * Select specific OmaSettingBoolean properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
