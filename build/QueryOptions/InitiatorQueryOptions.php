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
    public const FIELD_INITIATOR_TYPE = 'initiatorType';

    /**
     * Select specific Initiator properties
     * 
     * @param array<string> $select Use InitiatorQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
