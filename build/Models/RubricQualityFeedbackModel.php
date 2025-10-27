<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RubricQualityFeedbackModel
 */
class RubricQualityFeedbackModel
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Specific feedback for one quality of this rubric.
     * @var EducationItemBody|\stdClass|null
     */
    public mixed $feedback = null;

    /** The ID of the rubricQuality that this feedback is related to. */
    public ?string $qualityId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['feedback'])) {
            $this->feedback = is_array($data['feedback']) ? new EducationItemBody($data['feedback']) : $data['feedback'];
        }
        if (isset($data['qualityId'])) {
            $this->qualityId = $data['qualityId'];
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
