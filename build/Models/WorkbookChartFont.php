<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartFont
 */
class WorkbookChartFont
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates whether the fond is bold. */
    public ?bool $bold = null;

    /** The HTML color code representation of the text color. For example #FF0000 represents Red. */
    public ?string $color = null;

    /** Indicates whether the fond is italic. */
    public ?bool $italic = null;

    /** The font name. For example 'Calibri'. */
    public ?string $name = null;

    /** 
     * The size of the font. For example,  11.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $size = null;

    /** The type of underlining applied to the font. The possible values are: None, Single. */
    public ?string $underline = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['bold'])) {
            $this->bold = is_bool($data['bold']) ? $data['bold'] : (bool)$data['bold'];
        }
        if (isset($data['color'])) {
            $this->color = $data['color'];
        }
        if (isset($data['italic'])) {
            $this->italic = is_bool($data['italic']) ? $data['italic'] : (bool)$data['italic'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['size'])) {
            $this->size = is_numeric($data['size']) ? (float)$data['size'] : $data['size'];
        }
        if (isset($data['underline'])) {
            $this->underline = $data['underline'];
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
