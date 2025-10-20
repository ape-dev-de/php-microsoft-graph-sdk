<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecureScoreCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecureScoreCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecureScoreCollectionResponse properties
     * 
     * @param array<string> $select Use SecureScoreCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
