<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OAuth2PermissionGrantCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OAuth2PermissionGrantCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OAuth2PermissionGrantCollectionResponse properties
     * 
     * @param array<string> $select Use OAuth2PermissionGrantCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
