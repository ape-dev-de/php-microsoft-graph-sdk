<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestHistory
 */
class SubjectRightsRequestHistory
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Identity of the user who changed the  subject rights request.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $changedBy = null;

    /** Data and time when the entity was changed. */
    public ?\DateTimeInterface $eventDateTime = null;

    /** 
     * The stage when the entity was changed. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue, approval. Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: approval.
     * @var SubjectRightsRequestStage|\stdClass|null
     */
    public SubjectRightsRequestStage|\stdClass|null $stage = null;

    /** 
     * The status of the stage when the entity was changed. Possible values are: notStarted, current, completed, failed, unknownFutureValue.
     * @var SubjectRightsRequestStageStatus|\stdClass|null
     */
    public SubjectRightsRequestStageStatus|\stdClass|null $stageStatus = null;

    /** Type of history. */
    public ?string $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['changedBy'])) {
            $this->changedBy = is_array($data['changedBy']) ? new IdentitySet($data['changedBy']) : $data['changedBy'];
        }
        if (isset($data['eventDateTime'])) {
            $this->eventDateTime = is_string($data['eventDateTime']) ? new \DateTimeImmutable($data['eventDateTime']) : $data['eventDateTime'];
        }
        if (isset($data['stage'])) {
            $this->stage = is_array($data['stage']) ? new SubjectRightsRequestStage($data['stage']) : $data['stage'];
        }
        if (isset($data['stageStatus'])) {
            $this->stageStatus = is_array($data['stageStatus']) ? new SubjectRightsRequestStageStatus($data['stageStatus']) : $data['stageStatus'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
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
