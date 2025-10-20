<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WebsiteCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WebsiteCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WebsiteCollectionResponse properties
     * 
     * @param array<string> $select Use WebsiteCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
