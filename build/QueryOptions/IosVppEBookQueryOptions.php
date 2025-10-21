<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosVppEBook resources
 *
 * Available select fields:
 */
class IosVppEBookQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosVppEBook
     */

    /**
     * Select specific IosVppEBook properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
