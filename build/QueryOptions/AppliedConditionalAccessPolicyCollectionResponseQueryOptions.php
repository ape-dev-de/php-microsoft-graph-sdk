<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppliedConditionalAccessPolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AppliedConditionalAccessPolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AppliedConditionalAccessPolicyCollectionResponse properties
     * 
     * @param array<string> $select Use AppliedConditionalAccessPolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
