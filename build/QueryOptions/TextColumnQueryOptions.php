<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TextColumn resources
 *
 * Available select fields:
 * - allowMultipleLines
 * - appendChangesToExistingText
 * - linesForEditing
 * - maxLength
 * - textType
 */
class TextColumnQueryOptions extends QueryOptions
{
    public const FIELD_ALLOW_MULTIPLE_LINES = 'allowMultipleLines';
    public const FIELD_APPEND_CHANGES_TO_EXISTING_TEXT = 'appendChangesToExistingText';
    public const FIELD_LINES_FOR_EDITING = 'linesForEditing';
    public const FIELD_MAX_LENGTH = 'maxLength';
    public const FIELD_TEXT_TYPE = 'textType';

    /**
     * Select specific TextColumn properties
     * 
     * @param array<string> $select Use TextColumnQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
