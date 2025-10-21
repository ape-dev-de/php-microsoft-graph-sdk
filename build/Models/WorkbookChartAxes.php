<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAxes
 */
class WorkbookChartAxes
{
    /**
     * Represents the category axis in a chart. Read-only.
     */
    private ?string $categoryAxis;

    /**
     * Represents the series axis of a 3-dimensional chart. Read-only.
     */
    private ?string $seriesAxis;

    /**
     * Represents the value axis in an axis. Read-only.
     */
    private ?string $valueAxis;


    public function getCategoryAxis(): ?string
    {
        return $this->categoryAxis;
    }

    public function setCategoryAxis(?string $categoryAxis): self
    {
        $this->categoryAxis = $categoryAxis;
        return $this;
    }

    public function getSeriesAxis(): ?string
    {
        return $this->seriesAxis;
    }

    public function setSeriesAxis(?string $seriesAxis): self
    {
        $this->seriesAxis = $seriesAxis;
        return $this;
    }

    public function getValueAxis(): ?string
    {
        return $this->valueAxis;
    }

    public function setValueAxis(?string $valueAxis): self
    {
        $this->valueAxis = $valueAxis;
        return $this;
    }

}
