<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConnectedOrganizationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ConnectedOrganizationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ConnectedOrganizationCollectionResponse properties
     * 
     * @param array<string> $select Use ConnectedOrganizationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
