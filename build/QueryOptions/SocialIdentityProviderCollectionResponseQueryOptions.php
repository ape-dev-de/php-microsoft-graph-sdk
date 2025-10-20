<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SocialIdentityProviderCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SocialIdentityProviderCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SocialIdentityProviderCollectionResponse properties
     * 
     * @param array<string> $select Use SocialIdentityProviderCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
