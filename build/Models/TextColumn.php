<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TextColumn
 */
class TextColumn
{
    /** Whether to allow multiple lines of text. */
    public ?bool $allowMultipleLines = null;

    /** Whether updates to this column should replace existing text, or append to it. */
    public ?bool $appendChangesToExistingText = null;

    /** The size of the text box. */
    public ?float $linesForEditing = null;

    /** The maximum number of characters for the value. */
    public ?float $maxLength = null;

    /** The type of text being stored. Must be one of plain or richText */
    public ?string $textType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['allowMultipleLines'])) {
            $this->allowMultipleLines = $data['allowMultipleLines'];
        }
        if (isset($data['appendChangesToExistingText'])) {
            $this->appendChangesToExistingText = $data['appendChangesToExistingText'];
        }
        if (isset($data['linesForEditing'])) {
            $this->linesForEditing = $data['linesForEditing'];
        }
        if (isset($data['maxLength'])) {
            $this->maxLength = $data['maxLength'];
        }
        if (isset($data['textType'])) {
            $this->textType = $data['textType'];
        }
    }
}
