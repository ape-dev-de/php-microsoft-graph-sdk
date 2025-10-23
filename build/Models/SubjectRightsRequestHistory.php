<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestHistory
 */
class SubjectRightsRequestHistory
{
    /** 
     * Identity of the user who changed the  subject rights request.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $changedBy = null;

    /** Data and time when the entity was changed. */
    public ?\DateTimeInterface $eventDateTime = null;

    /** 
     * The stage when the entity was changed. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue, approval. Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: approval.
     * @var SubjectRightsRequestStage|\stdClass|null
     */
    public mixed $stage = null;

    /** 
     * The status of the stage when the entity was changed. Possible values are: notStarted, current, completed, failed, unknownFutureValue.
     * @var SubjectRightsRequestStageStatus|\stdClass|null
     */
    public mixed $stageStatus = null;

    /** Type of history. */
    public ?string $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['changedBy'])) {
            $this->changedBy = $data['changedBy'];
        }
        if (isset($data['eventDateTime'])) {
            $this->eventDateTime = $data['eventDateTime'];
        }
        if (isset($data['stage'])) {
            $this->stage = $data['stage'];
        }
        if (isset($data['stageStatus'])) {
            $this->stageStatus = $data['stageStatus'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
    }
}
