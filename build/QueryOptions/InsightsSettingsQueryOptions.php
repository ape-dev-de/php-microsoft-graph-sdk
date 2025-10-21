<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InsightsSettings resources
 *
 * Available select fields:
 */
class InsightsSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InsightsSettings
     */

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
