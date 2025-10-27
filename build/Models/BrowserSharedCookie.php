<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSharedCookie
 */
class BrowserSharedCookie
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The comment for the shared cookie. */
    public ?string $comment = null;

    /** The date and time when the shared cookie was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The date and time when the shared cookie was deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** The name of the cookie. */
    public ?string $displayName = null;

    /** 
     * The history of modifications applied to the cookie.
     * @var BrowserSharedCookieHistory[]
     */
    public array $history = [];

    /** Controls whether a cookie is a host-only or domain cookie. */
    public ?bool $hostOnly = null;

    /** The URL of the cookie. */
    public ?string $hostOrDomain = null;

    /** 
     * The user who last modified the cookie.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $lastModifiedBy = null;

    /** The date and time when the cookie was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The path of the cookie. */
    public ?string $path = null;

    /**  */
    public ?BrowserSharedCookieSourceEnvironment $sourceEnvironment = null;

    /**  */
    public ?BrowserSharedCookieStatus $status = null;


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
        if (isset($data['comment'])) {
            $this->comment = $data['comment'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = is_string($data['deletedDateTime']) ? new \DateTimeImmutable($data['deletedDateTime']) : $data['deletedDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['history'])) {
            $this->history = $data['history'];
        }
        if (isset($data['hostOnly'])) {
            $this->hostOnly = is_bool($data['hostOnly']) ? $data['hostOnly'] : (bool)$data['hostOnly'];
        }
        if (isset($data['hostOrDomain'])) {
            $this->hostOrDomain = $data['hostOrDomain'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['path'])) {
            $this->path = $data['path'];
        }
        if (isset($data['sourceEnvironment'])) {
            $this->sourceEnvironment = is_array($data['sourceEnvironment']) ? new BrowserSharedCookieSourceEnvironment($data['sourceEnvironment']) : $data['sourceEnvironment'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new BrowserSharedCookieStatus($data['status']) : $data['status'];
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
