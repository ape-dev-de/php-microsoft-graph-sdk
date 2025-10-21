<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIncidentStatus resources
 *
 * Available select fields:
 */
class SecurityIncidentStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIncidentStatus
     */

    /**
     * Select specific SecurityIncidentStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
