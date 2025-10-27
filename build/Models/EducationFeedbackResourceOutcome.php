<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationFeedbackResourceOutcome
 */
class EducationFeedbackResourceOutcome
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The individual who updated the resource.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $lastModifiedBy = null;

    /** The moment in time when the resource was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2021 is 2021-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The actual feedback resource.
     * @var EducationResource|\stdClass|null
     */
    public EducationResource|\stdClass|null $feedbackResource = null;

    /** 
     * The status of the feedback resource. The possible values are: notPublished, pendingPublish, published, failedPublish, unknownFutureValue.
     * @var EducationFeedbackResourceOutcomeStatus|\stdClass|null
     */
    public EducationFeedbackResourceOutcomeStatus|\stdClass|null $resourceStatus = null;


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
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['feedbackResource'])) {
            $this->feedbackResource = is_array($data['feedbackResource']) ? new EducationResource($data['feedbackResource']) : $data['feedbackResource'];
        }
        if (isset($data['resourceStatus'])) {
            $this->resourceStatus = is_array($data['resourceStatus']) ? new EducationFeedbackResourceOutcomeStatus($data['resourceStatus']) : $data['resourceStatus'];
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
