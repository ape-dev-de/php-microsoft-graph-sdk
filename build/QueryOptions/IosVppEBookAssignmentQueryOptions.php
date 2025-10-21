<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosVppEBookAssignment resources
 *
 * Available select fields:
 */
class IosVppEBookAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosVppEBookAssignment
     */

    /**
     * Select specific IosVppEBookAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
