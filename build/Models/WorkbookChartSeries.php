<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartSeries
 */
class WorkbookChartSeries
{
    /**
     * The name of a series in a chart.
     */
    private ?string $name;

    /**
     * The formatting of a chart series, which includes fill and line formatting. Read-only.
     */
    private ?string $format;

    /**
     * A collection of all points in the series. Read-only.
     * @var string[]
     */
    private array $points = [];


    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
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

    /**
     * @return string[]
     */
    public function getPoints(): array
    {
        return $this->points;
    }

    /**
     * @param string[] $points
     */
    public function setPoints(array $points): self
    {
        $this->points = $points;
        return $this;
    }

}
