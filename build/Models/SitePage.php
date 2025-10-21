<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SitePage
 */
class SitePage
{
    /**
     * Indicates the promotion kind of the sitePage. The possible values are: microsoftReserved, page, newsPost, unknownFutureValue.
     */
    private ?string $promotionKind;

    /**
     * Reactions information for the page.
     */
    private ?string $reactions;

    /**
     * Determines whether or not to show comments at the bottom of the page.
     */
    private ?bool $showComments;

    /**
     * Determines whether or not to show recommended pages at the bottom of the page.
     */
    private ?bool $showRecommendedPages;

    /**
     * Url of the sitePage's thumbnail image
     */
    private ?string $thumbnailWebUrl;

    /**
     * Title area on the SharePoint page.
     */
    private ?string $titleArea;

    /**
     * Indicates the layout of the content in a given SharePoint page, including horizontal sections and vertical sections.
     */
    private ?string $canvasLayout;

    /**
     * Collection of webparts on the SharePoint page.
     * @var string[]
     */
    private array $webParts = [];


    public function getPromotionKind(): ?string
    {
        return $this->promotionKind;
    }

    public function setPromotionKind(?string $promotionKind): self
    {
        $this->promotionKind = $promotionKind;
        return $this;
    }

    public function getReactions(): ?string
    {
        return $this->reactions;
    }

    public function setReactions(?string $reactions): self
    {
        $this->reactions = $reactions;
        return $this;
    }

    public function getShowComments(): ?bool
    {
        return $this->showComments;
    }

    public function setShowComments(?bool $showComments): self
    {
        $this->showComments = $showComments;
        return $this;
    }

    public function getShowRecommendedPages(): ?bool
    {
        return $this->showRecommendedPages;
    }

    public function setShowRecommendedPages(?bool $showRecommendedPages): self
    {
        $this->showRecommendedPages = $showRecommendedPages;
        return $this;
    }

    public function getThumbnailWebUrl(): ?string
    {
        return $this->thumbnailWebUrl;
    }

    public function setThumbnailWebUrl(?string $thumbnailWebUrl): self
    {
        $this->thumbnailWebUrl = $thumbnailWebUrl;
        return $this;
    }

    public function getTitleArea(): ?string
    {
        return $this->titleArea;
    }

    public function setTitleArea(?string $titleArea): self
    {
        $this->titleArea = $titleArea;
        return $this;
    }

    public function getCanvasLayout(): ?string
    {
        return $this->canvasLayout;
    }

    public function setCanvasLayout(?string $canvasLayout): self
    {
        $this->canvasLayout = $canvasLayout;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getWebParts(): array
    {
        return $this->webParts;
    }

    /**
     * @param string[] $webParts
     */
    public function setWebParts(array $webParts): self
    {
        $this->webParts = $webParts;
        return $this;
    }

}
