<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDetectionSource resources
 *
 * Available select fields:
 */
class SecurityDetectionSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDetectionSource
     */

    /**
     * Select specific SecurityDetectionSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
