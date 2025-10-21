<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageSubjectType resources
 *
 * Available select fields:
 */
class AccessPackageSubjectTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageSubjectType
     */

    /**
     * Select specific AccessPackageSubjectType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
