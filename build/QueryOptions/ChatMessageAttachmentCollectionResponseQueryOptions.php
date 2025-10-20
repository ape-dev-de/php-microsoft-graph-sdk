<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessageAttachmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ChatMessageAttachmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ChatMessageAttachmentCollectionResponse properties
     * 
     * @param array<string> $select Use ChatMessageAttachmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
