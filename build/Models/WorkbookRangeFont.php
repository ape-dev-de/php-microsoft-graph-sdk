<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookRangeFont
 */
class WorkbookRangeFont
{
    public function __construct(
        /** Inidicates whether the font is bold. */
        public ?bool $bold = null,
        /** The HTML color code representation of the text color. For example, #FF0000 represents the color red. */
        public ?string $color = null,
        /** Inidicates whether the font is italic. */
        public ?bool $italic = null,
        /** The font name. For example, ''Calibri''. */
        public ?string $name = null,
        /** The font size. */
        public ?string $size = null,
        /** The type of underlining applied to the font. The possible values are: None, Single, Double, SingleAccountant, DoubleAccountant. */
        public ?string $underline = null
    ) {}
}
