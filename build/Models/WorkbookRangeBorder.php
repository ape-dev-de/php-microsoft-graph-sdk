<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookRangeBorder
 */
class WorkbookRangeBorder
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The HTML color code that represents the color of the border line. Can either be of the form #RRGGBB, for example 'FFA500', or a named HTML color, for example 'orange'. */
    public ?string $color = null;

    /** Indicates the specific side of the border. The possible values are: EdgeTop, EdgeBottom, EdgeLeft, EdgeRight, InsideVertical, InsideHorizontal, DiagonalDown, DiagonalUp. Read-only. */
    public ?string $sideIndex = null;

    /** Indicates the line style for the border. The possible values are: None, Continuous, Dash, DashDot, DashDotDot, Dot, Double, SlantDashDot. */
    public ?string $style = null;

    /** The weight of the border around a range. The possible values are: Hairline, Thin, Medium, Thick. */
    public ?string $weight = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['color'])) {
            $this->color = $data['color'];
        }
        if (isset($data['sideIndex'])) {
            $this->sideIndex = $data['sideIndex'];
        }
        if (isset($data['style'])) {
            $this->style = $data['style'];
        }
        if (isset($data['weight'])) {
            $this->weight = $data['weight'];
        }
    }
}
