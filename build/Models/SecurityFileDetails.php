<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFileDetails
 */
class SecurityFileDetails
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The name of the file. */
    public ?string $fileName = null;

    /** The file path (location) of the file instance. */
    public ?string $filePath = null;

    /** The publisher of the file. */
    public ?string $filePublisher = null;

    /** The size of the file in bytes. */
    public ?float $fileSize = null;

    /** The certificate authority (CA) that issued the certificate. */
    public ?string $issuer = null;

    /** The Md5 cryptographic hash of the file content. */
    public ?string $md5 = null;

    /** The Sha1 cryptographic hash of the file content. */
    public ?string $sha1 = null;

    /** The Sha256 cryptographic hash of the file content. */
    public ?string $sha256 = null;

    /**  */
    public ?string $sha256Ac = null;

    /** The signer of the signed file. */
    public ?string $signer = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['fileName'])) {
            $this->fileName = $data['fileName'];
        }
        if (isset($data['filePath'])) {
            $this->filePath = $data['filePath'];
        }
        if (isset($data['filePublisher'])) {
            $this->filePublisher = $data['filePublisher'];
        }
        if (isset($data['fileSize'])) {
            $this->fileSize = is_numeric($data['fileSize']) ? (float)$data['fileSize'] : $data['fileSize'];
        }
        if (isset($data['issuer'])) {
            $this->issuer = $data['issuer'];
        }
        if (isset($data['md5'])) {
            $this->md5 = $data['md5'];
        }
        if (isset($data['sha1'])) {
            $this->sha1 = $data['sha1'];
        }
        if (isset($data['sha256'])) {
            $this->sha256 = $data['sha256'];
        }
        if (isset($data['sha256Ac'])) {
            $this->sha256Ac = $data['sha256Ac'];
        }
        if (isset($data['signer'])) {
            $this->signer = $data['signer'];
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
