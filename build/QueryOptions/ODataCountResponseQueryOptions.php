<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ODataCountResponse resources
 *
 * Available select fields:
 */
class ODataCountResponseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ODataCountResponse
     */

    /**
     * Select specific ODataCountResponse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
