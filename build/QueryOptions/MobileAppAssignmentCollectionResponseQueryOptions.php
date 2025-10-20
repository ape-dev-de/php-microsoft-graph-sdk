<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MobileAppAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MobileAppAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use MobileAppAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
