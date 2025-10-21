<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TitleArea
 */
class TitleArea
{
    public function __construct(
        /** Alternative text on the title area. */
        public ?string $alternativeText = null,
        /** Indicates whether the title area has a gradient effect enabled. */
        public ?bool $enableGradientEffect = null,
        /** URL of the image in the title area. */
        public ?string $imageWebUrl = null,
        /** Enumeration value that indicates the layout of the title area. The possible values are: imageAndTitle, plain, colorBlock, overlap, unknownFutureValue. */
        public ?TitleAreaLayoutType $layout = null,
        /** Contains collections of data that can be processed by server side services like search index and link fixup. */
        public ?ServerProcessedContent $serverProcessedContent = null,
        /** Indicates whether the author should be shown in title area. */
        public ?bool $showAuthor = null,
        /** Indicates whether the published date should be shown in title area. */
        public ?bool $showPublishedDate = null,
        /** Indicates whether the text block above title should be shown in title area. */
        public ?bool $showTextBlockAboveTitle = null,
        /** The text above title line. */
        public ?string $textAboveTitle = null,
        /** Enumeration value that indicates the text alignment of the title area. The possible values are: left, center, unknownFutureValue. */
        public ?TitleAreaTextAlignmentType $textAlignment = null
    ) {}
}
