<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppConsentRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AppConsentRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AppConsentRequestCollectionResponse properties
     * 
     * @param array<string> $select Use AppConsentRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
