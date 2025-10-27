<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TitleArea
 */
class TitleArea
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Alternative text on the title area. */
    public ?string $alternativeText = null;

    /** Indicates whether the title area has a gradient effect enabled. */
    public ?bool $enableGradientEffect = null;

    /** URL of the image in the title area. */
    public ?string $imageWebUrl = null;

    /** 
     * Enumeration value that indicates the layout of the title area. The possible values are: imageAndTitle, plain, colorBlock, overlap, unknownFutureValue.
     * @var TitleAreaLayoutType|\stdClass|null
     */
    public TitleAreaLayoutType|\stdClass|null $layout = null;

    /** 
     * Contains collections of data that can be processed by server side services like search index and link fixup.
     * @var ServerProcessedContent|\stdClass|null
     */
    public ServerProcessedContent|\stdClass|null $serverProcessedContent = null;

    /** Indicates whether the author should be shown in title area. */
    public ?bool $showAuthor = null;

    /** Indicates whether the published date should be shown in title area. */
    public ?bool $showPublishedDate = null;

    /** Indicates whether the text block above title should be shown in title area. */
    public ?bool $showTextBlockAboveTitle = null;

    /** The text above title line. */
    public ?string $textAboveTitle = null;

    /** 
     * Enumeration value that indicates the text alignment of the title area. The possible values are: left, center, unknownFutureValue.
     * @var TitleAreaTextAlignmentType|\stdClass|null
     */
    public TitleAreaTextAlignmentType|\stdClass|null $textAlignment = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['alternativeText'])) {
            $this->alternativeText = $data['alternativeText'];
        }
        if (isset($data['enableGradientEffect'])) {
            $this->enableGradientEffect = is_bool($data['enableGradientEffect']) ? $data['enableGradientEffect'] : (bool)$data['enableGradientEffect'];
        }
        if (isset($data['imageWebUrl'])) {
            $this->imageWebUrl = $data['imageWebUrl'];
        }
        if (isset($data['layout'])) {
            $this->layout = is_string($data['layout']) ? TitleAreaLayoutType::tryFrom($data['layout']) : $data['layout'];
        }
        if (isset($data['serverProcessedContent'])) {
            $this->serverProcessedContent = is_array($data['serverProcessedContent']) ? new ServerProcessedContent($data['serverProcessedContent']) : $data['serverProcessedContent'];
        }
        if (isset($data['showAuthor'])) {
            $this->showAuthor = is_bool($data['showAuthor']) ? $data['showAuthor'] : (bool)$data['showAuthor'];
        }
        if (isset($data['showPublishedDate'])) {
            $this->showPublishedDate = is_bool($data['showPublishedDate']) ? $data['showPublishedDate'] : (bool)$data['showPublishedDate'];
        }
        if (isset($data['showTextBlockAboveTitle'])) {
            $this->showTextBlockAboveTitle = is_bool($data['showTextBlockAboveTitle']) ? $data['showTextBlockAboveTitle'] : (bool)$data['showTextBlockAboveTitle'];
        }
        if (isset($data['textAboveTitle'])) {
            $this->textAboveTitle = $data['textAboveTitle'];
        }
        if (isset($data['textAlignment'])) {
            $this->textAlignment = is_string($data['textAlignment']) ? TitleAreaTextAlignmentType::tryFrom($data['textAlignment']) : $data['textAlignment'];
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
