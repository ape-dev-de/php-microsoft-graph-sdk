<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChart
 */
class WorkbookChart
{
    /**
     * Represents the height, in points, of the chart object.
     */
    private ?string $height;

    /**
     * The distance, in points, from the left side of the chart to the worksheet origin.
     */
    private ?string $left;

    /**
     * Represents the name of a chart object.
     */
    private ?string $name;

    /**
     * Represents the distance, in points, from the top edge of the object to the top of row 1 (on a worksheet) or the top of the chart area (on a chart).
     */
    private ?string $top;

    /**
     * Represents the width, in points, of the chart object.
     */
    private ?string $width;

    /**
     * Represents chart axes. Read-only.
     */
    private ?string $axes;

    /**
     * Represents the data labels on the chart. Read-only.
     */
    private ?string $dataLabels;

    /**
     * Encapsulates the format properties for the chart area. Read-only.
     */
    private ?string $format;

    /**
     * Represents the legend for the chart. Read-only.
     */
    private ?string $legend;

    /**
     * Represents either a single series or collection of series in the chart. Read-only.
     */
    private array $series = [];

    /**
     * Represents the title of the specified chart, including the text, visibility, position and formatting of the title. Read-only.
     */
    private ?string $title;

    /**
     * The worksheet containing the current chart. Read-only.
     */
    private ?string $worksheet;

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(?string $height): self
    {
        $this->height = $height;
        return $this;
    }

    public function getLeft(): ?string
    {
        return $this->left;
    }

    public function setLeft(?string $left): self
    {
        $this->left = $left;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getTop(): ?string
    {
        return $this->top;
    }

    public function setTop(?string $top): self
    {
        $this->top = $top;
        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public function setWidth(?string $width): self
    {
        $this->width = $width;
        return $this;
    }

    public function getAxes(): ?string
    {
        return $this->axes;
    }

    public function setAxes(?string $axes): self
    {
        $this->axes = $axes;
        return $this;
    }

    public function getDataLabels(): ?string
    {
        return $this->dataLabels;
    }

    public function setDataLabels(?string $dataLabels): self
    {
        $this->dataLabels = $dataLabels;
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

    public function getLegend(): ?string
    {
        return $this->legend;
    }

    public function setLegend(?string $legend): self
    {
        $this->legend = $legend;
        return $this;
    }

    public function getSeries(): array
    {
        return $this->series;
    }

    public function setSeries(array $series): self
    {
        $this->series = $series;
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

    public function getWorksheet(): ?string
    {
        return $this->worksheet;
    }

    public function setWorksheet(?string $worksheet): self
    {
        $this->worksheet = $worksheet;
        return $this;
    }

}
