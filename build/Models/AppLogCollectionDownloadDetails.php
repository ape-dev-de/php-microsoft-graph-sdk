<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppLogCollectionDownloadDetails
 */
class AppLogCollectionDownloadDetails
{
    /**  */
    public ?AppLogDecryptionAlgorithm $appLogDecryptionAlgorithm = null;

    /** Decryption key that used to decrypt the log. */
    public ?string $decryptionKey = null;

    /** Download SAS (Shared Access Signature) Url for completed app log request. */
    public ?string $downloadUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['appLogDecryptionAlgorithm'])) {
            $this->appLogDecryptionAlgorithm = $data['appLogDecryptionAlgorithm'];
        }
        if (isset($data['decryptionKey'])) {
            $this->decryptionKey = $data['decryptionKey'];
        }
        if (isset($data['downloadUrl'])) {
            $this->downloadUrl = $data['downloadUrl'];
        }
    }
}
