<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResourceAttributeQuestion resources
 *
 * Available select fields:
 * - question
 */
class AccessPackageResourceAttributeQuestionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageResourceAttributeQuestion
     */
    public const FIELD_QUESTION = 'question';

    /**
     * Select specific AccessPackageResourceAttributeQuestion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
