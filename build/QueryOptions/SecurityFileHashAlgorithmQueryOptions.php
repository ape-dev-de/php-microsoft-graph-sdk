<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFileHashAlgorithm resources
 *
 * Available select fields:
 */
class SecurityFileHashAlgorithmQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityFileHashAlgorithm
     */

    /**
     * Select specific SecurityFileHashAlgorithm properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
