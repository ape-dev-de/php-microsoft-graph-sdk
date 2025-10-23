<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserActivity
 */
class UserActivity
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Required. URL used to launch the activity in the best native experience represented by the appId. Might launch a web-based app if no native app exists. */
    public ?string $activationUrl = null;

    /** Required. URL for the domain representing the cross-platform identity mapping for the app. Mapping is stored either as a JSON file hosted on the domain or configurable via Windows Dev Center. The JSON file is named cross-platform-app-identifiers and is hosted at root of your HTTPS domain, either at the top level domain or include a sub domain. For example: https://contoso.com or https://myapp.contoso.com but NOT https://myapp.contoso.com/somepath. You must have a unique file and domain (or sub domain) per cross-platform app identity. For example, a separate file and domain is needed for Word vs. PowerPoint. */
    public ?string $activitySourceHost = null;

    /** Required. The unique activity ID in the context of the app - supplied by caller and immutable thereafter. */
    public ?string $appActivityId = null;

    /** Optional. Short text description of the app used to generate the activity for use in cases when the app is not installed on the user’s local device. */
    public ?string $appDisplayName = null;

    /** Optional. A custom piece of data - JSON-LD extensible description of content according to schema.org syntax. */
    public ?string $contentInfo = null;

    /** Optional. Used in the event the content can be rendered outside of a native or web-based app experience (for example, a pointer to an item in an RSS feed). */
    public ?string $contentUrl = null;

    /** Set by the server. DateTime in UTC when the object was created on the server. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Set by the server. DateTime in UTC when the object expired on the server. */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** Optional. URL used to launch the activity in a web-based app, if available. */
    public ?string $fallbackUrl = null;

    /** Set by the server. DateTime in UTC when the object was modified on the server. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored.
     * @var Status|\stdClass|null
     */
    public mixed $status = null;

    /** Optional. The timezone in which the user's device used to generate the activity was located at activity creation time; values supplied as Olson IDs in order to support cross-platform representation. */
    public ?string $userTimezone = null;

    /**  */
    public ?VisualInfo $visualElements = null;

    /** 
     * Optional. NavigationProperty/Containment; navigation property to the activity's historyItems.
     * @var ActivityHistoryItem[]
     */
    public array $historyItems = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['activationUrl'])) {
            $this->activationUrl = $data['activationUrl'];
        }
        if (isset($data['activitySourceHost'])) {
            $this->activitySourceHost = $data['activitySourceHost'];
        }
        if (isset($data['appActivityId'])) {
            $this->appActivityId = $data['appActivityId'];
        }
        if (isset($data['appDisplayName'])) {
            $this->appDisplayName = $data['appDisplayName'];
        }
        if (isset($data['contentInfo'])) {
            $this->contentInfo = $data['contentInfo'];
        }
        if (isset($data['contentUrl'])) {
            $this->contentUrl = $data['contentUrl'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = is_string($data['expirationDateTime']) ? new \DateTimeImmutable($data['expirationDateTime']) : $data['expirationDateTime'];
        }
        if (isset($data['fallbackUrl'])) {
            $this->fallbackUrl = $data['fallbackUrl'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new Status($data['status']) : $data['status'];
        }
        if (isset($data['userTimezone'])) {
            $this->userTimezone = $data['userTimezone'];
        }
        if (isset($data['visualElements'])) {
            $this->visualElements = is_array($data['visualElements']) ? new VisualInfo($data['visualElements']) : $data['visualElements'];
        }
        if (isset($data['historyItems'])) {
            $this->historyItems = $data['historyItems'];
        }
    }
}
