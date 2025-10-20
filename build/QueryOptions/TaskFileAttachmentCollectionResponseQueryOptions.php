<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TaskFileAttachmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TaskFileAttachmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TaskFileAttachmentCollectionResponse properties
     * 
     * @param array<string> $select Use TaskFileAttachmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
