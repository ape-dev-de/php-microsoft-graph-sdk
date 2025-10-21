<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContentType resources
 *
 * Available select fields:
 */
class ContentTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ContentType
     */

    /**
     * Select specific ContentType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
