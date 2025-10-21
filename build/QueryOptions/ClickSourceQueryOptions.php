<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ClickSource resources
 *
 * Available select fields:
 */
class ClickSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ClickSource
     */

    /**
     * Select specific ClickSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
