<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppLogCollectionDownloadDetails resources
 *
 * Available select fields:
 * - appLogDecryptionAlgorithm
 * - decryptionKey
 * - downloadUrl
 */
class AppLogCollectionDownloadDetailsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppLogCollectionDownloadDetails
     */
    public const FIELD_APP_LOG_DECRYPTION_ALGORITHM = 'appLogDecryptionAlgorithm';
    public const FIELD_DECRYPTION_KEY = 'decryptionKey';
    public const FIELD_DOWNLOAD_URL = 'downloadUrl';

    /**
     * Select specific AppLogCollectionDownloadDetails properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
