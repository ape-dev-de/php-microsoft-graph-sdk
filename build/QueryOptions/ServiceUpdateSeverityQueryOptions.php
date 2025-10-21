<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceUpdateSeverity resources
 *
 * Available select fields:
 */
class ServiceUpdateSeverityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceUpdateSeverity
     */

    /**
     * Select specific ServiceUpdateSeverity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
