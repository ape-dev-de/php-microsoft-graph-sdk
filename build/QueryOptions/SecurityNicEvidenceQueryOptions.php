<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityNicEvidence resources
 *
 * Available select fields:
 */
class SecurityNicEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityNicEvidence
     */

    /**
     * Select specific SecurityNicEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
