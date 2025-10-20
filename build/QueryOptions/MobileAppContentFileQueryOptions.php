<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppContentFile resources
 *
 * Available select fields:
 * - azureStorageUri
 * - azureStorageUriExpirationDateTime
 * - createdDateTime
 * - isCommitted
 * - isDependency
 * - manifest
 * - name
 * - size
 * - sizeEncrypted
 * - uploadState
 */
class MobileAppContentFileQueryOptions extends QueryOptions
{
    public const FIELD_AZURE_STORAGE_URI = 'azureStorageUri';
    public const FIELD_AZURE_STORAGE_URI_EXPIRATION_DATE_TIME = 'azureStorageUriExpirationDateTime';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_IS_COMMITTED = 'isCommitted';
    public const FIELD_IS_DEPENDENCY = 'isDependency';
    public const FIELD_MANIFEST = 'manifest';
    public const FIELD_NAME = 'name';
    public const FIELD_SIZE = 'size';
    public const FIELD_SIZE_ENCRYPTED = 'sizeEncrypted';
    public const FIELD_UPLOAD_STATE = 'uploadState';

    /**
     * Select specific MobileAppContentFile properties
     * 
     * @param array<string> $select Use MobileAppContentFileQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
