<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Initiator resources
 *
 * Available select fields:
 * - initiatorType
 */
class InitiatorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Initiator
     */
    public const FIELD_INITIATOR_TYPE = 'initiatorType';

    /**
     * Select specific Initiator properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
