<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationSecretKeyStringValuePairCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SynchronizationSecretKeyStringValuePairCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SynchronizationSecretKeyStringValuePairCollectionResponse properties
     * 
     * @param array<string> $select Use SynchronizationSecretKeyStringValuePairCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
