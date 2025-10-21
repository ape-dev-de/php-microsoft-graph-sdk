<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcUserSetting resources
 *
 * Available select fields:
 */
class CloudPcUserSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcUserSetting
     */

    /**
     * Select specific CloudPcUserSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
