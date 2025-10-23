<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookRangeFormat
 */
class WorkbookRangeFormat
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The width of all columns within the range. If the column widths aren't uniform, null will be returned. */
    public ?string $columnWidth = null;

    /** The horizontal alignment for the specified object. Possible values are: General, Left, Center, Right, Fill, Justify, CenterAcrossSelection, Distributed. */
    public ?string $horizontalAlignment = null;

    /** The height of all rows in the range. If the row heights aren't uniform null will be returned. */
    public ?string $rowHeight = null;

    /** The vertical alignment for the specified object. Possible values are: Top, Center, Bottom, Justify, Distributed. */
    public ?string $verticalAlignment = null;

    /** Indicates whether Excel wraps the text in the object. A null value indicates that the entire range doesn't have a uniform wrap setting. */
    public ?bool $wrapText = null;

    /** 
     * Collection of border objects that apply to the overall range selected Read-only.
     * @var WorkbookRangeBorder[]
     */
    public array $borders = [];

    /** 
     * Returns the fill object defined on the overall range. Read-only.
     * @var WorkbookRangeFill|\stdClass|null
     */
    public mixed $fill = null;

    /** 
     * Returns the font object defined on the overall range selected Read-only.
     * @var WorkbookRangeFont|\stdClass|null
     */
    public mixed $font = null;

    /** 
     * Returns the format protection object for a range. Read-only.
     * @var WorkbookFormatProtection|\stdClass|null
     */
    public mixed $protection = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['columnWidth'])) {
            $this->columnWidth = $data['columnWidth'];
        }
        if (isset($data['horizontalAlignment'])) {
            $this->horizontalAlignment = $data['horizontalAlignment'];
        }
        if (isset($data['rowHeight'])) {
            $this->rowHeight = $data['rowHeight'];
        }
        if (isset($data['verticalAlignment'])) {
            $this->verticalAlignment = $data['verticalAlignment'];
        }
        if (isset($data['wrapText'])) {
            $this->wrapText = $data['wrapText'];
        }
        if (isset($data['borders'])) {
            $this->borders = $data['borders'];
        }
        if (isset($data['fill'])) {
            $this->fill = $data['fill'];
        }
        if (isset($data['font'])) {
            $this->font = $data['font'];
        }
        if (isset($data['protection'])) {
            $this->protection = $data['protection'];
        }
    }
}
