<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityApiConnectorCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityApiConnectorCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityApiConnectorCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityApiConnectorCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
