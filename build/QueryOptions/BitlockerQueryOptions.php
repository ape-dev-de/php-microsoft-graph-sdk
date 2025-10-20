<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Bitlocker resources
 *
 * Available select fields:
 * - recoveryKeys
 */
class BitlockerQueryOptions extends QueryOptions
{
    public const FIELD_RECOVERY_KEYS = 'recoveryKeys';

    /**
     * Select specific Bitlocker properties
     * 
     * @param array<string> $select Use BitlockerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
