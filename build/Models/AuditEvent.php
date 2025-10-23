<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditEvent
 */
class AuditEvent
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Friendly name of the activity. */
    public ?string $activity = null;

    /** The date time in UTC when the activity was performed. */
    public ?\DateTimeInterface $activityDateTime = null;

    /** The HTTP operation type of the activity. */
    public ?string $activityOperationType = null;

    /** The result of the activity. */
    public ?string $activityResult = null;

    /** The type of activity that was being performed. */
    public ?string $activityType = null;

    /** 
     * AAD user and application that are associated with the audit event.
     * @var AuditActor|\stdClass|null
     */
    public mixed $actor = null;

    /** Audit category. */
    public ?string $category = null;

    /** Component name. */
    public ?string $componentName = null;

    /** The client request Id that is used to correlate activity within the system. */
    public ?string $correlationId = null;

    /** Event display name. */
    public ?string $displayName = null;

    /** 
     * Resources being modified.
     * @var AuditResource[]
     */
    public array $resources = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['activity'])) {
            $this->activity = $data['activity'];
        }
        if (isset($data['activityDateTime'])) {
            $this->activityDateTime = is_string($data['activityDateTime']) ? new \DateTimeImmutable($data['activityDateTime']) : $data['activityDateTime'];
        }
        if (isset($data['activityOperationType'])) {
            $this->activityOperationType = $data['activityOperationType'];
        }
        if (isset($data['activityResult'])) {
            $this->activityResult = $data['activityResult'];
        }
        if (isset($data['activityType'])) {
            $this->activityType = $data['activityType'];
        }
        if (isset($data['actor'])) {
            $this->actor = is_array($data['actor']) ? new AuditActor($data['actor']) : $data['actor'];
        }
        if (isset($data['category'])) {
            $this->category = $data['category'];
        }
        if (isset($data['componentName'])) {
            $this->componentName = $data['componentName'];
        }
        if (isset($data['correlationId'])) {
            $this->correlationId = $data['correlationId'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['resources'])) {
            $this->resources = $data['resources'];
        }
    }
}
