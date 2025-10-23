<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTaskProcessingResult
 */
class IdentityGovernanceTaskProcessingResult
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date time when taskProcessingResult execution ended. Value is null if task execution is still in progress.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?\DateTimeInterface $completedDateTime = null;

    /** The date time when the taskProcessingResult was created.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Describes why the taskProcessingResult has failed. */
    public ?string $failureReason = null;

    /**  */
    public ?IdentityGovernanceLifecycleWorkflowProcessingStatus $processingStatus = null;

    /** The date time when taskProcessingResult execution started. Value is null if task execution has not yet started.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?\DateTimeInterface $startedDateTime = null;

    /**  */
    public ?User $subject = null;

    /**  */
    public ?IdentityGovernanceTask $task = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = is_string($data['completedDateTime']) ? new \DateTimeImmutable($data['completedDateTime']) : $data['completedDateTime'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['failureReason'])) {
            $this->failureReason = $data['failureReason'];
        }
        if (isset($data['processingStatus'])) {
            $this->processingStatus = $data['processingStatus'];
        }
        if (isset($data['startedDateTime'])) {
            $this->startedDateTime = is_string($data['startedDateTime']) ? new \DateTimeImmutable($data['startedDateTime']) : $data['startedDateTime'];
        }
        if (isset($data['subject'])) {
            $this->subject = $data['subject'];
        }
        if (isset($data['task'])) {
            $this->task = $data['task'];
        }
    }
}
