<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserSettings resources
 *
 * Available select fields:
 * - contributionToContentDiscoveryAsOrganizationDisabled
 * - contributionToContentDiscoveryDisabled
 * - itemInsights
 * - shiftPreferences
 * - storage
 * - windows
 */
class UserSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserSettings
     */
    public const FIELD_CONTRIBUTION_TO_CONTENT_DISCOVERY_AS_ORGANIZATION_DISABLED = 'contributionToContentDiscoveryAsOrganizationDisabled';
    public const FIELD_CONTRIBUTION_TO_CONTENT_DISCOVERY_DISABLED = 'contributionToContentDiscoveryDisabled';
    public const FIELD_ITEM_INSIGHTS = 'itemInsights';
    public const FIELD_SHIFT_PREFERENCES = 'shiftPreferences';
    public const FIELD_STORAGE = 'storage';
    public const FIELD_WINDOWS = 'windows';

    /**
     * Select specific UserSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
