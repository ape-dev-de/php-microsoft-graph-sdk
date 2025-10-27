<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobApp
 */
class Win32LobApp
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

    /** 
     * Indicates the Windows architecture(s) this app should be installed on. The app will be treated as not applicable for devices with architectures not matching the selected value. When a non-null value is provided for the `allowedArchitectures` property, the value of the `applicableArchitectures` property is set to `none`. Possible values are: `null`, `x86`, `x64`, `arm64`.
     * @var WindowsArchitecture|\stdClass|null
     */
    public WindowsArchitecture|\stdClass|null $allowedArchitectures = null;

    /**  */
    public ?WindowsArchitecture $applicableArchitectures = null;

    /** The command line to install this app */
    public ?string $installCommandLine = null;

    /** 
     * The install experience for this app.
     * @var Win32LobAppInstallExperience|\stdClass|null
     */
    public Win32LobAppInstallExperience|\stdClass|null $installExperience = null;

    /** The value for the minimum CPU speed which is required to install this app. */
    public ?float $minimumCpuSpeedInMHz = null;

    /** The value for the minimum free disk space which is required to install this app. */
    public ?float $minimumFreeDiskSpaceInMB = null;

    /** The value for the minimum physical memory which is required to install this app. */
    public ?float $minimumMemoryInMB = null;

    /** The value for the minimum number of processors which is required to install this app. */
    public ?float $minimumNumberOfProcessors = null;

    /** The value for the minimum supported windows release. */
    public ?string $minimumSupportedWindowsRelease = null;

    /** 
     * The MSI details if this Win32 app is an MSI app.
     * @var Win32LobAppMsiInformation|\stdClass|null
     */
    public Win32LobAppMsiInformation|\stdClass|null $msiInformation = null;

    /** 
     * The return codes for post installation behavior.
     * @var Win32LobAppReturnCode[]
     */
    public array $returnCodes = [];

    /** 
     * The detection and requirement rules for this app.
     * @var Win32LobAppRule[]
     */
    public array $rules = [];

    /** The relative path of the setup file in the encrypted Win32LobApp package. */
    public ?string $setupFilePath = null;

    /** The command line to uninstall this app */
    public ?string $uninstallCommandLine = null;


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
            $this->size = is_numeric($data['size']) ? (float)$data['size'] : $data['size'];
        }
        if (isset($data['contentVersions'])) {
            $this->contentVersions = $data['contentVersions'];
        }
        if (isset($data['allowedArchitectures'])) {
            $this->allowedArchitectures = is_array($data['allowedArchitectures']) ? new WindowsArchitecture($data['allowedArchitectures']) : $data['allowedArchitectures'];
        }
        if (isset($data['applicableArchitectures'])) {
            $this->applicableArchitectures = is_array($data['applicableArchitectures']) ? new WindowsArchitecture($data['applicableArchitectures']) : $data['applicableArchitectures'];
        }
        if (isset($data['installCommandLine'])) {
            $this->installCommandLine = $data['installCommandLine'];
        }
        if (isset($data['installExperience'])) {
            $this->installExperience = is_array($data['installExperience']) ? new Win32LobAppInstallExperience($data['installExperience']) : $data['installExperience'];
        }
        if (isset($data['minimumCpuSpeedInMHz'])) {
            $this->minimumCpuSpeedInMHz = is_numeric($data['minimumCpuSpeedInMHz']) ? (float)$data['minimumCpuSpeedInMHz'] : $data['minimumCpuSpeedInMHz'];
        }
        if (isset($data['minimumFreeDiskSpaceInMB'])) {
            $this->minimumFreeDiskSpaceInMB = is_numeric($data['minimumFreeDiskSpaceInMB']) ? (float)$data['minimumFreeDiskSpaceInMB'] : $data['minimumFreeDiskSpaceInMB'];
        }
        if (isset($data['minimumMemoryInMB'])) {
            $this->minimumMemoryInMB = is_numeric($data['minimumMemoryInMB']) ? (float)$data['minimumMemoryInMB'] : $data['minimumMemoryInMB'];
        }
        if (isset($data['minimumNumberOfProcessors'])) {
            $this->minimumNumberOfProcessors = is_numeric($data['minimumNumberOfProcessors']) ? (float)$data['minimumNumberOfProcessors'] : $data['minimumNumberOfProcessors'];
        }
        if (isset($data['minimumSupportedWindowsRelease'])) {
            $this->minimumSupportedWindowsRelease = $data['minimumSupportedWindowsRelease'];
        }
        if (isset($data['msiInformation'])) {
            $this->msiInformation = is_array($data['msiInformation']) ? new Win32LobAppMsiInformation($data['msiInformation']) : $data['msiInformation'];
        }
        if (isset($data['returnCodes'])) {
            $this->returnCodes = $data['returnCodes'];
        }
        if (isset($data['rules'])) {
            $this->rules = $data['rules'];
        }
        if (isset($data['setupFilePath'])) {
            $this->setupFilePath = $data['setupFilePath'];
        }
        if (isset($data['uninstallCommandLine'])) {
            $this->uninstallCommandLine = $data['uninstallCommandLine'];
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
