<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InsightsSettings resources
 *
 * Available select fields:
 * - disabledForGroup
 * - isEnabledInOrganization
 */
class InsightsSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InsightsSettings
     */
    public const FIELD_DISABLED_FOR_GROUP = 'disabledForGroup';
    public const FIELD_IS_ENABLED_IN_ORGANIZATION = 'isEnabledInOrganization';

    /**
     * Select specific InsightsSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
