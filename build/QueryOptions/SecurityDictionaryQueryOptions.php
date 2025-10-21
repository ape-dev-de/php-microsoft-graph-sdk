<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDictionary resources
 *
 * Available select fields:
 */
class SecurityDictionaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDictionary
     */

    /**
     * Select specific SecurityDictionary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
