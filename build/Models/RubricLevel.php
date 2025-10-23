<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RubricLevel
 */
class RubricLevel
{
    /** 
     * The description of this rubric level.
     * @var EducationItemBody|\stdClass|null
     */
    public mixed $description = null;

    /** The name of this rubric level. */
    public ?string $displayName = null;

    /** 
     * Null if this is a no-points rubric; educationAssignmentPointsGradeType if it's a points rubric.
     * @var EducationAssignmentGradeType|\stdClass|null
     */
    public mixed $grading = null;

    /** The ID of this resource. */
    public ?string $levelId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['grading'])) {
            $this->grading = $data['grading'];
        }
        if (isset($data['levelId'])) {
            $this->levelId = $data['levelId'];
        }
    }
}
