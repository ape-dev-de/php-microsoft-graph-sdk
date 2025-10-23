<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppRelationship
 */
class MobileAppRelationship
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The display name of the app that is the source of the mobile app relationship entity. For example: Orca. Maximum length is 500 characters. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only. */
    public ?string $sourceDisplayName = null;

    /** The display version of the app that is the source of the mobile app relationship entity. For example 1.0.12 or 1.2203.156 or 3. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only. */
    public ?string $sourceDisplayVersion = null;

    /** The unique app identifier of the source of the mobile app relationship entity. For example: 2dbc75b9-e993-4e4d-a071-91ac5a218672. If null during relationship creation, then it will be populated with parent Id. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only. */
    public ?string $sourceId = null;

    /** The publisher display name of the app that is the source of the mobile app relationship entity. For example: Fabrikam. Maximum length is 500 characters. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only. */
    public ?string $sourcePublisherDisplayName = null;

    /** The display name of the app that is the target of the mobile app relationship entity. For example: Firefox Setup 52.0.2 32bit.intunewin. Maximum length is 500 characters. Read-Only. Returned by default. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only. */
    public ?string $targetDisplayName = null;

    /** The display version of the app that is the target of the mobile app relationship entity. For example 1.0 or 1.2203.156. Read-Only. Returned by default. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only. */
    public ?string $targetDisplayVersion = null;

    /** The unique app identifier of the target of the mobile app relationship entity. For example: 2dbc75b9-e993-4e4d-a071-91ac5a218672. Read-Only. Returned by default. Supports: $select. Does not support $search, $filter, $orderBy. */
    public ?string $targetId = null;

    /** The publisher display name of the app that is the target of the mobile app relationship entity. For example: Fabrikam. Maximum length is 500 characters. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only. */
    public ?string $targetPublisherDisplayName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['sourceDisplayName'])) {
            $this->sourceDisplayName = $data['sourceDisplayName'];
        }
        if (isset($data['sourceDisplayVersion'])) {
            $this->sourceDisplayVersion = $data['sourceDisplayVersion'];
        }
        if (isset($data['sourceId'])) {
            $this->sourceId = $data['sourceId'];
        }
        if (isset($data['sourcePublisherDisplayName'])) {
            $this->sourcePublisherDisplayName = $data['sourcePublisherDisplayName'];
        }
        if (isset($data['targetDisplayName'])) {
            $this->targetDisplayName = $data['targetDisplayName'];
        }
        if (isset($data['targetDisplayVersion'])) {
            $this->targetDisplayVersion = $data['targetDisplayVersion'];
        }
        if (isset($data['targetId'])) {
            $this->targetId = $data['targetId'];
        }
        if (isset($data['targetPublisherDisplayName'])) {
            $this->targetPublisherDisplayName = $data['targetPublisherDisplayName'];
        }
    }
}
