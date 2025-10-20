<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InviteParticipantsOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class InviteParticipantsOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific InviteParticipantsOperationCollectionResponse properties
     * 
     * @param array<string> $select Use InviteParticipantsOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
