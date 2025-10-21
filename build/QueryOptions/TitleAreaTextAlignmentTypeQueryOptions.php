<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TitleAreaTextAlignmentType resources
 *
 * Available select fields:
 */
class TitleAreaTextAlignmentTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TitleAreaTextAlignmentType
     */

    /**
     * Select specific TitleAreaTextAlignmentType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
