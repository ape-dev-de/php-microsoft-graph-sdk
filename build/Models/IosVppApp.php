<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosVppApp
 */
class IosVppApp
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time the app was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The description of the app. */
    public ?string $description = null;

    /** The developer of the app. */
    public ?string $developer = null;

    /** The admin provided or imported title of the app. */
    public ?string $displayName = null;

    /** The more information Url. */
    public ?string $informationUrl = null;

    /** The value indicating whether the app is marked as featured by the admin. */
    public ?bool $isFeatured = null;

    /** 
     * The large icon, to be displayed in the app details and used for upload of the icon.
     * @var MimeContent|\stdClass|null
     */
    public mixed $largeIcon = null;

    /** The date and time the app was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Notes for the app. */
    public ?string $notes = null;

    /** The owner of the app. */
    public ?string $owner = null;

    /** The privacy statement Url. */
    public ?string $privacyInformationUrl = null;

    /** The publisher of the app. */
    public ?string $publisher = null;

    /**  */
    public ?MobileAppPublishingState $publishingState = null;

    /** 
     * The list of group assignments for this mobile app.
     * @var MobileAppAssignment[]
     */
    public array $assignments = [];

    /** 
     * The list of categories for this app.
     * @var MobileAppCategory[]
     */
    public array $categories = [];

    /** 
     * The applicable iOS Device Type.
     * @var IosDeviceType|\stdClass|null
     */
    public mixed $applicableDeviceType = null;

    /** The store URL. */
    public ?string $appStoreUrl = null;

    /** The Identity Name. */
    public ?string $bundleId = null;

    /** 
     * The supported License Type.
     * @var VppLicensingType|\stdClass|null
     */
    public mixed $licensingType = null;

    /** The VPP application release date and time. */
    public ?\DateTimeInterface $releaseDateTime = null;

    /** The total number of VPP licenses. */
    public ?float $totalLicenseCount = null;

    /** The number of VPP licenses in use. */
    public ?float $usedLicenseCount = null;

    /**  */
    public ?VppTokenAccountType $vppTokenAccountType = null;

    /** The Apple Id associated with the given Apple Volume Purchase Program Token. */
    public ?string $vppTokenAppleId = null;

    /** The organization associated with the Apple Volume Purchase Program Token */
    public ?string $vppTokenOrganizationName = null;


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
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['developer'])) {
            $this->developer = $data['developer'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['informationUrl'])) {
            $this->informationUrl = $data['informationUrl'];
        }
        if (isset($data['isFeatured'])) {
            $this->isFeatured = $data['isFeatured'];
        }
        if (isset($data['largeIcon'])) {
            $this->largeIcon = is_array($data['largeIcon']) ? new MimeContent($data['largeIcon']) : $data['largeIcon'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['notes'])) {
            $this->notes = $data['notes'];
        }
        if (isset($data['owner'])) {
            $this->owner = $data['owner'];
        }
        if (isset($data['privacyInformationUrl'])) {
            $this->privacyInformationUrl = $data['privacyInformationUrl'];
        }
        if (isset($data['publisher'])) {
            $this->publisher = $data['publisher'];
        }
        if (isset($data['publishingState'])) {
            $this->publishingState = is_array($data['publishingState']) ? new MobileAppPublishingState($data['publishingState']) : $data['publishingState'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
        if (isset($data['categories'])) {
            $this->categories = $data['categories'];
        }
        if (isset($data['applicableDeviceType'])) {
            $this->applicableDeviceType = is_array($data['applicableDeviceType']) ? new IosDeviceType($data['applicableDeviceType']) : $data['applicableDeviceType'];
        }
        if (isset($data['appStoreUrl'])) {
            $this->appStoreUrl = $data['appStoreUrl'];
        }
        if (isset($data['bundleId'])) {
            $this->bundleId = $data['bundleId'];
        }
        if (isset($data['licensingType'])) {
            $this->licensingType = is_array($data['licensingType']) ? new VppLicensingType($data['licensingType']) : $data['licensingType'];
        }
        if (isset($data['releaseDateTime'])) {
            $this->releaseDateTime = is_string($data['releaseDateTime']) ? new \DateTimeImmutable($data['releaseDateTime']) : $data['releaseDateTime'];
        }
        if (isset($data['totalLicenseCount'])) {
            $this->totalLicenseCount = $data['totalLicenseCount'];
        }
        if (isset($data['usedLicenseCount'])) {
            $this->usedLicenseCount = $data['usedLicenseCount'];
        }
        if (isset($data['vppTokenAccountType'])) {
            $this->vppTokenAccountType = is_array($data['vppTokenAccountType']) ? new VppTokenAccountType($data['vppTokenAccountType']) : $data['vppTokenAccountType'];
        }
        if (isset($data['vppTokenAppleId'])) {
            $this->vppTokenAppleId = $data['vppTokenAppleId'];
        }
        if (isset($data['vppTokenOrganizationName'])) {
            $this->vppTokenOrganizationName = $data['vppTokenOrganizationName'];
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
