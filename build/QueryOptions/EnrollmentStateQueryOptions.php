<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EnrollmentState resources
 *
 * Available select fields:
 */
class EnrollmentStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EnrollmentState
     */

    /**
     * Select specific EnrollmentState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
