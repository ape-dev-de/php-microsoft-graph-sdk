<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Endpoint
 */
class Endpoint
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /**  */
    public ?string $capability = null;

    /**  */
    public ?string $providerId = null;

    /**  */
    public ?string $providerName = null;

    /**  */
    public ?string $providerResourceId = null;

    /**  */
    public ?string $uri = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = $data['deletedDateTime'];
        }
        if (isset($data['capability'])) {
            $this->capability = $data['capability'];
        }
        if (isset($data['providerId'])) {
            $this->providerId = $data['providerId'];
        }
        if (isset($data['providerName'])) {
            $this->providerName = $data['providerName'];
        }
        if (isset($data['providerResourceId'])) {
            $this->providerResourceId = $data['providerResourceId'];
        }
        if (isset($data['uri'])) {
            $this->uri = $data['uri'];
        }
    }
}
