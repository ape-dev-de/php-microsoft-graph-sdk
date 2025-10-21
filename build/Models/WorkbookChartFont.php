<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartFont
 */
class WorkbookChartFont
{
    public function __construct(
        /** Indicates whether the fond is bold. */
        public ?bool $bold = null,
        /** The HTML color code representation of the text color. For example #FF0000 represents Red. */
        public ?string $color = null,
        /** Indicates whether the fond is italic. */
        public ?bool $italic = null,
        /** The font name. For example 'Calibri'. */
        public ?string $name = null,
        /** The size of the font. For example,  11. */
        public ?string $size = null,
        /** The type of underlining applied to the font. The possible values are: None, Single. */
        public ?string $underline = null
    ) {}
}
