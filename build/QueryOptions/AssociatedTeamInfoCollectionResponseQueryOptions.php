<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AssociatedTeamInfoCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AssociatedTeamInfoCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AssociatedTeamInfoCollectionResponse properties
     * 
     * @param array<string> $select Use AssociatedTeamInfoCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
