<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAnswerChoice resources
 *
 * Available select fields:
 * - actualValue
 * - localizations
 * - text
 */
class AccessPackageAnswerChoiceQueryOptions extends QueryOptions
{
    public const FIELD_ACTUAL_VALUE = 'actualValue';
    public const FIELD_LOCALIZATIONS = 'localizations';
    public const FIELD_TEXT = 'text';

    /**
     * Select specific AccessPackageAnswerChoice properties
     * 
     * @param array<string> $select Use AccessPackageAnswerChoiceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
