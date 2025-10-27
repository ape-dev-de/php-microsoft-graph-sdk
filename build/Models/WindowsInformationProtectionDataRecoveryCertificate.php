<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionDataRecoveryCertificate
 */
class WindowsInformationProtectionDataRecoveryCertificate
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Data recovery Certificate */
    public ?string $certificate = null;

    /** Data recovery Certificate description */
    public ?string $description = null;

    /** Data recovery Certificate expiration datetime */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** Data recovery Certificate subject name */
    public ?string $subjectName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['certificate'])) {
            $this->certificate = $data['certificate'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = is_string($data['expirationDateTime']) ? new \DateTimeImmutable($data['expirationDateTime']) : $data['expirationDateTime'];
        }
        if (isset($data['subjectName'])) {
            $this->subjectName = $data['subjectName'];
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
