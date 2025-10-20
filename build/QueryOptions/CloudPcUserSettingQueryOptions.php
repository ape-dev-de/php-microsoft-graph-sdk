<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcUserSetting resources
 *
 * Available select fields:
 * - createdDateTime
 * - displayName
 * - lastModifiedDateTime
 * - localAdminEnabled
 * - resetEnabled
 * - restorePointSetting
 * - assignments
 */
class CloudPcUserSettingQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_LOCAL_ADMIN_ENABLED = 'localAdminEnabled';
    public const FIELD_RESET_ENABLED = 'resetEnabled';
    public const FIELD_RESTORE_POINT_SETTING = 'restorePointSetting';
    public const FIELD_ASSIGNMENTS = 'assignments';

    /**
     * Select specific CloudPcUserSetting properties
     * 
     * @param array<string> $select Use CloudPcUserSettingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
