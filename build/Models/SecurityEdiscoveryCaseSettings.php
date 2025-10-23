<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryCaseSettings
 */
class SecurityEdiscoveryCaseSettings
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?SecurityCaseType $caseType = null;

    /** 
     * The OCR (Optical Character Recognition) settings for the case.
     * @var SecurityOcrSettings|\stdClass|null
     */
    public mixed $ocr = null;

    /** 
     * The redundancy (near duplicate and email threading) detection settings for the case.
     * @var SecurityRedundancyDetectionSettings|\stdClass|null
     */
    public mixed $redundancyDetection = null;

    /** 
     * The settings of the review set for the case. Possible values are: none, disableGrouping, unknownFutureValue.
     * @var SecurityReviewSetSettings|\stdClass|null
     */
    public mixed $reviewSetSettings = null;

    /** 
     * The Topic Modeling (Themes) settings for the case.
     * @var SecurityTopicModelingSettings|\stdClass|null
     */
    public mixed $topicModeling = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
}
