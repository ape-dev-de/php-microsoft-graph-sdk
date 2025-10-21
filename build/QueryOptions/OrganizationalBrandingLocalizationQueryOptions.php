<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OrganizationalBrandingLocalization resources
 *
 * Available select fields:
 */
class OrganizationalBrandingLocalizationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OrganizationalBrandingLocalization
     */

    /**
     * Select specific OrganizationalBrandingLocalization properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
