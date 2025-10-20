<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppRelationshipCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MobileAppRelationshipCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MobileAppRelationshipCollectionResponse properties
     * 
     * @param array<string> $select Use MobileAppRelationshipCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
