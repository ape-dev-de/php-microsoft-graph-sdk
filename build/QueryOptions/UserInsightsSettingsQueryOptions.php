<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserInsightsSettings resources
 *
 * Available select fields:
 * - isEnabled
 */
class UserInsightsSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserInsightsSettings
     */
    public const FIELD_IS_ENABLED = 'isEnabled';

    /**
     * Select specific UserInsightsSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
