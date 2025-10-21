<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosDeviceFeaturesConfiguration resources
 *
 * Available select fields:
 * - assetTagTemplate
 * - homeScreenDockIcons
 * - homeScreenPages
 * - lockScreenFootnote
 * - notificationSettings
 */
class IosDeviceFeaturesConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosDeviceFeaturesConfiguration
     */
    public const FIELD_ASSET_TAG_TEMPLATE = 'assetTagTemplate';
    public const FIELD_HOME_SCREEN_DOCK_ICONS = 'homeScreenDockIcons';
    public const FIELD_HOME_SCREEN_PAGES = 'homeScreenPages';
    public const FIELD_LOCK_SCREEN_FOOTNOTE = 'lockScreenFootnote';
    public const FIELD_NOTIFICATION_SETTINGS = 'notificationSettings';

    /**
     * Select specific IosDeviceFeaturesConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
