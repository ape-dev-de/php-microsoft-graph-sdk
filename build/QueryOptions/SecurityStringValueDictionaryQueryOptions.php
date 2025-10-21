<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityStringValueDictionary resources
 *
 * Available select fields:
 */
class SecurityStringValueDictionaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityStringValueDictionary
     */

    /**
     * Select specific SecurityStringValueDictionary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
