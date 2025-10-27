<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftStoreForBusinessApp
 */
class MicrosoftStoreForBusinessApp
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
    public MimeContent|\stdClass|null $largeIcon = null;

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

    /**  */
    public ?MicrosoftStoreForBusinessLicenseType $licenseType = null;

    /** The app package identifier */
    public ?string $packageIdentityName = null;

    /** The app product key */
    public ?string $productKey = null;

    /** The total number of Microsoft Store for Business licenses. */
    public ?float $totalLicenseCount = null;

    /** The number of Microsoft Store for Business licenses in use. */
    public ?float $usedLicenseCount = null;


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
            $this->isFeatured = is_bool($data['isFeatured']) ? $data['isFeatured'] : (bool)$data['isFeatured'];
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
            $this->publishingState = is_string($data['publishingState']) ? MobileAppPublishingState::tryFrom($data['publishingState']) : $data['publishingState'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
        if (isset($data['categories'])) {
            $this->categories = $data['categories'];
        }
        if (isset($data['licenseType'])) {
            $this->licenseType = is_string($data['licenseType']) ? MicrosoftStoreForBusinessLicenseType::tryFrom($data['licenseType']) : $data['licenseType'];
        }
        if (isset($data['packageIdentityName'])) {
            $this->packageIdentityName = $data['packageIdentityName'];
        }
        if (isset($data['productKey'])) {
            $this->productKey = $data['productKey'];
        }
        if (isset($data['totalLicenseCount'])) {
            $this->totalLicenseCount = is_numeric($data['totalLicenseCount']) ? (float)$data['totalLicenseCount'] : $data['totalLicenseCount'];
        }
        if (isset($data['usedLicenseCount'])) {
            $this->usedLicenseCount = is_numeric($data['usedLicenseCount']) ? (float)$data['usedLicenseCount'] : $data['usedLicenseCount'];
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
