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
    public const FIELD_LOCALE = 'locale';

    /**
     * Select specific CloudPcWindowsSetting properties
     * 
     * @param array<string> $select Use CloudPcWindowsSettingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
