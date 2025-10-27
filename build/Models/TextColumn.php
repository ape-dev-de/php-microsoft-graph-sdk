<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TextColumn
 */
class TextColumn
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['allowMultipleLines'])) {
            $this->allowMultipleLines = is_bool($data['allowMultipleLines']) ? $data['allowMultipleLines'] : (bool)$data['allowMultipleLines'];
        }
        if (isset($data['appendChangesToExistingText'])) {
            $this->appendChangesToExistingText = is_bool($data['appendChangesToExistingText']) ? $data['appendChangesToExistingText'] : (bool)$data['appendChangesToExistingText'];
        }
        if (isset($data['linesForEditing'])) {
            $this->linesForEditing = is_numeric($data['linesForEditing']) ? (float)$data['linesForEditing'] : $data['linesForEditing'];
        }
        if (isset($data['maxLength'])) {
            $this->maxLength = is_numeric($data['maxLength']) ? (float)$data['maxLength'] : $data['maxLength'];
        }
        if (isset($data['textType'])) {
            $this->textType = $data['textType'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
