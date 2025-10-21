<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageQuestion resources
 *
 * Available select fields:
 */
class AccessPackageQuestionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageQuestion
     */

    /**
     * Select specific AccessPackageQuestion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
