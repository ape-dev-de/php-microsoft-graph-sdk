<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerCategoryDescriptions
 */
class PlannerCategoryDescriptions
{
    /** The label associated with Category 1 */
    public ?string $category1 = null;

    /** The label associated with Category 10 */
    public ?string $category10 = null;

    /** The label associated with Category 11 */
    public ?string $category11 = null;

    /** The label associated with Category 12 */
    public ?string $category12 = null;

    /** The label associated with Category 13 */
    public ?string $category13 = null;

    /** The label associated with Category 14 */
    public ?string $category14 = null;

    /** The label associated with Category 15 */
    public ?string $category15 = null;

    /** The label associated with Category 16 */
    public ?string $category16 = null;

    /** The label associated with Category 17 */
    public ?string $category17 = null;

    /** The label associated with Category 18 */
    public ?string $category18 = null;

    /** The label associated with Category 19 */
    public ?string $category19 = null;

    /** The label associated with Category 2 */
    public ?string $category2 = null;

    /** The label associated with Category 20 */
    public ?string $category20 = null;

    /** The label associated with Category 21 */
    public ?string $category21 = null;

    /** The label associated with Category 22 */
    public ?string $category22 = null;

    /** The label associated with Category 23 */
    public ?string $category23 = null;

    /** The label associated with Category 24 */
    public ?string $category24 = null;

    /** The label associated with Category 25 */
    public ?string $category25 = null;

    /** The label associated with Category 3 */
    public ?string $category3 = null;

    /** The label associated with Category 4 */
    public ?string $category4 = null;

    /** The label associated with Category 5 */
    public ?string $category5 = null;

    /** The label associated with Category 6 */
    public ?string $category6 = null;

    /** The label associated with Category 7 */
    public ?string $category7 = null;

    /** The label associated with Category 8 */
    public ?string $category8 = null;

    /** The label associated with Category 9 */
    public ?string $category9 = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['category1'])) {
            $this->category1 = $data['category1'];
        }
        if (isset($data['category10'])) {
            $this->category10 = $data['category10'];
        }
        if (isset($data['category11'])) {
            $this->category11 = $data['category11'];
        }
        if (isset($data['category12'])) {
            $this->category12 = $data['category12'];
        }
        if (isset($data['category13'])) {
            $this->category13 = $data['category13'];
        }
        if (isset($data['category14'])) {
            $this->category14 = $data['category14'];
        }
        if (isset($data['category15'])) {
            $this->category15 = $data['category15'];
        }
        if (isset($data['category16'])) {
            $this->category16 = $data['category16'];
        }
        if (isset($data['category17'])) {
            $this->category17 = $data['category17'];
        }
        if (isset($data['category18'])) {
            $this->category18 = $data['category18'];
        }
        if (isset($data['category19'])) {
            $this->category19 = $data['category19'];
        }
        if (isset($data['category2'])) {
            $this->category2 = $data['category2'];
        }
        if (isset($data['category20'])) {
            $this->category20 = $data['category20'];
        }
        if (isset($data['category21'])) {
            $this->category21 = $data['category21'];
        }
        if (isset($data['category22'])) {
            $this->category22 = $data['category22'];
        }
        if (isset($data['category23'])) {
            $this->category23 = $data['category23'];
        }
        if (isset($data['category24'])) {
            $this->category24 = $data['category24'];
        }
        if (isset($data['category25'])) {
            $this->category25 = $data['category25'];
        }
        if (isset($data['category3'])) {
            $this->category3 = $data['category3'];
        }
        if (isset($data['category4'])) {
            $this->category4 = $data['category4'];
        }
        if (isset($data['category5'])) {
            $this->category5 = $data['category5'];
        }
        if (isset($data['category6'])) {
            $this->category6 = $data['category6'];
        }
        if (isset($data['category7'])) {
            $this->category7 = $data['category7'];
        }
        if (isset($data['category8'])) {
            $this->category8 = $data['category8'];
        }
        if (isset($data['category9'])) {
            $this->category9 = $data['category9'];
        }
    }
}
