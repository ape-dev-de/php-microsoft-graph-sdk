<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReferenceAttachmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ReferenceAttachmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ReferenceAttachmentCollectionResponse properties
     * 
     * @param array<string> $select Use ReferenceAttachmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
