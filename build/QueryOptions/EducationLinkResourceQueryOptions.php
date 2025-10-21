<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationLinkResource resources
 *
 * Available select fields:
 */
class EducationLinkResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationLinkResource
     */

    /**
     * Select specific EducationLinkResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
