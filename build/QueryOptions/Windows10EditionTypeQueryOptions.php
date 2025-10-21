<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10EditionType resources
 *
 * Available select fields:
 */
class Windows10EditionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Windows10EditionType
     */

    /**
     * Select specific Windows10EditionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
