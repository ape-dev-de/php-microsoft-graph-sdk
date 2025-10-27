<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryCaseSettings
 */
class SecurityEdiscoveryCaseSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?SecurityCaseType $caseType = null;

    /** 
     * The OCR (Optical Character Recognition) settings for the case.
     * @var SecurityOcrSettings|\stdClass|null
     */
    public SecurityOcrSettings|\stdClass|null $ocr = null;

    /** 
     * The redundancy (near duplicate and email threading) detection settings for the case.
     * @var SecurityRedundancyDetectionSettings|\stdClass|null
     */
    public SecurityRedundancyDetectionSettings|\stdClass|null $redundancyDetection = null;

    /** 
     * The settings of the review set for the case. Possible values are: none, disableGrouping, unknownFutureValue.
     * @var SecurityReviewSetSettings|\stdClass|null
     */
    public SecurityReviewSetSettings|\stdClass|null $reviewSetSettings = null;

    /** 
     * The Topic Modeling (Themes) settings for the case.
     * @var SecurityTopicModelingSettings|\stdClass|null
     */
    public SecurityTopicModelingSettings|\stdClass|null $topicModeling = null;


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
        if (isset($data['caseType'])) {
            $this->caseType = is_array($data['caseType']) ? new SecurityCaseType($data['caseType']) : $data['caseType'];
        }
        if (isset($data['ocr'])) {
            $this->ocr = is_array($data['ocr']) ? new SecurityOcrSettings($data['ocr']) : $data['ocr'];
        }
        if (isset($data['redundancyDetection'])) {
            $this->redundancyDetection = is_array($data['redundancyDetection']) ? new SecurityRedundancyDetectionSettings($data['redundancyDetection']) : $data['redundancyDetection'];
        }
        if (isset($data['reviewSetSettings'])) {
            $this->reviewSetSettings = is_array($data['reviewSetSettings']) ? new SecurityReviewSetSettings($data['reviewSetSettings']) : $data['reviewSetSettings'];
        }
        if (isset($data['topicModeling'])) {
            $this->topicModeling = is_array($data['topicModeling']) ? new SecurityTopicModelingSettings($data['topicModeling']) : $data['topicModeling'];
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
