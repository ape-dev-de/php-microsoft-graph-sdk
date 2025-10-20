<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookFilterCriteria
 */
class WorkbookFilterCriteria
{
    /**
     * The color applied to the cell.
     */
    private ?string $color;

    /**
     * A custom criterion.
     */
    private ?string $criterion1;

    /**
     * A custom criterion.
     */
    private ?string $criterion2;

    /**
     * A dynamic formula specified in a custom filter.
     */
    private ?string $dynamicCriteria;

    /**
     * Indicates whether a filter is applied to a column.
     */
    private ?string $filterOn;

    /**
     * An icon applied to a cell via conditional formatting.
     */
    private ?string $icon;

    /**
     * An operator in a cell; for example, =, >, <, <=, or <>.
     */
    private ?string $operator;

    /**
     * The values that appear in the cell.
     */
    private ?string $values;

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }

    public function getCriterion1(): ?string
    {
        return $this->criterion1;
    }

    public function setCriterion1(?string $criterion1): self
    {
        $this->criterion1 = $criterion1;
        return $this;
    }

    public function getCriterion2(): ?string
    {
        return $this->criterion2;
    }

    public function setCriterion2(?string $criterion2): self
    {
        $this->criterion2 = $criterion2;
        return $this;
    }

    public function getDynamicCriteria(): ?string
    {
        return $this->dynamicCriteria;
    }

    public function setDynamicCriteria(?string $dynamicCriteria): self
    {
        $this->dynamicCriteria = $dynamicCriteria;
        return $this;
    }

    public function getFilterOn(): ?string
    {
        return $this->filterOn;
    }

    public function setFilterOn(?string $filterOn): self
    {
        $this->filterOn = $filterOn;
        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    public function getOperator(): ?string
    {
        return $this->operator;
    }

    public function setOperator(?string $operator): self
    {
        $this->operator = $operator;
        return $this;
    }

    public function getValues(): ?string
    {
        return $this->values;
    }

    public function setValues(?string $values): self
    {
        $this->values = $values;
        return $this;
    }

}
