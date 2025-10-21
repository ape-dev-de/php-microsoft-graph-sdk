<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OutOfBoxExperienceSetting resources
 *
 * Available select fields:
 * - deviceUsageType
 * - escapeLinkHidden
 * - eulaHidden
 * - keyboardSelectionPageSkipped
 * - privacySettingsHidden
 * - userType
 */
class OutOfBoxExperienceSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OutOfBoxExperienceSetting
     */
    public const FIELD_DEVICE_USAGE_TYPE = 'deviceUsageType';
    public const FIELD_ESCAPE_LINK_HIDDEN = 'escapeLinkHidden';
    public const FIELD_EULA_HIDDEN = 'eulaHidden';
    public const FIELD_KEYBOARD_SELECTION_PAGE_SKIPPED = 'keyboardSelectionPageSkipped';
    public const FIELD_PRIVACY_SETTINGS_HIDDEN = 'privacySettingsHidden';
    public const FIELD_USER_TYPE = 'userType';

    /**
     * Select specific OutOfBoxExperienceSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
