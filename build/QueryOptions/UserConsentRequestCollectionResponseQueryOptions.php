<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserConsentRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserConsentRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserConsentRequestCollectionResponse properties
     * 
     * @param array<string> $select Use UserConsentRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
