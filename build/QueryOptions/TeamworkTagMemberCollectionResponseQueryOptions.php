<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkTagMemberCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TeamworkTagMemberCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TeamworkTagMemberCollectionResponse properties
     * 
     * @param array<string> $select Use TeamworkTagMemberCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
