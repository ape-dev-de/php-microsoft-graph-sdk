<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TitleArea
 */
class TitleArea
{
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
    public mixed $layout = null;

    /** 
     * Contains collections of data that can be processed by server side services like search index and link fixup.
     * @var ServerProcessedContent|\stdClass|null
     */
    public mixed $serverProcessedContent = null;

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
    public mixed $textAlignment = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['alternativeText'])) {
            $this->alternativeText = $data['alternativeText'];
        }
        if (isset($data['enableGradientEffect'])) {
            $this->enableGradientEffect = $data['enableGradientEffect'];
        }
        if (isset($data['imageWebUrl'])) {
            $this->imageWebUrl = $data['imageWebUrl'];
        }
        if (isset($data['layout'])) {
            $this->layout = is_array($data['layout']) ? new TitleAreaLayoutType($data['layout']) : $data['layout'];
        }
        if (isset($data['serverProcessedContent'])) {
            $this->serverProcessedContent = is_array($data['serverProcessedContent']) ? new ServerProcessedContent($data['serverProcessedContent']) : $data['serverProcessedContent'];
        }
        if (isset($data['showAuthor'])) {
            $this->showAuthor = $data['showAuthor'];
        }
        if (isset($data['showPublishedDate'])) {
            $this->showPublishedDate = $data['showPublishedDate'];
        }
        if (isset($data['showTextBlockAboveTitle'])) {
            $this->showTextBlockAboveTitle = $data['showTextBlockAboveTitle'];
        }
        if (isset($data['textAboveTitle'])) {
            $this->textAboveTitle = $data['textAboveTitle'];
        }
        if (isset($data['textAlignment'])) {
            $this->textAlignment = is_array($data['textAlignment']) ? new TitleAreaTextAlignmentType($data['textAlignment']) : $data['textAlignment'];
        }
    }
}
