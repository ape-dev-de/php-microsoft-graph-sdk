<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BaseDeltaFunctionResponse resources
 *
 * Available select fields:
 */
class BaseDeltaFunctionResponseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BaseDeltaFunctionResponse
     */

    /**
     * Select specific BaseDeltaFunctionResponse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
