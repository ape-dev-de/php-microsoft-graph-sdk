<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageQuestion resources
 *
 * Available select fields:
 * - isAnswerEditable
 * - isRequired
 * - localizations
 * - sequence
 * - text
 */
class AccessPackageQuestionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageQuestion
     */
    public const FIELD_IS_ANSWER_EDITABLE = 'isAnswerEditable';
    public const FIELD_IS_REQUIRED = 'isRequired';
    public const FIELD_LOCALIZATIONS = 'localizations';
    public const FIELD_SEQUENCE = 'sequence';
    public const FIELD_TEXT = 'text';

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
