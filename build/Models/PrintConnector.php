<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintConnector
 */
class PrintConnector
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The connector's version. */
    public ?string $appVersion = null;

    /** The name of the connector. */
    public ?string $displayName = null;

    /** The connector machine's hostname. */
    public ?string $fullyQualifiedDomainName = null;

    /** 
     * The physical and/or organizational location of the connector.
     * @var PrinterLocation|\stdClass|null
     */
    public mixed $location = null;

    /** The connector machine's operating system version. */
    public ?string $operatingSystem = null;

    /** The DateTimeOffset when the connector was registered. */
    public ?\DateTimeInterface $registeredDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['appVersion'])) {
            $this->appVersion = $data['appVersion'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['fullyQualifiedDomainName'])) {
            $this->fullyQualifiedDomainName = $data['fullyQualifiedDomainName'];
        }
        if (isset($data['location'])) {
            $this->location = $data['location'];
        }
        if (isset($data['operatingSystem'])) {
            $this->operatingSystem = $data['operatingSystem'];
        }
        if (isset($data['registeredDateTime'])) {
            $this->registeredDateTime = is_string($data['registeredDateTime']) ? new \DateTimeImmutable($data['registeredDateTime']) : $data['registeredDateTime'];
        }
    }
}
