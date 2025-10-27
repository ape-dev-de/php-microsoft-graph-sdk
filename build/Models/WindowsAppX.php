<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsAppX
 */
class WindowsAppX
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

    /** The internal committed content version. */
    public ?string $committedContentVersion = null;

    /** The name of the main Lob application file. */
    public ?string $fileName = null;

    /** The total size, including all uploaded files. */
    public ?float $size = null;

    /** 
     * The list of content versions for this app.
     * @var MobileAppContent[]
     */
    public array $contentVersions = [];

    /**  */
    public ?WindowsArchitecture $applicableArchitectures = null;

    /** The identity name of the uploaded app package. For example: 'Contoso.DemoApp'. */
    public ?string $identityName = null;

    /** The identity publisher hash of the uploaded app package. This is the hash of the publisher from the manifest. For example: 'AB82CD0XYZ'. */
    public ?string $identityPublisherHash = null;

    /** The identity resource identifier of the uploaded app package. For example: 'TestResourceId'. */
    public ?string $identityResourceIdentifier = null;

    /** The identity version of the uploaded app package. For example: '1.0.0.0'. */
    public ?string $identityVersion = null;

    /** When TRUE, indicates that the app is a bundle. When FALSE, indicates that the app is not a bundle. By default, property is set to FALSE. */
    public ?bool $isBundle = null;

    /**  */
    public ?WindowsMinimumOperatingSystem $minimumSupportedOperatingSystem = null;


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
        if (isset($data['committedContentVersion'])) {
            $this->committedContentVersion = $data['committedContentVersion'];
        }
        if (isset($data['fileName'])) {
            $this->fileName = $data['fileName'];
        }
        if (isset($data['size'])) {
            $this->size = $data['size'];
        }
        if (isset($data['contentVersions'])) {
            $this->contentVersions = $data['contentVersions'];
        }
        if (isset($data['applicableArchitectures'])) {
            $this->applicableArchitectures = is_array($data['applicableArchitectures']) ? new WindowsArchitecture($data['applicableArchitectures']) : $data['applicableArchitectures'];
        }
        if (isset($data['identityName'])) {
            $this->identityName = $data['identityName'];
        }
        if (isset($data['identityPublisherHash'])) {
            $this->identityPublisherHash = $data['identityPublisherHash'];
        }
        if (isset($data['identityResourceIdentifier'])) {
            $this->identityResourceIdentifier = $data['identityResourceIdentifier'];
        }
        if (isset($data['identityVersion'])) {
            $this->identityVersion = $data['identityVersion'];
        }
        if (isset($data['isBundle'])) {
            $this->isBundle = $data['isBundle'];
        }
        if (isset($data['minimumSupportedOperatingSystem'])) {
            $this->minimumSupportedOperatingSystem = is_array($data['minimumSupportedOperatingSystem']) ? new WindowsMinimumOperatingSystem($data['minimumSupportedOperatingSystem']) : $data['minimumSupportedOperatingSystem'];
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
