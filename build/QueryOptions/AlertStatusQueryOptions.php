<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AlertStatus resources
 *
 * Available select fields:
 */
class AlertStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AlertStatus
     */

    /**
     * Select specific AlertStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
