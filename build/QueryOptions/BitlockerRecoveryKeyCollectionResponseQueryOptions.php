<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BitlockerRecoveryKeyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BitlockerRecoveryKeyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BitlockerRecoveryKeyCollectionResponse properties
     * 
     * @param array<string> $select Use BitlockerRecoveryKeyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
