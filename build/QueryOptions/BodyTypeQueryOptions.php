<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BodyType resources
 *
 * Available select fields:
 */
class BodyTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BodyType
     */

    /**
     * Select specific BodyType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
