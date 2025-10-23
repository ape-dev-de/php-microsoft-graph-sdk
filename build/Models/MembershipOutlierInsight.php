<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MembershipOutlierInsight
 */
class MembershipOutlierInsight
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates when the insight was created. */
    public ?\DateTimeInterface $insightCreatedDateTime = null;

    /** Indicates the identifier of the container, for example, a group ID. */
    public ?string $containerId = null;

    /** Indicates the identifier of the user. */
    public ?string $memberId = null;

    /**  */
    public ?OutlierContainerType $outlierContainerType = null;

    /**  */
    public ?OutlierMemberType $outlierMemberType = null;

    /** 
     * Navigation link to the container directory object. For example, to a group.
     * @var DirectoryObject|\stdClass|null
     */
    public mixed $container = null;

    /** 
     * Navigation link to a member object who modified the record. For example, to a user.
     * @var User|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** 
     * Navigation link to a member object. For example, to a user.
     * @var DirectoryObject|\stdClass|null
     */
    public mixed $member = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['insightCreatedDateTime'])) {
            $this->insightCreatedDateTime = $data['insightCreatedDateTime'];
        }
        if (isset($data['containerId'])) {
            $this->containerId = $data['containerId'];
        }
        if (isset($data['memberId'])) {
            $this->memberId = $data['memberId'];
        }
        if (isset($data['outlierContainerType'])) {
            $this->outlierContainerType = $data['outlierContainerType'];
        }
        if (isset($data['outlierMemberType'])) {
            $this->outlierMemberType = $data['outlierMemberType'];
        }
        if (isset($data['container'])) {
            $this->container = $data['container'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['member'])) {
            $this->member = $data['member'];
        }
    }
}
