<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * HorizontalSectionColumn
 */
class HorizontalSectionColumn
{
    public function __construct(
        /** Width of the column. A horizontal section is divided into 12 grids. A column should have a value of 1-12 to represent its range spans. For example, there can be two columns both have a width of 6 in a section. */
        public ?float $width = null,
        /** @var string[] The collection of WebParts in this column. */
        public array $webparts = []
    ) {}
}
