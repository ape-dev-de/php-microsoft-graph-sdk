<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessageHostedContentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ChatMessageHostedContentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ChatMessageHostedContentCollectionResponse properties
     * 
     * @param array<string> $select Use ChatMessageHostedContentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
