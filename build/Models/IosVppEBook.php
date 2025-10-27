<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosVppEBook
 */
class IosVppEBook
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time when the eBook file was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Description. */
    public ?string $description = null;

    /** Name of the eBook. */
    public ?string $displayName = null;

    /** The more information Url. */
    public ?string $informationUrl = null;

    /** 
     * Book cover.
     * @var MimeContent|\stdClass|null
     */
    public mixed $largeCover = null;

    /** The date and time when the eBook was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The privacy statement Url. */
    public ?string $privacyInformationUrl = null;

    /** The date and time when the eBook was published. */
    public ?\DateTimeInterface $publishedDateTime = null;

    /** Publisher. */
    public ?string $publisher = null;

    /** 
     * The list of assignments for this eBook.
     * @var ManagedEBookAssignment[]
     */
    public array $assignments = [];

    /** 
     * The list of installation states for this eBook.
     * @var DeviceInstallState[]
     */
    public array $deviceStates = [];

    /** 
     * Mobile App Install Summary.
     * @var EBookInstallSummary|\stdClass|null
     */
    public mixed $installSummary = null;

    /** 
     * The list of installation states for this eBook.
     * @var UserInstallStateSummary[]
     */
    public array $userStateSummary = [];

    /** The Apple ID associated with Vpp token. */
    public ?string $appleId = null;

    /** 
     * Genres.
     * @var string[]
     */
    public array $genres = [];

    /** Language. */
    public ?string $language = null;

    /** Seller. */
    public ?string $seller = null;

    /** Total license count. */
    public ?float $totalLicenseCount = null;

    /** Used license count. */
    public ?float $usedLicenseCount = null;

    /** The Vpp token's organization name. */
    public ?string $vppOrganizationName = null;

    /** The Vpp token ID. */
    public ?string $vppTokenId = null;


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
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['informationUrl'])) {
            $this->informationUrl = $data['informationUrl'];
        }
        if (isset($data['largeCover'])) {
            $this->largeCover = is_array($data['largeCover']) ? new MimeContent($data['largeCover']) : $data['largeCover'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['privacyInformationUrl'])) {
            $this->privacyInformationUrl = $data['privacyInformationUrl'];
        }
        if (isset($data['publishedDateTime'])) {
            $this->publishedDateTime = is_string($data['publishedDateTime']) ? new \DateTimeImmutable($data['publishedDateTime']) : $data['publishedDateTime'];
        }
        if (isset($data['publisher'])) {
            $this->publisher = $data['publisher'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
        if (isset($data['deviceStates'])) {
            $this->deviceStates = $data['deviceStates'];
        }
        if (isset($data['installSummary'])) {
            $this->installSummary = is_array($data['installSummary']) ? new EBookInstallSummary($data['installSummary']) : $data['installSummary'];
        }
        if (isset($data['userStateSummary'])) {
            $this->userStateSummary = $data['userStateSummary'];
        }
        if (isset($data['appleId'])) {
            $this->appleId = $data['appleId'];
        }
        if (isset($data['genres'])) {
            $this->genres = $data['genres'];
        }
        if (isset($data['language'])) {
            $this->language = $data['language'];
        }
        if (isset($data['seller'])) {
            $this->seller = $data['seller'];
        }
        if (isset($data['totalLicenseCount'])) {
            $this->totalLicenseCount = $data['totalLicenseCount'];
        }
        if (isset($data['usedLicenseCount'])) {
            $this->usedLicenseCount = $data['usedLicenseCount'];
        }
        if (isset($data['vppOrganizationName'])) {
            $this->vppOrganizationName = $data['vppOrganizationName'];
        }
        if (isset($data['vppTokenId'])) {
            $this->vppTokenId = $data['vppTokenId'];
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
