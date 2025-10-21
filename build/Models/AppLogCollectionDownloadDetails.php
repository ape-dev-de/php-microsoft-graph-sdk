<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppLogCollectionDownloadDetails
 */
class AppLogCollectionDownloadDetails
{
    public function __construct(
        /**  */
        public ?AppLogDecryptionAlgorithm $appLogDecryptionAlgorithm = null,
        /** Decryption key that used to decrypt the log. */
        public ?string $decryptionKey = null,
        /** Download SAS (Shared Access Signature) Url for completed app log request. */
        public ?string $downloadUrl = null
    ) {}
}
