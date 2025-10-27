<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * HorizontalSectionColumn
 */
class HorizontalSectionColumn
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Width of the column. A horizontal section is divided into 12 grids. A column should have a value of 1-12 to represent its range spans. For example, there can be two columns both have a width of 6 in a section. */
    public ?float $width = null;

    /** 
     * The collection of WebParts in this column.
     * @var WebPart[]
     */
    public array $webparts = [];


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
        if (isset($data['width'])) {
            $this->width = is_numeric($data['width']) ? (float)$data['width'] : $data['width'];
        }
        if (isset($data['webparts'])) {
            $this->webparts = $data['webparts'];
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
