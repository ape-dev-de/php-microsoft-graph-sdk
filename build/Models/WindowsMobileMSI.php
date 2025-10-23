<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsMobileMSI
 */
class WindowsMobileMSI
{
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

    /** The command line. */
    public ?string $commandLine = null;

    /** A boolean to control whether the app's version will be used to detect the app after it is installed on a device. Set this to true for Windows Mobile MSI Line of Business (LoB) apps that use a self update feature. */
    public ?bool $ignoreVersionDetection = null;

    /** The product code. */
    public ?string $productCode = null;

    /** The product version of Windows Mobile MSI Line of Business (LoB) app. */
    public ?string $productVersion = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
            $this->largeIcon = $data['largeIcon'];
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
            $this->publishingState = $data['publishingState'];
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
        if (isset($data['commandLine'])) {
            $this->commandLine = $data['commandLine'];
        }
        if (isset($data['ignoreVersionDetection'])) {
            $this->ignoreVersionDetection = $data['ignoreVersionDetection'];
        }
        if (isset($data['productCode'])) {
            $this->productCode = $data['productCode'];
        }
        if (isset($data['productVersion'])) {
            $this->productVersion = $data['productVersion'];
        }
    }
}
