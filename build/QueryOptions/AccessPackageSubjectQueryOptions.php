<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageSubject resources
 *
 * Available select fields:
 */
class AccessPackageSubjectQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageSubject
     */

    /**
     * Select specific AccessPackageSubject properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
