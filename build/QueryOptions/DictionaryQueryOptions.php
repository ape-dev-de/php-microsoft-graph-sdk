<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Dictionary resources
 *
 * Available select fields:
 */
class DictionaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Dictionary
     */

    /**
     * Select specific Dictionary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
