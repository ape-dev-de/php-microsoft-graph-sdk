<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TitleArea
 */
class TitleArea
{
    /**
     * Alternative text on the title area.
     */
    private ?string $alternativeText;

    /**
     * Indicates whether the title area has a gradient effect enabled.
     */
    private ?bool $enableGradientEffect;

    /**
     * URL of the image in the title area.
     */
    private ?string $imageWebUrl;

    /**
     * Enumeration value that indicates the layout of the title area. The possible values are: imageAndTitle, plain, colorBlock, overlap, unknownFutureValue.
     */
    private ?string $layout;

    /**
     * Contains collections of data that can be processed by server side services like search index and link fixup.
     */
    private ?string $serverProcessedContent;

    /**
     * Indicates whether the author should be shown in title area.
     */
    private ?bool $showAuthor;

    /**
     * Indicates whether the published date should be shown in title area.
     */
    private ?bool $showPublishedDate;

    /**
     * Indicates whether the text block above title should be shown in title area.
     */
    private ?bool $showTextBlockAboveTitle;

    /**
     * The text above title line.
     */
    private ?string $textAboveTitle;

    /**
     * Enumeration value that indicates the text alignment of the title area. The possible values are: left, center, unknownFutureValue.
     */
    private ?string $textAlignment;

    public function getAlternativeText(): ?string
    {
        return $this->alternativeText;
    }

    public function setAlternativeText(?string $alternativeText): self
    {
        $this->alternativeText = $alternativeText;
        return $this;
    }

    public function getEnableGradientEffect(): ?bool
    {
        return $this->enableGradientEffect;
    }

    public function setEnableGradientEffect(?bool $enableGradientEffect): self
    {
        $this->enableGradientEffect = $enableGradientEffect;
        return $this;
    }

    public function getImageWebUrl(): ?string
    {
        return $this->imageWebUrl;
    }

    public function setImageWebUrl(?string $imageWebUrl): self
    {
        $this->imageWebUrl = $imageWebUrl;
        return $this;
    }

    public function getLayout(): ?string
    {
        return $this->layout;
    }

    public function setLayout(?string $layout): self
    {
        $this->layout = $layout;
        return $this;
    }

    public function getServerProcessedContent(): ?string
    {
        return $this->serverProcessedContent;
    }

    public function setServerProcessedContent(?string $serverProcessedContent): self
    {
        $this->serverProcessedContent = $serverProcessedContent;
        return $this;
    }

    public function getShowAuthor(): ?bool
    {
        return $this->showAuthor;
    }

    public function setShowAuthor(?bool $showAuthor): self
    {
        $this->showAuthor = $showAuthor;
        return $this;
    }

    public function getShowPublishedDate(): ?bool
    {
        return $this->showPublishedDate;
    }

    public function setShowPublishedDate(?bool $showPublishedDate): self
    {
        $this->showPublishedDate = $showPublishedDate;
        return $this;
    }

    public function getShowTextBlockAboveTitle(): ?bool
    {
        return $this->showTextBlockAboveTitle;
    }

    public function setShowTextBlockAboveTitle(?bool $showTextBlockAboveTitle): self
    {
        $this->showTextBlockAboveTitle = $showTextBlockAboveTitle;
        return $this;
    }

    public function getTextAboveTitle(): ?string
    {
        return $this->textAboveTitle;
    }

    public function setTextAboveTitle(?string $textAboveTitle): self
    {
        $this->textAboveTitle = $textAboveTitle;
        return $this;
    }

    public function getTextAlignment(): ?string
    {
        return $this->textAlignment;
    }

    public function setTextAlignment(?string $textAlignment): self
    {
        $this->textAlignment = $textAlignment;
        return $this;
    }

}
