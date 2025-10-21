<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MediaSourceContentCategory resources
 *
 * Available select fields:
 */
class MediaSourceContentCategoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MediaSourceContentCategory
     */

    /**
     * Select specific MediaSourceContentCategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
