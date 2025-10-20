<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RejectJoinResponse resources
 *
 * Available select fields:
 * - reason
 */
class RejectJoinResponseQueryOptions extends QueryOptions
{
    public const FIELD_REASON = 'reason';

    /**
     * Select specific RejectJoinResponse properties
     * 
     * @param array<string> $select Use RejectJoinResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
