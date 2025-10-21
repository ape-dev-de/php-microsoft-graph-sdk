<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcWindowsSetting resources
 *
 * Available select fields:
 * - locale
 */
class CloudPcWindowsSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcWindowsSetting
     */
    public const FIELD_LOCALE = 'locale';

    /**
     * Select specific CloudPcWindowsSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
