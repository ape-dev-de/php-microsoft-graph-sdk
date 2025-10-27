<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentSettings
 */
class EducationAssignmentSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates whether to show the turn-in celebration animation. If true, indicates to skip the animation. The default value is false. */
    public ?bool $submissionAnimationDisabled = null;

    /** 
     * When set, enables users to weight assignments differently when computing a class average grade.
     * @var EducationGradingCategory[]
     */
    public array $gradingCategories = [];


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
        if (isset($data['submissionAnimationDisabled'])) {
            $this->submissionAnimationDisabled = is_bool($data['submissionAnimationDisabled']) ? $data['submissionAnimationDisabled'] : (bool)$data['submissionAnimationDisabled'];
        }
        if (isset($data['gradingCategories'])) {
            $this->gradingCategories = $data['gradingCategories'];
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
