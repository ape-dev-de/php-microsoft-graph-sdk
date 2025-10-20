<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecureScoreControlStateUpdateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecureScoreControlStateUpdateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecureScoreControlStateUpdateCollectionResponse properties
     * 
     * @param array<string> $select Use SecureScoreControlStateUpdateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
