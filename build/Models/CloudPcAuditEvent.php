<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcAuditEvent
 */
class CloudPcAuditEvent
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The friendly name of the audit activity. */
    public ?string $activity = null;

    /** The date time in UTC when the activity was performed. Read-only. */
    public ?\DateTimeInterface $activityDateTime = null;

    /**  */
    public ?CloudPcAuditActivityOperationType $activityOperationType = null;

    /**  */
    public ?CloudPcAuditActivityResult $activityResult = null;

    /** The type of activity that was performed. Read-only. */
    public ?string $activityType = null;

    /**  */
    public ?CloudPcAuditActor $actor = null;

    /**  */
    public ?CloudPcAuditCategory $category = null;

    /** The component name for the audit event. Read-only. */
    public ?string $componentName = null;

    /** The client request ID that is used to correlate activity within the system. Read-only. */
    public ?string $correlationId = null;

    /** The display name for the audit event. Read-only. */
    public ?string $displayName = null;

    /** 
     * The list of cloudPcAuditResource objects. Read-only.
     * @var CloudPcAuditResource[]
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
            $this->activityDateTime = $data['activityDateTime'];
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
            $this->actor = $data['actor'];
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
