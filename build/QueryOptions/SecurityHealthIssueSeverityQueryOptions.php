<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHealthIssueSeverity resources
 *
 * Available select fields:
 */
class SecurityHealthIssueSeverityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHealthIssueSeverity
     */

    /**
     * Select specific SecurityHealthIssueSeverity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
