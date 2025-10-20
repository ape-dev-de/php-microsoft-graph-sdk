<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OrganizationalBrandingLocalizationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OrganizationalBrandingLocalizationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OrganizationalBrandingLocalizationCollectionResponse properties
     * 
     * @param array<string> $select Use OrganizationalBrandingLocalizationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
