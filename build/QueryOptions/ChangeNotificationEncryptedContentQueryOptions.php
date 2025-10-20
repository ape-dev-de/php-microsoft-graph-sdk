<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChangeNotificationEncryptedContent resources
 *
 * Available select fields:
 * - data
 * - dataKey
 * - dataSignature
 * - encryptionCertificateId
 * - encryptionCertificateThumbprint
 */
class ChangeNotificationEncryptedContentQueryOptions extends QueryOptions
{
    public const FIELD_DATA = 'data';
    public const FIELD_DATA_KEY = 'dataKey';
    public const FIELD_DATA_SIGNATURE = 'dataSignature';
    public const FIELD_ENCRYPTION_CERTIFICATE_ID = 'encryptionCertificateId';
    public const FIELD_ENCRYPTION_CERTIFICATE_THUMBPRINT = 'encryptionCertificateThumbprint';

    /**
     * Select specific ChangeNotificationEncryptedContent properties
     * 
     * @param array<string> $select Use ChangeNotificationEncryptedContentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
