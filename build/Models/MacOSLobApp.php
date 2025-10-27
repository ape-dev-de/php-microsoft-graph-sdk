<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSLobApp
 */
class MacOSLobApp
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

    /** The build number of the package. This should match the package CFBundleShortVersionString of the .pkg file. */
    public ?string $buildNumber = null;

    /** The primary bundleId of the package. */
    public ?string $bundleId = null;

    /** 
     * List of ComplexType macOSLobChildApp objects. Represents the apps expected to be installed by the package.
     * @var MacOSLobChildApp[]
     */
    public array $childApps = [];

    /** When TRUE, indicates that the app's version will NOT be used to detect if the app is installed on a device. When FALSE, indicates that the app's version will be used to detect if the app is installed on a device. Set this to true for apps that use a self update feature. */
    public ?bool $ignoreVersionDetection = null;

    /** When TRUE, indicates that the app will be installed as managed (requires macOS 11.0 and other managed package restrictions). When FALSE, indicates that the app will be installed as unmanaged. */
    public ?bool $installAsManaged = null;

    /** 
     * The MD5 hash codes. This is empty if the package was uploaded directly. If the Intune App Wrapping Tool is used to create a .intunemac, this value can be found inside the Detection.xml file.
     * @var string[]
     */
    public array $md5Hash = [];

    /** The chunk size for MD5 hash. This is '0' or empty if the package was uploaded directly. If the Intune App Wrapping Tool is used to create a .intunemac, this value can be found inside the Detection.xml file. */
    public ?float $md5HashChunkSize = null;

    /** 
     * ComplexType macOSMinimumOperatingSystem that indicates the minimum operating system applicable for the application.
     * @var MacOSMinimumOperatingSystem|\stdClass|null
     */
    public mixed $minimumSupportedOperatingSystem = null;

    /** The version number of the package. This should match the package CFBundleVersion in the packageinfo file. */
    public ?string $versionNumber = null;


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
        if (isset($data['buildNumber'])) {
            $this->buildNumber = $data['buildNumber'];
        }
        if (isset($data['bundleId'])) {
            $this->bundleId = $data['bundleId'];
        }
        if (isset($data['childApps'])) {
            $this->childApps = $data['childApps'];
        }
        if (isset($data['ignoreVersionDetection'])) {
            $this->ignoreVersionDetection = $data['ignoreVersionDetection'];
        }
        if (isset($data['installAsManaged'])) {
            $this->installAsManaged = $data['installAsManaged'];
        }
        if (isset($data['md5Hash'])) {
            $this->md5Hash = $data['md5Hash'];
        }
        if (isset($data['md5HashChunkSize'])) {
            $this->md5HashChunkSize = $data['md5HashChunkSize'];
        }
        if (isset($data['minimumSupportedOperatingSystem'])) {
            $this->minimumSupportedOperatingSystem = is_array($data['minimumSupportedOperatingSystem']) ? new MacOSMinimumOperatingSystem($data['minimumSupportedOperatingSystem']) : $data['minimumSupportedOperatingSystem'];
        }
        if (isset($data['versionNumber'])) {
            $this->versionNumber = $data['versionNumber'];
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
