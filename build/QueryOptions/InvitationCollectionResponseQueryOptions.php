<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InvitationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class InvitationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific InvitationCollectionResponse properties
     * 
     * @param array<string> $select Use InvitationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
