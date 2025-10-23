<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintMargin
 */
class PrintMargin
{
    /** The margin in microns from the bottom edge. */
    public ?float $bottom = null;

    /** The margin in microns from the left edge. */
    public ?float $left = null;

    /** The margin in microns from the right edge. */
    public ?float $right = null;

    /** The margin in microns from the top edge. */
    public ?float $top = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['bottom'])) {
            $this->bottom = $data['bottom'];
        }
        if (isset($data['left'])) {
            $this->left = $data['left'];
        }
        if (isset($data['right'])) {
            $this->right = $data['right'];
        }
        if (isset($data['top'])) {
            $this->top = $data['top'];
        }
    }
}
