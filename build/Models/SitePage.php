<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SitePage
 */
class SitePage
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Identity of the user, device, or application that created the item. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdBy = null;

    /** Date and time of item creation. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Provides a user-visible description of the item. Optional. */
    public ?string $description = null;

    /** ETag for the item. Read-only. */
    public ?string $eTag = null;

    /** 
     * Identity of the user, device, and application that last modified the item. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $lastModifiedBy = null;

    /** Date and time the item was last modified. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The name of the item. Read-write. */
    public ?string $name = null;

    /** 
     * Parent information, if the item has a parent. Read-write.
     * @var ItemReference|\stdClass|null
     */
    public ItemReference|\stdClass|null $parentReference = null;

    /** URL that either displays the resource in the browser (for Office file formats), or is a direct link to the file (for other formats). Read-only. */
    public ?string $webUrl = null;

    /** 
     * Identity of the user who created the item. Read-only.
     * @var User|\stdClass|null
     */
    public User|\stdClass|null $createdByUser = null;

    /** 
     * Identity of the user who last modified the item. Read-only.
     * @var User|\stdClass|null
     */
    public User|\stdClass|null $lastModifiedByUser = null;

    /** 
     * The name of the page layout of the page. The possible values are: microsoftReserved, article, home, unknownFutureValue.
     * @var PageLayoutType|\stdClass|null
     */
    public PageLayoutType|\stdClass|null $pageLayout = null;

    /** 
     * The publishing status and the MM.mm version of the page.
     * @var PublicationFacet|\stdClass|null
     */
    public PublicationFacet|\stdClass|null $publishingState = null;

    /** Title of the sitePage. */
    public ?string $title = null;

    /** 
     * Indicates the promotion kind of the sitePage. The possible values are: microsoftReserved, page, newsPost, unknownFutureValue.
     * @var PagePromotionType|\stdClass|null
     */
    public PagePromotionType|\stdClass|null $promotionKind = null;

    /** 
     * Reactions information for the page.
     * @var ReactionsFacet|\stdClass|null
     */
    public ReactionsFacet|\stdClass|null $reactions = null;

    /** Determines whether or not to show comments at the bottom of the page. */
    public ?bool $showComments = null;

    /** Determines whether or not to show recommended pages at the bottom of the page. */
    public ?bool $showRecommendedPages = null;

    /** Url of the sitePage's thumbnail image */
    public ?string $thumbnailWebUrl = null;

    /** 
     * Title area on the SharePoint page.
     * @var TitleArea|\stdClass|null
     */
    public TitleArea|\stdClass|null $titleArea = null;

    /** 
     * Indicates the layout of the content in a given SharePoint page, including horizontal sections and vertical sections.
     * @var CanvasLayout|\stdClass|null
     */
    public CanvasLayout|\stdClass|null $canvasLayout = null;

    /** 
     * Collection of webparts on the SharePoint page.
     * @var WebPart[]
     */
    public array $webParts = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['eTag'])) {
            $this->eTag = $data['eTag'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['parentReference'])) {
            $this->parentReference = is_array($data['parentReference']) ? new ItemReference($data['parentReference']) : $data['parentReference'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
        if (isset($data['createdByUser'])) {
            $this->createdByUser = is_array($data['createdByUser']) ? new User($data['createdByUser']) : $data['createdByUser'];
        }
        if (isset($data['lastModifiedByUser'])) {
            $this->lastModifiedByUser = is_array($data['lastModifiedByUser']) ? new User($data['lastModifiedByUser']) : $data['lastModifiedByUser'];
        }
        if (isset($data['pageLayout'])) {
            $this->pageLayout = is_array($data['pageLayout']) ? new PageLayoutType($data['pageLayout']) : $data['pageLayout'];
        }
        if (isset($data['publishingState'])) {
            $this->publishingState = is_array($data['publishingState']) ? new PublicationFacet($data['publishingState']) : $data['publishingState'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
        if (isset($data['promotionKind'])) {
            $this->promotionKind = is_array($data['promotionKind']) ? new PagePromotionType($data['promotionKind']) : $data['promotionKind'];
        }
        if (isset($data['reactions'])) {
            $this->reactions = is_array($data['reactions']) ? new ReactionsFacet($data['reactions']) : $data['reactions'];
        }
        if (isset($data['showComments'])) {
            $this->showComments = $data['showComments'];
        }
        if (isset($data['showRecommendedPages'])) {
            $this->showRecommendedPages = $data['showRecommendedPages'];
        }
        if (isset($data['thumbnailWebUrl'])) {
            $this->thumbnailWebUrl = $data['thumbnailWebUrl'];
        }
        if (isset($data['titleArea'])) {
            $this->titleArea = is_array($data['titleArea']) ? new TitleArea($data['titleArea']) : $data['titleArea'];
        }
        if (isset($data['canvasLayout'])) {
            $this->canvasLayout = is_array($data['canvasLayout']) ? new CanvasLayout($data['canvasLayout']) : $data['canvasLayout'];
        }
        if (isset($data['webParts'])) {
            $this->webParts = $data['webParts'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
