<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PronounsSettings resources
 *
 * Available select fields:
 */
class PronounsSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PronounsSettings
     */

    /**
     * Select specific PronounsSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
