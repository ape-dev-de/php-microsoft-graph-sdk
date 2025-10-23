<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSharedCookieHistory
 */
class BrowserSharedCookieHistory
{
    /** The comment for the shared cookie. */
    public ?string $comment = null;

    /** The name of the cookie. */
    public ?string $displayName = null;

    /** Controls whether a cookie is a host-only or domain cookie. */
    public ?bool $hostOnly = null;

    /** The URL of the cookie. */
    public ?string $hostOrDomain = null;

    /**  */
    public ?IdentitySet $lastModifiedBy = null;

    /** The path of the cookie. */
    public ?string $path = null;

    /** The date and time when the cookie was last published. */
    public ?\DateTimeInterface $publishedDateTime = null;

    /** 
     * Specifies how the cookies are shared between Microsoft Edge and Internet Explorer. The possible values are: microsoftEdge, internetExplorer11, both, unknownFutureValue.
     * @var BrowserSharedCookieSourceEnvironment|\stdClass|null
     */
    public mixed $sourceEnvironment = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['comment'])) {
            $this->comment = $data['comment'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['hostOnly'])) {
            $this->hostOnly = $data['hostOnly'];
        }
        if (isset($data['hostOrDomain'])) {
            $this->hostOrDomain = $data['hostOrDomain'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['path'])) {
            $this->path = $data['path'];
        }
        if (isset($data['publishedDateTime'])) {
            $this->publishedDateTime = is_string($data['publishedDateTime']) ? new \DateTimeImmutable($data['publishedDateTime']) : $data['publishedDateTime'];
        }
        if (isset($data['sourceEnvironment'])) {
            $this->sourceEnvironment = is_array($data['sourceEnvironment']) ? new BrowserSharedCookieSourceEnvironment($data['sourceEnvironment']) : $data['sourceEnvironment'];
        }
    }
}
