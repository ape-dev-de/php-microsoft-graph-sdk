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
    /**
     * Available select fields for RejectJoinResponse
     */
    public const FIELD_REASON = 'reason';

    /**
     * Select specific RejectJoinResponse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
