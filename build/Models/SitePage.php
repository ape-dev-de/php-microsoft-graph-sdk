<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SitePage
 */
class SitePage
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Identity of the user, device, or application that created the item. Read-only. */
        public ?string $createdBy = null,
        /** Date and time of item creation. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Provides a user-visible description of the item. Optional. */
        public ?string $description = null,
        /** ETag for the item. Read-only. */
        public ?string $eTag = null,
        /** Identity of the user, device, and application that last modified the item. Read-only. */
        public ?string $lastModifiedBy = null,
        /** Date and time the item was last modified. Read-only. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The name of the item. Read-write. */
        public ?string $name = null,
        /** Parent information, if the item has a parent. Read-write. */
        public ?string $parentReference = null,
        /** URL that either displays the resource in the browser (for Office file formats), or is a direct link to the file (for other formats). Read-only. */
        public ?string $webUrl = null,
        /** Identity of the user who created the item. Read-only. */
        public ?string $createdByUser = null,
        /** Identity of the user who last modified the item. Read-only. */
        public ?string $lastModifiedByUser = null,
        /** The name of the page layout of the page. The possible values are: microsoftReserved, article, home, unknownFutureValue. */
        public ?string $pageLayout = null,
        /** The publishing status and the MM.mm version of the page. */
        public ?string $publishingState = null,
        /** Title of the sitePage. */
        public ?string $title = null,
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
        /** Collection of webparts on the SharePoint page. */
        public array $webParts = []
    ) {}
}
