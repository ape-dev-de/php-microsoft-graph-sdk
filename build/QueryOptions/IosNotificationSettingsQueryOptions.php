<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosNotificationSettings resources
 *
 * Available select fields:
 * - alertType
 * - appName
 * - badgesEnabled
 * - bundleID
 * - enabled
 * - publisher
 * - showInNotificationCenter
 * - showOnLockScreen
 * - soundsEnabled
 */
class IosNotificationSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosNotificationSettings
     */
    public const FIELD_ALERT_TYPE = 'alertType';
    public const FIELD_APP_NAME = 'appName';
    public const FIELD_BADGES_ENABLED = 'badgesEnabled';
    public const FIELD_BUNDLE_ID = 'bundleID';
    public const FIELD_ENABLED = 'enabled';
    public const FIELD_PUBLISHER = 'publisher';
    public const FIELD_SHOW_IN_NOTIFICATION_CENTER = 'showInNotificationCenter';
    public const FIELD_SHOW_ON_LOCK_SCREEN = 'showOnLockScreen';
    public const FIELD_SOUNDS_ENABLED = 'soundsEnabled';

    /**
     * Select specific IosNotificationSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
