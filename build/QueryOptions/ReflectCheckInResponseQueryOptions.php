<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReflectCheckInResponse resources
 *
 * Available select fields:
 */
class ReflectCheckInResponseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ReflectCheckInResponse
     */

    /**
     * Select specific ReflectCheckInResponse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
