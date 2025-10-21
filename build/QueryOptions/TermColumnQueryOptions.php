<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermColumn resources
 *
 * Available select fields:
 * - allowMultipleValues
 * - showFullyQualifiedName
 * - parentTerm
 * - termSet
 */
class TermColumnQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TermColumn
     */
    public const FIELD_ALLOW_MULTIPLE_VALUES = 'allowMultipleValues';
    public const FIELD_SHOW_FULLY_QUALIFIED_NAME = 'showFullyQualifiedName';
    public const FIELD_PARENT_TERM = 'parentTerm';
    public const FIELD_TERM_SET = 'termSet';

    /**
     * Select specific TermColumn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
