<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnPremisesConditionalAccessSettings resources
 *
 * Available select fields:
 */
class OnPremisesConditionalAccessSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnPremisesConditionalAccessSettings
     */

    /**
     * Select specific OnPremisesConditionalAccessSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
