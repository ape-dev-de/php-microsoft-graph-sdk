<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestStageDetail
 */
class SubjectRightsRequestStageDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Describes the error, if any, for the current stage.
     * @var PublicError|\stdClass|null
     */
    public mixed $error = null;

    /** 
     * The stage of the subject rights request. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue, approval. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: approval.
     * @var SubjectRightsRequestStage|\stdClass|null
     */
    public mixed $stage = null;

    /** 
     * Status of the current stage. Possible values are: notStarted, current, completed, failed, unknownFutureValue.
     * @var SubjectRightsRequestStageStatus|\stdClass|null
     */
    public mixed $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new PublicError($data['error']) : $data['error'];
        }
        if (isset($data['stage'])) {
            $this->stage = is_array($data['stage']) ? new SubjectRightsRequestStage($data['stage']) : $data['stage'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new SubjectRightsRequestStageStatus($data['status']) : $data['status'];
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
