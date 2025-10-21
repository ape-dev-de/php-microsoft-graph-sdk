<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SitePage
 */
class SitePage
{
    public function __construct(
        /** Indicates the promotion kind of the sitePage. The possible values are: microsoftReserved, page, newsPost, unknownFutureValue. */
        public ?string $promotionKind = null,
        /** Reactions information for the page. */
        public ?string $reactions = null,
        /** Determines whether or not to show comments at the bottom of the page. */
        public ?bool $showComments = null,
        /** Determines whether or not to show recommended pages at the bottom of the page. */
        public ?bool $showRecommendedPages = null,
        /** Url of the sitePage's thumbnail image */
        public ?string $thumbnailWebUrl = null,
        /** Title area on the SharePoint page. */
        public ?string $titleArea = null,
        /** Indicates the layout of the content in a given SharePoint page, including horizontal sections and vertical sections. */
        public ?string $canvasLayout = null,
        /** @var string[] Collection of webparts on the SharePoint page. */
        public array $webParts = []
    ) {}
}
