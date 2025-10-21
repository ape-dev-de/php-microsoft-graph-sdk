<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageTextInputQuestion resources
 *
 * Available select fields:
 */
class AccessPackageTextInputQuestionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageTextInputQuestion
     */

    /**
     * Select specific AccessPackageTextInputQuestion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
