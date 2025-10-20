<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeletedChatCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeletedChatCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeletedChatCollectionResponse properties
     * 
     * @param array<string> $select Use DeletedChatCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
