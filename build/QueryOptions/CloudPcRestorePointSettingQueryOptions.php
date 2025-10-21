<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcRestorePointSetting resources
 *
 * Available select fields:
 * - frequencyType
 * - userRestoreEnabled
 */
class CloudPcRestorePointSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcRestorePointSetting
     */
    public const FIELD_FREQUENCY_TYPE = 'frequencyType';
    public const FIELD_USER_RESTORE_ENABLED = 'userRestoreEnabled';

    /**
     * Select specific CloudPcRestorePointSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
