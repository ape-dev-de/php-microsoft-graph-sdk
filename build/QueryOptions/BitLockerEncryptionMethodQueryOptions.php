<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BitLockerEncryptionMethod resources
 *
 * Available select fields:
 */
class BitLockerEncryptionMethodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BitLockerEncryptionMethod
     */

    /**
     * Select specific BitLockerEncryptionMethod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
