<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContentSharingSessionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ContentSharingSessionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ContentSharingSessionCollectionResponse properties
     * 
     * @param array<string> $select Use ContentSharingSessionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
