<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookFilterCriteria
 */
class WorkbookFilterCriteria
{
    /** The color applied to the cell. */
    public ?string $color = null;

    /** A custom criterion. */
    public ?string $criterion1 = null;

    /** A custom criterion. */
    public ?string $criterion2 = null;

    /** A dynamic formula specified in a custom filter. */
    public ?string $dynamicCriteria = null;

    /** Indicates whether a filter is applied to a column. */
    public ?string $filterOn = null;

    /** 
     * An icon applied to a cell via conditional formatting.
     * @var WorkbookIcon|\stdClass|null
     */
    public mixed $icon = null;

    /** An operator in a cell; for example, =, >, <, <=, or <>. */
    public ?string $operator = null;

    /** The values that appear in the cell. */
    public ?string $values = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['color'])) {
            $this->color = $data['color'];
        }
        if (isset($data['criterion1'])) {
            $this->criterion1 = $data['criterion1'];
        }
        if (isset($data['criterion2'])) {
            $this->criterion2 = $data['criterion2'];
        }
        if (isset($data['dynamicCriteria'])) {
            $this->dynamicCriteria = $data['dynamicCriteria'];
        }
        if (isset($data['filterOn'])) {
            $this->filterOn = $data['filterOn'];
        }
        if (isset($data['icon'])) {
            $this->icon = is_array($data['icon']) ? new WorkbookIcon($data['icon']) : $data['icon'];
        }
        if (isset($data['operator'])) {
            $this->operator = $data['operator'];
        }
        if (isset($data['values'])) {
            $this->values = $data['values'];
        }
    }
}
