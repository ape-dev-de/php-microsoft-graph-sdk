<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDeviceEvidence resources
 *
 * Available select fields:
 */
class SecurityDeviceEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDeviceEvidence
     */

    /**
     * Select specific SecurityDeviceEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
