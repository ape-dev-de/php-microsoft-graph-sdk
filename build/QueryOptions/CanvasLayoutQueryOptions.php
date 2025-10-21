<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CanvasLayout resources
 *
 * Available select fields:
 */
class CanvasLayoutQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CanvasLayout
     */

    /**
     * Select specific CanvasLayout properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
