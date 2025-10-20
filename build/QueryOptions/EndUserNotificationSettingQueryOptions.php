<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EndUserNotificationSetting resources
 *
 * Available select fields:
 * - notificationPreference
 * - positiveReinforcement
 * - settingType
 */
class EndUserNotificationSettingQueryOptions extends QueryOptions
{
    public const FIELD_NOTIFICATION_PREFERENCE = 'notificationPreference';
    public const FIELD_POSITIVE_REINFORCEMENT = 'positiveReinforcement';
    public const FIELD_SETTING_TYPE = 'settingType';

    /**
     * Select specific EndUserNotificationSetting properties
     * 
     * @param array<string> $select Use EndUserNotificationSettingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
