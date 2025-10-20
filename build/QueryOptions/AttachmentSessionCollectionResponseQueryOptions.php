<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttachmentSessionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AttachmentSessionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AttachmentSessionCollectionResponse properties
     * 
     * @param array<string> $select Use AttachmentSessionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
