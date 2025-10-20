<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAnswer resources
 *
 * Available select fields:
 * - displayValue
 * - answeredQuestion
 */
class AccessPackageAnswerQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_VALUE = 'displayValue';
    public const FIELD_ANSWERED_QUESTION = 'answeredQuestion';

    /**
     * Select specific AccessPackageAnswer properties
     * 
     * @param array<string> $select Use AccessPackageAnswerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
