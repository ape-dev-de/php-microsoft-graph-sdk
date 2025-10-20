<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppRelationship
 */
class MobileAppRelationship
{
    /**
     * The display name of the app that is the source of the mobile app relationship entity. For example: Orca. Maximum length is 500 characters. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     */
    private ?string $sourceDisplayName;

    /**
     * The display version of the app that is the source of the mobile app relationship entity. For example 1.0.12 or 1.2203.156 or 3. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     */
    private ?string $sourceDisplayVersion;

    /**
     * The unique app identifier of the source of the mobile app relationship entity. For example: 2dbc75b9-e993-4e4d-a071-91ac5a218672. If null during relationship creation, then it will be populated with parent Id. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     */
    private ?string $sourceId;

    /**
     * The publisher display name of the app that is the source of the mobile app relationship entity. For example: Fabrikam. Maximum length is 500 characters. Read-Only. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     */
    private ?string $sourcePublisherDisplayName;

    /**
     * The display name of the app that is the target of the mobile app relationship entity. For example: Firefox Setup 52.0.2 32bit.intunewin. Maximum length is 500 characters. Read-Only. Returned by default. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     */
    private ?string $targetDisplayName;

    /**
     * The display version of the app that is the target of the mobile app relationship entity. For example 1.0 or 1.2203.156. Read-Only. Returned by default. Supports: $select. Does not support $search, $filter, $orderBy. This property is read-only.
     */
    private ?string $targetDisplayVersion;

    /**
     * The unique app identifier of the target of the mobile app relationship entity. For example: 2dbc75b9-e993-4e4d-a071-91ac5a218672. Read-Only. Returned by default. Supports: $select. Does not support $search, $filter, $orderBy.
     */
    private ?string $targetId;

    /**
     * The MobileAppRelationship describes the relationship between two mobile applications by providing information that tells if an application is dependent on or superseded by another application.
     */
    private ?string $targetPublisherDisplayName;

    public function getSourceDisplayName(): ?string
    {
        return $this->sourceDisplayName;
    }

    public function setSourceDisplayName(?string $sourceDisplayName): self
    {
        $this->sourceDisplayName = $sourceDisplayName;
        return $this;
    }

    public function getSourceDisplayVersion(): ?string
    {
        return $this->sourceDisplayVersion;
    }

    public function setSourceDisplayVersion(?string $sourceDisplayVersion): self
    {
        $this->sourceDisplayVersion = $sourceDisplayVersion;
        return $this;
    }

    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }

    public function setSourceId(?string $sourceId): self
    {
        $this->sourceId = $sourceId;
        return $this;
    }

    public function getSourcePublisherDisplayName(): ?string
    {
        return $this->sourcePublisherDisplayName;
    }

    public function setSourcePublisherDisplayName(?string $sourcePublisherDisplayName): self
    {
        $this->sourcePublisherDisplayName = $sourcePublisherDisplayName;
        return $this;
    }

    public function getTargetDisplayName(): ?string
    {
        return $this->targetDisplayName;
    }

    public function setTargetDisplayName(?string $targetDisplayName): self
    {
        $this->targetDisplayName = $targetDisplayName;
        return $this;
    }

    public function getTargetDisplayVersion(): ?string
    {
        return $this->targetDisplayVersion;
    }

    public function setTargetDisplayVersion(?string $targetDisplayVersion): self
    {
        $this->targetDisplayVersion = $targetDisplayVersion;
        return $this;
    }

    public function getTargetId(): ?string
    {
        return $this->targetId;
    }

    public function setTargetId(?string $targetId): self
    {
        $this->targetId = $targetId;
        return $this;
    }

    public function getTargetPublisherDisplayName(): ?string
    {
        return $this->targetPublisherDisplayName;
    }

    public function setTargetPublisherDisplayName(?string $targetPublisherDisplayName): self
    {
        $this->targetPublisherDisplayName = $targetPublisherDisplayName;
        return $this;
    }

}
