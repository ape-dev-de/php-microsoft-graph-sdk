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
    public const FIELD_QUESTION = 'question';

    /**
     * Select specific AccessPackageResourceAttributeQuestion properties
     * 
     * @param array<string> $select Use AccessPackageResourceAttributeQuestionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
