<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectSet resources
 *
 * Available select fields:
 */
class SubjectSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SubjectSet
     */

    /**
     * Select specific SubjectSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
