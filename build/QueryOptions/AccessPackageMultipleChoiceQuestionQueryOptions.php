<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageMultipleChoiceQuestion resources
 *
 * Available select fields:
 */
class AccessPackageMultipleChoiceQuestionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageMultipleChoiceQuestion
     */

    /**
     * Select specific AccessPackageMultipleChoiceQuestion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
