<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintModel resources
 *
 * Available select fields:
 */
class PrintModelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintModel
     */

    /**
     * Select specific PrintModel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
