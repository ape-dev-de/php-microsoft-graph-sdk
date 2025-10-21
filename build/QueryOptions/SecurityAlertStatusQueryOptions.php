<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAlertStatus resources
 *
 * Available select fields:
 */
class SecurityAlertStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityAlertStatus
     */

    /**
     * Select specific SecurityAlertStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
