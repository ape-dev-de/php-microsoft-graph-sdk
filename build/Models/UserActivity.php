<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserActivity
 */
class UserActivity
{
    /**
     * Required. URL used to launch the activity in the best native experience represented by the appId. Might launch a web-based app if no native app exists.
     */
    private ?string $activationUrl;

    /**
     * Required. URL for the domain representing the cross-platform identity mapping for the app. Mapping is stored either as a JSON file hosted on the domain or configurable via Windows Dev Center. The JSON file is named cross-platform-app-identifiers and is hosted at root of your HTTPS domain, either at the top level domain or include a sub domain. For example: https://contoso.com or https://myapp.contoso.com but NOT https://myapp.contoso.com/somepath. You must have a unique file and domain (or sub domain) per cross-platform app identity. For example, a separate file and domain is needed for Word vs. PowerPoint.
     */
    private ?string $activitySourceHost;

    /**
     * Required. The unique activity ID in the context of the app - supplied by caller and immutable thereafter.
     */
    private ?string $appActivityId;

    /**
     * Optional. Short text description of the app used to generate the activity for use in cases when the app is not installed on the user’s local device.
     */
    private ?string $appDisplayName;

    /**
     * Optional. A custom piece of data - JSON-LD extensible description of content according to schema.org syntax.
     */
    private ?string $contentInfo;

    /**
     * Optional. Used in the event the content can be rendered outside of a native or web-based app experience (for example, a pointer to an item in an RSS feed).
     */
    private ?string $contentUrl;

    /**
     * Set by the server. DateTime in UTC when the object was created on the server.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Set by the server. DateTime in UTC when the object expired on the server.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * Optional. URL used to launch the activity in a web-based app, if available.
     */
    private ?string $fallbackUrl;

    /**
     * Set by the server. DateTime in UTC when the object was modified on the server.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored.
     */
    private ?string $status;

    /**
     * Optional. The timezone in which the user's device used to generate the activity was located at activity creation time; values supplied as Olson IDs in order to support cross-platform representation.
     */
    private ?string $userTimezone;

    /**
     */
    private ?string $visualElements;

    /**
     * Optional. NavigationProperty/Containment; navigation property to the activity's historyItems.
     * @var string[]
     */
    private array $historyItems = [];


    public function getActivationUrl(): ?string
    {
        return $this->activationUrl;
    }

    public function setActivationUrl(?string $activationUrl): self
    {
        $this->activationUrl = $activationUrl;
        return $this;
    }

    public function getActivitySourceHost(): ?string
    {
        return $this->activitySourceHost;
    }

    public function setActivitySourceHost(?string $activitySourceHost): self
    {
        $this->activitySourceHost = $activitySourceHost;
        return $this;
    }

    public function getAppActivityId(): ?string
    {
        return $this->appActivityId;
    }

    public function setAppActivityId(?string $appActivityId): self
    {
        $this->appActivityId = $appActivityId;
        return $this;
    }

    public function getAppDisplayName(): ?string
    {
        return $this->appDisplayName;
    }

    public function setAppDisplayName(?string $appDisplayName): self
    {
        $this->appDisplayName = $appDisplayName;
        return $this;
    }

    public function getContentInfo(): ?string
    {
        return $this->contentInfo;
    }

    public function setContentInfo(?string $contentInfo): self
    {
        $this->contentInfo = $contentInfo;
        return $this;
    }

    public function getContentUrl(): ?string
    {
        return $this->contentUrl;
    }

    public function setContentUrl(?string $contentUrl): self
    {
        $this->contentUrl = $contentUrl;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->expirationDateTime;
    }

    public function setExpirationDateTime(?\DateTimeInterface $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;
        return $this;
    }

    public function getFallbackUrl(): ?string
    {
        return $this->fallbackUrl;
    }

    public function setFallbackUrl(?string $fallbackUrl): self
    {
        $this->fallbackUrl = $fallbackUrl;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getUserTimezone(): ?string
    {
        return $this->userTimezone;
    }

    public function setUserTimezone(?string $userTimezone): self
    {
        $this->userTimezone = $userTimezone;
        return $this;
    }

    public function getVisualElements(): ?string
    {
        return $this->visualElements;
    }

    public function setVisualElements(?string $visualElements): self
    {
        $this->visualElements = $visualElements;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getHistoryItems(): array
    {
        return $this->historyItems;
    }

    /**
     * @param string[] $historyItems
     */
    public function setHistoryItems(array $historyItems): self
    {
        $this->historyItems = $historyItems;
        return $this;
    }

}
