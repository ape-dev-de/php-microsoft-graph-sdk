<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MembershipOutlierInsight
 */
class MembershipOutlierInsight
{
    /**
     * Indicates the identifier of the container, for example, a group ID.
     */
    private ?string $containerId;

    /**
     * Indicates the identifier of the user.
     */
    private ?string $memberId;

    /**
     */
    private ?string $outlierContainerType;

    /**
     */
    private ?string $outlierMemberType;

    /**
     * Navigation link to the container directory object. For example, to a group.
     */
    private ?string $container;

    /**
     * Navigation link to a member object who modified the record. For example, to a user.
     */
    private ?string $lastModifiedBy;

    /**
     * Navigation link to a member object. For example, to a user.
     */
    private ?string $member;

    public function getContainerId(): ?string
    {
        return $this->containerId;
    }

    public function setContainerId(?string $containerId): self
    {
        $this->containerId = $containerId;
        return $this;
    }

    public function getMemberId(): ?string
    {
        return $this->memberId;
    }

    public function setMemberId(?string $memberId): self
    {
        $this->memberId = $memberId;
        return $this;
    }

    public function getOutlierContainerType(): ?string
    {
        return $this->outlierContainerType;
    }

    public function setOutlierContainerType(?string $outlierContainerType): self
    {
        $this->outlierContainerType = $outlierContainerType;
        return $this;
    }

    public function getOutlierMemberType(): ?string
    {
        return $this->outlierMemberType;
    }

    public function setOutlierMemberType(?string $outlierMemberType): self
    {
        $this->outlierMemberType = $outlierMemberType;
        return $this;
    }

    public function getContainer(): ?string
    {
        return $this->container;
    }

    public function setContainer(?string $container): self
    {
        $this->container = $container;
        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    public function getMember(): ?string
    {
        return $this->member;
    }

    public function setMember(?string $member): self
    {
        $this->member = $member;
        return $this;
    }

}
