<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationGradingCategory
 */
class EducationGradingCategory
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The name of the grading category. */
    public ?string $displayName = null;

    /** The weight of the category; an integer between 0 and 100. */
    public ?float $percentageWeight = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['percentageWeight'])) {
            $this->percentageWeight = $data['percentageWeight'];
        }
    }
}
