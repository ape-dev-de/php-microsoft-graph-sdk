<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAlertDetermination resources
 *
 * Available select fields:
 */
class SecurityAlertDeterminationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityAlertDetermination
     */

    /**
     * Select specific SecurityAlertDetermination properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
