<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LinkedResource
 */
class LinkedResource
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The app name of the source that sends the linkedResource. */
    public ?string $applicationName = null;

    /** The title of the linkedResource. */
    public ?string $displayName = null;

    /** ID of the object that is associated with this task on the third-party/partner system. */
    public ?string $externalId = null;

    /** Deep link to the linkedResource. */
    public ?string $webUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['applicationName'])) {
            $this->applicationName = $data['applicationName'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['externalId'])) {
            $this->externalId = $data['externalId'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
    }
}
