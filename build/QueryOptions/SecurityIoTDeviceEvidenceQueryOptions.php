<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIoTDeviceEvidence resources
 *
 * Available select fields:
 */
class SecurityIoTDeviceEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIoTDeviceEvidence
     */

    /**
     * Select specific SecurityIoTDeviceEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
