<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OmaSettingBase64 resources
 *
 * Available select fields:
 */
class OmaSettingBase64QueryOptions extends QueryOptions
{
    /**
     * Available select fields for OmaSettingBase64
     */

    /**
     * Select specific OmaSettingBase64 properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
