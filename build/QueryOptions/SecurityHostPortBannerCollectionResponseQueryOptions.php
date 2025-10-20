<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostPortBannerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityHostPortBannerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityHostPortBannerCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityHostPortBannerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
