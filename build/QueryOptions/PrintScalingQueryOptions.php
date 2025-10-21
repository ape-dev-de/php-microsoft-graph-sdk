<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintScaling resources
 *
 * Available select fields:
 */
class PrintScalingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintScaling
     */

    /**
     * Select specific PrintScaling properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
