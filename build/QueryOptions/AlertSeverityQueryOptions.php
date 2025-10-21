<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AlertSeverity resources
 *
 * Available select fields:
 */
class AlertSeverityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AlertSeverity
     */

    /**
     * Select specific AlertSeverity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
