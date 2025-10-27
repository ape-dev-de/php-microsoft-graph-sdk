<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentPointsGradeType
 */
class EducationAssignmentPointsGradeType
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Max points possible for this assignment.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $maxPoints = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['maxPoints'])) {
            $this->maxPoints = is_numeric($data['maxPoints']) ? (float)$data['maxPoints'] : $data['maxPoints'];
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
