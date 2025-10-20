<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SensitivityLabel resources
 *
 * Available select fields:
 * - actionSource
 * - autoTooltip
 * - description
 * - displayName
 * - isDefault
 * - isEndpointProtectionEnabled
 * - isScopedToUser
 * - locale
 * - name
 * - priority
 * - toolTip
 * - rights
 * - sublabels
 */
class SensitivityLabelQueryOptions extends QueryOptions
{
    public const FIELD_ACTION_SOURCE = 'actionSource';
    public const FIELD_AUTO_TOOLTIP = 'autoTooltip';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_DEFAULT = 'isDefault';
    public const FIELD_IS_ENDPOINT_PROTECTION_ENABLED = 'isEndpointProtectionEnabled';
    public const FIELD_IS_SCOPED_TO_USER = 'isScopedToUser';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_NAME = 'name';
    public const FIELD_PRIORITY = 'priority';
    public const FIELD_TOOL_TIP = 'toolTip';
    public const FIELD_RIGHTS = 'rights';
    public const FIELD_SUBLABELS = 'sublabels';

    /**
     * Select specific SensitivityLabel properties
     * 
     * @param array<string> $select Use SensitivityLabelQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
