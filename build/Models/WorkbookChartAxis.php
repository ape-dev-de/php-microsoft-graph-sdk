<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAxis
 */
class WorkbookChartAxis
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Represents the interval between two major tick marks. Can be set to a numeric value or an empty string.  The returned value is always a number. */
    public ?string $majorUnit = null;

    /** Represents the maximum value on the value axis.  Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number. */
    public ?string $maximum = null;

    /** Represents the minimum value on the value axis. Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number. */
    public ?string $minimum = null;

    /** Represents the interval between two minor tick marks. 'Can be set to a numeric value or an empty string (for automatic axis values). The returned value is always a number. */
    public ?string $minorUnit = null;

    /** 
     * Represents the formatting of a chart object, which includes line and font formatting. Read-only.
     * @var WorkbookChartAxisFormat|\stdClass|null
     */
    public mixed $format = null;

    /** 
     * Returns a gridlines object that represents the major gridlines for the specified axis. Read-only.
     * @var WorkbookChartGridlines|\stdClass|null
     */
    public mixed $majorGridlines = null;

    /** 
     * Returns a Gridlines object that represents the minor gridlines for the specified axis. Read-only.
     * @var WorkbookChartGridlines|\stdClass|null
     */
    public mixed $minorGridlines = null;

    /** 
     * Represents the axis title. Read-only.
     * @var WorkbookChartAxisTitle|\stdClass|null
     */
    public mixed $title = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['majorUnit'])) {
            $this->majorUnit = $data['majorUnit'];
        }
        if (isset($data['maximum'])) {
            $this->maximum = $data['maximum'];
        }
        if (isset($data['minimum'])) {
            $this->minimum = $data['minimum'];
        }
        if (isset($data['minorUnit'])) {
            $this->minorUnit = $data['minorUnit'];
        }
        if (isset($data['format'])) {
            $this->format = $data['format'];
        }
        if (isset($data['majorGridlines'])) {
            $this->majorGridlines = $data['majorGridlines'];
        }
        if (isset($data['minorGridlines'])) {
            $this->minorGridlines = $data['minorGridlines'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
    }
}
