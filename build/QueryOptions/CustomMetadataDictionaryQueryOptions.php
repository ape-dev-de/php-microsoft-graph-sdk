<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomMetadataDictionary resources
 *
 * Available select fields:
 */
class CustomMetadataDictionaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomMetadataDictionary
     */

    /**
     * Select specific CustomMetadataDictionary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
