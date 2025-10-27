<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSiteList
 */
class BrowserSiteList
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The description of the site list. */
    public ?string $description = null;

    /** The name of the site list. */
    public ?string $displayName = null;

    /** 
     * The user who last modified the site list.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** The date and time when the site list was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The user who published the site list.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $publishedBy = null;

    /** The date and time when the site list was published. */
    public ?\DateTimeInterface $publishedDateTime = null;

    /** The current revision of the site list. */
    public ?string $revision = null;

    /**  */
    public ?BrowserSiteListStatus $status = null;

    /** 
     * A collection of shared cookies defined for the site list.
     * @var BrowserSharedCookie[]
     */
    public array $sharedCookies = [];

    /** 
     * A collection of sites defined for the site list.
     * @var BrowserSite[]
     */
    public array $sites = [];


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
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['publishedBy'])) {
            $this->publishedBy = is_array($data['publishedBy']) ? new IdentitySet($data['publishedBy']) : $data['publishedBy'];
        }
        if (isset($data['publishedDateTime'])) {
            $this->publishedDateTime = is_string($data['publishedDateTime']) ? new \DateTimeImmutable($data['publishedDateTime']) : $data['publishedDateTime'];
        }
        if (isset($data['revision'])) {
            $this->revision = $data['revision'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new BrowserSiteListStatus($data['status']) : $data['status'];
        }
        if (isset($data['sharedCookies'])) {
            $this->sharedCookies = $data['sharedCookies'];
        }
        if (isset($data['sites'])) {
            $this->sites = $data['sites'];
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
