<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedMobileApp
 */
class ManagedMobileApp
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The identifier for an app with it's operating system type.
     * @var MobileAppIdentifier|\stdClass|null
     */
    public mixed $mobileAppIdentifier = null;

    /** Version of the entity. */
    public ?string $version = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['mobileAppIdentifier'])) {
            $this->mobileAppIdentifier = $data['mobileAppIdentifier'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
    }
}
