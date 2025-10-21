<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDetectionStatus resources
 *
 * Available select fields:
 */
class SecurityDetectionStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDetectionStatus
     */

    /**
     * Select specific SecurityDetectionStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
