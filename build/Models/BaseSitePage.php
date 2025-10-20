<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BaseSitePage
 */
class BaseSitePage
{
    /**
     * The name of the page layout of the page. The possible values are: microsoftReserved, article, home, unknownFutureValue.
     */
    private ?string $pageLayout;

    /**
     * The publishing status and the MM.mm version of the page.
     */
    private ?string $publishingState;

    /**
     * Title of the sitePage.
     */
    private ?string $title;

    public function getPageLayout(): ?string
    {
        return $this->pageLayout;
    }

    public function setPageLayout(?string $pageLayout): self
    {
        $this->pageLayout = $pageLayout;
        return $this;
    }

    public function getPublishingState(): ?string
    {
        return $this->publishingState;
    }

    public function setPublishingState(?string $publishingState): self
    {
        $this->publishingState = $publishingState;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

}
