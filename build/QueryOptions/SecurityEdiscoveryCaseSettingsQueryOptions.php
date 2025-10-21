<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryCaseSettings resources
 *
 * Available select fields:
 */
class SecurityEdiscoveryCaseSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryCaseSettings
     */

    /**
     * Select specific SecurityEdiscoveryCaseSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
