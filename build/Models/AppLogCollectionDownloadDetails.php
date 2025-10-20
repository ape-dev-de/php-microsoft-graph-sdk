<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppLogCollectionDownloadDetails
 */
class AppLogCollectionDownloadDetails
{
    /**
     */
    private ?string $appLogDecryptionAlgorithm;

    /**
     * Decryption key that used to decrypt the log.
     */
    private ?string $decryptionKey;

    /**
     * Download SAS (Shared Access Signature) Url for completed app log request.
     */
    private ?string $downloadUrl;

    public function getAppLogDecryptionAlgorithm(): ?string
    {
        return $this->appLogDecryptionAlgorithm;
    }

    public function setAppLogDecryptionAlgorithm(?string $appLogDecryptionAlgorithm): self
    {
        $this->appLogDecryptionAlgorithm = $appLogDecryptionAlgorithm;
        return $this;
    }

    public function getDecryptionKey(): ?string
    {
        return $this->decryptionKey;
    }

    public function setDecryptionKey(?string $decryptionKey): self
    {
        $this->decryptionKey = $decryptionKey;
        return $this;
    }

    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

}
