<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RubricQualityFeedbackModel
 */
class RubricQualityFeedbackModel
{
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
        if (isset($data['feedback'])) {
            $this->feedback = $data['feedback'];
        }
        if (isset($data['qualityId'])) {
            $this->qualityId = $data['qualityId'];
        }
    }
}
