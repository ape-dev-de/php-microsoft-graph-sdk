<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIncident resources
 *
 * Available select fields:
 */
class SecurityIncidentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIncident
     */

    /**
     * Select specific SecurityIncident properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
