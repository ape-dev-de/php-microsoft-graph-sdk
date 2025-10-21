<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintQuality resources
 *
 * Available select fields:
 */
class PrintQualityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintQuality
     */

    /**
     * Select specific PrintQuality properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
