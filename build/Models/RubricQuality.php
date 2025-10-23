<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RubricQuality
 */
class RubricQuality
{
    /** 
     * The collection of criteria for this rubric quality.
     * @var RubricCriterion[]
     */
    public array $criteria = [];

    /** 
     * The description of this rubric quality.
     * @var EducationItemBody|\stdClass|null
     */
    public mixed $description = null;

    /** The name of this rubric quality. */
    public ?string $displayName = null;

    /** The ID of this resource. */
    public ?string $qualityId = null;

    /** If present, a numerical weight for this quality.  Weights must add up to 100. */
    public ?string $weight = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['criteria'])) {
            $this->criteria = $data['criteria'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['qualityId'])) {
            $this->qualityId = $data['qualityId'];
        }
        if (isset($data['weight'])) {
            $this->weight = $data['weight'];
        }
    }
}
