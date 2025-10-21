<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEvidenceRole resources
 *
 * Available select fields:
 */
class SecurityEvidenceRoleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEvidenceRole
     */

    /**
     * Select specific SecurityEvidenceRole properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
