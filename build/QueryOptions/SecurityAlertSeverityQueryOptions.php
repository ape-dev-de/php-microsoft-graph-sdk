<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAlertSeverity resources
 *
 * Available select fields:
 */
class SecurityAlertSeverityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityAlertSeverity
     */

    /**
     * Select specific SecurityAlertSeverity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
