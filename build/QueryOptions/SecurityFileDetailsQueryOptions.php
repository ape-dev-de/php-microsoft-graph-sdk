<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFileDetails resources
 *
 * Available select fields:
 * - fileName
 * - filePath
 * - filePublisher
 * - fileSize
 * - issuer
 * - md5
 * - sha1
 * - sha256
 * - sha256Ac
 * - signer
 */
class SecurityFileDetailsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityFileDetails
     */
    public const FIELD_FILE_NAME = 'fileName';
    public const FIELD_FILE_PATH = 'filePath';
    public const FIELD_FILE_PUBLISHER = 'filePublisher';
    public const FIELD_FILE_SIZE = 'fileSize';
    public const FIELD_ISSUER = 'issuer';
    public const FIELD_MD5 = 'md5';
    public const FIELD_SHA1 = 'sha1';
    public const FIELD_SHA256 = 'sha256';
    public const FIELD_SHA256AC = 'sha256Ac';
    public const FIELD_SIGNER = 'signer';

    /**
     * Select specific SecurityFileDetails properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
