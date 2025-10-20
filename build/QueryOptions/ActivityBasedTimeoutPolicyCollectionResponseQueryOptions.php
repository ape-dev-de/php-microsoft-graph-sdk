<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ActivityBasedTimeoutPolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ActivityBasedTimeoutPolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ActivityBasedTimeoutPolicyCollectionResponse properties
     * 
     * @param array<string> $select Use ActivityBasedTimeoutPolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
