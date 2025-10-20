<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubscribeToToneOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SubscribeToToneOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SubscribeToToneOperationCollectionResponse properties
     * 
     * @param array<string> $select Use SubscribeToToneOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
