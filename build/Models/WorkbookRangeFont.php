<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookRangeFont
 */
class WorkbookRangeFont
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Inidicates whether the font is bold. */
    public ?bool $bold = null;

    /** The HTML color code representation of the text color. For example, #FF0000 represents the color red. */
    public ?string $color = null;

    /** Inidicates whether the font is italic. */
    public ?bool $italic = null;

    /** The font name. For example, 'Calibri'. */
    public ?string $name = null;

    /** The font size. */
    public ?string $size = null;

    /** The type of underlining applied to the font. The possible values are: None, Single, Double, SingleAccountant, DoubleAccountant. */
    public ?string $underline = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['bold'])) {
            $this->bold = $data['bold'];
        }
        if (isset($data['color'])) {
            $this->color = $data['color'];
        }
        if (isset($data['italic'])) {
            $this->italic = $data['italic'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['size'])) {
            $this->size = $data['size'];
        }
        if (isset($data['underline'])) {
            $this->underline = $data['underline'];
        }
    }
}
