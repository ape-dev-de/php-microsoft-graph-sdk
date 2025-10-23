<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentPointsGradeType
 */
class EducationAssignmentPointsGradeType
{
    /** Max points possible for this assignment. */
    public ?string $maxPoints = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['maxPoints'])) {
            $this->maxPoints = $data['maxPoints'];
        }
    }
}
