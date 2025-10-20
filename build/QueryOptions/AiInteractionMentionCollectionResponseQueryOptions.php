<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiInteractionMentionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AiInteractionMentionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AiInteractionMentionCollectionResponse properties
     * 
     * @param array<string> $select Use AiInteractionMentionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
