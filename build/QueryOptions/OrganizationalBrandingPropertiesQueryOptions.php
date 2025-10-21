<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OrganizationalBrandingProperties resources
 *
 * Available select fields:
 */
class OrganizationalBrandingPropertiesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OrganizationalBrandingProperties
     */

    /**
     * Select specific OrganizationalBrandingProperties properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
