<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlayPromptOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PlayPromptOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PlayPromptOperationCollectionResponse properties
     * 
     * @param array<string> $select Use PlayPromptOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
