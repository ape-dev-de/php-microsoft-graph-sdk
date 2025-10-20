<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageTextInputQuestion resources
 *
 * Available select fields:
 * - isSingleLineQuestion
 * - regexPattern
 */
class AccessPackageTextInputQuestionQueryOptions extends QueryOptions
{
    public const FIELD_IS_SINGLE_LINE_QUESTION = 'isSingleLineQuestion';
    public const FIELD_REGEX_PATTERN = 'regexPattern';

    /**
     * Select specific AccessPackageTextInputQuestion properties
     * 
     * @param array<string> $select Use AccessPackageTextInputQuestionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
