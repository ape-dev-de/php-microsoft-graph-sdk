<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RemoteLockActionResult resources
 *
 * Available select fields:
 * - unlockPin
 */
class RemoteLockActionResultQueryOptions extends QueryOptions
{
    public const FIELD_UNLOCK_PIN = 'unlockPin';

    /**
     * Select specific RemoteLockActionResult properties
     * 
     * @param array<string> $select Use RemoteLockActionResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
