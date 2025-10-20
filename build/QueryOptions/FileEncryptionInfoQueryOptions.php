<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileEncryptionInfo resources
 *
 * Available select fields:
 * - encryptionKey
 * - fileDigest
 * - fileDigestAlgorithm
 * - initializationVector
 * - mac
 * - macKey
 * - profileIdentifier
 */
class FileEncryptionInfoQueryOptions extends QueryOptions
{
    public const FIELD_ENCRYPTION_KEY = 'encryptionKey';
    public const FIELD_FILE_DIGEST = 'fileDigest';
    public const FIELD_FILE_DIGEST_ALGORITHM = 'fileDigestAlgorithm';
    public const FIELD_INITIALIZATION_VECTOR = 'initializationVector';
    public const FIELD_MAC = 'mac';
    public const FIELD_MAC_KEY = 'macKey';
    public const FIELD_PROFILE_IDENTIFIER = 'profileIdentifier';

    /**
     * Select specific FileEncryptionInfo properties
     * 
     * @param array<string> $select Use FileEncryptionInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
