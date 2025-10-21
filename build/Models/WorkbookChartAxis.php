<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAxis
 */
class WorkbookChartAxis
{
    /**
     * Represents the interval between two major tick marks. Can be set to a numeric value or an empty string.  The returned value is always a number.
     */
    private ?string $majorUnit;

    /**
     * Represents the maximum value on the value axis.  Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number.
     */
    private ?string $maximum;

    /**
     * Represents the minimum value on the value axis. Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number.
     */
    private ?string $minimum;

    /**
     * Represents the interval between two minor tick marks. 'Can be set to a numeric value or an empty string (for automatic axis values). The returned value is always a number.
     */
    private ?string $minorUnit;

    /**
     * Represents the formatting of a chart object, which includes line and font formatting. Read-only.
     */
    private ?string $format;

    /**
     * Returns a gridlines object that represents the major gridlines for the specified axis. Read-only.
     */
    private ?string $majorGridlines;

    /**
     * Returns a Gridlines object that represents the minor gridlines for the specified axis. Read-only.
     */
    private ?string $minorGridlines;

    /**
     * Represents the axis title. Read-only.
     */
    private ?string $title;


    public function getMajorUnit(): ?string
    {
        return $this->majorUnit;
    }

    public function setMajorUnit(?string $majorUnit): self
    {
        $this->majorUnit = $majorUnit;
        return $this;
    }

    public function getMaximum(): ?string
    {
        return $this->maximum;
    }

    public function setMaximum(?string $maximum): self
    {
        $this->maximum = $maximum;
        return $this;
    }

    public function getMinimum(): ?string
    {
        return $this->minimum;
    }

    public function setMinimum(?string $minimum): self
    {
        $this->minimum = $minimum;
        return $this;
    }

    public function getMinorUnit(): ?string
    {
        return $this->minorUnit;
    }

    public function setMinorUnit(?string $minorUnit): self
    {
        $this->minorUnit = $minorUnit;
        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->format = $format;
        return $this;
    }

    public function getMajorGridlines(): ?string
    {
        return $this->majorGridlines;
    }

    public function setMajorGridlines(?string $majorGridlines): self
    {
        $this->majorGridlines = $majorGridlines;
        return $this;
    }

    public function getMinorGridlines(): ?string
    {
        return $this->minorGridlines;
    }

    public function setMinorGridlines(?string $minorGridlines): self
    {
        $this->minorGridlines = $minorGridlines;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

}
