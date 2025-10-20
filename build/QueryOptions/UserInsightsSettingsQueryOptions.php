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
    public const FIELD_IS_ENABLED = 'isEnabled';

    /**
     * Select specific UserInsightsSettings properties
     * 
     * @param array<string> $select Use UserInsightsSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
