<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationSecretKeyStringValuePair resources
 *
 * Available select fields:
 * - key
 * - value
 */
class SynchronizationSecretKeyStringValuePairQueryOptions extends QueryOptions
{
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SynchronizationSecretKeyStringValuePair properties
     * 
     * @param array<string> $select Use SynchronizationSecretKeyStringValuePairQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
