<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAxisTitle
 */
class WorkbookChartAxisTitle
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Represents the axis title. */
    public ?string $text = null;

    /** A Boolean that specifies the visibility of an axis title. */
    public ?bool $visible = null;

    /** 
     * Represents the formatting of chart axis title. Read-only.
     * @var WorkbookChartAxisTitleFormat|\stdClass|null
     */
    public mixed $format = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['text'])) {
            $this->text = $data['text'];
        }
        if (isset($data['visible'])) {
            $this->visible = $data['visible'];
        }
        if (isset($data['format'])) {
            $this->format = $data['format'];
        }
    }
}
