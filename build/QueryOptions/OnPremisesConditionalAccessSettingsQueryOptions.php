<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnPremisesConditionalAccessSettings resources
 *
 * Available select fields:
 * - enabled
 * - excludedGroups
 * - includedGroups
 * - overrideDefaultRule
 */
class OnPremisesConditionalAccessSettingsQueryOptions extends QueryOptions
{
    public const FIELD_ENABLED = 'enabled';
    public const FIELD_EXCLUDED_GROUPS = 'excludedGroups';
    public const FIELD_INCLUDED_GROUPS = 'includedGroups';
    public const FIELD_OVERRIDE_DEFAULT_RULE = 'overrideDefaultRule';

    /**
     * Select specific OnPremisesConditionalAccessSettings properties
     * 
     * @param array<string> $select Use OnPremisesConditionalAccessSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
