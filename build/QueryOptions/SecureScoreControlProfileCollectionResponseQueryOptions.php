<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecureScoreControlProfileCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecureScoreControlProfileCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecureScoreControlProfileCollectionResponse properties
     * 
     * @param array<string> $select Use SecureScoreControlProfileCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
