<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationContextClassReferenceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AuthenticationContextClassReferenceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AuthenticationContextClassReferenceCollectionResponse properties
     * 
     * @param array<string> $select Use AuthenticationContextClassReferenceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
