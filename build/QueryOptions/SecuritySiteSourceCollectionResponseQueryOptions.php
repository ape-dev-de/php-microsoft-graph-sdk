<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySiteSourceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecuritySiteSourceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecuritySiteSourceCollectionResponse properties
     * 
     * @param array<string> $select Use SecuritySiteSourceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
