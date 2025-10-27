<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MembershipOutlierInsight
 */
class MembershipOutlierInsight
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
    public DirectoryObject|\stdClass|null $container = null;

    /** 
     * Navigation link to a member object who modified the record. For example, to a user.
     * @var User|\stdClass|null
     */
    public User|\stdClass|null $lastModifiedBy = null;

    /** 
     * Navigation link to a member object. For example, to a user.
     * @var DirectoryObject|\stdClass|null
     */
    public DirectoryObject|\stdClass|null $member = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['insightCreatedDateTime'])) {
            $this->insightCreatedDateTime = is_string($data['insightCreatedDateTime']) ? new \DateTimeImmutable($data['insightCreatedDateTime']) : $data['insightCreatedDateTime'];
        }
        if (isset($data['containerId'])) {
            $this->containerId = $data['containerId'];
        }
        if (isset($data['memberId'])) {
            $this->memberId = $data['memberId'];
        }
        if (isset($data['outlierContainerType'])) {
            $this->outlierContainerType = is_string($data['outlierContainerType']) ? OutlierContainerType::tryFrom($data['outlierContainerType']) : $data['outlierContainerType'];
        }
        if (isset($data['outlierMemberType'])) {
            $this->outlierMemberType = is_string($data['outlierMemberType']) ? OutlierMemberType::tryFrom($data['outlierMemberType']) : $data['outlierMemberType'];
        }
        if (isset($data['container'])) {
            $this->container = is_array($data['container']) ? new DirectoryObject($data['container']) : $data['container'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new User($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['member'])) {
            $this->member = is_array($data['member']) ? new DirectoryObject($data['member']) : $data['member'];
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
