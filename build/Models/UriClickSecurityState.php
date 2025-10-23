<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UriClickSecurityState
 */
class UriClickSecurityState
{
    /**  */
    public ?string $id = null;

    /**  */
    public ?string $clickAction = null;

    /**  */
    public ?\DateTimeInterface $clickDateTime = null;

    /**  */
    public ?string $sourceId = null;

    /**  */
    public ?string $uriDomain = null;

    /**  */
    public ?string $verdict = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['clickAction'])) {
            $this->clickAction = $data['clickAction'];
        }
        if (isset($data['clickDateTime'])) {
            $this->clickDateTime = is_string($data['clickDateTime']) ? new \DateTimeImmutable($data['clickDateTime']) : $data['clickDateTime'];
        }
        if (isset($data['sourceId'])) {
            $this->sourceId = $data['sourceId'];
        }
        if (isset($data['uriDomain'])) {
            $this->uriDomain = $data['uriDomain'];
        }
        if (isset($data['verdict'])) {
            $this->verdict = $data['verdict'];
        }
    }
}
